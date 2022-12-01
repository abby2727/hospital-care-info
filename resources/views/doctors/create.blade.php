@extends('layouts.admin')

@section('title', 'Add Specialist')

@section('content')

<style>
    body {
        background-image: url('../assets/img/bbg.png');
        background-size: cover;
    }
</style>
<div class="container-fluid px-4">
    <div class="text-center p-4">
        <h3 class="text-light">REGISTER SPECIALIST</h3>
        <img src="https://www.pngitem.com/pimgs/m/111-1115791_transparent-doctor-png-advanced-practice-registered-nurse-png.png" class="rounded-circle mx-auto d-block" alt="image" style="width: 200px; height: 150px">

    </div>
    <form action="{{ route('doctors.store') }}" method="POST" class="mb-4">
        @csrf
        <div class="row d-flex justify-content-center align-content-center">

            <div class="col-4">
                <label for="exampleInputEmail1" class="fw-bold">First Name</label>
                <div class="input-group mb-3">
                    <span class="input-group-text bg-primary"><i class="bi bi-person-plus-fill text-white"></i></span>
                    <input type="text" name="first-name" required class="form-control" >
                </div>
                <label for="exampleInputEmail1" class="fw-bold">Middle Name</label>
                <div class="input-group mb-3">
                    <input type="text" name="middle-name" required class="form-control" >
                </div>
                <label for="exampleInputEmail1" class="fw-bold">Last Name</label>
                <div class="input-group mb-3">
                    <input type="text" name="last-name" required class="form-control" >
                </div>
                <label for="exampleInputEmail1" class="fw-bold">Age</label>
                <div class="input-group mb-3">
                    <input type="number" name="age" required class="form-control" >
                </div>
            </div>
            <div class="col-5">
               
                {{-- <div class="input-group mb-3">
                        <input type="text" name="address" class="form-control" placeholder="Address">
                    </div> --}}
                     <label for="exampleInputEmail1" class="fw-bold">Gender</label>
                <div class="input-group mb-3">
                    <select class="form-select" name="sex" aria-label="Default select example">
                        <option value="0">Male</option>
                        <option value="1">Female</option>
                    </select>
                </div>
                <label for="exampleInputEmail1" class="fw-bold">Contact Number</label>
                <div class="input-group mb-3">
                    <input type="number" required name="number" class="form-control" >
                </div>
                <label for="exampleInputEmail1" class="fw-bold">Email Address</label>
                <div class="input-group mb-3">
                    <input type="email" required name="email" class="form-control" >
                </div>
                <label for="exampleInputEmail1" class="fw-bold">Specialist</label>
                <div class="input-group mb-3">
                    {{-- <span class="input-group-text bg-primary"><i class="bi bi-person-plus-fill text-white"></i></span> --}}
                    <select class="form-select" name="specialties" aria-label="Default select example">
                        <option value="Not Specialist Selected" disabled selected>Select Specialties</option>
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
        <div class="d-grid col-4 mx-auto">
            <button class="btn btn-primary mt-4 fw-bold btn-lg" type="submit"><span></span>Save Record</button>
        </div>
    </form>

</div>
@endsection