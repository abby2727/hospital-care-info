@extends('layouts.admin')

@section('title', 'Update Patient History')

@section('content')
    <style>
        body {
            background-image: url('../../assets/img/bbg.png');
            background-size: cover;
        }
    </style>
    <div class="container mt-5">
        <div class="text-center p-4">
            <h3 class="text-dark">RECONFINED PATIENT</h3>
        </div>

        <div class="">
            <div class="col">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>

        <form action="{{ route('patientRevamp.reconfined', $patients->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="col">
                <label for="" class="fw-bold">Patient Name:</label>
                {{-- <div class="input-group mb-3">
                    <input type="text" name="name" value="{{ $patients->appointment_patient->name }}"
                        class="form-control">
                </div> --}}
                <select class="form-select mb-3" style="background: rgb(219, 215, 215);" name="patient_id" aria-label="Default select example">
                    {{-- <option value="" disabled selected>Select Patient</option> --}}
                    @foreach ($appointments as $appointment)
                        <option value="{{ $appointment->id }}"
                            {{ $appointment->id == $patients->appointment_patient_id ? 'selected' : '' }}>
                            {{ $appointment->name }}
                        </option>
                    @endforeach
                </select>
                <label for="" class="fw-bold">Diagnosis:</label>
                <div class="input-group mb-3">
                    <input type="text" name="diagnosis" value="{{ $patients->diagnosis }}" class="form-control" required>
                </div>
                <label for="" class="fw-bold">Prescription:</label>
                <div class="input-group mb-3">
                    <input type="text" name="prescription" value="{{ $patients->prescription }}" class="form-control"
                        required>
                </div>
                <div class="d-grid justify-content-center align-items-center">
                    <button class="btn btn-primary btn-lg mb-3 " style="width:200px;" type="submit">
                        Reconfined Patient
                </div>
            </div>
        </form>
    </div>
@endsection
