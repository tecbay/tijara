<?php

namespace App\Domain\Cart\Actions;

use App\Domain\Cart\CartAggregateRoot;

class DecreaseCartItem
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
            ->decreaseItemQty($this->productUuid, $this->qty)
            ->persist();
    }
}
