<?php

namespace App\Domain\Inventory\Exceptions;

use App\Support\DomainException;
use Illuminate\Validation\ValidationException;

class InsufficientStockException extends ValidationException
{
}
