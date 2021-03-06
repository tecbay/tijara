<?php

namespace App\Domain\Cart\Controllers;

use App\Domain\Cart\Actions\AddCartItem;
use App\Domain\Cart\Actions\IncreaseCartItem;
use App\Domain\Cart\Actions\InitializeCart;
use App\Domain\Cart\Actions\RemoveCartItem;
use App\Domain\Cart\Actions\DecreaseCartItem;
use App\Domain\Manufacturing\Projection\Product;
use Illuminate\Http\Request;
use function auth;


class CartItemQuantityController
{
    /**
     * @group Cart
     * Increase cart item quantity
     *
     * @authenticated
     * @header Content-Type application/json
     *
     */
    public function store(Product $product, Request $request)
    {
        $request->validate(['qty' => ['required', 'numeric', 'min:1']]);

        $cart = auth()->user()->activeCart;

        if ($cart) {
            (new IncreaseCartItem($cart->uuid, $product->uuid, $request->qty))();
        }

        return response()->json([], 202);
    }

    /**
     * @group Cart
     * Decrease cart item quantity
     *
     * @authenticated
     * @header Content-Type application/json
     *
     */
    public function destroy(Product $product, Request $request)
    {
        $cart = auth()->user()->activeCart;

        $request->validate(['qty' => ['required', 'numeric', 'min:1']]);

        if ($cart) {
            (new DecreaseCartItem($cart->uuid, $product->uuid, $request->qty))();
        }

        return response()->json([], 202);
    }
}
