<?php

namespace App\Domains\Inventory\StorableEvents;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class ProductPhotoRemoved extends ShouldBeStored
{
    public function __construct(
        public string $temporaryMediaUuid,
    ) {}
}
