<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusController;

Route::get('/', [BusController::class, 'index'])->name('home');

// Optional shortcut for the create form
Route::get('/busentry', [BusController::class, 'create'])->name('buses.create');

Route::resource('buses', BusController::class);
