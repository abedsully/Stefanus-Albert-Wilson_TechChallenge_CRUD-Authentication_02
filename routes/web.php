<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/home', [DataController::class, 'view'])->middleware('auth');
Route::get('/store', [DataController::class, 'index'])->middleware('auth');
Route::post('/store', [DataController::class, 'store']);
Route::get('/home', [DataController::class, 'show'])->middleware('auth');
Route::get('/edit/{id}', [DataController::class, 'edit'])->middleware('auth');
Route::patch('/update/{id}', [DataController::class, 'update']);
Route::delete('/delete/{id}', [DataController::class, 'delete']);


