<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AppointmentRevamp;
use App\Models\Admin\Doctor;
use Illuminate\Http\Request;

class AppointmentRevampController extends Controller
{
    public function index()
    {
        $appointments = AppointmentRevamp::orderBy('id', 'DESC')->get();

        return view('revamp.appointment.index', compact('appointments'));
    }

    public function create()
    {
        $doctors = Doctor::all();

        return view('revamp.appointment.create', compact('doctors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'doctor_id' => 'required',
            'first-name' => 'required|string|max:191',
            'middle-name' => 'required|string|max:191',
            'last-name' => 'required|string|max:191',
            'sex' => 'required',
            'age' => 'required',
            'address' => 'required|string|max:191',
            'number' => 'required',
            'email' => 'required|email|max:191',
            'appointment_date' => 'required',
        ]);

        $appointments = new AppointmentRevamp();

        $appointments->doctor_id = $request->input('doctor_id');
        $appointments->first_name = $request->input('first-name');
        $appointments->middle_name = $request->input('middle-name');
        $appointments->last_name = $request->input('last-name');
        $appointments->name = $appointments->first_name . " " . $appointments->last_name;
        $appointments->sex = $request->input('sex');
        $appointments->age = $request->input('age');
        $appointments->address = $request->input('address');
        $appointments->contact_number = $request->input('number');
        $appointments->email = $request->input('email');
        $appointments->appointment_date = $request->input('appointment_date');

        $appointments->save();
        return redirect()->route('appointmentRevamp.index')->with('status', 'Appointment added successfully!');
    }

    public function edit($id)
    {
        $appointments = AppointmentRevamp::find($id);
        $doctors = Doctor::all();

        return view('revamp.appointment.edit', compact('appointments', 'doctors'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'doctor_id' => 'required',
            'first-name' => 'required|string|max:191',
            'middle-name' => 'required|string|max:191',
            'last-name' => 'required|string|max:191',
            'sex' => 'required',
            'age' => 'required',
            'address' => 'required|string|max:191',
            'number' => 'required',
            'email' => 'required|email|max:191',
            'appointment_date' => 'required',
        ]);

        $appointments = AppointmentRevamp::find($id);

        $appointments->doctor_id = $request->input('doctor_id');
        $appointments->first_name = $request->input('first-name');
        $appointments->middle_name = $request->input('middle-name');
        $appointments->last_name = $request->input('last-name');
        $appointments->name = $appointments->first_name . " " . $appointments->last_name;
        $appointments->sex = $request->input('sex');
        $appointments->age = $request->input('age');
        $appointments->address = $request->input('address');
        $appointments->contact_number = $request->input('number');
        $appointments->email = $request->input('email');
        $appointments->appointment_date = $request->input('appointment_date');

        $appointments->update();
        return redirect()->route('appointmentRevamp.index')->with('status', 'Appointment updated successfully!');
    }

    public function destroy($id)
    {
        $appointments = AppointmentRevamp::find($id);

        // $appointments->patientRecord()->delete();
        $appointments->delete();
        return redirect()->route('appointmentRevamp.index')->with('status_delete', 'Appointment deleted successfully!');
    }
}
