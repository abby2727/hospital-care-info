@extends('layouts.admin')

@section('title', 'Add Appointment')

@section('content')
<style>
    body {
        background-image: url('../assets/img/bg.png');
        background-size: cover;
    }
</style>
<div class="container-fluid px-4">
    <div class="text-center p-4">
        <h3 class="text-primary fw-bold">ADD APPOINTMENT</h3>
    </div>

    <form action="" method="POST">
        @csrf
        <div class="row d-flex justify-content-center align-content-center">
            {{-- <div class="col-3">
                    <img src="../assets/img/bg.png" class="d-block img-fluid" alt="image">
                </div> --}}
            <div class="col-4">
                <label for="exampleInputEmail1" class="fw-bold">Contact Number</label>
                <div class="input-group mb-3">
                    <span class="input-group-text bg-primary"><i class="bi bi-person-plus-fill text-white"></i></span>
                    <select class="form-select" name="doctor_id" aria-label="Default select example">
                        <option value="" disabled selected>Select Specialist</option>
                        <option value="">TEST</option>
                        {{-- @foreach ($doctors as $doctor)
                                <option value="{{ $doctor->id }}">{{ $doctor->first_name }}</option>
                        @endforeach --}}
                    </select>
                </div>
                <label for="exampleInputEmail1" class="fw-bold">Contact Number</label>
                <div class="input-group mb-3">
                    <input type="text" name="first-name" class="form-control" placeholder="First Name">
                </div>
                <label for="exampleInputEmail1" class="fw-bold">Contact Number</label>
                <div class="input-group mb-3">
                    <input type="text" name="middle-name" class="form-control" placeholder="Middle Name">
                </div>
                <label for="exampleInputEmail1" class="fw-bold">Contact Number</label>
                <div class="input-group mb-3">
                    <input type="text" name="last-name" class="form-control" placeholder="Last Name">
                </div>
                <label for="exampleInputEmail1" class="fw-bold">Contact Number</label>
                <div class="input-group mb-3">
                    <select class="form-select" name="sex" aria-label="Default select example">
                        <option value="0">Male</option>
                        <option value="1">Female</option>
                    </select>
                </div>
            </div>

            <div class="col-5">
                <label for="exampleInputEmail1" class="fw-bold">Contact Number</label>
                <div class="input-group mb-3">
                    <input type="number" name="age" class="form-control" placeholder="Age">
                </div>
                <label for="exampleInputEmail1" class="fw-bold">Contact Number</label>
                <div class="input-group mb-3">
                    <input type="text" name="address" class="form-control" placeholder="Address">
                </div>
                <label for="exampleInputEmail1" class="fw-bold">Contact Number</label>
                <div class="input-group mb-3">
                    <input type="number" name="number" class="form-control" placeholder="Contact Number">
                </div>
                <label for="exampleInputEmail1" class="fw-bold">Contact Number</label>
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                <label for="exampleInputEmail1" class="fw-bold">Contact Number</label>
                <div class="input-group mb-3">
                    <input type="text" name="prescription" class="form-control" placeholder="Presciption">
                </div>
            </div>
            {{-- <div class="d-grid col-3 mx-auto">
                    <button class="btn btn-primary mt-4" type="submit"><span></span>Save Record</button>
                </div> --}}

        </div>
        <div class="d-grid col-4 mx-auto">
            <button class="btn btn-primary mt-4 fw-bold" type="submit"><span></span>Save Record</button>
        </div>

    </form>
</div>
@endsection