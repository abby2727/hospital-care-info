<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Appointment;
use App\Models\Admin\Doctor;
use App\Models\Admin\Patient;

class DashboardController extends Controller
{
    public function index()
    {
        $doctors = Doctor::count();
        $patients = Patient::count();
        $appointment = Appointment::count();

        return view('admin.dashboard', compact('doctors', 'patients', 'appointment'));
    }
}
