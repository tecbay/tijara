<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $uuid
 * @property string $name
 * @property string $parent_uuid
 */
class Category extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $primaryKey = 'uuid';
    protected $guarded = [];
}
