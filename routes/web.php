<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/About', function () {
    return view('About');
})->name('About');

Route::get('/Content', function () {
    return view('Content');
})->name('Content');