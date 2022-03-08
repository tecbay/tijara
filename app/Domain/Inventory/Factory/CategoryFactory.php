<?php

namespace App\Domain\Inventory\Factory;

use Illuminate\Support\Str;

class CategoryFactory
{

    public function definition()
    {
        return [
            'title' => Str::random(8)
        ];
    }
}
