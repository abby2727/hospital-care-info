@extends('layouts.admin')

@section('title', 'View Patient')

@section('content')

    <style>
        body {
            background-image: url('../assets/img/bg.png');
            background-size: cover;
        }

        * {
            box-sizing: border-box;
        }

        #myInput {
            background-image: url('/css/searchicon.png');
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        #myTable {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
            font-size: 18px;
        }

        #myTable th,
        #myTable td {
            text-align: left;
            padding: 12px;
        }

        #myTable tr {
            border-bottom: 1px solid #ddd;
        }

        #myTable tr.header,
        #myTable tr:hover {
            background-color: #f1f1f1;
        }
    </style>


    <div class="container-fluid mt-4">
        <div class="row">
            <h2 class="text-center fw-bold">SCAN YOUR QR CODE</h2>
            <div class="col-md-12">
                <div class="card-body text-center justify-content-md-center">
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
                    <video class="border border-5 border-primary" id="preview"></video>
                    <input class="text-center fw-bold mt-2" style="border-radius: 40px;  box-shadow: 1px 2px; color:#022e4b;"
                        type="text" id="myInput" onkeyup="myFunction()"
                        placeholder="PLEASE CLICK FIRST THE SEARCH BOX THEN CLICK THE RIGTH ARROW KEY AFTER THE NAME APPEAR ON THE SEARCH BUTTON"
                        title="Type in a name">
                    {{-- <table id="myDataTable" class="table table-bordered table-striped text-center" style="width: 100%; background-color:#022e4b;"> --}}
                    <table id="myTable" class="table table-bordered table-striped text-center">
                        <thead class="text-white">
                            <tr>
                                <th>ID</th>
                                <th>Patient Name</th>
                                <th>Diagnosis</th>
                                <th>Prescription</th>
                                <th>Record Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($patients as $patient)
                                <tr>
                                    <td>{{ $patient->id }}</td>
                                    <td>
                                        <p class="fw-bold">{{ $patient->appointment_patient->name }}</p>
                                    </td>
                                    <td>{{ $patient->diagnosis }}</td>
                                    <td>{{ $patient->prescription }}</td>
                                    <td>{{ $patient->created_at->format('F d, Y h:i A') }}</td>
                                    <td>
                                        <li class="d-flex align-content-center justify-content-center">
                                            <a href="{{ route('patientRevamp.hisup', $patient->id) }}"
                                                class="btn btn-primary">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            {{-- <form action="{{ route('patientRevamp.destroy', $patient->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">
                                                    <i class="fa-solid fa-trash"></i></button>
                                            </form> --}}
                                        </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        let scanner = new Instascan.Scanner({
            video: document.getElementById('preview')
        });
        scanner.addListener('scan', function(content) {
            var msg = content;
            document.getElementById("myInput").value = msg;
        });
        Instascan.Camera.getCameras().then(function(cameras) {
            if (cameras.length > 0) {
                scanner.start(cameras[0]);
            } else {
                console.error('No cameras found.');
            }
        }).catch(function(e) {
            console.error(e);
        });

        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>

@endsection
