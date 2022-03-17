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
     * @group Cart
     * Add cart item
     *
     * @authenticated
     * @header Content-Type application/json
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
     *
     * @group Cart
     * Remove cart item
     *
     * @authenticated
     * @header Content-Type application/json
     *
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
