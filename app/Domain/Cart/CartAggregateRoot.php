<?php

namespace App\Domain\Cart;

use App\Domain\Cart\Actions\AddCartItem;
use App\Domain\Cart\Events\CartItemAdded;
use App\Domain\Cart\Events\CartItemRemoved;
use App\Domain\Cart\Events\CartItemUpdated;
use App\Domain\Inventory\Events\CartCreated;
use App\Domain\Inventory\Projection\Product;
use Illuminate\Support\Collection;
use Illuminate\Validation\ValidationException;
use Spatie\EventSourcing\AggregateRoots\AggregateRoot;

class CartAggregateRoot extends AggregateRoot
{

    protected Collection $items;

    public function __construct()
    {
        $this->items = collect();
    }

    public function initialize(string $userUuid): self
    {
        $this->recordThat(new CartCreated(user_uuid: $userUuid));

        return $this;
    }

    public function addItem(string $productUuid, int $qty)
    {

        if ($this->items->exists($productUuid)) {
            throw ValidationException::withMessages(['error' => 'Product already added to cart.']);
        }

        if (Product::find($productUuid)->inventory->qty < $qty) {
            throw ValidationException::withMessages(['error' => 'Insufficient stock.']);
        }


        $this->recordThat(new CartItemAdded($productUuid, $qty));

        return $this;
    }

    public function removeItem(string $productUuid)
    {

        if ($this->items->notExists($productUuid)) {
            throw ValidationException::withMessages(['error' => 'Product not exists in cart.']);
        }

        $this->recordThat(new CartItemRemoved($productUuid));

        return $this;
    }

    public function updateItem(string $productUuid, int $qty)
    {
        if ($this->items->notExists($productUuid)) {
            throw ValidationException::withMessages(['error' => 'Product not exists in cart.']);
        }

        if (Product::find($productUuid)->inventory->qty < $qty) {
            throw ValidationException::withMessages(['error' => 'Insufficient stock.']);
        }

        $this->recordThat(new CartItemUpdated($productUuid, $qty));

        return $this;
    }

    protected function applyCartItemAdded(CartItemAdded $event)
    {
        $this->items->put($event->productUuid, [
            'uuid' => $event->productUuid,
            'qty'  => $event->qty,
        ]);


    }

    protected function applyCartItemRemoved(CartItemRemoved $event)
    {
        $this->items->forget($event->productUuid);
    }

    protected function applyCartItemUpdated(CartItemUpdated $event)
    {
        $this->items->transform(function ($item, $key) use ($event) {
            if ($key === $event->productUuid) {
                $item['qty'] = $event->qty;
            }
            return $item;
        });
    }
}
