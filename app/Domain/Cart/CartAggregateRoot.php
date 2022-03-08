<?php

namespace App\Domain\Cart;

use App\Domain\Cart\Events\CartItemAdded;
use App\Domain\Cart\Events\CartItemRemoved;
use App\Domain\Inventory\Events\CartCreated;
use Spatie\EventSourcing\AggregateRoots\AggregateRoot;

class CartAggregateRoot extends AggregateRoot
{

    public function initialize(string $userUuid): self
    {
        $this->recordThat(new CartCreated(user_uuid: $userUuid));

        return $this;
    }

    public function addItem(string $productId, int $qty)
    {
        $this->recordThat(new CartItemAdded($productId, $qty));

        return $this;
    }

    public function removeItem(string $productId, int $qty)
    {

        $this->recordThat(new CartItemRemoved($productId, $qty));
        return $this;
    }

}
