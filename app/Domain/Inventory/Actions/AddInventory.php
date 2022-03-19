<?php
declare(strict_types=1);

namespace App\Domain\Inventory\Actions;

use App\Domain\Inventory\InventoryAggregateRoot;
use App\Domain\Manufacturing\ProductAggregateRoot;
use App\Domain\Manufacturing\Projection\Product;

class AddInventory
{

    public function __construct(
        public Product $product,
        public int $qty
    ) {}

    public function __invoke()
    {

        InventoryAggregateRoot::retrieve($this->product->uuid)
            ->addInventory($this->qty)
            ->persist();
    }
}
