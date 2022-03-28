<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Index
Route::get('/', function () {
    return view('index');
})->name('index');

// Register
Route::view('register', 'register')->name('register')->middleware('guest');
Route::post('register', RegisterController::class)->middleware('guest');

// Login
Route::view('login', 'login')->name('login')->middleware('guest');
Route::post('login', LoginController::class);
