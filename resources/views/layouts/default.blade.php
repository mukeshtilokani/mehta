<!DOCTYPE html>
<html class="html" lang="{{ app()->getLocale() }}">
    @include('includes.head')
    <body>
        <div class="wrapper">
            @yield('banner')
            {{-- Sidebar --}}
            @include('includes.sidebar')
            {{-- End of sidebar --}}
            <div id="content">
                {{-- Navigation --}}
                @include('includes.navigation')
                {{-- End of navigation --}}
                <!-- body start -->
                <main class="cd-main-content">
                    @yield('content')
                </main>
                <!-- body end -->
                @include('includes.footer')
            </div>
        </div>
        <div class="overlay"></div>
        @yield('modal')
        @yield('page-scripts')
    </body>
</html>
