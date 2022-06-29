<?php

namespace App\Domain\Manufacturing\Actions;

use App\Domain\Manufacturing\DataTransferObjects\ProductDTO;
use App\Domain\Manufacturing\ProductAggregateRoot;
use App\Domain\Manufacturing\Projection\Product;
use App\Support\BaseAction;

class CreateProductAction extends BaseAction
{


    public static function execute(ProductDTO $productDTO): string
    {
        ProductAggregateRoot::retrieve($productDTO->uuid)
            ->create($productDTO)
            ->persist();
        return $productDTO->uuid;
    }
}
