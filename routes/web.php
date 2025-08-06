<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

// Login
Route::get('/login', [AppController::class, 'showFormLogin'])->name('login');

// Register
Route::get('/register', [AppController::class, 'showFormRegister'])->name('register');