<?php

namespace App\Domain\Inventory\Controllers;

use App\Domain\Inventory\Actions\AddProductInventory;
use App\Domain\Inventory\Actions\RemoveProductInventory;
use App\Domain\Inventory\Projection\Product;
use App\Http\Controller;
use Illuminate\Http\Request;


class InventoryController extends Controller
{

    public function store(Product $product, Request $request)
    {
        $request->validate([
            'qty' => ['required', 'numeric', 'min:1'],
        ]);

        (new AddProductInventory($product->uuid, $request->qty))();

        return response()->json($product->inventory);
    }

    public function show(Product $product)
    {
        return response()->json($product->inventory);
    }

    public function destroy(Product $product, Request $request)
    {
        $request->validate([
            'qty' => ['required', 'numeric', 'min:1'],
        ]);

        (new RemoveProductInventory($product->uuid, $request->qty))();

        return response()->json($product->inventory);
    }
}
