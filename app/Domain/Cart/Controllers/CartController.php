<?php

namespace App\Domain\Cart\Controllers;

class CartController
{
    /**
     * @group Cart
     * User's active cart info.
     *
     * @authenticated
     * @header Content-Type application/json
     *
     * @urlParam id int required The user's ID. Example: 88683
     *
     * @response 200 scenario="Has active cart, But empty" {"status": "down", "services": {"database": "up", "redis": "down"}}
     */
    public function __invoke()
    {
        return auth()->user()->activeCart()->with('items.details')->get();
    }
}
