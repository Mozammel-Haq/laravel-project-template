<?php

use Illuminate\Support\Facades\Route;

Route::view('/dashboard/admin', 'pages.dashboard.admin.index');
Route::view('/dashboard/doctor', 'pages.dashboard.doctor.index');
Route::view('/dashboard/patient', 'pages.dashboard.patient.index');
