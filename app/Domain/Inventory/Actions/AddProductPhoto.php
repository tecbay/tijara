<?php

namespace App\Domain\Inventory\Actions;

use App\Domain\Inventory\DataTransferObjects\ProductDTO;
use App\Domain\Inventory\ProductAggregateRoot;
use App\Domain\Inventory\Projection\Product;

class AddProductPhoto
{

    public function __construct(public ProductDTO|Product|string $product, public string $media)
    {
    }

    public function __invoke()
    {
        ProductAggregateRoot::retrieve($this->product)
            ->addPhoto($this->media)
            ->persist();
    }
}
