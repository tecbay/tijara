<?php

namespace App\Providers;

use App\Exceptions\UnableToResolveFactory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Schema\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Knuckles\Camel\Extraction\ExtractedEndpointData;
use Knuckles\Scribe\Scribe;

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
//        if (class_exists(\Knuckles\Scribe\Scribe::class) && app()->environment('local')) {
//
//            Scribe::beforeResponseCall(function (Request $request, ExtractedEndpointData $endpointData) {
//                $token = User::first()->createToken('Scribe')->plainTextToken;
//                $request->headers->add(["Authorization" => "Bearer $token"]);
//            });
//        }

        Collection::macro('exists', function ($key) {
            return ! empty($this->get($key));
        });

        Collection::macro('notExists', function ($key) {
            return empty($this->get($key));
        });


    }
}
