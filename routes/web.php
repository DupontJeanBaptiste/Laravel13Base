<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.public.welcome');
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
Route::get('/reset-mail-success', function () {
    return view('auth.reset-mail-success');
})->name('reset-mail-success');

Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('pages.public.welcome');
    })->name('home');
});