<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Dashmix - Bootstrap 5 Admin Template &amp; UI Framework</title>

    <meta name="description" content="Satu Data Kota Pariaman">
    <meta name="author" content="Roby">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Satu Data Kota Pariaman">
    <meta property="og:site_name" content="SDKP Kota Pariaman">
    <meta property="og:description" content="SDKP Kota Pariaman">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
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

        <nav id="sidebar" aria-label="Main Navigation">
            <!-- Side Header -->
            <div class="content-header bg-primary">
                <!-- Logo -->

                <img height="50px" src="{{ asset('vendor/logosiap.png') }}" srcset="{{ asset('vendor/logosiap.png') }}"
                    alt="" />

                <!-- END Logo -->

                <!-- Options -->
                <div>
                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <a class="d-lg-none text-white ms-2" data-toggle="layout" data-action="sidebar_close"
                        href="javascript:void(0)">
                        <i class="fa fa-times-circle"></i>
                    </a>
                    <!-- END Close Sidebar -->
                </div>
                <!-- END Options -->
            </div>
            <!-- END Side Header -->

            <!-- Sidebar Scrolling -->
            <div class="js-sidebar-scroll">
                <!-- User Info -->

                <!-- END User Info -->

                <!-- Side Navigation -->
                <div class="content-side content-side-full">
                    <ul class="nav-main">
                        <li class="nav-main-item">
                            <a class="nav-main-link active" href="db_corporate_slim.html">
                                <i class="nav-main-link-icon fa fa-compass"></i>
                                <span class="nav-main-link-name">Dashboard</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link" href="">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Messageds</span>
                            </a>
                        </li>
                        <li class="nav-main-heading">More</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                                aria-expanded="false" href="#">
                                <i class="nav-main-link-icon fa fa-folder-open"></i>
                                <span class="nav-main-link-name">Projects</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="">
                                        <i class="nav-main-link-icon fa fa-check"></i>
                                        <span class="nav-main-link-name">Active</span>
                                        <span class="nav-main-link-badge badge rounded-pill bg-success">3</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="">
                                        <i class="nav-main-link-icon fa fa-users"></i>
                                        <span class="nav-main-link-name">Colleagues</span>
                                        <span class="nav-main-link-badge badge rounded-pill bg-primary">24</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="">
                                        <i class="nav-main-link-icon fa fa-list"></i>
                                        <span class="nav-main-link-name">Manage</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- END Side Navigation -->
            </div>
            <!-- END Sidebar Scrolling -->
        </nav>
        <!-- END Sidebar -->

        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">
                <!-- Left Section -->
                <div class="d-flex align-items-center">
                    <!-- Logo -->
                    <img height="50px" src="{{ asset('vendor/logosiap.png') }}"
                        srcset="{{ asset('vendor/logosiap.png') }}" alt="" />
                    <!-- END Logo -->

                    <!-- Menu -->
                    <ul class="nav-main nav-main-horizontal nav-main-hover d-none d-lg-block ms-3">
                        <li class="nav-main-item">
                            <a class="nav-main-link active" href="db_corporate_slim.html">
                                <i class="nav-main-link-icon fa fa-compass"></i>
                                <span class="nav-main-link-name">Dashboard</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link" href="">
                                <i class="nav-main-link-icon fa fa-file-lines"></i>
                                <span class="nav-main-link-name">Messageds</span>
                            </a>
                        </li>
                        <li class="nav-main-heading">More</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                                aria-expanded="false" href="#">
                                <i class="nav-main-link-icon fa fa-folder-open"></i>
                                <span class="nav-main-link-name">Projects</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="">
                                        <i class="nav-main-link-icon fa fa-check"></i>
                                        <span class="nav-main-link-name">Active</span>
                                        <span class="nav-main-link-badge badge rounded-pill bg-success">3</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="">
                                        <i class="nav-main-link-icon fa fa-users"></i>
                                        <span class="nav-main-link-name">Colleagues</span>
                                        <span class="nav-main-link-badge badge rounded-pill bg-primary">24</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="">
                                        <i class="nav-main-link-icon fa fa-list"></i>
                                        <span class="nav-main-link-name">Manage</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- END Menu -->
                </div>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div>

                    <!-- Notifications Dropdown -->
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn btn-alt-secondary" id="page-header-notifications-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Login
                        </button>

                    </div>
                    <!-- END Notifications Dropdown -->

                    <!-- Toggle Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-alt-secondary d-lg-none" data-toggle="layout"
                        data-action="sidebar_toggle">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                    <!-- END Toggle Sidebar -->
                </div>
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->

            <!-- Header Search -->
            <div id="page-header-search" class="overlay-header bg-primary">
                <div class="content-header">
                    <form class="w-100" action="be_pages_generic_search.html" method="POST">
                        <div class="input-group">
                            <button type="button" class="btn btn-primary" data-toggle="layout"
                                data-action="header_search_off">
                                <i class="fa fa-fw fa-times-circle"></i>
                            </button>
                            <input type="text" class="form-control border-0" placeholder="Search your company.."
                                id="page-header-search-input" name="page-header-search-input">
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Header Search -->

            <!-- Header Loader -->
            <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
            <div id="page-header-loader" class="overlay-header bg-primary-darker">
                <div class="content-header">
                    <div class="w-100 text-center">
                        <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
                    </div>
                </div>
            </div>
            <!-- END Header Loader -->
        </header>
        <!-- END Header -->


        <!-- Main Container -->
        <main id="main-container">
            <div class="bg-header-dark">
                <div class="content content-full">
                    <div class="row pt-3">
                        <div class="col-md py-3 d-md-flex align-items-md-center text-center">
                            <h1 class="text-white mb-0">
                                <span class="fw-semibold">Kota Pariaman</span>

                            </h1>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Quick Menu -->
            <div class="bg-body-dark">
                <div class="content">
                    <div class="row g-sm push">
                        <div class="col-12 col-md-4 col-xl-12">
                            <div class="block block-rounded text-center bg-image"
                                style="background-image: url('{{ asset('assets/media/photos/photo15.jpg') }}');"
                                href="javascript:void(0)">
                                <div class="block-content block-content-full  ratio ratio-16x9">

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



            {{-- <div class="bg-body-dark">
                <div class="content">
                    <div class="row g-sm push">
                        <div class="col-6 col-md-4 col-xl-2">
                            <a class="block block-rounded text-center bg-image"
                                style="background-image: url('assets/media/photos/photo15.jpg');"
                                href="javascript:void(0)">
                                <div class="block-content block-content-full bg-gd-fruit-op ratio ratio-16x9">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div>
                                            <i class="fa fa-2x fa-home text-white"></i>
                                            <div class="fw-semibold mt-3 text-uppercase text-white">Home</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <a class="block block-rounded text-center bg-image"
                                style="background-image: url('assets/media/photos/photo16.jpg');"
                                href="javascript:void(0)">
                                <div class="block-content block-content-full bg-gd-sublime-op ratio ratio-16x9">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div>
                                            <i class="far fa-2x fa-chart-bar text-white"></i>
                                            <div class="fw-semibold mt-3 text-uppercase text-white">Statistics</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <a class="block block-rounded text-center bg-image"
                                style="background-image: url('assets/media/photos/photo17.jpg');"
                                href="javascript:void(0)">
                                <div class="block-content block-content-full bg-gd-aqua-op ratio ratio-16x9">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div>
                                            <i class="fa fa-2x fa-user-circle text-white"></i>
                                            <div class="fw-semibold mt-3 text-uppercase text-white">Accounts</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <a class="block block-rounded text-center bg-image"
                                style="background-image: url('assets/media/photos/photo18.jpg');"
                                href="javascript:void(0)">
                                <div class="block-content block-content-full bg-gd-sea-op ratio ratio-16x9">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div>
                                            <i class="fa fa-2x fa-briefcase text-white"></i>
                                            <div class="fw-semibold mt-3 text-uppercase text-white">Projects</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <a class="block block-rounded text-center bg-image"
                                style="background-image: url('assets/media/photos/photo19.jpg');"
                                href="javascript:void(0)">
                                <div class="block-content block-content-full bg-gd-dusk-op ratio ratio-16x9">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div>
                                            <i class="fa fa-2x fa-file-alt text-white"></i>
                                            <div class="fw-semibold mt-3 text-uppercase text-white">Invoices</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <a class="block block-rounded text-center bg-image"
                                style="background-image: url('assets/media/photos/photo20.jpg');"
                                href="javascript:void(0)">
                                <div class="block-content block-content-full bg-gd-sun-op ratio ratio-16x9">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div>
                                            <i class="fa fa-2x fa-sign-out-alt text-white"></i>
                                            <div class="fw-semibold mt-3 text-uppercase text-white">Logout</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div> --}}


            <!-- END Quick Menu -->

            <!-- Page Content -->
            <div class="content">

                <div class="row">
                    <!-- Best Media -->

                    <div class="col-xl-12">
                        <div class="block block-rounded">
                            <div class="block-content block-content-full">
                                <p class="text-uppercase fw-semibold text-center mt-2 mb-4">
                                    Books Collection
                                </p>
                                <a class="block block-rounded block-link-rotate bg-body-light mb-2"
                                    href="javascript:void(0)">
                                    <div
                                        class="block-content block-content-sm block-content-full d-flex align-items-center justify-content-between">
                                        <div class="me-3">
                                            <p class="fs-lg mb-0">
                                                260
                                            </p>
                                            <p class="text-muted fs-sm mb-0">
                                                Total Wirausaha tidak Mengenakan Pajak kepada konsumen
                                            </p>
                                        </div>
                                        <div class="item">
                                            <i class="fa fa-2x fa-book text-muted"></i>
                                        </div>
                                    </div>
                                </a>
                                <a class="block block-rounded block-link-rotate bg-body-light mb-2"
                                    href="javascript:void(0)">
                                    <div
                                        class="block-content block-content-sm block-content-full d-flex align-items-center justify-content-between">
                                        <div class="me-3">
                                            <p class="fs-lg mb-0">
                                                430
                                            </p>
                                            <p class="text-muted fs-sm mb-0">
                                                in Fiction
                                            </p>
                                        </div>
                                        <div class="item">
                                            <i class="fa fa-2x fa-book text-muted"></i>
                                        </div>
                                    </div>
                                </a>
                                <a class="block block-rounded block-link-rotate bg-body-light mb-2"
                                    href="javascript:void(0)">
                                    <div
                                        class="block-content block-content-sm block-content-full d-flex align-items-center justify-content-between">
                                        <div class="me-3">
                                            <p class="fs-lg mb-0">
                                                368
                                            </p>
                                            <p class="text-muted fs-sm mb-0">
                                                in Business
                                            </p>
                                        </div>
                                        <div class="item">
                                            <i class="fa fa-2x fa-book text-muted"></i>
                                        </div>
                                    </div>
                                </a>
                                <a class="block block-rounded block-link-rotate bg-body-light mb-0"
                                    href="javascript:void(0)">
                                    <div
                                        class="block-content block-content-sm block-content-full d-flex align-items-center justify-content-between">
                                        <div class="me-3">
                                            <p class="fs-lg mb-0">
                                                580
                                            </p>
                                            <p class="text-muted fs-sm mb-0">
                                                in Science
                                            </p>
                                        </div>
                                        <div class="item">
                                            <i class="fa fa-2x fa-book text-muted"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END Best Media -->
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        <footer id="page-footer" class="bg-body-light">
            <div class="content py-0">
                <div class="row fs-sm">
                    <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-end">
                        Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href=""
                            target="_blank">SDKP</a>
                    </div>
                    <div class="col-sm-6 order-sm-1 text-center text-sm-start">
                        <a class="fw-semibold" href="" target="_blank">Satu Data Kota Pariaman</a>
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
</body>

</html>
