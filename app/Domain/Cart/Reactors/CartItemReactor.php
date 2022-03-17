<?php

namespace App\Domain\Cart\Reactors;

use App\Domain\Cart\Actions\RemoveCartItem;
use App\Domain\Cart\Events\CartItemAdded;
use App\Domain\Cart\Events\CartItemDecreased;
use App\Domain\Cart\Events\CartItemIncreased;
use App\Domain\Cart\Events\CartItemRemoved;
use App\Domain\Inventory\Actions\AddInventory;
use App\Domain\Inventory\Actions\RemoveInventory;
use Spatie\EventSourcing\EventHandlers\Reactors\Reactor;

class CartItemReactor extends Reactor
{
    public function onAddCartItem(CartItemAdded $event): void
    {
        (new RemoveInventory($event->productUuid, $event->qty))();
    }

    public function onRemoveCartItem(CartItemRemoved $event): void
    {
        (new AddInventory($event->productUuid, $event->qty))();
    }

    public function onIncreaseCartItem(CartItemIncreased $event)
    {
        (new RemoveInventory($event->productUuid, $event->qty))();
    }

    public function onDecreaseCartItem(CartItemDecreased $event)
    {
        (new AddInventory($event->productUuid, $event->qty))();
    }
}
