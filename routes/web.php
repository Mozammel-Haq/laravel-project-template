<?php

use App\Http\Controllers\DashboardController;
use App\Mail\WelComeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::view('/', 'auth.login');

Route::prefix('dashboard')->middleware('auth', 'verified')->group(function () {
    Route::get('/admin', [DashboardController::class, 'admin'])->name('dashboard.admin');
    Route::get('/doctor', [DashboardController::class, 'doctor'])->name('dashboard.doctor');
    Route::get('/patient', [DashboardController::class, 'patient'])->name('dashboard.patient');
});

// Test Mail

// Route::get('test-mail',function(){
//     Mail::to('hmojammel29@gmail.com','Mozammel')->send(new WelComeMail());
//     return "<h3 style='bakground:light-green;color:white'>Mail Sent Successfully</h3>";
// });


require __DIR__ . '/auth.php';
