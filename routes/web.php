<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'show']);

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'show'])->name('home');

Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index'])->name('products');

Route::get('/products/{id}', [\App\Http\Controllers\ProductController::class, 'showProduct'])->name('products.details');

Route::get('/selling', [\App\Http\Controllers\SellingController::class, 'show']);

Route::middleware('auth')->group(function () {
    Route::get('/cart', [\App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{id}', [\App\Http\Controllers\CartController::class, 'add'])->name('cart.add');
    Route::delete('/cart/remove/{id}', [\App\Http\Controllers\CartController::class, 'remove'])->name('cart.remove');
    Route::delete('/cart/clear', [\App\Http\Controllers\CartController::class, 'clear'])->name('cart.clear');
});

Route::middleware('auth')->get('/account', function () {
    return view('account', ['user' => Auth::user()]);
})->name('account');

Route::middleware('auth')->group(function () {
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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
