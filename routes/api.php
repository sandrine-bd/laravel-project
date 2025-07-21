<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\AuthController;

Route::get('/products', [ProductController::class, 'index']); // crée un endpoint à l'adresse http://localhost:8000/api/products
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::middleware('auth:sanctum')->post('/products', [ProductController::class, 'store']);
Route::post('/products', [ProductController::class, 'store']);
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);

Route::post('/login', [AuthController::class, 'login']);
