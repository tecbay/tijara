<?php

namespace App\Domains\Inventory\StorableEvents;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class CategoryCreated extends ShouldBeStored
{
    public function __construct(
        public string $title,
        public ?string $description,
        public ?string $parent_uuid,
    ) {}
}
