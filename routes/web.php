<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Ahora /home cargará directamente tu interfaz celeste personalizada
Route::get('/home', function () {
    return view('dashboard');
})->middleware(['auth'])->name('home');

Route::get('login/google', 
[App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle']);
Route::get('login/google/callback', 
[App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);
Route::middleware(['auth'])->get('/dashboard', function () {
    return view('dashboard');
    //
    //
});