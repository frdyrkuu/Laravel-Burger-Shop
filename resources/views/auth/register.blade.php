@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="/header.css">
    @vite('resources/css/app.css')
    <div class="container w-1/2 my-10">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-xl rounded-2xl">

                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <img src="../img/burger.png" alt="product1" class="w-4/5 mb-6 rounded-xl sm:w-1/3 m-auto"
                            id="product-img-3">
                        <h3 class="font-['Poppins'] font-bold text-3xl text-center text-orange-500 px-4"
                            id="product-title-1">
                            Admin Sign Up Form
                        </h3>
                        <p class="font-['Poppins'] text-gray-600 text-lg mt-3 mx-2 text-center">Create your Administrator
                            <br>
                            Account to have a permission to edit product details.</p>
                        <br>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

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
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="w-full m-auto">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit"
                                        class="btn btn-primary my-2 w-full sm:w-1/2 bg-orange-500 border-orange-500 hover:bg-orange-900 hover:border-orange-900">
                                        {{ __('Register') }}
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
