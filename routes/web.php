<?php


use Illuminate\Support\Facades\Route;

Route::middleware(['log.requests'])->group(function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/middleware', function () {
        return view('middleware');
    });

    Route::get('/layout', function () {
        return view('Layout'); 
    });

    Route::get('/routes', function () {
        return view('Routes'); 
    });

    Route::get('/portfolio', function () {
        return view('Portfolio'); 
    });
});