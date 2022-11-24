@extends('layouts.admin')

@section('title', 'View Specialist')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-12">
                @if (session('message-delete'))
                    <h6 class="alert alert-danger">{{ session('status') }}</h6>
                @endif
                @if (session('message'))
                    <h6 class="alert alert-success">{{ session('status_2') }}</h6>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>View Specialist
                            <a href="{{ route('doctors.create') }}" class="btn btn-sm btn-primary float-end">Add
                                Specialist</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table id="articleDataTable" class="table table-bordered table-striped" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Age</th>
                                    <th>Sex</th>
                                    <th>Contact Number</th>
                                    <th>Email</th>
                                    <th>Specialties</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($doctors as $doctor)
                                    <tr>
                                        <td>{{ $doctor->first_name }}</td>
                                        <td>{{ $doctor->last_name }}</td>
                                        <td>{{ $doctor->age }}</td>
                                        <td>
                                            @if ($doctor->sex == '0')
                                                <h6>Male</h6>
                                            @endif
                                            @if ($doctor->sex == '1')
                                                <h6>Female</h6>
                                            @endif
                                        </td>
                                        <td>{{ $doctor->contact_number }}</td>
                                        <td>{{ $doctor->email }}</td>
                                        <td>
                                            @if ($doctor->specialties == '0')
                                                <h6>Dentist</h6>
                                            @endif
                                            @if ($doctor->specialties == '1')
                                                <h6>Neurology</h6>
                                            @endif
                                            @if ($doctor->specialties == '2')
                                                <h6>Internal Medicine</h6>
                                            @endif
                                            @if ($doctor->specialties == '3')
                                                <h6>Surgery</h6>
                                            @endif
                                            @if ($doctor->specialties == '4')
                                                <h6>Pediatrics</h6>
                                            @endif
                                            @if ($doctor->specialties == '5')
                                                <h6>Radiology</h6>
                                            @endif
                                            @if ($doctor->specialties == '6')
                                                <h6>Dermatology</h6>
                                            @endif
                                            @if ($doctor->specialties == '7')
                                                <h6>Psychiatry</h6>
                                            @endif
                                            @if ($doctor->specialties == '8')
                                                <h6>Cardiology</h6>
                                            @endif
                                            @if ($doctor->specialties == '9')
                                                <h6>Otorhinolaryngology</h6>
                                            @endif
                                            @if ($doctor->specialties == '10')
                                                <h6>Physical Therapy</h6>
                                            @endif
                                            @if ($doctor->specialties == '11')
                                                <h6>Plastic Surgery</h6>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
