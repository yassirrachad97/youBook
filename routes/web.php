<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::patch('/reserver/{id}', [BookController::class,'reserver'])->name('reserver');
Route::patch('/recuperer/{id}', [BookController::class,'recuperer'])->name('recuperer');


