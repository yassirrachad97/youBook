<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Reservationcontroller;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('books', BookController::class);
Route::get('login',[UserController::class,"login"])->name("login");
Route::get('regester',[UserController::class,"regester"])->name("regester");
Route::post('singup',[UserController::class,"singup"])->name("singup");
Route::resource('reservation', Reservationcontroller::class);



