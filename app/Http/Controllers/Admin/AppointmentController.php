<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        return 'index appointment';
    }

    public function create()
    {
        return 'create appointment';
    }
}
