<?php

namespace Tests\Domain\Sales;


use App\Domain\Manufacturing\Actions\CreateProductAction;
use App\Domain\Manufacturing\DataTransferObjects\ProductDTO;
use App\Domain\Manufacturing\Supports\Enums\ProductStatus;
use App\Support\Enums\Boolean;
use App\Support\Uuid;
use Illuminate\Support\Str;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class CartItemActionTest extends TestCase
{
    public function test_authorized_user_can_add_item_to_cart()
    {
        $this->withoutExceptionHandling();
        $productDto = new ProductDTO(
            uuid: Uuid::new(),
            title: Str::random(8),
            description: '',
            category: $this->category,
            medias: null, sku: Str::random(4),
            track_quantity: Boolean::YES,
            status: ProductStatus::Active,
            price: 10,
            compareAtPrice: 11,
            costPerItem: 9,
            physicalProduct: Boolean::NO, weight: 0
        );

        $product = (new CreateProductAction($productDto))();
        Sanctum::actingAs($this->user);
        $this->postJson('api/cart-item/'.$product->uuid, ['qty' => 2]);
    }
}
