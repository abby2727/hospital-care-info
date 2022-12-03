@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <style>
        body {
            background-image: url('../assets/img/pbg.png');
            background-size: cover;
        }
    </style>

    <div class="container-fluid px-4 mt-5">
        <h3 class="mt-4">Dashboard</h3>

        {{-- Specialists --}}
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card bg-info border-left-success shadow h-100 py-2" style="color: aliceblue;">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-s font-weight-bold text-success text-uppercase mb-1">
                                    <p style="color: aliceblue;">Total Specialists</p>
                                </div>
                                <div class="h4 mb-0 font-weight-bold text-gray-800">{{ $doctors }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-user-doctor fa-2x text-gray-300"></i>
                                {{-- <i class="fa-solid fa-user-doctor"> --}}
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-dark stretched-link" href="{{ route('doctors.index') }}">
                            View Details
                        </a>
                        <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

            {{-- Appointments --}}
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card bg-primary border-left-success shadow h-100 py-2" style="color: aliceblue;">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-s font-weight-bold text-success text-uppercase mb-1">
                                    <p style="color: aliceblue;">Total Appointments</p>
                                </div>
                                <div class="h4 mb-0 font-weight-bold text-gray-800">{{ $appointment }}</div>
                            </div>
                            <div class="col-auto">
                                {{-- <i class="fas fa-comments fa-2x text-gray-300"></i> --}}
                                <i class="fa-solid fa-calendar-check fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-dark stretched-link" href="{{ route('appointmentRevamp.index') }}">
                            View Details
                        </a>
                        <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

            {{-- Patients --}}
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card bg-danger border-left-success shadow h-100 py-2" style="color: aliceblue;">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-s font-weight-bold text-success text-uppercase mb-1">
                                    <p style="color: aliceblue;">Total Patients</p>
                                </div>
                                <div class="h4 mb-0 font-weight-bold text-gray-800">{{ $patients }}</div>
                            </div>
                            <div class="col-auto">
                                {{-- <i class="fas fa-comments fa-2x text-gray-300"></i> --}}
                                <i class="fa-solid fa-hospital-user fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-dark stretched-link" href="{{ route('patientRevamp.index') }}">
                            View Details
                        </a>
                        <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
