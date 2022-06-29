<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\Models\User::factory()->create([
            'email'    => env('ADMIN_EMAIL', 'admin@gmail.com'),
            'password' => Hash::make(env('ADMIN_PASSWORD', 'password')),
        ]);
    }
}
