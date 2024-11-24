<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
})->name('home');


// public routes
Route::get('/dashboard', [UserController::class, 'dash'])->name('dashboard');

Route::get('/login', [UserController::class, 'ulogin']);

Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'adduser']);
