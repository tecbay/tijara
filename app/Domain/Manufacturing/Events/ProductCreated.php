<?php

namespace App\Domain\Manufacturing\Events;

use App\Domain\Manufacturing\Supports\Enums\ProductStatus;
use App\Support\Enums\Boolean;
use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class ProductCreated extends ShouldBeStored
{

    public function __construct(
        public string $title,
        public ?string $description,
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
