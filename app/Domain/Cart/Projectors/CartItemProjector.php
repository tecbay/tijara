<?php

namespace App\Domain\Cart\Projectors;

use App\Domain\Cart\Enums\CartStatus;
use App\Domain\Cart\Projection\CartItem;
use App\Domain\Cart\Events\CartItemAdded;
use App\Domain\Cart\Events\CartItemRemoved;
use Spatie\EventSourcing\EventHandlers\Projectors\Projector;

class CartItemProjector extends Projector
{
    public function onCartItemAdded(CartItemAdded $event)
    {
        $item = CartItem::whereCartUuid($event->aggregateRootUuid())
            ->whereProductUuid($event->productUuid)
            ->first();

        if ($item) {
            $item->qty += $event->qty;
            $item->save();
        }


    }

    public function onCartItemRemoved(CartItemRemoved $event)
    {
        (new CartItem())
            ->writeable()
            ->create([
                'uuid'      => $event->aggregateRootUuid(),
                'user_uuid' => $event->user_uuid,
                'status'    => CartStatus::Active,
            ]);
    }
}
