<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\AccueilController::class, 'show']);

Route::get('/accueil', [\App\Http\Controllers\AccueilController::class, 'show']);

Route::get('/acheter', [\App\Http\Controllers\AchatController::class, 'show']);

Route::get('/vendre', [\App\Http\Controllers\VenteController::class, 'show']);

Route::get('/panier', [\App\Http\Controllers\PanierController::class, 'show']);

Route::get('/mon-compte', [\App\Http\Controllers\CompteController::class, 'show']);
