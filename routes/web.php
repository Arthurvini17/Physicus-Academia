<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index_home'])->name('index.home');
Route::get('/login', [AuthController::class, 'index_login'])->name('index.login');
Route::post('/login', [AuthController::class, 'auth_login'])->name('auth_login');

Route::get('/register', [UserController::class, 'index_register'])->name('index.register');
Route::post('/register', [UserController::class, 'register_user'])->name('register_user');
