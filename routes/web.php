<?php
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\DoctorDashboardController;
use App\Http\Controllers\PatientDashboardController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard/admin',[AdminDashboardController::class,'index'])->name('dashboard.admin');
Route::get('/dashboard/doctor',[DoctorDashboardController::class,'index'])->name('dashboard.doctor');
Route::get('/dashboard/patient',[PatientDashboardController::class,'index'])->name('dashboard.patient');

Route::prefix('practice')->group(function(){

    Route::prefix('students')->group(function(){
        Route::get('trash',[StudentController::class,'trash'])->name('students.trash');
        Route::get('restore/{id}',[StudentController::class,'restore'])->name('students.restore');
        Route::delete('forceDelete/{id}',[StudentController::class,'forcedDelete'])->name('students.forcedDelete');
    });


    Route::resource('students',StudentController::class);
});
