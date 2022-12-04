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
                <div class="card-body" style="text-align: center;">
                    <table id="myDataTable" class="table table-bordered table-striped text-center"
                        style="width: 100%; background-color:#022e4b;">
                        <thead class="text-white">
                            <tr>
                                <th>Diagnosis</th>
                                <th>Prescription</th>
                                <th>Date Recorded</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($patients as $patient)
                                <tr>
                                    <td>{{ $patient->diagnosis }}</td>
                                    <td>{{ $patient->prescription }}</td>
                                    <td>{{ $patient->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
