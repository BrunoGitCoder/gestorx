<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function () {
    Route::get('/login', [AppController::class, 'showFormLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'authLogin'])->name('auth.login');
    Route::resource('users', UserController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/', [AppController::class, 'index'])->name('home');
    Route::post('/logout', [AuthController::class, 'authLogout'])->name('auth.logout');
    Route::resource('projects', ProjectController::class);
});