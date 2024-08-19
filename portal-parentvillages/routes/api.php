<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\{
    Appointment,
    Expense,
    TimeTracking,
    MilaegeLog,
    Receipt,
    IntakeForm
};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get-time-trackings', [TimeTracking::class, 'index']);
Route::get('/get-milaege-logs', [MilaegeLog::class, 'index']);
Route::get('/get-receipts', [Receipt::class, 'index']);
Route::get('/get-receipt-images', [Receipt::class, 'getImages']);
Route::get('/get-expenses', [Expense::class, 'index']);
Route::get('/get-intakes', [IntakeForm::class, 'index']);
Route::get('/get-appointments', [Appointment::class, 'index']);
Route::get('/get-files', [File::class, 'index']);
Route::get('/get-milaege', [MilaegeLog::class, 'milage_chart']);
Route::get('/get-expense', [Expense::class, 'expense_chart']);
Route::get('/get-timetracking', [TimeTracking::class, 'time_track_chart']);
