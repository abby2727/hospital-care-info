@extends('layouts.admin')
@section('title', 'View Patient')
@section('content')
<style>
    #preview {
        width: 500px;
        height: 500px;
        margin: 0px auto;
    }



    body {
        background-image: url('../assets/img/bg.png');
        background-size: cover;
    }
</style>
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card-body" style="text-align: center;">
                <h4>SCAN YOUR QR CODE</h4>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
                <video id="preview"></video>
                <script type="text/javascript">
                    let scanner = new Instascan.Scanner({
                        video: document.getElementById('preview')
                    });
                    scanner.addListener('scan', function(content) {
                        alert("YOUR QRCODE IS READED !");
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
            <p class="text-center">After Scanning QR Code and the alert button appear. Click the button below to find the history track of the Patient.</p>
            <div class="card-body" style="text-align: center;">
                @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
                <form action="{{ route('patientRevamp.track') }}" method="POST">
                    @csrf
                    {{-- <input type="text" id="myInput" name="myInput"> --}}
                    <button type="submit" class="btn btn-sm btn-danger">
                        {{-- CLICK HERE THE ALERT BUTTON APPEAR TO FIND THE HISTORY TRACK FOR THIS QRCODE --}}
                        Find Patient History
                        <input type="text" id="myInput" name="myInput" hidden>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection