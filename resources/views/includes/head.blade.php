<head>
    <title>@yield('pageTitle') || Dummmy</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='description' content='A Description for your company website'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='canonical' href='{{url()->current()}}'>
    @include('includes.partials.favicon')
    @include('includes.partials.meta')

    @yield('plugins-style')

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- <script>
        var cb = function() {
        var l = document.createElement('link'); l.rel = 'stylesheet';
        l.href = '{{ asset('css/app.css') }}';
        var h = document.getElementsByTagName('head')[0]; h.parentNode.insertBefore(l, h);
        };
        var raf = requestAnimationFrame || mozRequestAnimationFrame ||
        webkitRequestAnimationFrame || msRequestAnimationFrame;
        if (raf) raf(cb);
        else window.addEventListener('load', cb);
    </script> --}}
    <!-- endinject -->
    @yield('page-style')
</head>
