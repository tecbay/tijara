<?php

namespace App\Domain\Cart\Controllers;

use App\Domain\Cart\Actions\AddCartItem;
use App\Domain\Cart\Actions\InitializeCart;
use App\Domain\Cart\Actions\RemoveCartItem;
use App\Domain\Cart\Actions\DecreaseCartItem;
use App\Domain\Manufacturing\Projection\Product;
use Illuminate\Http\Request;
use function auth;

class CartItemController
{
    /**
     * This api responsible for adding an item into active cart.
     *
     */
    public function store(Product $product, Request $request)
    {
        $request->validate(['qty' => ['required', 'numeric', 'min:1']]);

        $cart = auth()->user()->activeCart;

        if (! $cart) {
            $cart = (new InitializeCart(auth()->user()->uuid))();
        }

        (new AddCartItem($cart->uuid, $product->uuid, $request->qty))();

        return response()->json([], 204);
    }

    /**
     * This is responsible for removing an item from active cart.
     *
     * @param $productUuid
     * @param  Request  $request
     * @return void
     */
    public function destroy(Product $product)
    {
        $cart = auth()->user()->activeCart;

        if ($cart) {
            (new RemoveCartItem($cart->uuid, $product->uuid))();
        }

        return response()->json([], 204);
    }
}
