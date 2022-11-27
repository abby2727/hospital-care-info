@extends('layouts.admin')

@section('title', 'Add Specialist')

@section('content')
    <div class="container-fluid px-4">
        <div class="text-center p-4">
            <h3 class="text-primary">REGISTER SPECIALIST</h3>
        </div>

        <form action="{{ route('doctors.doctorsUpdate', $doctors->id) }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-3">
                    <img src="https://www.pngitem.com/pimgs/m/111-1115791_transparent-doctor-png-advanced-practice-registered-nurse-png.png"
                        class="d-block img-fluid" alt="image" style="width: 300px; height: 200px">
                </div>
                <div class="col-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-primary"><i class="bi bi-person-plus-fill text-white"></i></span>
                        <input type="text" name="first-name" class="form-control" placeholder="First Name"
                            value="{{ $doctors->first_name }}">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="middle-name" class="form-control" placeholder="Middle Name"
                            value="{{ $doctors->middle_name }}">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="last-name" class="form-control" placeholder="Last Name"
                            value="{{ $doctors->last_name }}">
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" name="age" class="form-control" placeholder="Age"
                            value="{{ $doctors->age }}">

                    </div>
                </div>
                <div class="col-5">
                    <div class="input-group mb-3">
                        <select class="form-select" name="sex" aria-label="Default select example">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" name="number" class="form-control" placeholder="Contact Number"
                            value="{{ $doctors->contact_number }}">
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email"
                            value="{{ $doctors->email }}">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-primary"><i class="bi bi-person-plus-fill text-white"></i></span>
                        <select class="form-select" name="specialties" aria-label="Default select example">
                            <option value="{{ $doctors->specialties }}"  selected>{{ $doctors->specialties }}</option>
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
                    <button class="btn btn-primary mt-4" type="submit"><span></span>Update Record</button>
                </div>
            </div>
        </form>

    </div>
@endsection
