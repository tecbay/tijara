<?php

namespace App\Domain\Cart\Enums;

enum CartStatus: string
{
    case Active = 'active';
    case CheckedOut = 'checked-out';
}
