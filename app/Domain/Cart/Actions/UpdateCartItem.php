<?php

namespace App\Domain\Cart\Actions;

use App\Domain\Cart\CartAggregateRoot;

class UpdateCartItem
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
            ->updateItem($this->productUuid, $this->qty)
            ->persist();
    }
}
