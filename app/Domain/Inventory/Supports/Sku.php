<?php

namespace App\Domain\Inventory\Supports;

class Sku
{
    public static function new(string $productTitle): string
    {
        return $productTitle.'-'.rand(100, 999);
    }
}
