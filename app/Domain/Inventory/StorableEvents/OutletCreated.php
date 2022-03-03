<?php

namespace App\Domains\Inventory\StorableEvents;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class OutletCreated extends ShouldBeStored
{
    public function __construct()
    {
    }
}
