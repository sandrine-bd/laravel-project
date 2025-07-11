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

Route::get('/backoffice/products', [\App\Http\Controllers\Backoffice\ProductController::class, 'index'])->name('products.index');

Route::post('/backoffice/products', [\App\Http\Controllers\Backoffice\ProductController::class, 'store'])->name('products.store');

Route::get('/backoffice/products/{product}', [\App\Http\Controllers\Backoffice\ProductController::class, 'show'])->name('products.show');

Route::get('/backoffice/products/create', [\App\Http\Controllers\Backoffice\ProductController::class, 'create'])->name('products.create');

Route::get('/backoffice/products/{product}/edit', [\App\Http\Controllers\Backoffice\ProductController::class, 'edit'])->name('products.edit');

Route::put('/backoffice/products/{product}', [\App\Http\Controllers\Backoffice\ProductController::class, 'update'])->name('products.update');

Route::delete('/backoffice/products/{product}', [\App\Http\Controllers\Backoffice\ProductController::class, 'destroy'])->name('products.destroy');

// Pour éviter des répétitions : Use App\Http\Controllers\Backoffice\ProductController;
// Route::prefix('backoffice')->name('backoffice.')->group(function () { }
// Route::resource('products', ProductController::class);
