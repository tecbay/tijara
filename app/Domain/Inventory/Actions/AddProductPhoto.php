<?php

namespace App\Domains\Inventory\Actions;

use App\Domain\Inventory\Aggregates\ProductAggregateRoot;
use App\Domains\Inventory\DataTransferObjects\ProductDTO;
use App\Domains\Inventory\Models\Product;

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
