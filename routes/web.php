<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;


Route::post('/register', RegisterController::class)->name('register');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', LogoutController::class)->name('logout');
Route::get('/', function () {
    return view('welcome');
});
