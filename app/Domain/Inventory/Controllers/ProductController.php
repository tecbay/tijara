<?php

namespace App\Domain\Inventory\Controllers;

use App\Domain\Inventory\Actions\AddProductInventory;
use App\Domain\Inventory\Actions\AddProductPhoto;
use App\Domain\Inventory\Actions\CreateProductAction;
use App\Domain\Inventory\DataTransferObjects\ProductDTO;
use App\Domain\Inventory\Requests\ProductCreateRequest;
use App\Http\Controller;
use App\Support\Enums\Boolean;


class ProductController extends Controller
{
    public function store(ProductCreateRequest $request)
    {
        $productDto = ProductDTO::fromProductCreateRequest($request);

        $product = (new CreateProductAction($productDto))();

        if (Boolean::tryFrom($request->track_quantity) === Boolean::YES) {
            (new AddProductInventory($productDto->uuid, $request->inventory_qty))();
        }


        if ($request->has('medias')) {
            foreach ($request->medias as $media) {
                (new AddProductPhoto($productDto->uuid, $media))();
            }
        }

        return response()->json($product);
    }
}
