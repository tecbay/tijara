<?php

use Illuminate\Support\Facades\Route;


//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group(['middleware' => 'auth:sanctum'], function () {

    Route::post('/categories', [\App\Domain\Inventory\Controllers\CategoryController::class, 'store']);
    Route::post('/products', [\App\Domain\Inventory\Controllers\ProductController::class, 'store']);

    Route::apiResource('/cart-item/{product_uuid}', \App\Domain\Cart\Controllers\CartItemController::class)
        ->only(['store', 'delete']);

});
