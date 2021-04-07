<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProductController;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiresource('/products', ProductController::class);

Route::prefix('products')->group(function () {
    Route::apiResource('/{product}/reviews',ReviewController::class);
});