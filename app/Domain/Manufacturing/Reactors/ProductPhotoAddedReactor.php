<?php

namespace App\Domain\Manufacturing\Reactors;

use App\Domain\Manufacturing\Events\ProductPhotoAdded;
use App\Domain\Manufacturing\Projection\Product;
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
