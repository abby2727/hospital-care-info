@extends('layouts.admin')

@section('title', 'View Appointment')

@section('content')
    <style>
        body {
            background-image: url('../assets/img/bg.png');
            background-size: cover;
        }
    </style>
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
                @if (session('status_delete'))
                    <h6 class="alert alert-danger">{{ session('status_delete') }}</h6>
                @endif
                <div class="card">
                    <div class="card-header fw-bold">
                        <h4>View Appointment
                            <a href="{{ route('appointmentRevamp.create') }}"
                                class="btn btn-sm btn-primary float-end fw-bold">Add Appointment</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table id="myDataTable" class="table table-bordered table-striped text-center" style="width: 100%;">
                            <thead>
                                {{-- @foreach ($appointments as $appointment)
                                @endforeach --}}
                                <tr>
                                    <th>ID</th>
                                    <th>Patient Name</th>
                                    <th>Gender</th>
                                    <th>Age</th>
                                    <th>Address</th>
                                    <th>Contact Number</th>
                                    <th>Email</th>
                                    <th>Appointment Date</th>
                                    <th>Specialist Assign</th>
                                    <th>Action</th>
                                    <th>QRCODE</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appointments as $appointment)
                                    <tr>
                                        <td>{{ $appointment->id }}</td>
                                        <td><p class="fw-bold">{{ $appointment->name }}</p></td>
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
                                        <td>{{ $appointment->email }}</td>
                                        {{-- <td>{{ $appointment->appointment_date->format('F d,Y') }}</td> --}}
                                        <td>{{ $appointment->appointment_date->format('F d, Y h:i A') }}</td>
                                        <td><p class="fw-bold">{{ $appointment->doctor->name }}</p></td>

                                        <td>
                                            <ul class=" justify-content-center">
                                                <a href="{{ route('appointmentRevamp.edit', $appointment->id) }}" class="btn btn-primary">
                                                    <i class="fa-solid fa-pen-to-square"></i></a>

                                                <form action="{{ route('appointmentRevamp.destroy', $appointment->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Are you sure to delete this?')">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </form>
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="{{ route('appointment.revampappointmentqr', $appointment->id) }}" target="_blank"
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
