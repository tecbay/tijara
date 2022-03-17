<?php

namespace App\Domain\Inventory\Events;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class InventoryAdded extends ShouldBeStored
{
    public function __construct(public int $qty)
    {
    }
}
