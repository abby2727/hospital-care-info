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
                        <input type="text" name="first-name" class="form-control" placeholder="First Name">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="middle-name" class="form-control" placeholder="Middle Name">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="last-name" class="form-control" placeholder="Last Name">
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" name="age" class="form-control" placeholder="Age">
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
                        <input type="number" name="number" class="form-control" placeholder="Contact Number">
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-primary"><i class="bi bi-person-plus-fill text-white"></i></span>
                        <select class="form-select" name="specialties" aria-label="Default select example">
                            <option value="" disabled selected>Select Specialties</option>
                            <option value="0">Dentist</option>
                            <option value="1">Neurology</option>
                            <option value="2">Internal Medicine</option>
                            <option value="3">Surgery</option>
                            <option value="4">Pediatrics</option>
                            <option value="5">Radiology</option>
                            <option value="6">Dermatology</option>
                            <option value="7">Psychiatry</option>
                            <option value="8">Cardiology</option>
                            <option value="9">Otorhinolaryngology</option>
                            <option value="10">Physical Therapy</option>
                            <option value="11">Plastic Surgery</option>
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
