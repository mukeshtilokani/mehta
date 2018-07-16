@extends('layouts.backend.login')

@section('content')


<!-- Header -->
<div class="py-30 text-center">
    <a class="link-effect font-w700" href="/login">
        <span class="font-size-xl text-primary-dark">Mehta</span> <span class="font-size-xl">Plywoods</span>
      {{-- <img src="{{ asset('img/logos/logo.svg') }}" alt="Logo" height="50"> --}}
    </a>
    <h1 class="h4 font-w700 mt-30 mb-10">Welcome to Your Dashboard</h1>
    <h2 class="h5 font-w400 text-muted mb-0">It’s a great day today!</h2>
</div>
<!-- END Header -->

<!-- Sign In Form -->
<!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.js) -->
<!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
<form class="js-validation-signin" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
    @csrf
    <div class="block block-themed block-rounded block-shadow">
        <div class="block-header bg-gd-dusk">
            <h3 class="block-title">Please {{ __('Login') }}</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-wrench"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <div class="form-group row">
                <div class="col-12">
                    <label for="login-username">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col-12">
                    <label for="login-password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group row mb-0">
                <div class="col-sm-6 d-sm-flex align-items-center push">
                    <div class="custom-control custom-checkbox mr-auto ml-0 mb-0">
                        <input type="checkbox" class="custom-control-input" name="remember" {{ old('remember') ? 'checked' : '' }} id="login-remember-me">
                        <label class="custom-control-label" for="login-remember-me">{{ __('Remember Me') }}</label>
                    </div>
                </div>
                <div class="col-sm-6 text-sm-right push">
                    <button type="submit" class="btn btn-alt-primary">
                        <i class="si si-login mr-10"></i> {{ __('Login') }}
                    </button>
                </div>
            </div>
        </div>
        <div class="block-content bg-body-light">
            <div class="form-group text-center">
                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="{{ route('password.request') }}">
                    <i class="fa fa-warning mr-5"></i> {{ __('Forgot Your Password?') }}
                </a>
            </div>
        </div>
    </div>
</form>
<!-- END Sign In Form -->
@endsection
