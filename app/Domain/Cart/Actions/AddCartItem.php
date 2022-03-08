<?php

declare(strict_types=1);

namespace App\Domain\Cart\Actions;

use App\Domain\Cart\CartAggregateRoot;

class AddCartItem
{
    public function __construct(public string $cartUuid, public string $productId, public int $qty)
    {
    }

    public function __invoke()
    {
        CartAggregateRoot::retrieve($this->cartUuid)
            ->addItem($this->productId, $this->qty)
            ->persist();
    }
}
