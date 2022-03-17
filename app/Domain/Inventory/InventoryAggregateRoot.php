<?php

namespace App\Domain\Inventory;

use App\Domain\Inventory\Events\InventoryAdded;
use App\Domain\Inventory\Events\InventoryRemoved;
use App\Domain\Inventory\Exceptions\InventoryCannotBeNegative;
use Spatie\EventSourcing\AggregateRoots\AggregateRoot;

class InventoryAggregateRoot extends AggregateRoot
{
    protected int $inventory = 0;

    public function addInventory(int $qty): self
    {

        $this->recordThat(new InventoryAdded($qty));

        return $this;
    }

    /**
     * @throws InventoryCannotBeNegative
     */
    public function removeInventory(int $qty): self
    {
        if (($this->inventory - $qty) < 0) {
            throw InventoryCannotBeNegative::withMessages([
                'invalidInput' => 'Inventory can\'t be negative.',
            ]);
        }

        $this->recordThat(new InventoryRemoved($qty));

        return $this;
    }

    protected function applyProductInventoryAdded(InventoryAdded $event)
    {
        $this->inventory += $event->qty;
    }

    protected function applyProductInventoryRemoved(InventoryRemoved $event)
    {
        $this->inventory -= $event->qty;
    }
}
