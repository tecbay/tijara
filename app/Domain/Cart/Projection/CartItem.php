<?php

namespace App\Domain\Cart\Projection;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\EventSourcing\Projections\Projection;

class CartItem extends Projection
{
    use HasFactory;

    protected $guarded = [];
}
