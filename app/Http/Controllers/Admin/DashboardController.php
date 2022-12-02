<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Appointment;
use App\Models\Admin\AppointmentRevamp;
use App\Models\Admin\Doctor;
use App\Models\Admin\Patient;
use App\Models\Admin\PatientRevamp;

class DashboardController extends Controller
{
    public function index()
    {
        $doctors = Doctor::count();
        $patients = PatientRevamp::count();
        $appointment = AppointmentRevamp::count();

        return view('admin.dashboard', compact('doctors', 'patients', 'appointment'));
    }
}
