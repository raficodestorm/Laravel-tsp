<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page-1');
})->name('page-1');

Route::get('/page-second', function () {
    return view('page-2');
})->name('page-2');

Route::get('/page-third', function () {
    return view('page-3');
})->name('page-3');