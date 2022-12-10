<?php

namespace App\Http\Controllers;

use App\Models\Admin\AppointmentRevamp;
use App\Models\Admin\Doctor;
use App\Models\Admin\PatientRevamp;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // return view('home');
        $doctors = Doctor::count();
        $patients = PatientRevamp::count();
        $appointment = AppointmentRevamp::count();

        return view('admin.dashboard', compact('doctors', 'patients', 'appointment'));
    }
}
