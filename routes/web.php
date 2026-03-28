<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/registration', function () {
    return view('auth.registration');
})->name('registration');
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('forgot-password');

Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('welcome');
    })->name('home');
});