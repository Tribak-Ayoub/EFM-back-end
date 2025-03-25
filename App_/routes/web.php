<?php

use Illuminate\Support\Facades\Route;
use Modules\PkgProduct\App\Controllers\ProductController;
use Modules\PkgProduct\App\Services\PkgProductService;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rule-test', [ProductController::class, 'test']);

Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '.*');
