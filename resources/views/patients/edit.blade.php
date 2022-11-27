@extends('layouts.admin')

@section('title', 'Update Patients')

@section('content')

<div class="container-fluid px-4">
    <div class="text-center p-4">
        <h3 class="text-primary">UPDATE PATIENT</h3>
    </div>

    <form action="{{ route('patients.update', $patients->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row d-flex justify-content-center align-content-center ">
            {{-- <div class="col-3">
                    <img src="https://source.unsplash.com/collection/190727/1000x900" class="d-block img-fluid" alt="image">
                </div> --}}
            <div class="col-4">
                <div class="input-group mb-3">
                    <span class="input-group-text bg-primary"><i class="bi bi-person-plus-fill text-white"></i></span>
                    <select class="form-select" name="doctor_id" aria-label="Default select example">
                        <option value="" disabled selected>Select Specialist</option>
                        @foreach ($doctors as $doctor)
                        <option value="{{ $doctor->id }}" {{ $patients->doctor_id == $doctor->id ? 'selected' : '' }}>
                            {{ $doctor->first_name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="first-name" value="{{ $patients->first_name }}" class="form-control" placeholder="First Name">
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="middle-name" value="{{ $patients->middle_name }}" class="form-control" placeholder="Middle Name">
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="last-name" value="{{ $patients->last_name }}" class="form-control" placeholder="Last Name">
                </div>
                <div class="input-group mb-3">
                    <select class="form-select" name="sex">
                        <option value="0" {{ $patients->sex == '0' ? 'selected' : '' }}>Male</option>
                        <option value="1" {{ $patients->sex == '1' ? 'selected' : '' }}>Female</option>
                    </select>
                </div>
            </div>
            <div class="col-5">
                <div class="input-group mb-3">
                    <input type="number" name="age" value="{{ $patients->age }}" class="form-control" placeholder="Age">
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="address" value="{{ $patients->address }}" class="form-control" placeholder="Address">
                </div>
                <div class="input-group mb-3">
                    <input type="number" name="number" value="{{ $patients->contact_number }}" class="form-control" placeholder="Contact Number">
                </div>
                <div class="input-group mb-3">
                    <input type="email" name="email" value="{{ $patients->email }}" class="form-control" placeholder="Email">
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="prescription" value="{{ $patients->prescription }}" class="form-control" placeholder="Presciption">
                </div>
            </div>
            {{-- <div class="d-grid col-3 mx-auto">
                    <button class="btn btn-primary mt-4" type="submit"><span></span>Update Record</button>
                </div> --}}

        </div>
        <div class="d-grid col-3 mx-auto">
            <button class="btn btn-primary mt-4 fw-bold" type="submit"><span></span>Update Record</button>
        </div>
    </form>
</div>
@endsection