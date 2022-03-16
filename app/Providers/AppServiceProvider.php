<?php

namespace App\Providers;

use App\Exceptions\UnableToResolveFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Schema\Builder;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Builder::$defaultMorphKeyType = 'uuid';
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Collection::macro('exists', function ($key) {
            return ! empty($this->get($key));
        });

        Collection::macro('notExists', function ($key) {
            return empty($this->get($key));
        });


    }
}
