@extends('layouts.app')

<script src="https://kit.fontawesome.com/46cf979321.js" crossorigin="anonymous"></script>

<style>
    body {
        background-image: url('../assets/img/login2.png');
        background-size: cover;
    }

    .card-body {
        background-color: rgba(0, 0, 0, 0, 1);
    }
</style>
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="ds col-md-5">
            <div class="card opacity-60" style="border-radius: 40px; background: rgb(6,68,108);
background: linear-gradient(180deg, rgba(6,68,108,0.3337710084033614) 3%, rgba(6,68,108,0.8603816526610644) 77%);">
                <div class="card-header text-center fw-bold">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end fw-bold">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end fw-bold">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-5 offset-md-4">
                                <button type="submit" class="btn btn-primary fw-bold text-center btn-lg">
                                    {{ __('Login') }}
                                </button>

                                {{-- @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                                </a>
                                @endif --}}
                            </div>
                        </div>


                    </form>
                </div>

            </div>
        </div>


        <section class="page-section items-center "  id="about">

            <br>
            <br>
            <br>
         
            <br>
            <div class="row-md-2 text-center align-content- text-light">
                <ul class="list-unstyled mb-0 text-center align-content-center fw-bold">
                    <li><i class="fas fa-map-marker-alt fa-2x text-center align-content-center text-light "></i>
                        <p>SNSU, Surigao Del Norte, Caraga, Philippines, 8408</p>
                    </li>

                    <li><i class="fas fa-phone mt-4 fa-2x text-center align-content-center text-light fw-bold "></i>
                        <p>+ 01 234 567 89</p>
                    </li>

                    <li><i class="fas fa-envelope mt-4 fa-2x text-center align-content-center text-light fw-bold "></i>
                        <p>healthcare@gmail.com</p>
                    </li>
                </ul>
            </div>
        </section>

        <section class="page-section items-center mt-5" id="about">
            <div class="d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="about-item text-center mt-6 mb-1 items-center">


                    </div>
                </div>
            </div>
        </section>
    </div>



</div>


@endsection