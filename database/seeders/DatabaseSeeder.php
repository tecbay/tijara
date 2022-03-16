<?php

namespace Database\Seeders;

use App\Domain\Inventory\Actions\CreateCategoryAction;
use App\Domain\Inventory\DataTransferObjects\CategoryDTO;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory()->create([
            'email' => 'admin@gmail.com',
        ]);

        (new CreateCategoryAction(
            new CategoryDTO(Str::random(8), null, null))
        )();
    }
}
