@extends('layouts.admin')

@section('title', 'Update Appointment')

@section('content')
    <style>
        body {
            background-image: url('../../assets/img/edit.png');
            background-size: cover;
        }
    </style>
    <div class="container-fluid px-4">
        <div class="text-center p-4">
            <h3 class="text-light">UPDATE APPOINTMENT</h3>
            <img src="../../assets/img/patient.png" class="rounded mx-auto d-block" alt="image"
                style="width: 150px; height: 150px">
        </div>
        <div class="row d-flex justify-content-center align-content-center">
            <div class="col-4">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>

        <form action="{{ route('appointmentRevamp.update', $appointments->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row d-flex justify-content-center align-content-center ">
                {{-- <div class="col-3">
                    <img src="" class="d-block img-fluid" alt="image">
                </div> --}}
                <div class="col-4">
                    <label for="" class="fw-bold">Specialist</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-primary"><i class="bi bi-person-plus-fill text-white"></i></span>
                        <select class="form-select" name="doctor_id" aria-label="Default select example">
                            <option value="" disabled selected>Select Specialist</option>
                            @foreach ($doctors as $doctor)
                                <option value="{{ $doctor->id }}"
                                    {{ $appointments->doctor_id == $doctor->id ? 'selected' : '' }}>
                                    {{ $doctor->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <label for="" class="fw-bold">First Name</label>
                    <div class="input-group mb-3">
                        <input type="text" name="first-name" value="{{ $appointments->first_name }}" class="form-control"
                            placeholder="First Name">
                    </div>
                    <label for="" class="fw-bold">Middle Name</label>
                    <div class="input-group mb-3">
                        <input type="text" name="middle-name" value="{{ $appointments->middle_name }}" class="form-control"
                            placeholder="Middle Name">
                    </div>
                    <label for="" class="fw-bold">Last Name</label>
                    <div class="input-group mb-3">
                        <input type="text" name="last-name" value="{{ $appointments->last_name }}" class="form-control"
                            placeholder="Last Name">
                    </div>
                    <label for="" class="fw-bold">Gender</label>
                    <div class="input-group mb-3">
                        <select class="form-select" name="sex">
                            <option value="0" {{ $appointments->sex == '0' ? 'selected' : '' }}>Male</option>
                            <option value="1" {{ $appointments->sex == '1' ? 'selected' : '' }}>Female</option>
                        </select>
                    </div>
                </div>
                <div class="col-5">
                    <label for="" class="fw-bold">Age</label>
                    <div class="input-group mb-3">
                        <input type="number" name="age" value="{{ $appointments->age }}" class="form-control">
                    </div>
                    <label for="" class="fw-bold">Address</label>
                    <div class="input-group mb-3">
                        <input type="text" name="address" value="{{ $appointments->address }}" class="form-control">
                    </div>
                    <label for="" class="fw-bold">Contact Number</label>
                    <div class="input-group mb-3">
                        <input type="number" name="number" value="{{ $appointments->contact_number }}" class="form-control">
                    </div>
                    <label for="" class="fw-bold">Email address</label>
                    <div class="input-group mb-3">
                        <input type="email" name="email" value="{{ $appointments->email }}" class="form-control">
                    </div>
                    <label for="" class="fw-bold">Appointment Date:</label>
                    <div class="input-group mb-3">
                        <input type="datetime-local" name="appointment_date" value="{{ $appointments->appointment_date }}" class="form-control">
                    </div>
                    {{-- <label for="" class="fw-bold">Presciption</label>
                    <div class="input-group mb-3">
                        <input type="text" name="prescription" value="{{ $appointments->prescription }}"
                            class="form-control">
                    </div> --}}
                </div>
                {{-- <div class="col-5">
                    <label for="" class="fw-bold text-center">Diagnosis</label>
                    <div class="input-group mb-2">
                        <input type="text" name="diagnosis" value="{{ $appointments->diagnosis }}" class="form-control"
                            required>
                    </div>
                </div> --}}
            </div>
            <div class="d-grid col-3 mx-auto">
                <button class="btn btn-primary mt-4 fw-bold btn-lg" type="submit"><span></span>Update Appointment</button>
            </div>
            <br>
        </form>

    </div>
@endsection
