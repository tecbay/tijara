<?php

namespace App\Domain\Manufacturing\Events;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class ProductPhotoAdded extends ShouldBeStored
{
    public function __construct(
        public string $temporaryMediaUuid,
    ) {}
}
