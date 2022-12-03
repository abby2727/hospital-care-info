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
            <h3 class="text-dark">RECONFINED PATIENT </h3>
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

        <form action="{{ route('patientRevamp.reconfined') }}" method="POST">
            @csrf
            <div class="col">
                <label for="" class="fw-bold">Patient Name:</label>
                <div class="input-group mb-3">
                    <input type="text" name="name" value="{{ $patients->appointment_patient->name }}" class="form-control" disabled>
                </div>
                <label for="" class="fw-bold">Diagnosis:</label>
                <div class="input-group mb-3">
                    <input type="text" name="diagnosis" value="{{ $patients->diagnosis }}" class="form-control" required>
                </div>
                <label for="" class="fw-bold">Prescription:</label>
                <div class="input-group mb-3">
                    <input type="text" name="prescription" value="{{ $patients->prescription }}" class="form-control" required>
                </div>
                <div class="d-grid justify-content-center align-items-center">
                    <button class="btn btn-primary btn-lg mb-3 " style="width:200px;" type="submit">
                        Reconfined Patient
                </div>
            </div>
        </form>
    </div>
@endsection
