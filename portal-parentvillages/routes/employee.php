<?php

use App\Http\Controllers\Employee\{
    DashboardController,
    MilaegeLogController,
    TimeTrackingController,
    ReceiptController,
    ExpenseController,
    EvaluationController,
    ProfileController
};
use Illuminate\Support\Facades\Route;


Route::middleware('auth.employee')->prefix('/employee')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('employee-dashboard');

    Route::resource('/time-tracking', TimeTrackingController::class);
    Route::resource('/milaege-logs', MilaegeLogController::class);
    Route::resource('/evaluations', EvaluationController::class);

    Route::resource('/receipts', ReceiptController::class);
    Route::post('/receipts/delete/{receipt}', [ReceiptController::class, 'delete']);

    Route::resource('/expenses', ExpenseController::class);
    Route::post('/expenses/delete/{expense}', [ExpenseController::class, 'delete']);
    Route::get('/expenses/export/{employee}', [ExpenseController::class, 'export']);

    Route::resource('/my-profile',ProfileController::class)->except(['store']);
    Route::get('/change-password',[ProfileController::class, 'password_index']);
    Route::post('/change-password/{user}',[ProfileController::class, 'passwordEdit']);
    Route::post('/change-profile/{user}',[ProfileController::class, 'profileEdit']);
});
