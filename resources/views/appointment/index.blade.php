@extends('layouts.admin')

@section('title', 'View Appointment')

@section('content')
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
                        <h4>View Appointment
                            <a href="#" class="btn btn-sm btn-primary float-end">Add Appointment</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <p>Test</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
