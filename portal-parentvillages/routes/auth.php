<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

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

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/register', [AuthController::class, 'store']);
Route::post('/check', [AuthController::class, 'check']);
Route::get('/client/logout', [AuthController::class, 'destroyClient']);
Route::get('/employee/logout', [AuthController::class, 'destroyEmployee']);