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

        (new CreateCategoryAction(
            new CategoryDTO(Str::random(8), null, null))
        )();
    }
}
