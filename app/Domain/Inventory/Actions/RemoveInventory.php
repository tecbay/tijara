<?php
declare(strict_types=1);

namespace App\Domain\Inventory\Actions;

use App\Domain\Inventory\InventoryAggregateRoot;

class RemoveInventory
{

    public function __construct(public string $productUuid, public int $qty)
    {

    }

    /**
     * @throws \App\Domain\Inventory\Exceptions\InventoryCannotBeNegative
     */
    public function __invoke()
    {
        InventoryAggregateRoot::retrieve($this->productUuid)
            ->removeInventory($this->qty)
            ->persist();
    }
}
