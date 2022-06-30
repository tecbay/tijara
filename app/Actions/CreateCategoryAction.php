<?php

namespace App\Actions;

use App\Domain\Manufacturing\DataTransferObjects\CategoryDTO;
use App\Models\Category;
use App\Support\Uuid;

class CreateCategoryAction
{
    public function __construct(
        public CategoryDTO $categoryDTO
    ) {}

    public function __invoke(): Category
    {
        $uuid = Uuid::new();

        Category::create([
            'uuid'        => $uuid,
            'title'       => $this->categoryDTO->title,
            'description' => $this->categoryDTO->description,
            'parent_uuid' => $this->categoryDTO->parent_uuid,
        ]);


        return Category::find($uuid);
    }
}
