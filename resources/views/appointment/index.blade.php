@extends('layouts.admin')

@section('title', 'View Appointment')
dasdasd
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
                        <h4>View Patient
                            <a href="{{ route('appointments.create') }}" class="btn btn-sm btn-primary float-end">Add Appointment</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table id="articleDataTable" class="table table-bordered table-striped" style="width: 100%;">
                            <thead>
                                <tr style="text-align: center;">
                                    <th>Specialist Assign</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Sex</th>
                                    <th>Age</th>
                                    <th>Address</th>
                                    <th>Contact Number</th>
                                    <th>Email</th>
                                    <th>Prescription</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Abdul A. Pangandaman</td>
                                    <td>Bate</td>
                                    <td>Nasakit</td>
                                    <td>Male</td>
                                    <td>23</td>
                                    <td>Cebu, Philippines</td>
                                    <td>09213410341</td>
                                    <td>example@outlook.com</td>
                                    <td>Rest WELL</td>
                                    <td>
                                        Update
                                        Delete
                                        Print Qr
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
