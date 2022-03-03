<?php

namespace App\Domains\Inventory\StorableEvents;

use App\Domains\Inventory\Supports\Enums\ProductStatus;
use App\Support\Enums\Boolean;
use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class ProductCreated extends ShouldBeStored
{

    public function __construct(
        public string $title,
        public ?string $description,
        public string $categoryUuid,
        public ?array $medias,
        public ?string $sku,
        public Boolean|array $trackQuantity,
        public ProductStatus|array $status,
        public float $price,
        public float $compareAtPrice,
        public float $costPerItem,
        public Boolean|array $physicalProduct,
        public ?float $weight
    ) {}

    public static function with()
    {

    }
}
