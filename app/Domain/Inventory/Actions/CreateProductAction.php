<?php

namespace App\Domains\Inventory\Actions;

use App\Domain\Inventory\Aggregates\ProductAggregateRoot;
use App\Domains\Inventory\DataTransferObjects\ProductDTO;
use App\Domains\Inventory\Models\Product;

class CreateProductAction
{
    public function __construct(
        public ProductDTO $productDTO
    ) {}

    public function __invoke()
    {
        ProductAggregateRoot::retrieve($this->productDTO)
            ->create($this->productDTO)
            ->persist();

        return Product::find($this->productDTO->uuid);
    }
}
