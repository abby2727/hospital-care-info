@extends('layouts.admin')

@section('title', 'View Patient Record')

@section('content')


<style>
    body {
        background-image: url('../../assets/img/pbg.png');
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
            @if (session('existed'))
            <h6 class="alert alert-danger">{{ session('existed') }}</h6>
            @endif
            <div class="card">
                <div class="card-header fw-bold btn-lg">
                    <h4>View Patient Record
                        <a href="{{ route('patientRevamp.create') }}" class="btn btn-sm btn-primary float-end fw-bold ">
                            Add Patient Record
                        </a>
                    </h4>
                </div>
                <div class="card-body">
                    <table id="myDataTable" class="table table-bordered table-striped text-center" style="width: 100%; background-color:#022e4b;">
                        <thead class="text-white">
                            <tr>    
                                {{-- <th>Appointment ID</th> --}}
                                <th>Patient Name</th>
                                <th>Diagnosis</th>
                                <th>Prescription</th>
                                <th>Record Date</th>
                                <th>Action</th>
                                <th>QRCODE</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($patients as $patient)
                            <tr>
                                {{-- <td>{{ $patient->appointment_patient_id }}</td> --}}
                                <td>
                                    <p class="fw-bold">{{ $patient->appointment_patient->name }}</p>
                                </td>
                                <td>{{ $patient->diagnosis }}</td>
                                <td>{{ $patient->prescription }}</td>
                                <td>{{ $patient->created_at->format('F d, Y h:i A') }}</td>
                                <td>
                                    <li class="d-flex align-content-center justify-content-center">
                                        <a href="{{ route('patientRevamp.edit', $patient->id) }}" class="btn btn-primary">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>

                                        <form action="{{ route('patientRevamp.destroy', $patient->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">
                                                <i class="fa-solid fa-trash"></i></button>
                                        </form>
                                    </li>
                                    </ul>
                                </td>
                                <td>
                                    {{-- <a href="{{ route('patients.patientsrevampqr', $patient->id) }}"
                                    target="_blank" class="btn btn-dark"><i class="fa-solid fa-qrcode"></i></a> --}}
                                    <a href="{{ route('patients.patientsrevampqr', $patient->id) }}" class="btn btn-dark"><i class="fa-solid fa-qrcode"></i></a>
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