@extends('layouts.admin')

@section('title', 'Add Appointment')

@section('content')
<style>
    body {
        background-image: url('../assets/img/bbg.png');
        background-size: cover;
    }
</style>
<div class="container mt-5">
    <div class="text-center p-4">
        <h3 class="text-light">ADD APPOINTMENT</h3>
    </div>

    <form action="{{ route('appointments.store') }}" method="POST">
        @csrf
        <div class="col">
            <label for="exampleInputEmail1" class="fw-bold">Select Patient</label>
            <select class="form-select" name="patient_id" aria-label="Default select example">
                <option value="" disabled selected>Select Patient</option>
                @foreach ($patients as $patient)
                <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                @endforeach
            </select>
            <br>
            <label for="exampleInputEmail1" class="fw-bold">Appointment Date:</label>
            <div class="input-group mb-3">
                <input type="datetime-local" name="appointment_date" class="form-control">
            </div>
            <div class="d-grid justify-content-center align-items-center">
                <button class="btn btn-primary btn-lg mb-3 " style="width:200px;" type="submit"><span></span>Save Record</button>
            </div>
        </div>

    </form>
</div>
@endsection