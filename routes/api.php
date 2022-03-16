<?php

use Illuminate\Support\Facades\Route;


//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::post('/v1/login', \App\Http\Controllers\LoginController::class);

Route::group(['middleware' => 'auth:sanctum'], function () {

    Route::post('/categories', [\App\Domain\Inventory\Controllers\CategoryController::class, 'store']);
    Route::get('/categories', [\App\Domain\Inventory\Controllers\CategoryController::class, 'index']);

    Route::post('/products', [\App\Domain\Inventory\Controllers\ProductController::class, 'store']);
    Route::post('/products', [\App\Domain\Inventory\Controllers\ProductController::class, 'store']);

    Route::get('/products/{product}/inventories', [\App\Domain\Inventory\Controllers\InventoryController::class, 'show']);
    Route::post('/products/{product}/inventories', [\App\Domain\Inventory\Controllers\InventoryController::class, 'store']);
    Route::delete('/products/{product}/inventories', [\App\Domain\Inventory\Controllers\InventoryController::class, 'destroy']);

    Route::get('/user/cart', \App\Domain\Cart\Controllers\CartController::class);

    Route::post('/products/{product}/cart', [\App\Domain\Cart\Controllers\CartItemController::class, 'store']);
    Route::delete('/products/{product}/cart', [\App\Domain\Cart\Controllers\CartItemController::class, 'destroy']);
    Route::patch('/products/{product}/cart', [\App\Domain\Cart\Controllers\CartItemController::class, 'update']);

//    Route::apiResource('/cart-item/{product_uuid}', \App\Domain\Cart\Controllers\CartItemController::class)
//        ->only(['store', 'delete', 'update']);

});
