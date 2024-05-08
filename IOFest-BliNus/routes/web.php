<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => 'guest'], function() {
Route::get('login', [LoginController::class, 'redirect'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.post');
Route::get('register', [RegisterController::class, 'redirect'])->name('register');
Route::post('register', [RegisterController::class, 'register'])->name('register.post');
});

Route::group(['middleware' => 'auth'], function() {
Route::get('home', [HomeController::class, 'redirect'])->name('home');
});