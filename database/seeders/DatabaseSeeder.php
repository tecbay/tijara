<?php

namespace Database\Seeders;

use App\Domain\Manufacturing\Actions\CreateCategoryAction;
use App\Domain\Manufacturing\DataTransferObjects\CategoryDTO;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /** @var User $user */
        $user = \App\Models\User::factory()->create([
            'email' => 'admin@gmail.com',
        ]);

        if (app()->environment('local')) {
            $user->tokens()->create([
                'name'      => 'test',
                'token'     => 'IT5hdnHtmqOvxlUZM3mKNyapHQ0CyB1hEjBJGijKXZxCAqawkVPcBFMDAtcQEqYk',
                'abilities' => ['*'],
            ]);
        }

        (new CreateCategoryAction(
            new CategoryDTO(Str::random(8), null, null))
        )();
    }
}
