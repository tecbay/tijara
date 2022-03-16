<?php

namespace App\Domain\Cart\Projectors;

use App\Domain\Cart\Enums\CartStatus;
use App\Domain\Cart\Events\CartItemUpdated;
use App\Domain\Cart\Projection\CartItem;
use App\Domain\Cart\Events\CartItemAdded;
use App\Domain\Cart\Events\CartItemRemoved;
use Spatie\EventSourcing\EventHandlers\Projectors\Projector;

class CartItemProjector extends Projector
{
    public function onCartItemAdded(CartItemAdded $event)
    {
        (new CartItem())
            ->writeable()
            ->create([
                'cart_uuid'    => $event->aggregateRootUuid(),
                'product_uuid' => $event->productUuid,
                'qty'          => $event->qty,
            ]);

    }

    public function onCartItemUpdated(CartItemUpdated $event)
    {
        CartItem::whereCartUuid($event->aggregateRootUuid())
            ->whereProductUuid($event->productUuid)
            ->update([
                'qty' => $event->qty,
            ]);;
    }

    public function onCartItemRemoved(CartItemRemoved $event)
    {
        CartItem::whereCartUuid($event->aggregateRootUuid())
            ->whereProductUuid($event->productUuid)
            ->delete();
    }
}
