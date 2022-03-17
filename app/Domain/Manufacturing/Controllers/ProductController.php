<?php

namespace App\Domain\Manufacturing\Controllers;

use App\Domain\Inventory\Actions\AddInventory;
use App\Domain\Manufacturing\Actions\AddProductPhoto;
use App\Domain\Manufacturing\Actions\CreateProductAction;
use App\Domain\Manufacturing\DataTransferObjects\ProductDTO;
use App\Domain\Manufacturing\Requests\ProductCreateRequest;
use App\Http\Controller;
use App\Support\Enums\Boolean;
use function response;


class ProductController extends Controller
{
    /**
     *
     * @group Manufacturing
     * Create Product
     *
     * @authenticated
     * @header Content-Type application/json
     *
     *
     */
    public function store(ProductCreateRequest $request)
    {
        $productDto = ProductDTO::fromProductCreateRequest($request);

        $product = (new CreateProductAction($productDto))();

        if (Boolean::tryFrom($request->track_quantity) === Boolean::YES) {
            (new AddInventory($productDto->uuid, $request->inventory_qty))();
        }

        if ($request->has('medias')) {
            foreach ($request->medias as $media) {
                (new AddProductPhoto($productDto->uuid, $media))();
            }
        }

        return response()->json($product);
    }
}
