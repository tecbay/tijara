<?php

namespace App\Domain\Inventory\Supports;

use Illuminate\Support\Str;

class Sku
{
    public static function new(string $productTitle): string
    {
        return Str::slug($productTitle).'-'.rand(100, 999);
    }
}
