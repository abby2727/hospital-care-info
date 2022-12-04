<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AppointmentRevamp;
use App\Models\Admin\PatientRevamp;
use Illuminate\Http\Request;

class PatientRevampController extends Controller
{
    public function index()
    {
        $patients = PatientRevamp::orderBy('id', 'DESC')->get();
        $appointment_patients = AppointmentRevamp::all();

        return view('revamp.patients.index', compact('patients', 'appointment_patients'));
    }

    public function create()
    {
        $appointments = AppointmentRevamp::all();

        return view('revamp.patients.create', compact('appointments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required',
            'diagnosis' => 'required',
            'prescription' => 'required',
        ]);

        $patients = new PatientRevamp();

        $patients->appointment_patient_id = $request->input('patient_id');
        $patients->diagnosis = $request->input('diagnosis');
        // dd($patients->first_name);
        $patients->prescription = $request->input('prescription');

        $patients->save();
        return redirect()->route('patientRevamp.index')->with('status', 'Patient recorded successfully!');
    }

    // public function reconfined(Request $request)
    // {
    //     dd("I save and date");
    // }

    public function edit($id)
    {
        $patients = PatientRevamp::find($id);
        $appointments = AppointmentRevamp::all();

        return view('revamp.patients.edit', compact('patients', 'appointments'));
    }

    public function update(Request $request, $id)
    {
        // dd($id);
        $request->validate([
            'patient_id' => 'required',
            'diagnosis' => 'required',
            'prescription' => 'required',
        ]);

        $patients = PatientRevamp::find($id);

        $patients->appointment_patient_id = $request->input('patient_id');
        $patients->diagnosis = $request->input('diagnosis');
        // dd($patients->first_name);
        $patients->prescription = $request->input('prescription');

        $patients->update();
        return redirect()->route('patientRevamp.index')->with('status', 'Patient updated successfully!');
    }

    public function hisEdit($id)
    {
        $patients = PatientRevamp::find($id);
        $appointments = AppointmentRevamp::all();

        return view('medical-history.edit', compact('patients', 'appointments'));
    }

    public function hisUpdate(Request $request, $id)
    {
        // dd($id);
        $request->validate([
            'patient_id' => 'required',
            'diagnosis' => 'required',
            'prescription' => 'required',
        ]);

        $patients = PatientRevamp::find($id);

        $patients->appointment_patient_id = $request->input('patient_id');
        $patients->diagnosis = $request->input('diagnosis');
        // dd($patients->first_name);
        $patients->prescription = $request->input('prescription');

        $patients->update();
        return redirect()->route('patientRevamp.history')->with('status', 'Patient record updated!');
    }

    public function destroy($id)
    {
        $patients = PatientRevamp::find($id);

        $patients->delete();
        return redirect()->route('patientRevamp.index')->with('status_delete', 'Patient deleted successfully!');
    }

    public function qr($id)
    {
        $patients  = PatientRevamp::find($id);
        return view('revamp.patients.qr', compact('patients'));
    }

    public function history()
    {
        $patients = PatientRevamp::orderBy('id', 'DESC')->get();
        $appointment_patients = AppointmentRevamp::all();

        return view('revamp.patients.history', compact('patients', 'appointment_patients'));
    }
}
