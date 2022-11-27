<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Appointment;
use App\Models\Admin\Patient;

class DashboardController extends Controller
{
    public function index()
    {
        $patient = Patient::count();
        $appointment = Appointment::count();

        return view('admin.dashboard', compact('patient', 'appointment'));
    }
}
