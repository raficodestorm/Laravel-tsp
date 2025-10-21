<?php

use App\Http\Controllers\AriaController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\CounterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('student', StudentController::class);

Route::resource('aria', AriaController::class);
// Route::resource('counter', CounterController::class);
// Route::resource('ticket', TicketController::class);
