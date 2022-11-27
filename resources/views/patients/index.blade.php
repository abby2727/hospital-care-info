@extends('layouts.admin')

@section('title', 'View Patient')

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
                        <h4>View Patient
                            <a href="{{ route('patients.create') }}" class="btn btn-sm btn-primary float-end fw-bold">Add Patient</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table id="articleDataTable" class="table table-bordered table-striped text-center" style="width: 100%;">
                            <thead>
                                {{-- @foreach ($patients as $patient)
                                @endforeach --}}
                                <tr>
                                    <th>ID</th>
                                    <th>Specialist</th>
                                    <th>Name</th>
                                    {{-- <th>First Name</th> --}}
                                    {{-- <th>Middle Name</th> --}}
                                    {{-- <th>Last Name</th> --}}
                                    <th>Sex</th>
                                    <th>Age</th>
                                    <th>Address</th>
                                    <th>Contact Number</th>
                                    <th>Email</th>
                                    <th>Presciption</th>
                                    <th>Date Added</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($patients as $patient)
                                    <tr>
                                        <td>{{ $patient->id }}</td>
                                        <td>{{ $patient->doctor->name }}</td>
                                        <td>{{ $patient->name }}</td>
                                        {{-- <td>{{ $patient->first_name }}</td> --}}
                                        {{-- <td>{{ $patient->middle_name }}</td> --}}
                                        {{-- <td>{{ $patient->last_name }}</td> --}}
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
                                        {{-- <td>{{ $patient->created_at->format('F d,Y h:i A') }}</td> --}}
                                        <td>{{ $patient->created_at->format('F d,Y') }}</td>
                                        <td>
                                            <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-primary">
                                                <i class="fa-solid fa-pen-to-square"></i></a>
                                        </td>
                                        <td>
                                            <form action="{{ route('patients.destroy', $patient->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa-solid fa-trash"></i></button>
                                                {{-- <input type="submit" value="Delete" class="btn btn-danger"> --}}
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
