<?php

namespace App\Domain\Cart\Controllers;

use App\Domain\Cart\Actions\AddCartItem;
use App\Domain\Cart\Actions\RemoveCartItem;
use App\Domain\Cart\Actions\UpdateCartItem;
use App\Domain\Inventory\Actions\InitializeCart;
use App\Domain\Inventory\Projection\Product;
use Illuminate\Http\Request;
use function auth;

class CartItemController
{
    /**
     * This method/action will invoke when user clicked on add-to-cart button.
     *
     * @param $productUuid
     * @param  Request  $request
     * @return void
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
     * This method/action will invoke when user clicked on increase/decrease button.
     *
     * @return void
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Product $product, Request $request)
    {
        $request->validate(['qty' => ['required', 'numeric', 'min:1']]);

        $cart = auth()->user()->activeCart;

        if ($cart) {
            (new UpdateCartItem($cart->uuid, $product->uuid, $request->qty))();
        }

        return response()->json([], 204);
    }


    /**
     * This method/action will invoke when user clicked on delete button.
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
