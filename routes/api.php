<?php

use Illuminate\Support\Facades\Route;


//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group([], function () {

    Route::post('/products', [\App\Domains\Inventory\Controllers\ProductController::class, 'store']);
    Route::post('/categories', [\App\Domains\Inventory\Controllers\CategoryController::class, 'store']);

});
