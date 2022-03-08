<?php

namespace App\Domain\Cart\Events;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class CartItemAdded extends ShouldBeStored
{
    public function __construct(public string $productUuid, public int $qty)
    {

    }
}
