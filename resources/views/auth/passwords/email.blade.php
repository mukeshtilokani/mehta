@extends('layouts.backend.login')

@section('content')
<!-- Header -->
<div class="py-30 text-center">
    <a class="link-effect font-w700" href="/login">
            <span class="font-size-xl text-primary-dark">Mehta</span> <span class="font-size-xl">Plywood</span>
            {{-- <img src="{{ asset('img/logos/logo.svg') }}" alt="Logo" height="50"> --}}
    </a>
    <h1 class="h4 font-w700 mt-30 mb-10">Don’t worry, we’ve got your back</h1>
    <h2 class="h5 font-w400 text-muted mb-0">Please enter your email</h2>
</div>
<!-- END Header -->

 @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<!-- Sign In Form -->
<!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.js) -->
<!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
<form class="js-validation-signin" method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
    @csrf
    <div class="block block-themed block-rounded block-shadow">
        <div class="block-header bg-gd-dusk">
            <h3 class="block-title">{{ __('Reset Password') }}</h3>
        </div>
        <div class="block-content">
            <div class="form-group row">
                <div class="col-12">
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>
            </div>
            <div class="form-group row mb-0">
                <div class="col-sm-12 text-sm-right push">
                    <button type="submit" class="btn btn-alt-primary w-100">
                        <i class="si si-key mr-10"></i> {{ __('Send Password Reset Link') }}
                    </button>
                </div>
            </div>
        </div>
        <div class="block-content bg-body-light">
            <div class="form-group text-center">
                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="/login">
                    <i class="fa fa-warning mr-5"></i> {{ __('Sign in') }}
                </a>
            </div>
        </div>
    </div>
</form>
<!-- END Sign In Form -->
@endsection
