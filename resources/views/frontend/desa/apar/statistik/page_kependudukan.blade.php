@extends('frontend.desa.apar.master')
@section('title')
    Apar
@endsection
@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt bg-body-light px-4 py-2 rounded push">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0)">{{ $kelompok }}</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $list }}</li>
                </ol>
            </nav>
        </div>


        <div class="row">
            <div class="col-xl-6">
                <!-- Donut Chart -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Rangking Kemiskinan</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full text-center">
                        <div class="py-3">
                            <!-- Donut Chart Container -->
                            <canvas id="js-chartjs-pie-kemiskinan"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END Donut Chart -->
            </div>
            <div class="col-xl-6">
                <!-- Donut Chart -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Total KK</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full text-center">
                        <div class="py-3">
                            <!-- Donut Chart Container -->
                            <canvas id="js-chartjs-pie-kk"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END Donut Chart -->
            </div>


            <div class="col-xl-6">
                <!-- Donut Chart -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Total Penduduk</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full text-center">
                        <div class="py-3">
                            <!-- Donut Chart Container -->
                            <canvas id="js-chartjs-pie-totpenduduk"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END Donut Chart -->
            </div>

            <div class="col-xl-6">
                <!-- Donut Chart -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Jenis Kelamin Penduduk</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full text-center">
                        <div class="py-3">
                            <!-- Donut Chart Container -->
                            <canvas id="js-chartjs-pie-kelamin"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END Donut Chart -->
            </div>

            <div class="col-xl-6">
                <!-- Donut Chart -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Status Tinggal Penduduk</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full text-center">
                        <div class="py-3">
                            <!-- Donut Chart Container -->
                            <canvas id="js-chartjs-pie-statustinggal"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END Donut Chart -->
            </div>

            <div class="col-xl-6">
                <!-- Donut Chart -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Agama Penduduk</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full text-center">
                        <div class="py-3">
                            <!-- Donut Chart Container -->
                            <canvas id="js-chartjs-pie-agama"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END Donut Chart -->
            </div>

            <div class="col-xl-6">
                <!-- Donut Chart -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Status Pernikanan Penduduk</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full text-center">
                        <div class="py-3">
                            <!-- Donut Chart Container -->
                            <canvas id="js-chartjs-pie-statuspernikahan"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END Donut Chart -->
            </div>

            <div class="col-xl-6">
                <!-- Donut Chart -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Status Kewarganegaraan</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full text-center">
                        <div class="py-3">
                            <!-- Donut Chart Container -->
                            <canvas id="js-chartjs-pie-statuskewarganegaraan"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END Donut Chart -->
            </div>

            <div class="col-xl-6">
                <!-- Donut Chart -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Status Hak Politik</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full text-center">
                        <div class="py-3">
                            <!-- Donut Chart Container -->
                            <canvas id="js-chartjs-pie-statushakpolitik"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END Donut Chart -->
            </div>

            <div class="col-xl-6">
                <!-- Donut Chart -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Status Pekerjaan Penduduk</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full text-center">
                        <div class="py-3">
                            <!-- Donut Chart Container -->
                            <canvas id="js-chartjs-pie-statuspekerjaan"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END Donut Chart -->
            </div>

            <div class="col-xl-6">
                <!-- Donut Chart -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Jenis Pekerjaan</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full text-center">
                        <div class="py-3">
                            <!-- Donut Chart Container -->
                            <canvas id="js-chartjs-pie-jenispekerjaan"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END Donut Chart -->
            </div>


        </div>
    </div>
@endsection
@push('javascript-external')
    <!-- jQuery (required for Easy Pie Chart + jQuery Sparkline plugin) -->
    <script src="{{ asset('assets/js/lib/jquery.min.js') }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('assets/js/plugins/easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/chart.js/chart.min.js') }}"></script>

    <!-- Page JS Code -->
    {{-- <script src="{{ asset('assets/js/pages/be_comp_charts.min.js') }}"></script> --}}

    <!-- Page JS Helpers (Easy Pie Chart + jQuery Sparkline Plugins) -->
    <script>
        Dashmix.helpersOnLoad(['jq-easy-pie-chart', 'jq-sparkline']);
    </script>
@endpush
@push('javascript-internal')
    <script>
        Dashmix.onLoad(class {
            static initChartsChartJS() {
                Chart.defaults.color = "#818d96", Chart.defaults.scale.grid.color = "rgba(0,0,0,.04)", Chart
                    .defaults.scale.grid.zeroLineColor = "rgba(0,0,0,.1)", Chart.defaults.scale.beginAtZero = !
                    0, Chart.defaults.elements.line.borderWidth = 2, Chart.defaults.elements.point.radius = 5,
                    Chart.defaults.elements.point.hoverRadius = 7, Chart.defaults.plugins.tooltip.radius = 3,
                    Chart.defaults.plugins.legend.labels.boxWidth = 12;
                let data_kk,
                    data_kemiskinan,
                    data_totpenduduk,
                    data_kelamin,
                    data_statustinggal,
                    data_statuspernikahan,
                    data_statuskewarganegaraan,
                    data_statushakpolitik,
                    data_statuspekerjaan,
                    data_jenispekerjaan,

                    data_agama = document.getElementById(
                        "js-chartjs-lines"),

                    kk = document.getElementById("js-chartjs-pie-kk"),
                    kemiskinan = document.getElementById("js-chartjs-pie-kemiskinan"),
                    totpenduduk = document.getElementById("js-chartjs-pie-totpenduduk"),
                    kelamin = document.getElementById("js-chartjs-pie-kelamin"),
                    statustinggal = document.getElementById("js-chartjs-pie-statustinggal"),
                    statuspernikahan = document.getElementById("js-chartjs-pie-statuspernikahan"),
                    statuskewarganegaraan = document.getElementById("js-chartjs-pie-statuskewarganegaraan"),
                    statushakpolitik = document.getElementById("js-chartjs-pie-statushakpolitik"),
                    statuspekerjaan = document.getElementById("js-chartjs-pie-statuspekerjaan"),
                    jenispekerjaan = document.getElementById("js-chartjs-pie-jenispekerjaan"),
                    agama = document.getElementById("js-chartjs-pie-agama");

                data_kk = {
                        labels: [

                            'Total KK Dalam Desa / Kelurahan (65%)',
                            'Total KK Luar Desa / Kelurahan Disatu Kecamatan (15%)',
                            'Total KK Luar Desa / Kelurahan Beda Kecamatan Disatu Kota (20%)',
                        ],
                        datasets: [{
                            data: [
                                65,
                                15,
                                20,


                            ],
                            backgroundColor: [
                                "rgba(141, 196, 81, 1)",
                                "rgba(255, 177, 25, 1)",
                                "rgba(224, 79, 26, 1)",

                            ],
                            hoverBackgroundColor: [
                                "rgba(141, 196, 81, 5)",
                                "rgba(255, 177, 25, 5)",
                                "rgba(224, 79, 26, 5)",

                            ]
                        }]
                    },

                    data_kemiskinan = {
                        labels: [
                            'Total KK Dengan Rangking Kemiskinan Mampu (60%)',
                            'Total KK Dengan Rangking Kemiskinan Biasa (20%)',
                            'Total KK Dengan Rangking Kemiskinan Miskin (15%)',
                            'Total KK Dengan Rangking Kemiskinan Miskin Ekstrim (10%)',
                        ],
                        datasets: [{
                            data: [
                                60,
                                20,
                                15,
                                10,
                            ],
                            backgroundColor: [
                                "rgba(141, 196, 81, 1)",
                                "rgba(255, 177, 25, 1)",
                                "rgba(224, 79, 26, 1)",
                                "rgba(155, 89, 182, 1)",
                                // "rgba(84, 153, 199, 1)",
                                // "rgba(69, 179, 157, 1)",
                                // "rgba(220, 118, 51, 1)",
                                // "rgba(241, 148, 138, 1)",
                                // "rgba(110, 44, 0, 1)",

                            ],
                            hoverBackgroundColor: [
                                "rgba(141, 196, 81, 5)",
                                "rgba(255, 177, 25, 5)",
                                "rgba(224, 79, 26, 5)",
                                "rgba(155, 89, 182, 5)",
                                // "rgba(84, 153, 199, 5)",
                                // "rgba(69, 179, 157, 5)",
                                // "rgba(220, 118, 51, 5)",
                                // "rgba(241, 148, 138, 5)",
                                // "rgba(110, 44, 0, 5)",

                            ]
                        }]
                    },

                    data_totpenduduk = {
                        labels: [
                            'Total Laki-laki (60%)',
                            'Total Prempuan (40%)',
                        ],
                        datasets: [{
                            data: [
                                60,
                                40,

                            ],
                            backgroundColor: [
                                "rgba(141, 196, 81, 1)",
                                "rgba(255, 177, 25, 1)",

                            ],
                            hoverBackgroundColor: [
                                "rgba(141, 196, 81, 5)",
                                "rgba(255, 177, 25, 5)",

                            ]
                        }]
                    },

                    data_kelamin = {
                        labels: [
                            'Total Kelamin Laki-laki (60%)',
                            'Total Perempuan (40%)',
                        ],
                        datasets: [{
                            data: [
                                60,
                                40,

                            ],
                            backgroundColor: [
                                "rgba(141, 196, 81, 1)",
                                "rgba(255, 177, 25, 1)",

                            ],
                            hoverBackgroundColor: [
                                "rgba(141, 196, 81, 5)",
                                "rgba(255, 177, 25, 5)",

                            ]
                        }]
                    },
                    data_statustinggal = {
                        labels: [
                            'Total Penduduk Menetap (60%)',
                            'Total Penduduk Merantau (40%)',
                        ],
                        datasets: [{
                            data: [
                                60,
                                40,

                            ],
                            backgroundColor: [
                                "rgba(141, 196, 81, 1)",
                                "rgba(255, 177, 25, 1)",

                            ],
                            hoverBackgroundColor: [
                                "rgba(141, 196, 81, 5)",
                                "rgba(255, 177, 25, 5)",

                            ]
                        }]
                    },
                    data_agama = {
                        labels: [
                            'Total Beragama Islam (60%)',
                            'Total Beragama Protestan (10%)',
                            'Total Beragama Katolik (9%)',
                            'Total Beragama Budha (5%)',
                            'Total Beragama Hindu (5%)',

                        ],
                        datasets: [{
                            data: [
                                60,
                                10,
                                9,
                                5,
                                5, ,

                            ],
                            backgroundColor: [
                                "rgba(141, 196, 81, 1)",
                                "rgba(255, 177, 25, 1)",
                                "rgba(224, 79, 26, 1)",
                                "rgba(155, 89, 182, 1)",
                                "rgba(84, 153, 199, 1)",
                                // "rgba(69, 179, 157, 1)",
                                // "rgba(220, 118, 51, 1)",
                                // "rgba(241, 148, 138, 1)",
                                // "rgba(110, 44, 0, 1)",

                            ],
                            hoverBackgroundColor: [
                                "rgba(141, 196, 81, 5)",
                                "rgba(255, 177, 25, 5)",
                                "rgba(224, 79, 26, 5)",
                                "rgba(155, 89, 182, 5)",
                                "rgba(84, 153, 199, 5)",
                                // "rgba(69, 179, 157, 5)",
                                // "rgba(220, 118, 51, 5)",
                                // "rgba(241, 148, 138, 5)",
                                // "rgba(110, 44, 0, 5)",

                            ]
                        }]
                    },
                    data_statuspernikahan = {
                        labels: [
                            'Total Kawin (60%)',
                            'Total Tidak Kawin (10%)',
                            'Total Janda (9%)',
                            'Total Duda (5%)',


                        ],
                        datasets: [{
                            data: [
                                60,
                                10,
                                9,
                                5,


                            ],
                            backgroundColor: [
                                "rgba(141, 196, 81, 1)",
                                "rgba(255, 177, 25, 1)",
                                "rgba(224, 79, 26, 1)",
                                "rgba(155, 89, 182, 1)",
                                // "rgba(84, 153, 199, 1)",
                                // "rgba(69, 179, 157, 1)",
                                // "rgba(220, 118, 51, 1)",
                                // "rgba(241, 148, 138, 1)",
                                // "rgba(110, 44, 0, 1)",

                            ],
                            hoverBackgroundColor: [
                                "rgba(141, 196, 81, 5)",
                                "rgba(255, 177, 25, 5)",
                                "rgba(224, 79, 26, 5)",
                                "rgba(155, 89, 182, 5)",
                                // "rgba(84, 153, 199, 5)",
                                // "rgba(69, 179, 157, 5)",
                                // "rgba(220, 118, 51, 5)",
                                // "rgba(241, 148, 138, 5)",
                                // "rgba(110, 44, 0, 5)",

                            ]
                        }]
                    },
                    data_statuskewarganegaraan = {
                        labels: [
                            'Total WNI (60%)',
                            'Total WNA(10%)',
                            // 'Total Janda (9%)',
                            // 'Total Duda (5%)',


                        ],
                        datasets: [{
                            data: [
                                60,
                                10,



                            ],
                            backgroundColor: [
                                "rgba(141, 196, 81, 1)",
                                "rgba(255, 177, 25, 1)",
                                // "rgba(224, 79, 26, 1)",
                                // "rgba(155, 89, 182, 1)",
                                // "rgba(84, 153, 199, 1)",
                                // "rgba(69, 179, 157, 1)",
                                // "rgba(220, 118, 51, 1)",
                                // "rgba(241, 148, 138, 1)",
                                // "rgba(110, 44, 0, 1)",

                            ],
                            hoverBackgroundColor: [
                                "rgba(141, 196, 81, 5)",
                                "rgba(255, 177, 25, 5)",
                                // "rgba(224, 79, 26, 5)",
                                // "rgba(155, 89, 182, 5)",
                                // "rgba(84, 153, 199, 5)",
                                // "rgba(69, 179, 157, 5)",
                                // "rgba(220, 118, 51, 5)",
                                // "rgba(241, 148, 138, 5)",
                                // "rgba(110, 44, 0, 5)",

                            ]
                        }]
                    },
                    data_statushakpolitik = {
                        labels: [
                            'Total Hak Pilih Politik (60%)',
                            'Total Tidak Memiliki Hak Politik(40%)',
                            // 'Total Janda (9%)',
                            // 'Total Duda (5%)',


                        ],
                        datasets: [{
                            data: [
                                60,
                                40,



                            ],
                            backgroundColor: [
                                "rgba(141, 196, 81, 1)",
                                "rgba(255, 177, 25, 1)",
                                // "rgba(224, 79, 26, 1)",
                                // "rgba(155, 89, 182, 1)",
                                // "rgba(84, 153, 199, 1)",
                                // "rgba(69, 179, 157, 1)",
                                // "rgba(220, 118, 51, 1)",
                                // "rgba(241, 148, 138, 1)",
                                // "rgba(110, 44, 0, 1)",

                            ],
                            hoverBackgroundColor: [
                                "rgba(141, 196, 81, 5)",
                                "rgba(255, 177, 25, 5)",
                                // "rgba(224, 79, 26, 5)",
                                // "rgba(155, 89, 182, 5)",
                                // "rgba(84, 153, 199, 5)",
                                // "rgba(69, 179, 157, 5)",
                                // "rgba(220, 118, 51, 5)",
                                // "rgba(241, 148, 138, 5)",
                                // "rgba(110, 44, 0, 5)",

                            ]
                        }]
                    },
                    data_statuspekerjaan = {
                        labels: [
                            'Total Bekerja (30%)',
                            'Total Tidak Bekerja (10%)',
                            'Total Sedang Mencari Pekerjaan (10%)',
                            'Total Bersekolah (11%)',
                            'Total Mengurus Rumah Tangga (39%)',



                        ],
                        datasets: [{
                            data: [
                                30,
                                10,
                                10,
                                11,
                                39,



                            ],
                            backgroundColor: [
                                "rgba(141, 196, 81, 1)",
                                "rgba(255, 177, 25, 1)",
                                "rgba(224, 79, 26, 1)",
                                "rgba(155, 89, 182, 1)",
                                "rgba(84, 153, 199, 1)",
                                // "rgba(69, 179, 157, 1)",
                                // "rgba(220, 118, 51, 1)",
                                // "rgba(241, 148, 138, 1)",
                                // "rgba(110, 44, 0, 1)",

                            ],
                            hoverBackgroundColor: [
                                "rgba(141, 196, 81, 5)",
                                "rgba(255, 177, 25, 5)",
                                "rgba(224, 79, 26, 5)",
                                "rgba(155, 89, 182, 5)",
                                "rgba(84, 153, 199, 5)",
                                // "rgba(69, 179, 157, 5)",
                                // "rgba(220, 118, 51, 5)",
                                // "rgba(241, 148, 138, 5)",
                                // "rgba(110, 44, 0, 5)",

                            ]
                        }]
                    },
                    data_jenispekerjaan = {
                        labels: [
                            'Total Petani Pemilik Lahan (30%)',
                            'Total Petani Penyewa (5%)',
                            'Total Buruh Tani (10%)',
                            'Total Nelayan Pemilik Kapal / Perahu (2%)',
                            'Total Nelayan Penyewa Kapal / Perahu (2%)',
                            'Total Buruh Nelayan (2%)',
                            'Total Guru (2%)',
                            'Total Pedagang (2%)',
                            'Total Pekerja Pengolahan / Industri (2%)',
                            'Total PNS (12%)',
                            'Total TNI (2%)',
                            'Total Polisi (9%)',
                            'Total Perangkat Desa (2%)',
                            'Total Pegawai Honorer Pemda (10%)',
                            'Total TKI (2%)',
                            'Total Tenaga Kesehatan (2%)',
                            'Total Buruh Harian Lepas (2%)',
                            'Total Tenaga Kerja PPPK (2%)',
                            'Total Tenaga Kerja Lainya (2%)',



                        ],
                        datasets: [{
                            data: [
                                30,
                                5,
                                2,
                                2,
                                2,
                                2,
                                2,
                                12,
                                2,
                                9,
                                2,
                                10,
                                2,
                                2,
                                2,
                                2,
                                2,
                                2,
                                2,



                            ],
                            backgroundColor: [
                                "rgba(141, 196, 81, 1)",
                                "rgba(255, 177, 25, 1)",
                                "rgba(224, 79, 26, 1)",
                                "rgba(155, 89, 182, 1)",
                                "rgba(84, 153, 199, 1)",
                                "rgba(69, 179, 157, 1)",
                                "rgba(220, 118, 51, 1)",
                                "rgba(241, 148, 138, 1)",
                                "rgba(110, 44, 0, 1)",

                                "rgba(100, 30, 22, 1)",
                                "rgba(120, 40, 31, 1)",
                                "rgba(81, 46, 95, 1)",
                                "rgba(74, 35, 90, 1)",
                                "rgba(21, 67, 96, 1)",
                                "rgba(27, 79, 114, 1)",
                                "rgba(11, 83, 69, 1)",
                                "rgba(20, 90, 50 , 1)",
                                "rgba(125, 102, 8 , 1)",
                                "rgba(125, 102, 8 , 1)",
                            ],
                            hoverBackgroundColor: [
                                "rgba(141, 196, 81, 5)",
                                "rgba(255, 177, 25, 5)",
                                "rgba(224, 79, 26, 5)",
                                "rgba(155, 89, 182, 5)",
                                "rgba(84, 153, 199, 5)",
                                "rgba(69, 179, 157, 5)",
                                "rgba(220, 118, 51, 5)",
                                "rgba(241, 148, 138, 5)",
                                "rgba(110, 44, 0, 5)",

                                "rgba(100, 30, 22, 5)",
                                "rgba(120, 40, 31, 5)",
                                "rgba(81, 46, 95, 5)",
                                "rgba(74, 35, 90, 5)",
                                "rgba(21, 67, 96, 5)",
                                "rgba(27, 79, 114, 5)",
                                "rgba(11, 83, 69, 5)",
                                "rgba(20, 90, 50 , 5)",
                                "rgba(125, 102, 8 , 5)",
                                "rgba(125, 102, 8 , 5)",

                            ]
                        }]
                    },

                    null !== kk && (kk = new Chart(kk, {
                        type: "pie",
                        data: data_kk
                    })),
                    null !== kemiskinan && (kemiskinan = new Chart(kemiskinan, {
                        type: "pie",
                        data: data_kemiskinan
                    })),
                    null !== totpenduduk && (totpenduduk = new Chart(totpenduduk, {
                        type: "pie",
                        data: data_totpenduduk
                    })),
                    null !== kelamin && (kelamin = new Chart(kelamin, {
                        type: "pie",
                        data: data_kelamin
                    })),
                    null !== statustinggal && (statustinggal = new Chart(statustinggal, {
                        type: "pie",
                        data: data_statustinggal
                    })),
                    null !== agama && (agama = new Chart(agama, {
                        type: "pie",
                        data: data_agama
                    })),
                    null !== statuspernikahan && (statuspernikahan = new Chart(statuspernikahan, {
                        type: "pie",
                        data: data_statuspernikahan
                    })),
                    null !== statuskewarganegaraan && (statuskewarganegaraan = new Chart(
                        statuskewarganegaraan, {
                            type: "pie",
                            data: data_statuskewarganegaraan
                        })),
                    null !== statushakpolitik && (statushakpolitik = new Chart(
                        statushakpolitik, {
                            type: "pie",
                            data: data_statushakpolitik
                        })),
                    null !== statuspekerjaan && (statuspekerjaan = new Chart(
                        statuspekerjaan, {
                            type: "pie",
                            data: data_statuspekerjaan
                        })),
                    null !== jenispekerjaan && (jenispekerjaan = new Chart(
                        jenispekerjaan, {
                            type: "pie",
                            data: data_jenispekerjaan
                        })),

                    null !== pajak && (pajak = new Chart(pajak, {
                        type: "pie",
                        data: data_pajak
                    }))
            }
            static initRandomEasyPieChart() {
                document.querySelectorAll(".js-pie-randomize").forEach((a => {
                    a.addEventListener("click", (t => {
                        a.closest(".block").querySelectorAll(".pie-chart").forEach((
                            a => {
                                jQuery(a).data("easyPieChart").update(Math
                                    .floor(100 * Math.random() + 1))
                            }))
                    }))
                }))
            }
            static init() {
                this.initChartsChartJS(), this.initRandomEasyPieChart()
            }
        }.init());
    </script>
@endpush
