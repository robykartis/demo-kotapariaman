<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords"
        content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>SDKP | @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('vendor/logosiap.png') }}">
    <link rel="stylesheet" href="{{ asset('vendor/assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/assets/css/colors/yellow.css') }}">
    <link rel="preload" href="{{ asset('vendor/assets/css/fonts/thicccboi.css') }}" as="style"
        onload="this.rel='stylesheet'">
</head>

<body>
    <div class="content-wrapper">

        <!-- /header -->
        @yield('content')
        <!-- /section -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="bg-dark text-inverse">
        <div class="container py-5 py-md-5">
            <div class="row gy-6 gy-lg-0">
                <h2 class="widget-title text-white mb-3 text-center">Satu Data Kota Pariaman</h2>
            </div>
            <!--/.row -->
            <p class="mt-2 mb-0 text-center">© 2022 SDKP. All rights reserved.</p>
        </div>
        <!-- /.container -->
    </footer>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="{{ asset('vendor/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('vendor/assets/js/theme.js') }}"></script>
</body>

</html>
