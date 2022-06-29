<?php

namespace Tests\Domain\Inventory;

use App\Domain\Manufacturing\Supports\Enums\ProductStatus;
use App\Support\Enums\Boolean;
use Illuminate\Support\Str;
use Tecbay\Laramedia\Models\TemporaryMedia;
use Tests\TestCase;

class ProductCreatingActionTest extends TestCase
{
    public function testAuthorizedUserCanCreateProduct()
    {
        $this->withoutExceptionHandling();

        $attr = [
            'uuid'             => Str::random(8),
            'title'            => Str::random(8),
            'description'      => Str::random(8),
            'medias'           => [
                TemporaryMedia::new()->uuid,
            ],
            'sku'              => Str::random(8),
            'track_quantity'   => Boolean::YES,
            'status'           => ProductStatus::Draft,
            'price'            => 100,
            'compare_at_price' => 0,
            'cost_per_item'    => 0,
            'inventory_qty'    => 0,
            'physical_product' => Boolean::YES,
            'weight'           => 10.0,
        ];

        $this->actingAs($this->user)
            ->postJson('api/products', $attr)->assertOk();


    }
}
