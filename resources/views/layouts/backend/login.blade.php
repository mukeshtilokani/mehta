<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-focus"> <!--<![endif]-->
    @include('includes.backend.head')
    <body>
        

        <!-- Page Container -->
        <div id="page-container" class="main-content-boxed">

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="bg-body-dark bg-pattern" style="background-image: url({{ asset('/backend/assets/media/various/bg-pattern-inverse.png') }});">
                    <div class="row mx-0 justify-content-center">
                        <div class="hero-static col-lg-6 col-xl-4">
                            <div class="content content-full overflow-hidden">
                                {{-- Content --}}
                                    @yield('content')
                                {{-- End of content --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->


        <!-- Backend Core JS -->
        @include('includes.backend.partials.common-scripts')
        @yield('plugins-scripts')
        @yield('page-scripts')
    </body>
</html>
