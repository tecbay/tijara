<?php

namespace App\Domain\Inventory\Aggregates;

use App\Domains\Inventory\DataTransferObjects\CategoryDTO;
use App\Domains\Inventory\StorableEvents\CategoryCreated;
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
