<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

//Route Login

Route::get('/login', [LoginController::class, 'login']);

//Route Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');