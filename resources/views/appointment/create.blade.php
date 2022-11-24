@extends('layouts.admin')

@section('title', 'Add Appointment')

@section('content')
    <div class="container-fluid px-4">
        <div class="row">
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <div class="text-center">
                <h3 class="text-primary">SET APPOINTMENT</h3>
            </div>
            <div class="col-3">
                <p></p>

            </div>

            <div class="col-3">
                <p></p>
                <div class="p-2">
                    <div class="p-2">
                        <img src="https://www.pngitem.com/pimgs/m/111-1115791_transparent-doctor-png-advanced-practice-registered-nurse-png.png"
                            class="d-block img-fluid" alt="image">
                        <div class="d-grid col-12 mx-auto">
                            <button class="btn btn-success" type="button"><span></span>Set This Appointment</button>
                        </div>
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
                        <span class="input-group-text bg-primary"><i class="bi bi-person-plus-fill text-white"></i></span>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select Patient</option>
                            <option value="1">Dr.Abdul A. Pangandaman</option>
                            <option value="2">Dr.Bate B. Luke</option>
                            <option value="3">Dr.Philip C. Lukas</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-primary"><i class="bi bi-person-plus-fill text-white"></i></span>
                        <input type="datetime-local" class="form-control" id="dt">
                        <script>
                            var now = new Date();
                            now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
                            document.getElementById('dt').value = now.toISOString().slice(0, 16);
                        </script>
                    </div>
                    <div class="input-group mb-3">
                        <textarea name="desc" id="desc"class="form-control" placeholder="Remarks"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <p></p>
            </div>
        </div>
    </div>
@endsection
