<?php

namespace App\Domain\Inventory\Controllers;

use App\Domain\Inventory\Actions\AddInventory;
use App\Domain\Inventory\Actions\RemoveInventory;
use App\Domain\Manufacturing\DataTransferObjects\ProductDTO;
use App\Domain\Manufacturing\Projection\Product;
use App\Http\Controller;
use Illuminate\Http\Request;


class InventoryController extends Controller
{

    /**
     * @group Inventory
     * Add Inventory
     *
     * @authenticated
     * @header Content-Type application/json
     *
     */
    public function store(Product $product, Request $request)
    {
        $request->validate([
            'qty' => ['required', 'numeric', 'min:1'],
        ]);

        (new AddInventory($product->uuid, $request->qty))();

        return response()->json($product->inventory);
    }

    /**
     * @group Inventory
     * Inventory Info
     *
     * @authenticated
     * @header Content-Type application/json
     *
     */
    public function show(Product $product)
    {
        return response()->json($product->inventory);
    }

    /**
     * @group Inventory
     * Remove Inventory
     * @authenticated
     * @header Content-Type application/json
     *
     */
    public function destroy(Product $product, Request $request)
    {
        $request->validate([
            'qty' => ['required', 'numeric', 'min:1'],
        ]);

        (new RemoveInventory($product->uuid, $request->qty))();

        return response()->json($product->inventory);
    }
}
