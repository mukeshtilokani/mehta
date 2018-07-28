<head>
    <title>{{ config('app.name', 'Mehta Plywoods') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='description' content='A Description for your company website'>
    <link rel='canonical' href='{{url()->current()}}'>
    <meta name="author" content="Pixel Perfection">
    <meta name="robots" content="noindex, nofollow">
    @include('includes.frontend.partials.favicon')
    @include('includes.frontend.partials.meta')

    @yield('plugins-style')

    <!-- Stylesheets -->
    <link rel="stylesheet" id="css-main" href="{{ asset('backend/assets/css/business.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/js/plugins/datatables/dataTables.bootstrap4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/js/plugins/simplemde/css/simplemde.min.css') }}">


    {{-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: --}}
    <link rel="stylesheet" id="css-theme" href="">
    <!-- END Stylesheets -->
    @yield('page-style')
</head>
