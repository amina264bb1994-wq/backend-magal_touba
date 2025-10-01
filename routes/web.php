<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prayer-times', [\App\Http\Controllers\PrayerTimeController::class, 'index']);
Route::get('/places', [\App\Http\Controllers\PlaceController::class, 'index']);
Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register']);

