@extends('layouts.admin')

@section('title', 'Add Specialist')

@section('content')
    <div class="container-fluid px-4">
        <div class="text-center p-4">
            <h3 class="text-primary">REGISTER SPECIALIST</h3>
        </div>
        <form action="{{ route('doctors.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-3">
                    <img src="https://www.pngitem.com/pimgs/m/111-1115791_transparent-doctor-png-advanced-practice-registered-nurse-png.png"
                        class="d-block img-fluid" alt="image" style="width: 300px; height: 200px">
                </div>
                <div class="col-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-primary"><i class="bi bi-person-plus-fill text-white"></i></span>
                        <input type="text" name="first-name" required class="form-control" placeholder="First Name">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="middle-name" required class="form-control" placeholder="Middle Name">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="last-name" required  class="form-control" placeholder="Last Name">
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" name="age" required class="form-control" placeholder="Age">
                    </div>
                </div>
                <div class="col-5">
                    {{-- <div class="input-group mb-3">
                        <input type="text" name="address" class="form-control" placeholder="Address">
                    </div> --}}
                    <div class="input-group mb-3">
                        <select class="form-select" name="sex" aria-label="Default select example">
                            <option value="0">Male</option>
                            <option value="1">Female</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" required name="number" class="form-control" placeholder="Contact Number">
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" required name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-primary"><i class="bi bi-person-plus-fill text-white"></i></span>
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
                <div class="d-grid col-3 mx-auto">
                    <button class="btn btn-primary mt-4" type="submit"><span></span>Save Record</button>
                </div>
            </div>
        </form>

    </div>
@endsection
