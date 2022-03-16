<?php

namespace App\Domain\Cart\Controllers;

class CartController
{
    public function __invoke()
    {
        return auth()->user()->activeCart()->with('items.details')->get();
    }
}
