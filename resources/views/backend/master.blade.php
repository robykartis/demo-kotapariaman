<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>SDKP | @yield('title')</title>

    <meta name="description"
        content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Dashmix">
    <meta property="og:description"
        content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('vendor/logosiap.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('vendor/logosiap.png') }}">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('assets/media/favicons/apple-touch-icon-180x180.png') }}">
    <!-- END Icons -->


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/dashmix.min.css') }}">


    {{-- css:external --}}
    @stack('css-external')
    {{-- css:internal --}}
    @stack('css-internal')
</head>

<body>

    <div id="page-container"
        class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
        <!-- Side Overlay-->
        <aside id="side-overlay">
            <!-- Side Header -->
            <div class="bg-image"
                style="background-image: url('{{ asset('assets/media/various/bg_side_overlay_header.jpg') }}');">
                <div class="bg-primary-op">
                    <div class="content-header">
                        <!-- User Avatar -->
                        <a class="img-link me-1" href="be_pages_generic_profile.html">
                            <img class="img-avatar img-avatar48" src="{{ asset('assets/media/avatars/avatar10.jpg') }}"
                                alt="">
                        </a>
                        <!-- END User Avatar -->

                        <!-- User Info -->
                        <div class="ms-2">
                            <a class="text-white fw-semibold"
                                href="be_pages_generic_profile.html">{{ Auth::user()->name }}</a>
                            <div class="text-white-75 fs-sm">Admin</div>
                        </div>
                        <!-- END User Info -->

                        <!-- Close Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="ms-auto text-white" href="javascript:void(0)" data-toggle="layout"
                            data-action="side_overlay_close">
                            <i class="fa fa-times-circle"></i>
                        </a>
                        <!-- END Close Side Overlay -->
                    </div>
                </div>
            </div>
            <!-- END Side Header -->

            <!-- Side Content -->
            <div class="content-side">
                <!-- Side Overlay Tabs -->
                <div class="block block-transparent pull-x pull-t mb-0">
                    <ul class="nav nav-tabs nav-tabs-block nav-justified" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="so-settings-tab" data-bs-toggle="tab"
                                data-bs-target="#so-settings" role="tab" aria-controls="so-settings"
                                aria-selected="true">
                                <i class="fa fa-fw fa-cog"></i>
                            </button>
                        </li>

                    </ul>
                    <div class="block-content tab-content overflow-hidden">
                        <!-- Settings Tab -->
                        <div class="tab-pane pull-x fade fade-up show active" id="so-settings" role="tabpanel"
                            aria-labelledby="so-settings-tab">
                            <div class="block mb-0">
                                <!-- Color Themes -->
                                <!-- Toggle Themes functionality initialized in Template._uiHandleTheme() -->
                                <div class="block-content block-content-sm block-content-full bg-body">
                                    <span class="text-uppercase fs-sm fw-bold">Color Themes</span>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="row g-sm text-center">
                                        <div class="col-4 mb-1">
                                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-default"
                                                data-toggle="theme" data-theme="default" href="#">
                                                Default
                                            </a>
                                        </div>
                                        <div class="col-4 mb-1">
                                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-xwork"
                                                data-toggle="theme" data-theme="assets/css/themes/xwork.min.css"
                                                href="#">
                                                xWork
                                            </a>
                                        </div>
                                        <div class="col-4 mb-1">
                                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-xmodern"
                                                data-toggle="theme" data-theme="assets/css/themes/xmodern.min.css"
                                                href="#">
                                                xModern
                                            </a>
                                        </div>
                                        <div class="col-4 mb-1">
                                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-xeco"
                                                data-toggle="theme" data-theme="assets/css/themes/xeco.min.css"
                                                href="#">
                                                xEco
                                            </a>
                                        </div>
                                        <div class="col-4 mb-1">
                                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-xsmooth"
                                                data-toggle="theme" data-theme="assets/css/themes/xsmooth.min.css"
                                                href="#">
                                                xSmooth
                                            </a>
                                        </div>
                                        <div class="col-4 mb-1">
                                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-xinspire"
                                                data-toggle="theme" data-theme="assets/css/themes/xinspire.min.css"
                                                href="#">
                                                xInspire
                                            </a>
                                        </div>
                                        <div class="col-4 mb-1">
                                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-xdream"
                                                data-toggle="theme" data-theme="assets/css/themes/xdream.min.css"
                                                href="#">
                                                xDream
                                            </a>
                                        </div>
                                        <div class="col-4 mb-1">
                                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-xpro"
                                                data-toggle="theme" data-theme="assets/css/themes/xpro.min.css"
                                                href="#">
                                                xPro
                                            </a>
                                        </div>
                                        <div class="col-4 mb-1">
                                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-xplay"
                                                data-toggle="theme" data-theme="assets/css/themes/xplay.min.css"
                                                href="#">
                                                xPlay
                                            </a>
                                        </div>
                                        <div class="col-12">
                                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark"
                                                href="be_ui_color_themes.html">All Color Themes</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Color Themes -->

                                <!-- Sidebar -->
                                <div class="block-content block-content-sm block-content-full bg-body">
                                    <span class="text-uppercase fs-sm fw-bold">Sidebar</span>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="row g-sm text-center">
                                        <div class="col-6 mb-1">
                                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark"
                                                data-toggle="layout" data-action="sidebar_style_dark"
                                                href="javascript:void(0)">Dark</a>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark"
                                                data-toggle="layout" data-action="sidebar_style_light"
                                                href="javascript:void(0)">Light</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Sidebar -->

                                <!-- Header -->
                                <div class="block-content block-content-sm block-content-full bg-body">
                                    <span class="text-uppercase fs-sm fw-bold">Header</span>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="row g-sm text-center mb-2">
                                        <div class="col-6 mb-1">
                                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark"
                                                data-toggle="layout" data-action="header_style_dark"
                                                href="javascript:void(0)">Dark</a>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark"
                                                data-toggle="layout" data-action="header_style_light"
                                                href="javascript:void(0)">Light</a>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark"
                                                data-toggle="layout" data-action="header_mode_fixed"
                                                href="javascript:void(0)">Fixed</a>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark"
                                                data-toggle="layout" data-action="header_mode_static"
                                                href="javascript:void(0)">Static</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Header -->

                                <!-- Content -->
                                <div class="block-content block-content-sm block-content-full bg-body">
                                    <span class="text-uppercase fs-sm fw-bold">Content</span>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="row g-sm text-center">
                                        <div class="col-6 mb-1">
                                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark"
                                                data-toggle="layout" data-action="content_layout_boxed"
                                                href="javascript:void(0)">Boxed</a>
                                        </div>
                                        <div class="col-6 mb-1">
                                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark"
                                                data-toggle="layout" data-action="content_layout_narrow"
                                                href="javascript:void(0)">Narrow</a>
                                        </div>
                                        <div class="col-12 mb-1">
                                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark"
                                                data-toggle="layout" data-action="content_layout_full_width"
                                                href="javascript:void(0)">Full Width</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Content -->

                                <!-- Layout API -->
                                <div class="block-content block-content-full border-top">
                                    <a class="btn w-100 btn-alt-primary" href="be_layout_api.html">
                                        <i class="fa fa-fw fa-flask me-1"></i> Layout API
                                    </a>
                                </div>
                                <!-- END Layout API -->
                            </div>
                        </div>
                        <!-- END Settings Tab -->


                    </div>
                </div>
                <!-- END Side Overlay Tabs -->
            </div>
            <!-- END Side Content -->
        </aside>
        <!-- END Side Overlay -->


        @include('backend._sidebar')
        <!-- END Sidebar -->

        <!-- Header -->
        @include('backend._header')
        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container">
            <!-- Hero -->
            @include('backend._hero')
            <!-- END Hero -->

            <!-- Page Content -->
            @yield('content')
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        <footer id="page-footer" class="bg-body-light">
            <div class="content py-0">
                <div class="row fs-sm">
                    <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-end">
                        Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold"
                            href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                    </div>
                    <div class="col-sm-6 order-sm-1 text-center text-sm-start">
                        <a class="fw-semibold" href="#" target="_blank">Roby</a>
                        &copy; <span data-toggle="year-copy"></span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!--
      Dashmix JS

      Core libraries and functionality
      webpack is putting everything together at assets/_js/main/app.js
    -->
    <script src="{{ asset('assets/js/dashmix.app.min.js') }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('assets/js/plugins/chart.js/chart.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('assets/js/pages/be_pages_dashboard.min.js') }}"></script>

    @stack('javascript-external')
    @stack('javascript-internal')
</body>

</html>
