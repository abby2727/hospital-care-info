<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::orderBy('id', 'ASC')->get();

        return view('doctors.index', compact('doctors'));
    }

    public function create()
    {
        return view('doctors.create');
    }

    public function edit(Request $request, $id)
    {
        $doctors = Doctor::find($id);
        return view('doctors.edit', compact('doctors'));
    }

    public function update(Request $request, $id)
    {
        
        $doctors = Doctor::find($id);
        $doctors->first_name = $request->input('first-name');
        $doctors->middle_name =  $request->input('middle-name');
        $doctors->last_name = $request->input('last-name');
        $doctors->age =  $request->input('age');
        $doctors->sex =  $request->input('sex');
        $doctors->contact_number =  $request->input('number');
        $doctors->email = $request->input('email');
        $doctors->specialties =  $request->input('specialties');
        $doctors->update();
        return redirect()->route('doctors.index')->with('update', 'Doctors updated successfully!');
    }

    public function delete(Request $request, $id)
    {
        $doctors = Doctor::find($id);
        $doctors->delete();
        return redirect()->route('doctors.index')->with('deleted', 'Specialist Deleted!');

    }


    public function store(Request $request)
    {
        $doctors = new Doctor();

        $doctors->first_name = $request->input('first-name');
        $doctors->middle_name = $request->input('middle-name');
        $doctors->last_name = $request->input('last-name');
        $doctors->age = $request->input('age');
        $doctors->sex = $request->input('sex');
        $doctors->contact_number = $request->input('number');
        $doctors->email = $request->input('email');
        $doctors->specialties = $request->input('specialties');

        $doctors->save();
        return redirect()->route('doctors.index')->with('status', 'Specialist added successfully!');
    }
}
