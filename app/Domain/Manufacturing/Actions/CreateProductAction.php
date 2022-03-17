<?php

namespace App\Domain\Manufacturing\Actions;

use App\Domain\Manufacturing\DataTransferObjects\ProductDTO;
use App\Domain\Manufacturing\ProductAggregateRoot;
use App\Domain\Manufacturing\Projection\Product;

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
