<?php

namespace App\Domains\Inventory\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\EventSourcing\Projections\Projection;
use Tecbay\Laramedia\Contract\HasMedia;
use Tecbay\Laramedia\Traits\InteractsWithMedia;

/**
 * @property boolean $track_quantity
 */
class Product extends Projection implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $guarded = [];

}
