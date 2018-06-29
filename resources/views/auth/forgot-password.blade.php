@extends('layouts.backend.login')
@section('pageTitle', 'Forget Password')
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
    <h1 class="h4 font-w700 mt-30 mb-10">Don’t worry, we’ve got your back</h1>
    <h2 class="h5 font-w400 text-muted mb-0">Please enter your username or email</h2>
</div>
<!-- END Header -->

<!-- Reminder Form -->
<form class="js-validation-reminder" action="be_pages_auth_all.html" method="post">
    <div class="block block-themed block-rounded block-shadow">
        <div class="block-header bg-gd-primary">
            <h3 class="block-title">Password Reminder</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-wrench"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <div class="form-group row">
                <div class="col-12">
                    <label for="reminder-credential">Username or Email</label>
                    <input type="text" class="form-control" id="reminder-credential" name="reminder-credential">
                </div>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-alt-primary">
                    <i class="fa fa-asterisk mr-10"></i> Password Reminder
                </button>
            </div>
        </div>
        <div class="block-content bg-body-light">
            <div class="form-group text-center">
                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="/login">
                    <i class="fa fa-user text-muted mr-5"></i> Sign In
                </a>
            </div>
        </div>
    </div>
</form>
<!-- END Reminder Form -->

@endsection
@section('modal')
{{-- Modal --}}
{{-- End of modal --}}
@endsection
@section('plugins-scripts')
<!-- Page JS Plugins -->
<script src="{{ asset('backend/assets/js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
@endsection
@section('page-scripts')
<!-- Page JS Code -->
<script src="{{ asset('backend/assets/js/pages/op_auth_reminder.js') }}"></script>
@endsection