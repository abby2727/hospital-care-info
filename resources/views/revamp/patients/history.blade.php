@extends('layouts.admin')
@section('title', 'View Patient')
@section('content')
    <style>
        #preview {
            width: 500px;
            height: 500px;
            margin: 0px auto;
        }
    </style>
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card-body" style="text-align: center;">
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
                    <video id="preview"></video>
                    <script type="text/javascript">
                        let scanner = new Instascan.Scanner({
                            video: document.getElementById('preview')
                        });
                        scanner.addListener('scan', function(content) {
                            alert("The QRCODE IS READED PLEASE CLICK THE HISTORY TRACK BUTTON");
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
                    </script>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card-body" style="text-align: center;">
                    <form action="{{ route('patientRevamp.track') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger">CLICK HERE AFTER THE NAME APPEAR TO FIND THE
                            HISTORY TRACK FOR THIS
                            QRCODE</a>
                            <input type="text" id="myInput" name="myInput" hidden>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
