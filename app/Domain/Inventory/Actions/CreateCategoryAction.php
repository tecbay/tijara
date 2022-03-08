<?php

namespace App\Domain\Inventory\Actions;

use App\Domain\Inventory\Aggregates\CategoryAggregateRoot;
use App\Domain\Inventory\DataTransferObjects\CategoryDTO;
use App\Domain\Inventory\Projection\Category;
use App\Support\Uuid;

class CreateCategoryAction
{
    public function __construct(
        public CategoryDTO $categoryDTO
    ) {}

    public function __invoke(): Category
    {
        $uuid = Uuid::new();
        CategoryAggregateRoot::retrieve($uuid)
            ->createCategory($this->categoryDTO)
            ->persist();

        return Category::find($uuid);
    }
}
