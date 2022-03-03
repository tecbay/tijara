<?php

namespace App\Domains\Inventory\StorableEvents;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class ProductInventoryAdded extends ShouldBeStored
{
    public function __construct(public int $qty)
    {
    }
}
