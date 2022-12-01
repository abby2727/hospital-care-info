@extends('layouts.admin')

@section('title', 'Add Specialist')

@section('content')
<style>
    body {
        background-image: url('../../assets/img/edit.png');
        background-size: cover;
    }
</style>
<div class="container-fluid px-4">
    <div class="text-center p-4">
        <h3 class="text-light">UPDATE SPECIALIST</h3>
        <img src="https://www.pngitem.com/pimgs/m/111-1115791_transparent-doctor-png-advanced-practice-registered-nurse-png.png" class="rounded-circle mx-auto d-block" alt="image" style="width: 200px; height: 150px">

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
    <form action="{{ route('doctors.doctorsUpdate', $doctors->id) }}" method="POST" class="mb-4">
        @csrf
        <div class="row d-flex justify-content-center align-content-center">

            <div class="col-4">
                <label for="" class="fw-bold">First Name</label>
                <div class="input-group mb-3">
                    <span class="input-group-text bg-primary"><i class="bi bi-person-plus-fill text-white"></i></span>
                    
                    <input type="text" name="first-name" class="form-control"  value="{{ $doctors->first_name }}">
                </div>
                <label for="" class="fw-bold">Middle Name</label>
                <div class="input-group mb-3">
                    <input type="text" name="middle-name" class="form-control"  value="{{ $doctors->middle_name }}">
                </div>
                <label for="" class="fw-bold">Last Name</label>
                <div class="input-group mb-3">
                    <input type="text" name="last-name" class="form-control"  value="{{ $doctors->last_name }}">
                </div>
                <label for="" class="fw-bold">Age</label>
                <div class="input-group mb-3">
                    <input type="number" name="age" class="form-control"  value="{{ $doctors->age }}">

                </div>
            </div>
            <div class="col-5">
            <label for="" class="fw-bold">Gender</label>
                <div class="input-group mb-3">
                    <select class="form-select" name="sex" aria-label="Default select example">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <label for="" class="fw-bold">Contact Number</label>
                <div class="input-group mb-3">
                    <input type="number" name="number" class="form-control"  value="{{ $doctors->contact_number }}">
                </div>
                <label for="" class="fw-bold">Email </label>
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control"  value="{{ $doctors->email }}">
                </div>
                <label for="" class="fw-bold">Specialties</label>
                <div class="input-group mb-3">
                    <!-- <span class="input-group-text bg-primary"><i class="bi bi-person-plus-fill text-white"></i></span> -->
                    <select class="form-select" name="specialties" aria-label="Default select example">
                        <option value="{{ $doctors->specialties }}" selected>{{ $doctors->specialties }}</option>
                        <option value="Dentist">Dentist</option>
                        <option value="Neurology">Neurology</option>
                        <option value="Internal Medicine">Internal Medicine</option>
                        <option value="Surgery">Surgery</option>
                        <option value="Pediatrics">Pediatrics</option>
                        <option value="Radiology">Radiology</option>
                        <option value="Dermatology">Dermatology</option>
                        <option value="Psychiatry">Psychiatry</option>
                        <option value="Cardiology">Cardiology</option>
                        <option value="Otorhinolaryngology">Otorhinolaryngology</option>
                        <option value="Physical Therapy">Physical Therapy</option>
                        <option value="Plastic Surgery">Plastic Surgery</option>
                    </select>
                </div>
            </div>

        </div>
        <div class="d-grid col-3 mx-auto">
            <button class="btn btn-primary mt-4 fw-bold btn-lg" type="submit"><span></span>Update Record</button>
        </div>
    </form>

</div>
@endsection