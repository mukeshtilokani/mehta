<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    @include('includes.backend.head')
    <body>
        <div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxed">

            {{-- Sidebar right --}}
            @include('includes.backend.sidebar-right')
            {{-- End of Sidebar right --}}

            {{-- Sidebar left --}}
            @include('includes.backend.sidebar-left')
            {{-- End of Sidebar left --}}

            {{-- Navigation --}}
                @include('includes.backend.navigation')
            {{-- End of navigation --}}
            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="content">
                    {{-- Breadcrimb --}}
                       {{-- @include('includes.backend.breadcrumb') --}}
                            @yield('breadcrumbs')
                    {{-- End of Breadcrumb --}}

                    {{-- Content --}}
                        @yield('content')
                    {{-- End of content --}}
                    
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

            <!-- Footer -->
                @include('includes.backend.footer')
            <!-- END Footer -->
        </div>
        @yield('modal')
        <!-- Backend Core JS -->
        @include('includes.backend.partials.common-scripts')
        @include('includes.backend.partials.delete_modal')
        @yield('plugins-scripts')
        @yield('page-scripts')
    </body>
</html>
