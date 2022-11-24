<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Doctor;
use App\Models\Admin\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        return view('patients.index');
    }

    public function create()
    {
        $doctors = Doctor::all();

        return view('patients.create', compact('doctors'));
    }

    public function store(Request $request)
    {
        $patients = new Patient();

        $patients->doctor_id = $request->input('doctor_id');
        $patients->first_name = $request->input('first-name');
        $patients->middle_name = $request->input('middle-name');
        $patients->last_name = $request->input('last-name');
        $patients->sex = $request->input('sex');
        $patients->age = $request->input('age');
        $patients->address = $request->input('address');
        $patients->contact_number = $request->input('number');
        $patients->email = $request->input('email');
        $patients->prescription = $request->input('prescription');

        $patients->save();
        return redirect()->route('patients.index')->with('status', 'Patient added successfully!');
    }
}
