<?php

namespace App\Domain\Cart\Actions;

use App\Domain\Cart\CartAggregateRoot;

class IncreaseCartItem
{
    public function __construct(
        public string $cartUuid,
        public string $productUuid,
        public int $qty
    ) {
    }

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function __invoke()
    {
        CartAggregateRoot::retrieve($this->cartUuid)
            ->increaseItemQty($this->productUuid, $this->qty)
            ->persist();
    }
}
