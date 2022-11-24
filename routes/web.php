<?php

use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Doctor 
    Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors.index');
    Route::get('/add-doctors', [DoctorController::class, 'create'])->name('doctors.create');

    // Patient
    Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');
    Route::get('/add-patients', [PatientController::class, 'create'])->name('patients.create');

    // Patient
    Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
    Route::get('/add-appointments', [AppointmentController::class, 'create'])->name('appointments.create');
});

Route::get('/doctors', function () {
    return view('doctors');
});
