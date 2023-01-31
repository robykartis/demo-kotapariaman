@extends('auth.master')
@section('title')
    Login
@endsection
@section('content')
    <div class="row g-0 justify-content-center bg-body-dark">
        <div class="hero-static col-sm-10 col-md-8 col-xl-6 d-flex align-items-center p-2 px-sm-0">
            <!-- Sign In Block -->
            <div class="block block-rounded block-transparent block-fx-pop w-100 mb-0 overflow-hidden bg-image"
                style="background-image: url('{{ asset('assets/media/photos/photo20@2x.jpg') }}');">
                <div class="row g-0">
                    <div class="col-md-6 order-md-1 bg-body-extra-light">
                        <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
                            <!-- Header -->
                            <div class="mb-2 text-center">
                                <a class="link-fx fw-bold fs-1" href="{{ url('/') }}">
                                    <span class="text-dark">Satu</span><span class="text-warning">Data</span>
                                </a>
                                <p class="text-uppercase fw-bold fs-sm text-muted">Login SDKP</p>
                            </div>
                            <!-- END Header -->

                            <!-- Sign In Form -->
                            <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
                            <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                            <form class="js-validation-signin" action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <input type="email"
                                        class="form-control form-control-alt  @error('email') is-invalid @enderror"
                                        id="login-username" name="email" value="{{ old('email') }}"
                                        placeholder="adminroby@gmail.com" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <input type="password"
                                        class="form-control form-control-alt  @error('password') is-invalid @enderror"
                                        id="login-password" name="password" placeholder="12341234">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <button type="submit" class="btn w-100 btn-hero btn-primary">
                                        <i class="fa fa-fw fa-sign-in-alt opacity-50 me-1"></i> Login
                                    </button>
                                </div>
                            </form>
                            <!-- END Sign In Form -->
                        </div>
                    </div>
                    <div class="col-md-6 order-md-0 bg-primary-dark-op d-flex align-items-center">
                        <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
                            <div class="d-flex">
                                <a class="flex-shrink-0 img-link me-3" href="javascript:void(0)">
                                    <img class="img-avatar img-avatar-thumb" src="{{ asset('vendor/logosiap.png') }}"
                                        alt="">
                                </a>
                                <div class="flex-grow-1">
                                    <p class="text-white fw-semibold mb-1">
                                        Satu Data adalah sebuah inisiatif pemerintah Indonesia untuk mendorong pengambilan
                                        kebijakan berdasarkan data
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Sign In Block -->
        </div>
    </div>
@endsection
