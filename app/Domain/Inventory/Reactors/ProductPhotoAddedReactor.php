<?php

namespace App\Domain\Inventory\Reactors;

use App\Domain\Inventory\Projection\Product;
use App\Domain\Inventory\Events\ProductPhotoAdded;
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
