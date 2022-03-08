<?php

namespace App\Domain\Inventory\Events;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class ProductPhotoAdded extends ShouldBeStored
{
    public function __construct(
        public string $temporaryMediaUuid,
    ) {}
}
