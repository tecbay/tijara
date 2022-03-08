<?php

namespace App\Domain\ACL\Actions;

use App\Models\User;
use App\Support\Uuid;
use Illuminate\Support\Str;

class CreateUser
{
    public function __construct(public string $name, public string $email, public string $password)
    {
    }

    public function __invoke(): User
    {
        return User::create([
            'uuid'     => Uuid::new(),
            'name'     => $this->name,
            'email'    => $this->email,
            'password' => $this->password,
        ]);
    }
}
