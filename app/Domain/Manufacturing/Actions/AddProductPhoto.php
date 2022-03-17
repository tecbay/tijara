<?php

namespace App\Domain\Manufacturing\Actions;

use App\Domain\Manufacturing\DataTransferObjects\ProductDTO;
use App\Domain\Manufacturing\ProductAggregateRoot;
use App\Domain\Manufacturing\Projection\Product;

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
