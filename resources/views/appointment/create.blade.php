@extends('layouts.admin')

@section('title', 'Add Appointment')

@section('content')
<style>
    body {
        background-image: url('../assets/img/pbg.png');
        background-size: cover;
    }
</style>
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
                <label for="">Appointment Date:</label>
                <div class="form-group mb-3">
                    <input type="datetime-local" name="appointment_date" class="form-control">
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary mt-4" type="submit"><span></span>Save Record</button>
                </div>
            </div>
        </form>
    </div>
@endsection
