<?php

namespace Tests;

use App\Domains\Inventory\Actions\CreateCategoryAction;
use App\Domains\Inventory\DataTransferObjects\CategoryDTO;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public \App\Domains\Inventory\Models\Category $category;

    protected function setUp(): void
    {
        parent::setUp();
        Artisan::call('migrate:fresh');
        $this->beforeApplicationDestroyed(function () {
            Storage::deleteDirectory('');
        });

        $this->category = (new CreateCategoryAction(new CategoryDTO('Top Category', null, null)))();
    }
}
