<?php
declare(strict_types=1);

namespace App\Domain\Inventory\Actions;

use App\Domain\Cart\CartAggregateRoot;
use App\Domain\Cart\Projection\Cart;
use App\Support\Uuid;

class InitializeCart
{
    public function __construct(public string $userUuid)
    {
    }

    public function __invoke(): Cart
    {
        $uuid = Uuid::new();

        CartAggregateRoot::retrieve($uuid)
            ->initialize($this->userUuid)
            ->persist();

        return Cart::find($uuid);
    }
}
