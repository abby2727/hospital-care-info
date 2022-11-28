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
        $patients = Patient::orderBy('id', 'DESC')->get();

        return view('patients.index', compact('patients'));
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
        $patients->name = $patients->first_name . " " . $patients->last_name;
        // dd($patients->name);
        $patients->sex = $request->input('sex');
        $patients->age = $request->input('age');
        $patients->address = $request->input('address');
        $patients->contact_number = $request->input('number');
        $patients->email = $request->input('email');
        $patients->prescription = $request->input('prescription');
        $patients->diagnosis = $request->input('diagnosis');

        $patients->save();
        return redirect()->route('patients.index')->with('status', 'Patient added successfully!');
    }

    public function edit($id)
    {
        $patients = Patient::find($id);
        $doctors = Doctor::all();

        return view('patients.edit', compact('patients', 'doctors'));
    }

    public function update(Request $request, $id)
    {
        $patients = Patient::find($id);

        $patients->doctor_id = $request->input('doctor_id');
        $patients->first_name = $request->input('first-name');
        $patients->middle_name = $request->input('middle-name');
        $patients->last_name = $request->input('last-name');
        $patients->name = $patients->first_name . " " . $patients->last_name;
        $patients->sex = $request->input('sex');
        $patients->age = $request->input('age');
        $patients->address = $request->input('address');
        $patients->contact_number = $request->input('number');
        $patients->email = $request->input('email');
        $patients->prescription = $request->input('prescription');
        $patients->diagnosis = $request->input('diagnosis');

        $patients->update();
        return redirect()->route('patients.index')->with('status', 'Patient updated successfully!');
    }

    public function destroy($id)
    {
        $patients = Patient::find($id);

        $patients->appointment()->delete();
        $patients->delete();
        return redirect()->route('patients.index')->with('status_delete', 'Patient deleted successfully!');
    }


    public function qr($id)
    {
        $patients = Patient::find($id);
        $doctors = Doctor::all();
        return view('patients.qr', compact('patients', 'doctors'));
    }



}
