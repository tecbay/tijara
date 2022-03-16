<?php

namespace App\Domain\Cart\Actions;

use App\Domain\Cart\CartAggregateRoot;

class RemoveCartItem
{
    public function __construct(public string $cartUuid, public string $productUuid)
    {
    }

    public function __invoke()
    {
        CartAggregateRoot::retrieve($this->cartUuid)
            ->removeItem($this->productUuid)
            ->persist();
    }
}
