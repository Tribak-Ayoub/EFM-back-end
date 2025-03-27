<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LivreController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LivreController::class, 'index'])->name('index');
Route::get('/create', [LivreController::class, 'create'])->name('create');
Route::post('/store', [LivreController::class, 'store'])->name('store');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


// Route::get('/{any}', function () {
//     return view('welcome');
// })->where('any', '.*');
