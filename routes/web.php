<?php

use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\AppointmentRevampController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\PatientRevampController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'loginPage']);

Auth::routes();
// Route::get('/home', [HomeController::class, 'index'])->name('home');

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

    // Appointment Revamp
    Route::get('/appointments2', [AppointmentRevampController::class, 'index'])->name('appointmentRevamp.index');
    Route::get('/add-appointments2', [AppointmentRevampController::class, 'create'])->name('appointmentRevamp.create');
    Route::post('/appointments2', [AppointmentRevampController::class, 'store'])->name('appointmentRevamp.store');
    Route::get('/appointments2/{id}', [AppointmentRevampController::class, 'edit'])->name('appointmentRevamp.edit');
    Route::put('/appointments2/{id}', [AppointmentRevampController::class, 'update'])->name('appointmentRevamp.update');
    Route::delete('/appointments2/{id}', [AppointmentRevampController::class, 'destroy'])->name('appointmentRevamp.destroy');
    
    Route::get('/appointmentsqr/{id}', [AppointmentRevampController::class, 'qr'])->name('appointment.revampappointmentqr');

    // Patient Revamp
    Route::get('/patients2', [PatientRevampController::class, 'index'])->name('patientRevamp.index');
    Route::post('/patients2Track', [PatientRevampController::class, 'track'])->name('patientRevamp.track');
    Route::get('/add-patients2', [PatientRevampController::class, 'create'])->name('patientRevamp.create');
    Route::post('/patients2', [PatientRevampController::class, 'store'])->name('patientRevamp.store');
    Route::post('/patients2Reconfined', [PatientRevampController::class, 'reconfined'])->name('patientRevamp.reconfined');
    Route::get('/patients2/{id}', [PatientRevampController::class, 'edit'])->name('patientRevamp.edit');
    Route::get('/patients2hisup/{id}', [PatientRevampController::class, 'hisup'])->name('patientRevamp.hisup');
    Route::put('/patients2/{id}', [PatientRevampController::class, 'update'])->name('patientRevamp.update');
    Route::delete('/patients2/{id}', [PatientRevampController::class, 'destroy'])->name('patientRevamp.destroy');

    Route::get('/patientshistory', [PatientRevampController::class, 'history'])->name('patientRevamp.history');
    Route::get('/patientsqr/{id}', [PatientRevampController::class, 'qr'])->name('patients.patientsrevampqr');
});

