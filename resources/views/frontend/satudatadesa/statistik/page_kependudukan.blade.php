@extends('frontend.satudatadesa.master')
@section('title')
    Apar
@endsection
@section('css-internal')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
@endsection
@section('css-external')
    <style>
        body {
            height: 350px;
        }

        canvas {
            max-height: 100%;
        }
    </style>
@endsection
@section('content')
    <div class="content">
        <div class="row">
            @foreach ($breadcrumbs as $bread)
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt bg-body-light px-4 py-2 rounded push">
                        <li class="breadcrumb-item">
                            <a href="{{ $bread['link'] }}">{{ $bread['nama'] }}</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $bread['sub'] }}</li>
                    </ol>
                </nav>
            @endforeach
        </div>





        <div class="row">
            <div class="col-xl-6 col-md-6">
                <!-- Lines Chart -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Total Kartu Keluarga</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full text-center">
                        <div class="py-3">
                            <!-- Lines Chart Container -->

                            <canvas id="chartKK"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END Lines Chart -->
            </div>
            <div class="col-xl-6 col-md-6">
                <!-- Lines Chart -->
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
                            <!-- Lines Chart Container -->
                            <canvas id="chartKemiskinan"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END Lines Chart -->
            </div>

            <div class="col-xl-6 col-md-6">
                <!-- Lines Chart -->
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
                            <!-- Lines Chart Container -->
                            <canvas id="chartTotpenduduk"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END Lines Chart -->
            </div>


            <div class="col-xl-6 col-md-6">
                <!-- Lines Chart -->
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
                            <!-- Lines Chart Container -->
                            <canvas id="chartStatustinggal" style="height: 100%"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END Lines Chart -->
            </div>

            <div class="col-xl-6 col-md-6">
                <!-- Lines Chart -->
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
                            <!-- Lines Chart Container -->
                            <canvas id="chartAgama"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END Lines Chart -->
            </div>

            <div class="col-xl-6 col-md-6">
                <!-- Lines Chart -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Status Pernikahan Penduduk</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full text-center">
                        <div class="py-3">
                            <!-- Lines Chart Container -->
                            <canvas id="chartNikah"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END Lines Chart -->
            </div>


            <div class="col-xl-6 col-md-6">
                <!-- Lines Chart -->
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
                            <!-- Lines Chart Container -->
                            <canvas id="chartWarganegara"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END Lines Chart -->
            </div>


            <div class="col-xl-6 col-md-6">
                <!-- Lines Chart -->
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
                            <!-- Lines Chart Container -->
                            <canvas id="chartPolitik"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END Lines Chart -->
            </div>

            <div class="col-xl-6 col-md-6">
                <!-- Lines Chart -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Status Pekerja Penduduk</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full text-center">
                        <div class="py-3">
                            <!-- Lines Chart Container -->
                            <canvas id="chartStatuspekerjaan"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END Lines Chart -->
            </div>

            <div class="col-xl-6" style="height: 100%">
                <!-- Lines Chart -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Jenis Pekerjaan Penduduk</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full text-center">
                        <div class="py-3">
                            <!-- Lines Chart Container -->
                            <canvas id="chartJeniskerja" style="height: 100%"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END Lines Chart -->
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
    <script>
        Dashmix.helpersOnLoad(['jq-easy-pie-chart', 'jq-sparkline']);
    </script>
@endpush
@push('javascript-internal')
    <script>
        var chartKK = document.getElementById("chartKK");
        var chartKemiskinan = document.getElementById("chartKemiskinan");
        var chartTotpenduduk = document.getElementById("chartTotpenduduk");
        var chartStatustinggal = document.getElementById("chartStatustinggal");
        var chartAgama = document.getElementById("chartAgama");
        var chartNikah = document.getElementById("chartNikah");
        var chartWarganegara = document.getElementById("chartWarganegara");
        var chartPolitik = document.getElementById("chartPolitik");
        var chartStatuspekerjaan = document.getElementById("chartStatuspekerjaan");
        var chartJeniskerja = document.getElementById("chartJeniskerja");
        var chartJeniskerja = document.getElementById("chartJeniskerja");

        Chart.defaults.font.family = "Lato";
        Chart.defaults.font.size = 12;
        Chart.defaults.color = "black";
        var d_kk = {
            labels: [
                'KK Dalam Kota (65%)',
                'KK Luar Kota (15%)',
            ],
            datasets: [{
                data: [
                    65,
                    15,
                    // 20
                ],
                backgroundColor: [
                    "rgba(141, 196, 81, 1)",
                    "rgba(255, 177, 25, 1)",
                    "rgba(224, 79, 26, 1)",
                ]
            }]
        };


        var d_kemiskinan = {
            labels: [
                'KK Mampu (60%)',
                'KK Biasa (20%)',
                'KK Miskin (15%)',
                'KK Miskin Ekstrim (10%)',
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
                ]
            }]
        };

        var d_penduduk = {
            labels: [

                'Laki - laki (65%)',
                'Perempuan (15%)',

            ],
            datasets: [{
                data: [
                    65,
                    15,
                ],
                backgroundColor: [
                    "rgba(141, 196, 81, 1)",
                    "rgba(255, 177, 25, 1)"
                ]
            }]
        };
        var d_kelamin = {
            labels: [
                ' Kelamin Laki-laki (60%)',
                ' Perempuan (40%)',
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
        };

        var d_tinggal = {
            labels: [
                ' Penduduk Menetap (60%)',
                ' Penduduk Merantau (40%)',
            ],
            datasets: [{
                data: [
                    60,
                    40,

                ],
                backgroundColor: [
                    "rgba(141, 196, 81, 1)",
                    "rgba(255, 177, 25, 1)",

                ]

            }]
        };
        var d_agama = {
            labels: [
                ' Beragama Islam (60%)',
                ' Beragama Protestan (10%)',
                ' Beragama Katolik (9%)',
                ' Beragama Budha (5%)',
                ' Beragama Hindu (5%)',
            ],
            datasets: [{
                data: [
                    60,
                    10,
                    9,
                    5,
                    5
                ],
                backgroundColor: [
                    "rgba(141, 196, 81, 1)",
                    "rgba(255, 177, 25, 1)",
                    "rgba(224, 79, 26, 1)",
                    "rgba(155, 89, 182, 1)",
                    "rgba(84, 153, 199, 1)",
                ]
            }]
        };
        var d_pernikahan = {
            labels: [
                ' Kawin (60%)',
                ' Tidak Kawin (10%)',
                ' Janda (9%)',
                ' Duda (5%)',
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
                ]
            }]
        };
        var d_kewarganegaraan = {
            labels: [
                ' WNI (60%)',
                ' WNA(10%)',
            ],
            datasets: [{
                data: [
                    60,
                    10,
                ],
                backgroundColor: [
                    "rgba(141, 196, 81, 1)",
                    "rgba(255, 177, 25, 1)",

                ]
            }]
        };
        var d_politik = {
            labels: [
                ' Hak Pilih Politik (60%)',
                ' Tidak Memiliki Hak Politik(40%)',
            ],
            datasets: [{
                data: [
                    60,
                    40,
                ],
                backgroundColor: [
                    "rgba(141, 196, 81, 1)",
                    "rgba(255, 177, 25, 1)",
                ]
            }]
        };
        var d_pekerjaan = {
            labels: [
                ' Bekerja (30%)',
                ' Tidak Bekerja (10%)',
                ' Sedang Mencari Pekerjaan (10%)',
                ' Bersekolah (11%)',
                ' Mengurus Rumah Tangga (39%)',
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
                ]
            }]
        };
        var d_jenispekerjaan = {
            labels: [
                ' Petani Pemilik Lahan (30%)',
                ' Petani Penyewa (5%)',
                ' Buruh Tani (10%)',
                ' Nelayan Pemilik Kapal / Perahu (2%)',
                ' Nelayan Penyewa Kapal / Perahu (2%)',
                ' Buruh Nelayan (2%)',
                ' Guru (2%)',
                ' Pedagang (2%)',
                ' Pekerja Pengolahan / Industri (2%)',
                ' PNS (12%)',
                ' TNI (2%)',
                ' Polisi (9%)',
                ' Perangkat Desa (2%)',
                ' Pegawai Honorer Pemda (10%)',
                ' TKI (2%)',
                ' Tenaga Kesehatan (2%)',
                ' Buruh Harian Lepas (2%)',
                ' Tenaga Kerja PPPK (2%)',
                ' Tenaga Kerja Lainya (2%)',
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
                ]
            }]
        };
        var pieChart = new Chart(chartKK, {
            type: 'pie',
            data: d_kk
        });
        var pieChart = new Chart(chartKemiskinan, {
            type: 'pie',
            data: d_kemiskinan
        });
        var pieChart = new Chart(chartTotpenduduk, {
            type: 'pie',
            data: d_penduduk
        });
        var pieChart = new Chart(chartStatustinggal, {
            type: 'pie',
            data: d_tinggal
        });
        var pieChart = new Chart(chartAgama, {
            type: 'pie',
            data: d_agama
        });
        var pieChart = new Chart(chartNikah, {
            type: 'pie',
            data: d_pernikahan
        });
        var pieChart = new Chart(chartWarganegara, {
            type: 'pie',
            data: d_kewarganegaraan
        });
        var pieChart = new Chart(chartPolitik, {
            type: 'pie',
            data: d_politik
        });
        var pieChart = new Chart(chartStatuspekerjaan, {
            type: 'pie',
            data: d_pekerjaan
        });
        var pieChart = new Chart(chartJeniskerja, {
            type: 'pie',
            data: d_jenispekerjaan
        });
    </script>
@endpush
