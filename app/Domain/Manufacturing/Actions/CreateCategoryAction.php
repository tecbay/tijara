<?php

namespace App\Domain\Manufacturing\Actions;

use App\Domain\Inventory\Projection\Category;
use App\Domain\Manufacturing\CategoryAggregateRoot;
use App\Domain\Manufacturing\DataTransferObjects\CategoryDTO;
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
