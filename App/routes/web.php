<?php

use Illuminate\Support\Facades\Route;
use Modules\PkgWidget\App\Services\WidgetService;
use Modules\PkgWidget\Controllers\WidgetController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [WidgetController::class, 'index'])->name('index');
Route::post('/index', [WidgetController::class, 'execute'])->name('execute');
Route::post('/create', [WidgetController::class, 'create'])->name('create');
Route::post('/store', [WidgetController::class, 'store'])->name('store');
Route::post('/show', [WidgetController::class, 'show'])->name('show');
Route::post('/edit', [WidgetController::class, 'edit'])->name('edit');
Route::post('/destroy', [WidgetController::class, 'destroy'])->name('destroy');

