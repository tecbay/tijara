<?php

namespace App\Domain\Inventory\Projection;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EventSourcing\Projections\Projection;

class Inventory extends Projection
{
    protected $guarded = [];

    public function getKeyName()
    {
        return 'product_uuid';
    }

    public function getRouteKeyName()
    {
        return 'product_uuid';
    }
}
