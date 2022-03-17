<?php

namespace App\Domain\Inventory\Projection;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\EventSourcing\Projections\Projection;

/**
 * @property string $uuid
 * @property string $name
 */
class Category extends Projection
{
    use HasFactory;

    protected $guarded = [];
}