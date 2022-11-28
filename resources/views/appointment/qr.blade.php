<?php
declare(strict_types=1);
use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;
require_once './../vendor/autoload.php';
$options = new QROptions([
    'eccLevel' => QRCode::ECC_L,
    'outputType' => QRCode::OUTPUT_MARKUP_SVG,
    'version' => 7,
]);
?>
@extends('layouts.admin')
@section('title', 'View Patient')
@section('content')
<style>
    body {
        background-image: url('../assets/img/admin_bg2.png');
        background-size: cover;
    }
</style>
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
                @if (session('status_delete'))
                    <h6 class="alert alert-danger">{{ session('status_delete') }}</h6>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>QR CODE
                            <a href="{{ route('patients.index') }}" class="btn btn-sm btn-primary float-end">Return Selecting
                                Patients</a>
                        </h4>
                    </div>
                    <br>
                    <h4 style="text-align: center">CLICK THE QRCODE IMAGE BELOW TO DOWNLOAD</h4>
                    <div class="card-body" style="text-align: center;">
                        @php
                            if ($appointment->sex == 0) {
                                $sexContext = 'Male';
                            } else {
                                $sexContext = 'Female';
                            }
                            $name = $appointment->patient->name;
                            $date = $appointment->appointment_date->format('F d,Y h:i A');
                            $context = "HCI SYSTEM APPOINTMENT , Patient Name : $name, $appointment->age $sexContext $appointment->contact_number , Your appointment is shedule : $date";
                            $qrcode = (new QRCode($options))->render($context);
                        @endphp
                        <a href="<?= $qrcode ?>" download>
                            <img src='<?= $qrcode ?>' alt='QR Code' width='500' height='500'>
                        </a>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
