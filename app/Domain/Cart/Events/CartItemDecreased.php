<?php

namespace App\Domain\Cart\Events;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class CartItemDecreased extends ShouldBeStored
{
    public function __construct(
        public string $productUuid,
        public int $qty
    ) {
    }
}
