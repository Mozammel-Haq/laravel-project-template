<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorDashboardController extends Controller
{
    public function index(){
        return view('pages.erp.doctor.dashboard.index');
    }
}
