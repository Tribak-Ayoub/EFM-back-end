<?php

use Illuminate\Support\Facades\Route;
use Modules\PkgProduct\App\Controllers\ProductController;


Route::prefix('api/products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/store', [ProductController::class, 'store'])->name('products.store');
    Route::get('/{article}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/{article}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/{article}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/{article}', [ProductController::class, 'destroy'])->name('products.destroy');
});