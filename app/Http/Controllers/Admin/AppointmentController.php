<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Appointment;
use App\Models\Admin\Patient;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::orderBy('id', 'DESC')->get();

        return view('appointment.index', compact('appointments'));
    }

    public function create()
    {
        $patients = Patient::all();

        return view('appointment.create', compact('patients'));
    }

    public function store(Request $request)
    {
        $appointments = new Appointment();
        $appointments->patient_id = $request->input('patient_id');
        $patient = Patient::find($request->input('patient_id'));
        $appointments->sex = $patient->sex;
        $appointments->age = $patient->age;
        $appointments->address = $patient->address;
        $appointments->contact_number = $patient->contact_number;
        $appointments->appointment_date = $request->input('appointment_date');
        $appointments->save();
        return redirect()->route('appointments.index')->with('status', 'Appointment added successfully!');
    }
    public function edit($id)
    {
        $appointments = Appointment::find($id);
        $patients = Patient::all();
        return view('appointment.edit', compact('appointments', 'patients'));
    }

    public function update(Request $request, $id)
    {
        $appointments = Appointment::find($id);

        $appointments->patient_id = $request->input('patient_id');
        $appointments->sex = $request->input('sex');
        $appointments->age = $request->input('age');
        $appointments->address = $request->input('address');
        $appointments->contact_number = $request->input('contact_number');
        $appointments->appointment_date = $request->input('appointment_date');

        $appointments->update();
        return redirect()->route('appointments.index')->with('status', 'Appointment updated successfully!');
    }

    public function destroy($id)
    {
        $appointments = Appointment::find($id);

        $appointments->delete();
        return redirect()->route('appointments.index')->with('status_delete', 'Appointment deleted successfully!');
    }

    public function qr($id)
    {
        $appointment = Appointment::find($id);
        $patients = Patient::all();
        return view('appointment.qr', compact('patients', 'appointment'));
    }
}
