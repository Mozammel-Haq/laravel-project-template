<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function admin()
    {
        return view('pages.erp.admin.dashboard.index');
    }
    function doctor()
    {
        return view('pages.erp.doctor.dashboard.index');
    }
    function patient()
    {
        return view('pages.erp.patient.dashboard.index');
    }
}
