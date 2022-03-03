<?php

namespace App\Domains\Inventory\Reactors;

use App\Domains\Inventory\Models\Product;
use App\Domains\Inventory\StorableEvents\ProductPhotoAdded;
use Illuminate\Contracts\Queue\ShouldQueue;
use Spatie\EventSourcing\EventHandlers\Reactors\Reactor;

class ProductPhotoAddedReactor extends Reactor implements ShouldQueue
{
    public function onProductPhotoAdded(ProductPhotoAdded $event)
    {

        /** @var Product $product */
        $product = Product::find($event->aggregateRootUuid());

        $product->addMediaFromTemporaryMedia($event->temporaryMediaUuid)
            ->toMediaCollection();
    }
}
