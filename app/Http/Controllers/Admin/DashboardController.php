<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Doctor;
use App\Models\Admin\Patient;
use App\Models\Appointment;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $patient = Patient::count();
        $appointment = Appointment::count();
        return view('admin.dashboard', compact('patient', 'appointment'));
    }
}
