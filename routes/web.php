<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index_home'])->name('index.home');
Route::get('/login', [AuthController::class, 'index_login'])->name('index.login');
Route::post('/login', [AuthController::class, 'auth_login'])->name('auth_login');
