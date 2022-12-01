@extends('layouts.admin')

@section('title', 'Update Appointment')

@section('content')
    <style>
        body {
            background-image: url('../../assets/img/pbg.png');
            background-size: cover;
        }
    </style>
    <div class="container-fluid px-4">
        <div class="text-center p-4">
            <h3 class="text-white">UPDATE APPOINTMENT</h3>
        </div>

        <div class="">
            <div class="row">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>

        <form action="{{ route('appointments.update', $appointments->id) }}" method="POST" class="mb-4">
            @csrf
            @method('PUT')
            <div class="row">
                <label for="" class="fw-bold">Patient Name</label>
                <div class="input-group mb-3">
                    <select class="form-select" name="patient_id" aria-label="Default select example">
                        <option value="" disabled selected>Select Patient</option>
                        @foreach ($patients as $patient)
                            <option value="{{ $patient->id }}"
                                {{ $appointments->patient_id == $patient->id ? 'selected' : '' }}>{{ $patient->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <label for="" class="fw-bold">Gender</label>
                <div class="input-group mb-3">
                    <select class="form-select" name="sex" aria-label="Default select example">
                        <option value="0" {{ $appointments->sex == '0' ? 'selected' : '' }}>Male</option>
                        <option value="0" {{ $appointments->sex == '1' ? 'selected' : '' }}>Female</option>
                    </select>
                </div>
                <label for="" class="fw-bold">Age</label>
                <div class="input-group mb-3">
                    <input type="number" name="age" value="{{ $appointments->age }}" class="form-control"
                        placeholder="Age">
                </div>
                <label for="" class="fw-bold">Address:</label>
                <div class="input-group mb-3">
                    <input type="text" name="address" value="{{ $appointments->address }}" class="form-control"
                        placeholder="Address">
                </div>
                <label for="" class="fw-bold">Contact Number</label>
                <div class="input-group mb-3">
                    <input type="number" name="contact_number" value="{{ $appointments->contact_number }}"
                        class="form-control" placeholder="Contact Number">
                </div>

                {{-- <input type="date" id="start" name="trip-start" value="" placeholder="Input Date of Appointment" min="2018-01-01" max="2018-12-31"> --}}

                <label for="" class="fw-bold">Appointment Date:</label>
                <div class="form-group mb-3">
                    <input type="datetime-local" name="appointment_date" value="{{ $appointments->appointment_date }}"
                        class="form-control">
                </div>
                <div class="d-grid col-4 mx-auto">
                    <button class="btn btn-primary mt-4 fw-bold btn-lg" type="submit"><span></span>Update Record</button>
                </div>
                {{-- <div class="d-grid">
                    <button class="btn btn-primary mt-4" type="submit"><span></span>Update Record</button>
                </div> --}}
            </div>
        </form>
    </div>
@endsection
