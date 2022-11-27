@extends('layouts.admin')

@section('title', 'View Specialist')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-12">
                @if (session('deleted'))
                    <h6 class="alert alert-danger">{{ session('deleted') }}</h6>
                @endif
                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>View Specialist
                            <a href="{{ route('doctors.create') }}" class="btn btn-sm btn-primary float-end">
                                Add Specialist</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table id="articleDataTable" class="table table-bordered table-striped" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    {{-- <th>First Name</th>
                                    <th>Last Name</th> --}}
                                    <th>Age</th>
                                    <th>Sex</th>
                                    <th>Contact Number</th>
                                    <th>Email</th>
                                    <th>Specialties</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($doctors as $doctor)
                                    <tr>
                                        <td>{{ $doctor->id }}</td>
                                        <td>{{ $doctor->name }}</td>
                                        {{-- <td>{{ $doctor->first_name }}</td>
                                        <td>{{ $doctor->last_name }}</td> --}}
                                        <td>{{ $doctor->age }}</td>
                                        <td>
                                            {{ $doctor->sex }}
                                        </td>
                                        <td>{{ $doctor->contact_number }}</td>
                                        <td>{{ $doctor->email }}</td>
                                        <td>{{ $doctor->specialties }}</td>
                                        <td>
                                            <ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <a href="{{ route('doctors.edit', $doctor->id) }}"
                                                        class="btn btn-primary"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <form action="{{ route('doctors.doctorsDelete', $doctor->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fa-solid fa-trash"></i></button>
                                                        {{-- <input type="submit" value="Delete" class="btn btn-danger"> --}}
                                                    </form>
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
    </div>
@endsection
