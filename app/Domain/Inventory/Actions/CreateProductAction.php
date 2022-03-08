<?php

namespace App\Domain\Inventory\Actions;

use App\Domain\Inventory\Aggregates\ProductAggregateRoot;
use App\Domain\Inventory\DataTransferObjects\ProductDTO;
use App\Domain\Inventory\Projection\Product;

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
