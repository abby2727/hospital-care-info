@extends('layouts.admin')

@section('title', 'View Appointment')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
                @if (session('status_delete'))
                    <h6 class="alert alert-danger">{{ session('status_delete') }}</h6>
                @endif
                @if (session('existed'))
                    <h6 class="alert alert-danger">{{ session('existed') }}</h6>
                @endif
                <div class="card">
                    <div class="card-header fw-bold">
                        <h4>View Appointment
                            <a href="{{ route('appointments.create') }}" class="btn btn-sm btn-primary float-end fw-bold">Add
                                Appointment</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table id="" class="table table-bordered table-striped text-center" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Patient Name</th>
                                    <th>Sex</th>
                                    <th>Age</th>
                                    <th>Address</th>
                                    <th>Contact Number</th>
                                    <th>Appointment Date</th>
                                    <th>Action</th>
                                    <th>QRCODE</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appointments as $appointment)
                                    <tr>
                                        <td>{{ $appointment->id }}</td>
                                        <td>{{ $appointment->patient->name }}</td>
                                        <td>
                                            @if ($appointment->sex == '0')
                                                <p>Male</p>
                                            @elseif($appointment->sex == '1')
                                                <p>Female</p>
                                            @endif
                                        </td>
                                        <td>{{ $appointment->age }}</td>
                                        <td>{{ $appointment->address }}</td>
                                        <td>{{ $appointment->contact_number }}</td>
                                        {{-- <td>{{ $appointment->appointment_date }}</td> --}}
                                        <td>{{ $appointment->appointment_date->format('F d,Y h:i A') }}</td>
                                        <td>
                                            <a href="{{ route('appointments.edit', $appointment->id) }}"
                                                class="btn btn-primary">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <form action="{{ route('appointments.destroy', $appointment->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa-solid fa-trash"></i></button>
                                            </form>
                                        </td>
                                        <td>
                                            <a href="{{ route('appointment.appointmentsqr', $appointment->id) }}"
                                                class="btn btn-dark"><i class="fa-solid fa-qrcode"></i></a>
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
