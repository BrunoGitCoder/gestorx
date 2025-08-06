<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AppController::class, 'showFormLogin'])->name('login');
Route::post('/login', [AuthController::class, 'authLogin']);

Route::middleware('auth')->group(function () {
    Route::get('/', [AppController::class, 'index'])->name('home');
});

Route::resource('users', UserController::class);