<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="bg-header-dark">
        <div class="content-header bg-white-5">
            <!-- Logo -->
            <a class="fw-semibold text-white tracking-wide" href="index.html">
                <span class="smini-visible">
                    D<span class="opacity-75">x</span>
                </span>
                <span class="smini-hidden">
                    Admin Panel
                </span>
            </a>

            <div>

                <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle"
                    data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on"
                    onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');">
                    <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                </button>

                <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle"
                    data-target="#dark-mode-toggler" data-class="far fa" onclick="Dashmix.layout('dark_mode_toggle');">
                    <i class="far fa-moon" id="dark-mode-toggler"></i>
                </button>

                <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout"
                    data-action="sidebar_close">
                    <i class="fa fa-times-circle"></i>
                </button>
                <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
        </div>
    </div>
    <!-- END Side Header -->

    <!-- Sidebar Scrolling -->
    <div class="js-sidebar-scroll">
        <!-- Side Navigation -->
        <div class="content-side">
            <ul class="nav-main">
                <li class="nav-main-item">
                    <a class="nav-main-link active" href="be_pages_dashboard.html">
                        <i class="nav-main-link-icon fa fa-location-arrow"></i>
                        <span class="nav-main-link-name">Kampung Gadang</span>

                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_dashboard.html">
                        <i class="nav-main-link-icon fa fa-boxes"></i>
                        <span class="nav-main-link-name">Biografi Desa / Kelurahan</span>

                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                        aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-boxes"></i>
                        <span class="nav-main-link-name">Struktur</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_tiles.html">
                                <span class="nav-main-link-name">Perangkat</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_stats.html">
                                <span class="nav-main-link-name">BPD</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_media.html">
                                <span class="nav-main-link-name">PKK</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_users.html">
                                <span class="nav-main-link-name">LPM</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_blog.html">
                                <span class="nav-main-link-name">Karang Taruna</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_various.html">
                                <span class="nav-main-link-name">BUMDES</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_various.html">
                                <span class="nav-main-link-name">Kades Posyandu</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_various.html">
                                <span class="nav-main-link-name">Kebersihan</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_various.html">
                                <span class="nav-main-link-name">Keamanan</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_various.html">
                                <span class="nav-main-link-name">Bhabinkamtibmas</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_various.html">
                                <span class="nav-main-link-name">Babinsa</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-heading">Base</li>

                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                        aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-boxes"></i>
                        <span class="nav-main-link-name">Rumah Data</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_tiles.html">
                                <span class="nav-main-link-name">Lahan</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_stats.html">
                                <span class="nav-main-link-name">Akses Jalan</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_media.html">
                                <span class="nav-main-link-name">Bangunan</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_users.html">
                                <span class="nav-main-link-name">SPPT PBB</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_blog.html">
                                <span class="nav-main-link-name">Kependudukan</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_various.html">
                                <span class="nav-main-link-name">Umur</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_various.html">
                                <span class="nav-main-link-name">Meninggal</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_various.html">
                                <span class="nav-main-link-name">Kesehatan</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_various.html">
                                <span class="nav-main-link-name">Pendidikan</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_various.html">
                                <span class="nav-main-link-name">Bantuan Sosial</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_various.html">
                                <span class="nav-main-link-name">DTKS</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_various.html">
                                <span class="nav-main-link-name">Dasawisma PKK</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_various.html">
                                <span class="nav-main-link-name">Posyandu</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                        aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-boxes"></i>
                        <span class="nav-main-link-name">Data Statistik</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_tiles.html">
                                <span class="nav-main-link-name">Lahan</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_stats.html">
                                <span class="nav-main-link-name">Akses Jalan</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_media.html">
                                <span class="nav-main-link-name">Bangunan</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_users.html">
                                <span class="nav-main-link-name">SPPT PBB</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_blog.html">
                                <span class="nav-main-link-name">Kependudukan</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_various.html">
                                <span class="nav-main-link-name">Kesehatan</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_various.html">
                                <span class="nav-main-link-name">Pendidikan</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_various.html">
                                <span class="nav-main-link-name">Bantuan Sosial</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                        aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-boxes"></i>
                        <span class="nav-main-link-name"> Tambah Data</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_tiles.html">
                                <span class="nav-main-link-name">Penduduk</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_stats.html">
                                <span class="nav-main-link-name">Bangunan</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_media.html">
                                <span class="nav-main-link-name">Akses Jalan</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_users.html">
                                <span class="nav-main-link-name">Lahan</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_blog.html">
                                <span class="nav-main-link-name">DTKS</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_various.html">
                                <span class="nav-main-link-name">Bantuan Sosial</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_various.html">
                                <span class="nav-main-link-name">SAGASAJA</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_various.html">
                                <span class="nav-main-link-name">SPPT PBB</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_various.html">
                                <span class="nav-main-link-name">PKK</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_widgets_various.html">
                                <span class="nav-main-link-name">Posyandu</span>
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
