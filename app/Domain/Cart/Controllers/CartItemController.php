<?php

namespace App\Domain\Cart\Controllers;

use App\Domain\Cart\Actions\AddCartItem;
use App\Domain\Cart\Actions\RemoveCartItem;
use App\Domain\Inventory\Actions\InitializeCart;
use Illuminate\Http\Request;
use function auth;

class CartItemController
{
    public function store($productUuid, Request $request)
    {
        $request->validate(['qty' => ['required', 'numeric']]);

        $cart = auth()->user()->activeCart;

        if (! $cart) {
            $cart = (new InitializeCart(auth()->user()->uuid))();
        }

        (new AddCartItem($cart->uuid, $productUuid, $request->qty))();
    }

    public function delete($productUuid, Request $request)
    {
        $cart = auth()->user()->activeCart;
        if ($cart) {
            (new RemoveCartItem($cart->uuid, $productUuid, $request->qty))();
        }
    }
}
