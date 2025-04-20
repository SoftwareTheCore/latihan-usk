<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Halaman login
Route::get('/login', function () {
    return view('auth.login');
});

// Proses login (langsung ke dashboard)
Route::post('/login', function () {
    return redirect('/dashboard');
});

// Halaman dashboard
Route::get('/dashboard', function () {
    return view('home.dashboard');
});

// Logout (kembali ke login)
Route::get('/logout', function () {
    return redirect('/login');
});

// Redirect homepage ke login
Route::get('/', function () {
    return redirect('/login');
});
