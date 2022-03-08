<?php

namespace App\Domain\Inventory\Actions;

use App\Domain\Inventory\Aggregates\ProductAggregateRoot;
use App\Domain\Inventory\DataTransferObjects\ProductDTO;

class AddProductInventory
{

    public function __construct(public ProductDTO|string $product, public int $qty)
    {

    }

    public function __invoke()
    {

        ProductAggregateRoot::retrieve($this->product)
            ->addInventory($this->qty)
            ->persist();
    }
}
