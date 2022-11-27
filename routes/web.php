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
    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Doctor 
    Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors.index');
    Route::get('/add-doctors', [DoctorController::class, 'create'])->name('doctors.create');
    Route::post('/doctors', [DoctorController::class, 'store'])->name('doctors.store');
    Route::get('doctors/{id}', [DoctorController::class, 'edit'])->name('doctors.edit');
    Route::post('doctorsUpdate/{id}', [DoctorController::class, 'update'])->name('doctors.doctorsUpdate');
    Route::delete('doctorsDelete/{id}', [DoctorController::class, 'delete'])->name('doctors.doctorsDelete');

    // Patient
    Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');
    Route::get('/add-patients', [PatientController::class, 'create'])->name('patients.create');
    Route::post('/patients', [PatientController::class, 'store'])->name('patients.store');
    Route::get('/patients/{id}', [PatientController::class, 'edit'])->name('patients.edit');
    Route::put('/patients/{id}', [PatientController::class, 'update'])->name('patients.update');
    Route::delete('/patients/{id}', [PatientController::class, 'destroy'])->name('patients.destroy');
    Route::get('/patientsqr/{id}', [PatientController::class, 'qr'])->name('patients.patientsqr');

    // Appointment
    Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
    Route::get('/add-appointments', [AppointmentController::class, 'create'])->name('appointments.create');
    Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
    Route::get('/appointments/{id}', [AppointmentController::class, 'edit'])->name('appointments.edit');
    Route::put('/appointments/{id}', [AppointmentController::class, 'update'])->name('appointments.update');
    Route::delete('/appointments/{id}', [AppointmentController::class, 'destroy'])->name('appointments.destroy');
});

Route::get('/doctors', function () {
    return view('doctors');
});
