<?php

namespace App\Domain\Cart\Projection;

use App\Domain\Inventory\Projection\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Spatie\EventSourcing\Projections\Projection;

class CartItem extends Projection
{
    use HasFactory;

    protected $primaryKey = null;

    protected $guarded = [];

    public function details(): HasOne
    {
        return $this->hasOne(Product::class, 'uuid', 'product_uuid');
    }

}
