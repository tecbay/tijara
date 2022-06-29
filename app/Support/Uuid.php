<?php

namespace App\Support;

class Uuid
{
    private function __construct(){}

    public static function new(): string
    {
        return \Ramsey\Uuid\Uuid::uuid4()->toString();
    }
}
