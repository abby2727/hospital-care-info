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
                            <a href="#" class="btn btn-sm btn-primary float-end">Add Specialist</a>
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
                                <tr>
                                    <td>Abdul</td>
                                    <td>Pangandaman</td>
                                    <td>23</td>
                                    <td>Male</td>
                                    <td>09213459130</td>
                                    <td>example@gmail.com</td>
                                    <td>Dental</td>
                                </tr>
                                <tr>
                                    <td>Bate</td>
                                    <td>Luke</td>
                                    <td>24</td>
                                    <td>Male</td>
                                    <td>09213459234</td>
                                    <td>example2@gmail.com</td>
                                    <td>Dermatology</td>
                                </tr>
                                <tr>
                                    <td>Philip</td>
                                    <td>Lukas</td>
                                    <td>25</td>
                                    <td>Male</td>
                                    <td>09213459123</td>
                                    <td>example3@gmail.com</td>
                                    <td>Surgeon</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
