@extends('layouts.backend.login')
@section('pageTitle', 'Login')
@section('plugins-style')
@endsection
@section('page-style')
@endsection
@section('content')

<!-- Header -->
<div class="py-30 text-center">
    <a class="link-effect font-w700" href="/">
        {{-- <span class="font-size-xl text-primary-dark">Mehta</span> <span class="font-size-xl">Plywood</span> --}}
        <img src="{{ asset('img/logos/logo.svg') }}" alt="Logo" height="50">
    </a>
    <h1 class="h4 font-w700 mt-30 mb-10">Welcome to Your Dashboard</h1>
    <h2 class="h5 font-w400 text-muted mb-0">It’s a great day today!</h2>
</div>
<!-- END Header -->

<!-- Sign In Form -->
<form class="js-validation-signin" action="be_pages_auth_all.html" method="post">
    <div class="block block-themed block-rounded block-shadow">
        <div class="block-header bg-gd-dusk">
            <h3 class="block-title">Please Sign In</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-wrench"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <div class="form-group row">
                <div class="col-12">
                    <label for="login-username">Username</label>
                    <input type="text" class="form-control" id="login-username" name="login-username">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-12">
                    <label for="login-password">Password</label>
                    <input type="password" class="form-control" id="login-password" name="login-password">
                </div>
            </div>
            <div class="form-group row mb-0">
                <div class="col-sm-6 d-sm-flex align-items-center push">
                    <div class="custom-control custom-checkbox mr-auto ml-0 mb-0">
                        <input type="checkbox" class="custom-control-input" id="login-remember-me" name="login-remember-me">
                        <label class="custom-control-label" for="login-remember-me">Remember Me</label>
                    </div>
                </div>
                <div class="col-sm-6 text-sm-right push">
                    <button type="submit" class="btn btn-alt-primary">
                        <i class="si si-login mr-10"></i> Sign In
                    </button>
                </div>
            </div>
        </div>
        <div class="block-content bg-body-light">
            <div class="form-group text-center">
                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="/forgot-password">
                    <i class="fa fa-warning mr-5"></i> Forgot Password
                </a>
            </div>
        </div>
    </div>
</form>
<!-- END Sign In Form -->

@endsection
@section('modal')
{{-- Modal --}}
{{-- End of modal --}}
@endsection
@section('plugins-scripts')
<!-- Page JS Plugins -->
<script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
@endsection
@section('page-scripts')
<!-- Page JS Code -->
<script src="assets/js/pages/op_auth_signin.js"></script>
@endsection