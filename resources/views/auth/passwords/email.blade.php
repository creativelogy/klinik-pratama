@extends('layouts.app')

@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100" style="padding-top: 100px; padding-bottom: 90px;">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="../../img/img-01.png" alt="IMG">
                </div>

                <form method="POST" action="{{ route('password.email') }}" class="login100-form validate-form">
                    @csrf

                    <span class="login100-form-title">
                        Reset Password
                    </span>

                    <!-- email -->
                    <div class="wrap-input100">
                        <input id="email" name="email" type="email" value="{{ old('email') }}"
                            class="form-control @error('email') is-invalid @enderror input100" autocomplete="email"
                            placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <!-- button -->
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            {{ __('Register') }}
                        </button>
                    </div>
                    <div class="text-center p-t-90">
                        @guest
                            @if (Route::has('login'))
                                <a class="txt2" href="{{ route('login') }}">
                                    <i class="fa fa-long-arrow-left m-r-5" aria-hidden="true"></i>
                                    Login
                                </a>
                            @endif
                        @endguest
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection