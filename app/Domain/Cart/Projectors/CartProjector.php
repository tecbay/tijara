<?php

namespace App\Domain\Cart\Projectors;

use App\Domain\Cart\Enums\CartStatus;
use App\Domain\Cart\Events\CartCreated;
use App\Domain\Cart\Projection\Cart;
use Spatie\EventSourcing\EventHandlers\Projectors\Projector;

class CartProjector extends Projector
{
    public function onCartCreated(CartCreated $event)
    {
        (new Cart())
            ->writeable()
            ->create([
                'uuid'      => $event->aggregateRootUuid(),
                'user_uuid' => $event->user_uuid,
                'status'    => CartStatus::Active,
            ]);
    }

}
