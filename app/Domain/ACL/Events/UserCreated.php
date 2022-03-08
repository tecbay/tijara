<?php

namespace App\Domain\ACL\Events;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class UserCreated extends ShouldBeStored
{
    public function __construct(
     public string $name,
     public string $email,

    ) {}
}
