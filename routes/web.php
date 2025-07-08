<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'show']);

Route::get('/accueil', [\App\Http\Controllers\HomeController::class, 'show']);

Route::get('/acheter', [\App\Http\Controllers\ProductController::class, 'show']);

Route::get('/vendre', [\App\Http\Controllers\ProductController::class, 'showProduct']);

Route::get('/panier', [\App\Http\Controllers\CartController::class, 'show']);

Route::get('/mon-compte', [\App\Http\Controllers\CompteController::class, 'show']);
