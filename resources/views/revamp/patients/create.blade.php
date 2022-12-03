@extends('layouts.admin')

@section('title', 'Add Patient Record')

@section('content')
    <style>
        body {
            background-image: url('../assets/img/bbg.png');
            background-size: cover;
        }
    </style>
    <div class="container mt-5">
        <div class="text-center p-4">
            <h3 class="text-dark">ADD PATIENT RECORD</h3>
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

        <form action="{{ route('patientRevamp.store') }}" method="POST">
            @csrf
            <div class="col">
                <label for="" class="fw-bold">Select Patient</label>
                <select class="form-select" name="patient_id" aria-label="Default select example">
                    <option value="" disabled selected>Select Patient</option>
                    {{-- save it base on appointment ID --}}
                    @foreach ($appointments as $appointment)
                        <option value="{{ $appointment->id }}">{{ $appointment->name }}</option>
                    @endforeach
                </select>
                <br>
                {{-- <label for="" class="fw-bold">Appointment Date:</label>
                <div class="input-group mb-3">
                    <input type="datetime-local" name="appointment_date" class="form-control">
                </div> --}}
                <label for="" class="fw-bold">Diagnosis:</label>
                <div class="input-group mb-3">
                    <input type="text" name="diagnosis" class="form-control">
                </div>
                <label for="" class="fw-bold">Prescription:</label>
                <div class="input-group mb-3">
                    <input type="text" name="prescription" class="form-control">
                </div>
                <div class="d-grid justify-content-center align-items-center">
                    <button class="btn btn-primary btn-lg mb-3 " style="width:200px;" type="submit">
                        Save Record
                    </button>
                </div>
            </div>

        </form>
    </div>
@endsection
