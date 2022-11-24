<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Doctors;

class DoctorController extends Controller
{
    public function index() 
    {
        return view('doctors.index');
    }
    
    public function create()
    {
        return view('doctors.create');
    }
    public function store(Request $request)
    {
        $doctors = new Doctors();
        $doctors->firstname = $request->input('firstname');
        $doctors->save();
        return redirect('doctors.create')->with('status', 'Doctor added successfully!');
    }
}
