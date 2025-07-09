<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'show']);

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'show']);

Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index']);

Route::get('/products/{id}', [\App\Http\Controllers\ProductController::class, 'showProduct']);

Route::get('/selling', [\App\Http\Controllers\SellingController::class, 'show']);

Route::get('/cart', [\App\Http\Controllers\CartController::class, 'show']);

Route::get('/account', [\App\Http\Controllers\AccountController::class, 'show']);
