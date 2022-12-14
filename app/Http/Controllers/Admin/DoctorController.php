<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::orderBy('id', 'DESC')->get();

        return view('doctors.index', compact('doctors'));
    }

    public function create()
    {
        return view('doctors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first-name' => 'required|string|max:191',
            'middle-name' => 'required|string|max:191',
            'last-name' => 'required|string|max:191',
            'age' => 'required',
            'sex' => 'required',
            'number' => 'required',
            'email' => 'required|email|max:191',
            'specialties' => 'required|string|max:191',
        ]);

        $doctors = new Doctor();
        
        $doctors->first_name = $request->input('first-name');
        $doctors->middle_name = $request->input('middle-name');
        $doctors->last_name = $request->input('last-name');
        $doctors->name = $doctors->first_name . " " . $doctors->last_name;
        $doctors->age = $request->input('age');
        $doctors->sex = $request->input('sex');
        $doctors->contact_number = $request->input('number');
        $doctors->email = $request->input('email');
        $doctors->specialties = $request->input('specialties');

        $doctors->save();
        return redirect()->route('doctors.index')->with('status', 'Specialist added successfully!');
    }

    public function edit(Request $request, $id)
    {
        $doctors = Doctor::find($id);

        return view('doctors.edit', compact('doctors'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'first-name' => 'required|string|max:191',
            'middle-name' => 'required|string|max:191',
            'last-name' => 'required|string|max:191',
            'age' => 'required',
            'sex' => 'required',
            'number' => 'required',
            'email' => 'required|email|max:191',
            'specialties' => 'required|string|max:191',
        ]);
        
        $doctors = Doctor::find($id);

        $doctors->first_name = $request->input('first-name');
        $doctors->middle_name =  $request->input('middle-name');
        $doctors->last_name = $request->input('last-name');
        $doctors->name = $doctors->first_name . " " . $doctors->last_name;
        $doctors->age =  $request->input('age');
        $doctors->sex =  $request->input('sex');
        $doctors->contact_number =  $request->input('number');
        $doctors->email = $request->input('email');
        $doctors->specialties =  $request->input('specialties');

        $doctors->update();
        return redirect()->route('doctors.index')->with('status', 'Doctors updated successfully!');
    }

    public function delete(Request $request, $id)
    {
        $doctors = Doctor::find($id);

        // dd($doctors->appointments()->count());
        $doctors->appointments()->delete();
        $doctors->delete();
        return redirect()->route('doctors.index')->with('deleted', 'Specialist Deleted!');
    }
}
