<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'show']);

Route::get('/product', [\App\Http\Controllers\ProductController::class, 'show']);

Route::get('/product/{id}', [\App\Http\Controllers\ProductController::class, 'showProduct']);

Route::get('/cart', [\App\Http\Controllers\CartController::class, 'show']);
