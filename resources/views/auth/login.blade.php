@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="/header.css">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-2xl rounded-xl w-full m-auto sm:w-3/4">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <img src="../img/burger.png" alt="product1" class="w-4/5 mb-6 rounded-xl sm:w-1/3 m-auto" id="product-img-3">
                        <h3 class="font-['Poppins'] font-bold text-3xl text-center text-orange-500 px-4"
                            id="product-title-1">
                            Admin Login Form
                        </h3>
                        <p class="font-['Poppins'] text-gray-600 text-lg mt-3 mx-2 text-center">Securely log in to your
                            admin <br>
                            dashboard with our easy-to-use login form.</p>
                        <br>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

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
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit"
                                        class="my-2 btn btn-primary w-full sm:w-1/2 bg-orange-500 border-orange-500 hover:bg-orange-900 hover:border-orange-900">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
