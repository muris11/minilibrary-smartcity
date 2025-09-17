<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('dashboard');
})->middleware('auth');

// Updated routes for password reset functionality
Route::get('/forgot', [App\Http\Controllers\AuthController::class, 'showForgotForm'])->name('password.request');
Route::post('/forgot', [App\Http\Controllers\AuthController::class, 'sendForgot'])->name('password.update');
