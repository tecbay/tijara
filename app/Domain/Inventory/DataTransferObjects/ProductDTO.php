<?php
declare(strict_types=1);

namespace App\Domain\Inventory\DataTransferObjects;

use App\Domain\Inventory\Projection\Category;
use App\Domain\Inventory\Requests\ProductCreateRequest;
use App\Domain\Inventory\Supports\Enums\ProductStatus;
use App\Domain\Inventory\Supports\Sku;
use App\Support\Enums\Boolean;
use App\Support\Uuid;

class ProductDTO
{
    private int $availableInventory = 0;

    public function __construct(
        public string $uuid,
        public string $title,
        public ?string $description,
        public Category $category,
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

    public static function fromProductCreateRequest(ProductCreateRequest $request)
    {
        $dto = new self(
            uuid: Uuid::new(),
            title: $request->title,
            description: $request->description,
            category: Category::find($request->category_uuid),
            medias: $request->medias,
            sku: $request->sku ?? Sku::new($request->title),
            track_quantity: Boolean::from($request->track_quantity),
            status: ProductStatus::from($request->status),
            price: $request->price,
            compareAtPrice: $request->compare_at_price,
            costPerItem: $request->cost_per_item,
            physicalProduct: Boolean::from($request->physical_product),
            weight: $request->weight
        );

        if ($request->track_quantity) {
            $dto->setAvailableInventory($request->inventory_qty);
        }

        return $dto;
    }

    /**
     * @return int
     */
    public function getAvailableInventory(): int
    {
        // Todo need to implement
        return $this->availableInventory;
    }

    /**
     * @param  int  $availableInventory
     */
    protected function setAvailableInventory(int $availableInventory): void
    {
        $this->availableInventory = $availableInventory;
    }

    public function __toString(): string
    {
        return $this->uuid;
    }
}
