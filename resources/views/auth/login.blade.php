@extends('layouts.app')

@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100" style="padding-top: 100px; padding-bottom: 90px;">
                <div class="login100-pic js-tilt" style="" data-tilt>
                    <img src="../img/img-01.png" style="width:100%" alt="IMG">
                </div>

                <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                    @csrf
                    <span class="login100-form-title">
                        Login
                    </span>

                    <!-- email -->
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input id="email" name="email" type="email" value="{{ old('email') }}"
                            class="form-control @error('email') is-invalid @enderror input100" autocomplete="email"
                            placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!-- password -->
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="form-control @error('password') is-invalid @enderror input100"
                            type="password" id="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    {{-- remember --}}
                    {{-- <div class="form-group row"> --}}
                    {{-- <div class="col-md-6 offset-md-4"> --}}
                    <div class="form-check ml-5 mt-4">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    {{-- </div> --}}
                    {{-- </div> --}}

                    <!-- button -->
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            {{ __('Login') }}
                        </button>
                    </div>
                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Forgot Your
                        </span>
                        @if (Route::has('password.request'))
                            <a class="txt2" href="{{ route('password.request') }}">
                                Password
                            </a>
                        @endif
                    </div>
                    <div class="text-center p-t-90">
                        @guest
                            @if (Route::has('register'))
                                <a class="txt2" href="{{ route('register') }}">
                                    Create your Account
                                    <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                                </a>
                            @endif
                        @endguest
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
