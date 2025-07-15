<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'show']);

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'show']);

Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index']);

Route::get('/products/{id}', [\App\Http\Controllers\ProductController::class, 'showProduct'])->name('products.show');

Route::get('/selling', [\App\Http\Controllers\SellingController::class, 'show']);

Route::get('/cart', [\App\Http\Controllers\CartController::class, 'show']);

Route::get('/account', [\App\Http\Controllers\AccountController::class, 'show']);

Route::get('/backoffice', [\App\Http\Controllers\Backoffice\ProductController::class, 'index'])->name('backoffice');

Route::resource('/backoffice/products', \App\Http\Controllers\Backoffice\ProductController::class, [
    'names' => [
        'index' => 'products.index',
        'create' => 'products.create',
        'store' => 'products.store',
        'show' => 'products.show',
        'edit' => 'products.edit',
        'update' => 'products.update',
        'destroy' => 'products.destroy',
    ]
]);

// Pour éviter des répétitions : Use App\Http\Controllers\Backoffice\ProductController;
// Route::prefix('backoffice')->name('backoffice.')->group(function () { }
