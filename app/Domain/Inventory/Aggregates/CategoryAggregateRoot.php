<?php

namespace App\Domain\Inventory\Aggregates;

use App\Domain\Inventory\DataTransferObjects\CategoryDTO;
use App\Domain\Inventory\Events\CategoryCreated;
use Spatie\EventSourcing\AggregateRoots\AggregateRoot;

class CategoryAggregateRoot extends AggregateRoot
{
    public function createCategory(CategoryDTO $categoryDTO)
    {

        $this->recordThat(new CategoryCreated(
            title: $categoryDTO->title,
            description: $categoryDTO->description,
            parent_uuid: $categoryDTO->parent_uuid
        ));

        return $this;
    }
}
