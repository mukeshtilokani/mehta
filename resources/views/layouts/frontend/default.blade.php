<!DOCTYPE html>
<html class="html" lang="{{ app()->getLocale() }}">
    @include('includes.frontend.head')
    <body>
        <div class="wrapper">
            @yield('banner')
            {{-- Sidebar --}}
            @include('includes.frontend.sidebar')
            {{-- End of sidebar --}}
            <div id="content">
                {{-- Navigation --}}
                @include('includes.frontend.navigation')
                {{-- End of navigation --}}
                <!-- body start -->
                <main class="cd-main-content">
                    @yield('content')
                </main>
                <!-- body end -->
                @include('includes.frontend.footer')
            </div>
        </div>
        <div class="overlay"></div>
        @yield('modal')
        @yield('page-scripts')
    </body>
</html>
