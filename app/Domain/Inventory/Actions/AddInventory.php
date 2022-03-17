<?php
declare(strict_types=1);

namespace App\Domain\Inventory\Actions;

use App\Domain\Inventory\InventoryAggregateRoot;
use App\Domain\Manufacturing\ProductAggregateRoot;

class AddInventory
{

    public function __construct(
        public string $productUuid,
        public int $qty
    ) {}

    public function __invoke()
    {

        InventoryAggregateRoot::retrieve($this->productUuid)
            ->addInventory($this->qty)
            ->persist();
    }
}
