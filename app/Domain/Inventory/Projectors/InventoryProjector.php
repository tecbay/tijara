<?php

namespace App\Domain\Inventory\Projectors;

use App\Domain\Inventory\Events\InventoryAdded;
use App\Domain\Inventory\Events\InventoryRemoved;
use App\Domain\Inventory\Projection\Inventory;
use Spatie\EventSourcing\EventHandlers\Projectors\Projector;

class InventoryProjector extends Projector
{
    public function onAddProductInventory(InventoryAdded $event)
    {
        $inventory = Inventory::find($event->aggregateRootUuid());

        if (! $inventory) {
            $inventory = (new Inventory())
                ->writeable()
                ->create([
                    'product_uuid' => $event->aggregateRootUuid(),
                ]);
        }

        $inventory
            ->writeable()
            ->update(['qty' => $inventory->qty + $event->qty]);
    }

    public function onRemoveProductInventory(InventoryRemoved $event)
    {
        $inventory = Inventory::find($event->aggregateRootUuid());

        $inventory->writeable()->update(['qty' => $inventory->qty - $event->qty]);
    }
}
