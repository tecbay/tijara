<?php

namespace App\Domain\Inventory\Events;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class CartCreated extends ShouldBeStored
{
    public function __construct(
        public string $user_uuid,
    )
    {

    }
}
