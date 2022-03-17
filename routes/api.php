<?php

use Illuminate\Support\Facades\Route;


//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::post('/v1/login', \App\Http\Controllers\LoginController::class);

Route::group(['middleware' => 'auth:sanctum'], function () {

    Route::post('/categories', [\App\Domain\Manufacturing\Controllers\CategoryController::class, 'store']);
    Route::get('/categories', [\App\Domain\Manufacturing\Controllers\CategoryController::class, 'index']);

    Route::post('/products', [\App\Domain\Manufacturing\Controllers\ProductController::class, 'store']);

    Route::get('/products/{product}/inventories', [\App\Domain\Inventory\Controllers\InventoryController::class, 'show']);
    Route::post('/products/{product}/inventories', [\App\Domain\Inventory\Controllers\InventoryController::class, 'store']);
    Route::delete('/products/{product}/inventories', [\App\Domain\Inventory\Controllers\InventoryController::class, 'destroy']);

    Route::get('/user/cart', \App\Domain\Cart\Controllers\CartController::class);

    Route::post('/products/{product}/cart-item', [\App\Domain\Cart\Controllers\CartItemController::class, 'store']);
    Route::delete('/products/{product}/cart-item', [\App\Domain\Cart\Controllers\CartItemController::class, 'destroy']);

    Route::post('/products/{product}/cart-item/increase', [\App\Domain\Cart\Controllers\CartItemQuantityController::class, 'store']);
    Route::delete('/products/{product}/cart-item/decreases', [\App\Domain\Cart\Controllers\CartItemQuantityController::class, 'destroy']);

//    Route::apiResource('/cart-item/{product_uuid}', \App\Domain\Cart\Controllers\CartItemController::class)
//        ->only(['store', 'delete', 'update']);

});
