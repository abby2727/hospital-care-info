<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
