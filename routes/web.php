<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'auth.login');

Route::prefix('dashboard')->middleware('auth', 'verified')->group(function () {
    Route::get('/admin', [DashboardController::class, 'admin'])->name('dashboard.admin');
    Route::get('/doctor', [DashboardController::class, 'doctor'])->name('dashboard.doctor');
    Route::get('/patient', [DashboardController::class, 'patient'])->name('dashboard.patient');
});


require __DIR__ . '/auth.php';
