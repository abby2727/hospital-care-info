@extends('layouts.admin')

@section('title', 'View Patient')

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
                            <a href="#" class="btn btn-sm btn-primary float-end">Add Patient</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table id="articleDataTable" class="table table-bordered table-striped" style="width: 100%;">
                            <thead>
                                {{-- @foreach ($patients as $patient)
                                @endforeach --}}
                                <tr>
                                    <th>ID</th>
                                    <th>Doctor Name</th>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Last Name</th>
                                    <th>Sex</th>
                                    <th>Age</th>
                                    <th>Address</th>
                                    <th>Contact Number</th>
                                    <th>Email</th>
                                    <th>Presciption</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($patients as $patient)
                                    <tr>
                                        <td>{{ $patient->id }}</td>
                                        <td>{{ $patient->doctor->first_name }}</td>
                                        <td>{{ $patient->first_name }}</td>
                                        <td>{{ $patient->middle_name }}</td>
                                        <td>{{ $patient->last_name }}</td>
                                        <td>
                                            @if ($patient->sex == '0')
                                                <p>Male</p>
                                            @elseif($patient->sex == '1')
                                                <p>Female</p>
                                            @endif
                                        </td>
                                        <td>{{ $patient->age }}</td>
                                        <td>{{ $patient->address }}</td>
                                        <td>{{ $patient->contact_number }}</td>
                                        <td>{{ $patient->email }}</td>
                                        <td>{{ $patient->prescription }}</td>
                                        <td>
                                            <a href="{{ route('patients.edit', $patient->id) }}"
                                                class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('patients.destroy', $patient->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="Delete" class="btn btn-danger">
                                            </form>
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
