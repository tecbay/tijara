<?php
declare(strict_types=1);

namespace App\Domain\Inventory\Actions;

use App\Domain\Inventory\DataTransferObjects\ProductDTO;
use App\Domain\Inventory\ProductAggregateRoot;

class AddProductInventory
{

    public function __construct(public string $productUuid, public int $qty)
    {

    }

    public function __invoke()
    {
        ProductAggregateRoot::retrieve($this->productUuid)
            ->addInventory($this->qty)
            ->persist();
    }
}
