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
                    <a class="nav-main-link {{ \Request::route()->getName() == 'desa.index' ? 'active' : '' }}"
                        href="{{ $route }}">
                        <i class="nav-main-link-icon fa fa-compass"></i>
                        <span class="nav-main-link-name">Menu Utama</span>
                    </a>
                </li>


                <li class="nav-main-heading">More</li>

                <li class="nav-main-item">
                    <a class="nav-main-link {{ set_active([
                        'desa.rumah_data',
                        'desa.rd_lahan',
                        'desa.rd_jalan',
                        'desa.rd_bangunan',
                        'desa.rd_umum',
                        'desa.rd_usaha',
                        'desa.rd_rmhisi',
                        'desa.rd_rmhkosong',
                        'desa.rd_spptpbb',
                        'desa.rd_penduduk',
                        'desa.rd_umur',
                        'desa.rd_detail_umur',
                        'desa.rd_meninggal',
                        'desa.rd_kesehatan',
                        'desa.rd_pendidikan',
                        'desa.rd_beasiswa',
                        'desa.rd_bantuansos',
                        'desa.rd_pkk',
                        'desa.rd_posyandu',
                        'desa.rd_pertanian',
                        'desa.rd_peternakan',
                        'desa.rd_perikanan',
                    ]) }}"
                        href="{{ route('desa.rumah_data') }}">
                        <i class="nav-main-link-icon fa fa-folder-open"></i>
                        <span class="nav-main-link-name">Rumah Data</span>
                    </a>
                </li>


                <li class="nav-main-item">
                    <a class="nav-main-link {{ set_active([
                        'desa.statistik',
                        'desa.stk_lahan',
                        'desa.stk_jalan',
                        'desa.stk_bangunan',
                        'desa.stk_usaha',
                        'desa.stk_penduduk',
                        'desa.stk_pendidikan',
                        'desa.stk_bantuan',
                        'desa.stk_pertanian',
                        'desa.stk_peternakan',
                        'desa.stk_perikanan',
                    ]) }}"
                        href="{{ route('desa.statistik') }}">
                        <i class="nav-main-link-icon fa fa-folder-open"></i>
                        <span class="nav-main-link-name">Statistik</span>
                    </a>
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
            <img height="50px" src="{{ asset('vendor/logosiap.png') }}" srcset="{{ asset('vendor/logosiap.png') }}"
                alt="" />
            <!-- END Logo -->

            <!-- Menu -->
            <ul class="nav-main nav-main-horizontal nav-main-hover d-none d-lg-block ms-3">
                <li class="nav-main-item">
                    <a class="nav-main-link {{ \Request::route()->getName() == 'desa.index' ? 'active' : '' }}"
                        href="{{ $route }}">
                        <i class="nav-main-link-icon fa fa-compass"></i>
                        <span class="nav-main-link-name">Menu Utama</span>
                    </a>
                </li>


                <li class="nav-main-heading">More</li>

                <li class="nav-main-item">
                    <a class="nav-main-link {{ set_active([
                        'desa.rumah_data',
                        'desa.rd_lahan',
                        'desa.rd_jalan',
                        'desa.rd_bangunan',
                        'desa.rd_umum',
                        'desa.rd_usaha',
                        'desa.rd_rmhisi',
                        'desa.rd_rmhkosong',
                        'desa.rd_spptpbb',
                        'desa.rd_penduduk',
                        'desa.rd_umur',
                        'desa.rd_detail_umur',
                        'desa.rd_meninggal',
                        'desa.rd_kesehatan',
                        'desa.rd_pendidikan',
                        'desa.rd_beasiswa',
                        'desa.rd_bantuansos',
                        'desa.rd_pkk',
                        'desa.rd_posyandu',
                        'desa.rd_pertanian',
                        'desa.rd_peternakan',
                        'desa.rd_perikanan',
                    ]) }}"
                        href="{{ route('desa.rumah_data') }}">
                        <i class="nav-main-link-icon fa fa-folder-open"></i>
                        <span class="nav-main-link-name">Rumah Data</span>
                    </a>
                </li>


                <li class="nav-main-item">
                    <a class="nav-main-link {{ set_active([
                        'desa.statistik',
                        'desa.stk_lahan',
                        'desa.stk_jalan',
                        'desa.stk_bangunan',
                        'desa.stk_usaha',
                        'desa.stk_penduduk',
                        'desa.stk_pendidikan',
                        'desa.stk_bantuan',
                        'desa.stk_pertanian',
                        'desa.stk_peternakan',
                        'desa.stk_perikanan',
                    ]) }}"
                        href="{{ route('desa.statistik') }}">
                        <i class="nav-main-link-icon fa fa-folder-open"></i>
                        <span class="nav-main-link-name">Statistik</span>
                    </a>
                </li>
            </ul>
            <!-- END Menu -->
        </div>
        <!-- END Left Section -->
        <!-- Right Section -->
        <div>
            <!-- Notifications Dropdown -->
            {{-- @if (Route::has('login'))
                <div class="d-inline-block">
                    @auth
                        <a href="{{ route('adm.apar') }}" type="button" class="btn btn-alt-secondary"
                            id="page-header-notifications-dropdown">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" type="button" class="btn btn-alt-secondary"
                            id="page-header-notifications-dropdown" aria-haspopup="true" aria-expanded="false">
                            Login
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('login') }}" type="button" class="btn btn-alt-secondary"
                                id="page-header-notifications-dropdown" aria-haspopup="true" aria-expanded="false">
                                Register
                            </a>
                        @endif
                    @endauth
                </div>
            @endif --}}
            <div class="d-inline-block">
                <a href="#" type="button" class="btn btn-alt-secondary" id="page-header-notifications-dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Login
                </a>
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
                    <button type="button" class="btn btn-primary" data-toggle="layout" data-action="header_search_off">
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
