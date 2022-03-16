<?php

namespace Tests\Auth;

use Illuminate\Support\Str;
use Tests\TestCase;

class LoginTest extends TestCase
{
    public function test_user_can_login()
    {

        $this->withoutExceptionHandling();

        $attr = ['email' => $this->user->email, 'password' => 'password'];

        $this->postJson('api/v1/login', $attr)
            ->assertJsonStructure(['token'])
            ->assertOk();
    }
}
