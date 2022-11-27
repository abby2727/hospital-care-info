@extends('layouts.admin')

@section('title', 'Update Appointment')

@section('content')
    <div class="container-fluid px-4">
        <div class="text-center p-4">
            <h3 class="text-primary">UPDATE APPOINTMENT</h3>
        </div>
        <form action="{{ route('appointments.update', $appointments->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <select class="form-select" name="patient_id" aria-label="Default select example">
                    <option value="" disabled selected>Select Patient</option>
                    @foreach ($patients as $patient)
                        <option value="{{ $patient->id }}"
                            {{ $appointments->patient_id == $patient->id ? 'selected' : '' }}>{{ $patient->name }}</option>
                    @endforeach
                </select>
                <div class="input-group mb-3">
                    <select class="form-select" name="sex" aria-label="Default select example">
                        <option value="0" {{ $appointments->sex == '0' ? 'selected' : '' }}>Male</option>
                        <option value="0" {{ $appointments->sex == '1' ? 'selected' : '' }}>Female</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <input type="number" name="age" value="{{ $appointments->age }}" class="form-control" placeholder="Age">
                </div>
                <label for="">Address:</label>
                <div class="input-group mb-3">
                    <input type="text" name="address" value="{{ $appointments->address }}" class="form-control" placeholder="Address">
                </div>
                <div class="input-group mb-3">
                    <input type="number" name="contact_number" value="{{ $appointments->contact_number }}" class="form-control" placeholder="Contact Number">
                </div>

                {{-- <input type="date" id="start" name="trip-start" value="" placeholder="Input Date of Appointment" min="2018-01-01" max="2018-12-31"> --}}

                <label for="">Appointment Date:</label>
                <div class="form-group mb-3">
                    <input type="datetime-local" name="appointment_date" value="{{ $appointments->appointment_date }}" class="form-control">
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary mt-4" type="submit"><span></span>Update Record</button>
                </div>
            </div>
        </form>
    </div>
@endsection
