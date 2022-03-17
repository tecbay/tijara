<?php

namespace App\Domain\Manufacturing\Supports\Enums;

enum ProductStatus: string
{
    case Active = 'active';
    case Inactive = 'inactive';
    case Draft = 'draft';
}
