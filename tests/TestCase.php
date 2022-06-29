<?php

namespace Tests;

use App\Actions\CreateCategoryAction;
use App\Domain\ACL\Actions\CreateUser;

use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, WithFaker;

    public User $user;

    protected function setUp(): void
    {
        parent::setUp();
        Artisan::call('migrate:fresh');

        $this->user = (new CreateUser(
            name: Str::random(4),
            email: $this->faker->email,
            password: Hash::make('password')
        ))();

        $this->beforeApplicationDestroyed(function () {
            Storage::deleteDirectory('');
        });
    }
}
