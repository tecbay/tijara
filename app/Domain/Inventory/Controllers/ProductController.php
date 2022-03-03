<?php

namespace App\Domains\Inventory\Controllers;

use App\Domains\Inventory\Actions\AddProductInventory;
use App\Domains\Inventory\Actions\AddProductPhoto;
use App\Domains\Inventory\Actions\CreateProductAction;
use App\Domains\Inventory\DataTransferObjects\ProductDTO;
use App\Domains\Inventory\Requests\ProductCreateRequest;
use App\Http\Controller;
use App\Support\Enums\Boolean;


class ProductController extends Controller
{
    public function store(ProductCreateRequest $request)
    {
        $productDto = ProductDTO::fromProductCreateRequest($request);

        $product = (new CreateProductAction($productDto))();

        if (Boolean::from($request->track_quantity) === Boolean::YES) {
            (new AddProductInventory($productDto, $request->inventory_qty))();
        }


        if ($request->has('medias')) {
            foreach ($request->medias as $media) {
                (new AddProductPhoto($productDto->uuid, $media))();
            }
        }

        return response()->json($product);
    }
}
