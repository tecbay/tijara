<?php

namespace App\Domains\Inventory\Projectors;

use App\Domains\Inventory\Models\Category;
use App\Domains\Inventory\StorableEvents\CategoryCreated;
use Spatie\EventSourcing\EventHandlers\Projectors\Projector;

class CategoryProjector extends Projector
{
    public function onCategoryCreated(CategoryCreated $event): void
    {
        Category::new()
            ->writeable()
            ->create([
                'uuid'        => $event->aggregateRootUuid(),
                'title'       => $event->title,
                'description' => $event->description,
                'parent_uuid' => $event->parent_uuid,
            ]);
    }
}
