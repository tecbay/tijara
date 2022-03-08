<?php

namespace App\Domain\Inventory\Projectors;

use App\Domain\Inventory\Projection\Category;
use App\Domain\Inventory\Events\CategoryCreated;
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
