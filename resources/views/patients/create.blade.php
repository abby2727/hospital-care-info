@extends('layouts.admin')

@section('title', 'Add Patients')

@section('content')
    <div class="container-fluid px-4">
        <div class="row">
            <p></p>
            <div class="text-center">
                <h3 class="text-primary">REGISTER PATIENT</h3>
            </div>
            <div class="col-3">
                <p></p>
                <div class="p-2">
                    <img src="https://www.pngitem.com/pimgs/m/111-1115791_transparent-doctor-png-advanced-practice-registered-nurse-png.png"
                        class="d-block img-fluid" alt="image">
                    <div class="d-grid col-12 mx-auto">
                        <button class="btn btn-success" type="button"><span></span>Save Record</button>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <p></p>
                <div class="p-2">
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-primary"><i class="bi bi-person-plus-fill text-white"></i></span>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select Specialist</option>
                            <option value="1">Abdul A. Pangandaman</option>
                            <option value="2">Bate B. Luke</option>
                            <option value="3">Philip C. Lukas</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="first-name" class="form-control" placeholder="First Name">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="middle-name" class="form-control" placeholder="Middle Name">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="last-name" class="form-control" placeholder="Last Name">
                    </div>
                    <div class="input-group mb-3">
                        {{-- <input type="text" name="sex" class="form-control" placeholder="Sex"> --}}
                        <select class="form-select" aria-label="Default select example">
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <p></p>
                <div class="p-2">
                    <div class="input-group mb-3">
                        <input type="number" name="age" class="form-control" placeholder="Age">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" name="address" class="form-control" placeholder="Address">
                    </div>

                    <div class="input-group mb-3">
                        <input type="number" name="number" class="form-control" placeholder="Contact Number">
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-primary"><i class="bi bi-person-plus-fill text-white"></i></span>
                        <input type="text" name="presciption" class="form-control" placeholder="Presciption">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
