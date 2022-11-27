@extends('layouts.admin')

@section('title', 'Add Patients')

@section('content')
    <div class="container-fluid px-4">
        <div class="text-center p-4">
            <h3 class="text-primary">REGISTER PATIENT</h3>
        </div>

        <form action="{{ route('patients.store') }}" method="POST">
            @csrf
            <div class="row">
                {{-- <div class="col-3">
                    <img src="https://source.unsplash.com/collection/190727/1000x900" class="d-block img-fluid" alt="image">
                </div> --}}
                <div class="col-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-primary"><i class="bi bi-person-plus-fill text-white"></i></span>
                        <select class="form-select" name="doctor_id" aria-label="Default select example">
                            <option value="" disabled selected>Select Specialist</option>
                            @foreach ($doctors as $doctor)
                                <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="first-name" class="form-control" placeholder="First Name"required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="middle-name" class="form-control" placeholder="Middle Name" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="last-name" class="form-control" placeholder="Last Name" required>
                    </div>
                    <div class="input-group mb-3">
                        <select class="form-select" name="sex" aria-label="Default select example">
                            <option value="0">Male</option>
                            <option value="1">Female</option>
                        </select>
                    </div>
                </div>
                <div class="col-5">
                    <div class="input-group mb-3">
                        <input type="number" name="age" class="form-control" placeholder="Age"required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="address" class="form-control" placeholder="Address"required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" name="number" class="form-control" placeholder="Contact Number"required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email"required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="prescription" class="form-control" placeholder="Presciption" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="diagnosis" class="form-control" placeholder="Diagnosis" required>
                    </div>
                </div>
                {{-- <div class="d-grid col-3 mx-auto">
                    <button class="btn btn-primary mt-4" type="submit"><span></span>Save Record</button>
                </div> --}}
                <div class="d-grid">
                    <button class="btn btn-primary mt-4" type="submit"><span></span>Save Record</button>
                </div>
            </div>
        </form>
    </div>
@endsection
