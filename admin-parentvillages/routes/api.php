<?php

use App\Http\Controllers\API\Accessibility;
use App\Http\Controllers\API\Appointment;
use App\Http\Controllers\API\Client;
use App\Http\Controllers\API\EmployeeController;
use App\Http\Controllers\API\Expense;
use App\Http\Controllers\API\MileageLog;
use App\Http\Controllers\API\TimeTracking;
use App\Http\Controllers\API\AdminResource;
use App\Http\Controllers\API\Receipt;
use App\Http\Controllers\API\IntakeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get-users', [Client::class, 'index']);
Route::get('/get-employees', [EmployeeController::class, 'index']);
Route::get('/get-time-trackings', [TimeTracking::class, 'index']);
Route::get('/get-mileage-logs', [MileageLog::class, 'index']);
Route::get('/get-receipts', [Receipt::class, 'index']);
Route::get('/get-expenses', [Expense::class, 'index']);
Route::get('/get-intakes', [IntakeController::class, 'index']);
Route::get('/get-appointments', [Appointment::class, 'index']);
Route::get('/get-resources/{resource}', [AdminResource::class, 'index']);
Route::get('/get-accessibility/{evaluation:slug}', [Accessibility::class, 'index']);
