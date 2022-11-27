@extends('layouts.admin')

@section('title', 'Add Appointment')

@section('content')
    <div class="container-fluid px-4">
        <div class="text-center p-4">
            <h3 class="text-primary">ADD APPOINTMENT</h3>
        </div>

        <form action="{{ route('appointments.store') }}" method="POST">
            @csrf
            <div class="row">
                <select class="form-select" name="patient_id" aria-label="Default select example">
                    <option value="" disabled selected>Select Patient</option>
                    @foreach ($patients as $patient)
                        <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                    @endforeach
                </select>

                <div class="input-group mb-3">
                    <select class="form-select" name="sex" aria-label="Default select example">
                        <option value="0">Male</option>
                        <option value="1">Female</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <input type="number" name="age" class="form-control" placeholder="Age">
                </div>
                <label for="">Address:</label>
                <div class="input-group mb-3">
                    <input type="text" name="address" class="form-control" placeholder="Address">
                </div>
                <div class="input-group mb-3">
                    <input type="number" name="contact_number" class="form-control" placeholder="Contact Number">
                </div>

                {{-- <input type="date" id="start" name="trip-start" value="" placeholder="Input Date of Appointment" min="2018-01-01" max="2018-12-31"> --}}

                <label for="">Appointment Date:</label>
                <div class="form-group mb-3">
                    <input type="datetime-local" name="appointment_date" class="form-control">
                </div>
                {{-- <div class="form-group mb-3">
                    <input type="date" name="appointment_date" class="form-control">
                </div> --}}
                <div class="d-grid">
                    <button class="btn btn-primary mt-4" type="submit"><span></span>Save Record</button>
                </div>
            </div>
        </form>
    </div>
@endsection
