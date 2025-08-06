<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AppController::class, 'showFormLogin'])->name('login');

Route::resource('users', UserController::class);