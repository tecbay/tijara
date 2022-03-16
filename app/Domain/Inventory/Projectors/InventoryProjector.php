<?php

namespace App\Domain\Inventory\Projectors;

use App\Domain\Inventory\Events\ProductInventoryAdded;
use App\Domain\Inventory\Events\ProductInventoryRemoved;
use App\Domain\Inventory\Projection\Inventory;
use App\Domain\Inventory\Projection\Product;
use Spatie\EventSourcing\EventHandlers\Projectors\Projector;

class InventoryProjector extends Projector
{
    public function onAddProductInventory(ProductInventoryAdded $event)
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

    public function onRemoveProductInventory(ProductInventoryRemoved $event)
    {
        $inventory = Inventory::find($event->aggregateRootUuid());

        $inventory->writeable()->update(['qty' => $inventory->qty - $event->qty]);
    }
}
