<header class="wrapper bg-soft-primary">
    <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand w-100">
                <a href="./index.html">
                    <img height="50px" src="{{ asset('vendor/logosiap.png') }}"
                        srcset="{{ asset('vendor/logosiap.png') }}" alt="" />
                </a>
            </div>
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header d-lg-none">
                    <h3 class="text-white fs-30 mb-0">SDKP</h3>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                    <ul class="navbar-nav">
                        <li>
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ route('Kota.index') }}">Kota</a>
                        </li>
                        <!--/.dropdown-menu -->


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Rumah Data</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="dropdown-item" href="./blog.html">Lahan</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="./blog2.html">Akses Jalan</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="./blog3.html">Bangunan</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="./blog3.html">SPTPBB</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="./blog3.html">Kependudukan</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="./blog3.html">Umur</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="./blog3.html">Meninggal</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="./blog3.html">Kesehatan</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="./blog3.html">Pendidikan</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="./blog3.html">Bantuan Sosial</a>
                                </li>
                                <li class="nav-item"><a class="dropdown-item" href="./blog3.html">DTKS</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="./blog3.html">Dasawisma PKK</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="./blog3.html">Posyandu</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Data
                                Satistik</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="dropdown-item" href="./blog.html">Lahan</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="./blog2.html">Akses Jalan</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="./blog3.html">Bangunan</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="./blog3.html">SPT PBB</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="./blog3.html">Kependudukan</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="./blog3.html">Kesehatan</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="./blog3.html">Pendidikan</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="./blog3.html">Bandtuan Sosial</a>
                                </li>

                            </ul>
                        </li>

                    </ul>
                    <!-- /.navbar-nav -->
                    <div class="offcanvas-footer d-lg-none">
                        <div>
                            <a href="mailto:first.last@email.com" class="link-inverse">roby@mail.com</a>
                            <br /> 00 (123) 456 78 90 <br />
                            <nav class="nav social social-white mt-4">
                                <a href="#"><i class="uil uil-twitter"></i></a>
                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                <a href="#"><i class="uil uil-instagram"></i></a>
                                <a href="#"><i class="uil uil-youtube"></i></a>
                            </nav>
                            <!-- /.social -->
                        </div>
                    </div>
                    <!-- /.offcanvas-footer -->
                </div>
                <!-- /.offcanvas-body -->
            </div>

            <!-- /.navbar-collapse -->

            <div class="navbar-other w-100 d-flex ms-auto">
                <ul class="navbar-nav flex-row align-items-center ms-auto">


                    <li class="nav-item dropdown text-uppercase">
                        <a class="nav-link" href="{{ $link }}" role="button" aria-haspopup="true"
                            aria-expanded="false">{{ $nama }}</a>

                    </li>

                    <li class="nav-item d-lg-none">
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                </ul>
                <!-- /.navbar-nav -->
            </div>

            <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->

    <!-- /.offcanvas -->
</header>
