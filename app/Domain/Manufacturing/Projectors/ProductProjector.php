<?php

namespace App\Domain\Manufacturing\Projectors;

use App\Domain\Manufacturing\Events\ProductCreated;
use App\Domain\Manufacturing\Projection\Product;
use Spatie\EventSourcing\EventHandlers\Projectors\Projector;

class ProductProjector extends Projector
{
    public function onProductCreated(ProductCreated $event)
    {
        (new Product())
            ->writeable()
            ->create([
                'uuid'             => $event->aggregateRootUuid(),
                'title'            => $event->title,
                'description'      => $event->description,
                'category_uuid'    => $event->categoryUuid,
                'sku'              => $event->sku,
                'track_quantity'   => $event->trackQuantity->value,
                'status'           => $event->status->value,
                'physical_product' => $event->physicalProduct->value,
                'price'            => $event->price,
                'compare_at_price' => $event->compareAtPrice,
                'cost_per_item'    => $event->costPerItem,
                'weight'           => $event->weight,
            ]);

    }
}
