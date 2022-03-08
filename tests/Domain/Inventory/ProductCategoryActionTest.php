<?php

namespace Tests\Domain\Inventory;

use Tests\TestCase;

class ProductCategoryActionTest extends TestCase
{
    public function testAuthorizedUserCanCreateProductCategory()
    {
        $this->withoutExceptionHandling();

        $attr = [
            'title' => 'Mobile & Laptops',
        ];

        $this->postJson('api/categories', $attr)
            ->assertOk()
            ->assertJson([
                'title'       => $attr['title'],
                'description' => null,
                'parent_uuid' => null,
            ]);
    }
}
