<?php

namespace App\Domain\Inventory\Events;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class OutletCreated extends ShouldBeStored
{
    public function __construct()
    {
    }
}
