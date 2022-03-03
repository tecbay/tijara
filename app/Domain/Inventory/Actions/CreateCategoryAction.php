<?php

namespace App\Domains\Inventory\Actions;

use App\Domain\Inventory\Aggregates\CategoryAggregateRoot;
use App\Domains\Inventory\DataTransferObjects\CategoryDTO;
use App\Domains\Inventory\Models\Category;
use App\Support\Uuid;

class CreateCategoryAction
{
    public function __construct(
        public CategoryDTO $categoryDTO
    ) {}

    public function __invoke(): Category
    {
        $uuid = Uuid::new();
        $productAggregate = CategoryAggregateRoot::retrieve($uuid)
            ->createCategory($this->categoryDTO)
            ->persist();

        return Category::find($uuid);
    }
}
