<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/products');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::post('products/store', [ProductController::class, 'store'])->name('products.store');
