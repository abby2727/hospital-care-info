@extends('layouts.admin')
@section('title', 'View Patient')
@section('content')
    <style>
        #preview {
            width: 500px;
            height: 500px;
            margin: 0px auto;
        }
    </style>
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header fw-bold btn-lg text-center">
                    <h4>Specific Patient Record</h4>
                </div>
                <div class="card-body" style="text-align: center;">
                    <table id="myDataTable" class="table table-bordered table-striped text-center"
                        style="width: 100%; background-color:#022e4b;">
                        <thead class="text-white">
                            <tr>
                                <th>Patient Name</th>
                                <th>Diagnosis</th>
                                <th>Prescription</th>
                                <th>Record Date</th>
                                <th>Reconfined Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($patients as $patient)
                                <tr>
                                    <td>
                                        <p class="fw-bold">{{ $patient->appointment_patient->name }}</p>
                                    </td>
                                    <td>{{ $patient->diagnosis }}</td>
                                    <td>{{ $patient->prescription }}</td>
                                    {{-- <td>{{ $patient->created_at }}</td> --}}
                                    <td>{{ $patient->created_at->format('F d, Y h:i A') }}</td>
                                    <td>{{ $patient->updated_at->format('F d, Y h:i A') }}</td>
                                    <td>
                                        <li class="d-flex align-content-center justify-content-center">
                                            <a href="{{ route('patientRevamp.hisup', $patient->id) }}"
                                                class="btn btn-primary">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                        </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
