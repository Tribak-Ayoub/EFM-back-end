<?php

use Illuminate\Support\Facades\Route;
use Modules\PkgWidget\App\Services\WidgetService;
use Modules\PkgWidget\Controllers\WidgetController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [WidgetController::class, 'index'])->name('index');
Route::post('/index', [WidgetController::class, 'execute'])->name('execute');
