<?php
declare(strict_types=1);

namespace App\Domain\Manufacturing\DataTransferObjects;

use App\Domain\Inventory\Supports\Sku;

use App\Domain\Manufacturing\Projection\Product;
use App\Domain\Manufacturing\Requests\ProductCreatingRequest;
use App\Domain\Manufacturing\Supports\Enums\ProductStatus;
use App\Models\Category;
use App\Support\Enums\Boolean;
use App\Support\Uuid;

/**
 * @property Category category
 */
class ProductDTO
{

    public function __construct(
        public string $uuid,
        public string $title,
        public ?string $description,
        public ?array $medias,
        public ?string $sku,
        public Boolean $track_quantity,
        public ProductStatus $status,
        public float $price,
        public float $compareAtPrice,
        public float $costPerItem,
        public Boolean $physicalProduct,
        public ?float $weight
    ) {
    }

    public static function fromProductCreatingRequest(ProductCreatingRequest $request)
    {
        $dto = new self(
            uuid: Uuid::new(),
            title: $request->title,
            description: $request->description,
            medias: $request->medias,
            sku: $request->sku ?? Sku::new($request->title),
            track_quantity: Boolean::from($request->track_quantity),
            status: ProductStatus::from($request->status),
            price: floatval($request->price),
            compareAtPrice: floatval($request->compare_at_price),
            costPerItem: floatval($request->cost_per_item),
            physicalProduct: Boolean::from($request->physical_product),
            weight: floatval($request->weight)
        );

        return $dto;
    }

    public static function fromProductProjection(Product $product)
    {

        $dto = new self(
            uuid: $product->uuid,
            title: $product->title,
            description: $product->description,
            medias: $product->medias,
            sku: $product->sku,
            track_quantity: Boolean::from($product->track_quantity),
            status: ProductStatus::from($product->status),
            price: floatval($product->price),
            compareAtPrice: floatval($product->compare_at_price),
            costPerItem: floatval($product->cost_per_item),
            physicalProduct: Boolean::from($product->physical_product),
            weight: floatval($product->weight)
        );

        return $dto;
    }

    public function __toString(): string
    {
        return $this->uuid;
    }

    public function __get(string $name)
    {
        if ($name == 'category') {
            return Category::find($this->categoryUuid);
        }
    }
}
