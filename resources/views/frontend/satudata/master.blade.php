<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>{{ $title }}</title>

    <meta name="description" content="Satu Data">
    <meta name="author" content="Roby">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Satu Data">
    <meta property="og:site_name" content=" Kota Pariaman">
    <meta property="og:description" content=" Kota Pariaman">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.satudatapariamankota.id/app-satudata/kota/pariaman">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('vendor/logosiap.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('vendor/logosiap.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('vendor/logosiap.png') }}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/dashmix.min.css') }}">

    <link rel="stylesheet" id="css-theme" href="{{ asset('assets/css/themes/xpro.min.css') }}">
</head>

<body>
    <div id="page-container" class="sidebar-dark side-scroll page-header-fixed page-header-dark main-content-boxed">

        @include('frontend.satudata._header')
        <!-- Main Container -->
        <main id="main-container">
            <div class="bg-header-dark">
                <div class="content content-full">
                    <div class="row pt-3">
                        <div class="col-md py-3 d-md-flex align-items-md-center text-center">
                            <h1 class="text-white mb-0">
                                <span class="fw-semibold">{{ $name }}</span>

                            </h1>
                        </div>

                    </div>
                </div>
            </div>

            @yield('content')
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
        <!-- Footer -->
        <footer id="page-footer" class="bg-body-light">
            <div class="content py-0">
                <div class="row fs-sm">
                    <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-end">
                        Crafted </i> by <a class="fw-semibold" href="#" target="_blank">MSDV</a>
                    </div>
                    <div class="col-sm-6 order-sm-1 text-center text-sm-start">
                        <a class="fw-semibold" href="" target="_blank"> {{ $name }}</a>
                        &copy; <span data-toggle="year-copy"></span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END Footer -->
    </div>


    <script src="{{ asset('assets/js/dashmix.app.min.js') }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('assets/js/plugins/chart.js/chart.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('assets/js/pages/db_corporate_slim.min.js') }}"></script>
    @stack('javascript-external')
    @stack('javascript-internal')
</body>

</html>
