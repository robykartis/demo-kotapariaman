@extends('frontend.kota.master')
@section('title')
    Kota Pariaman
@endsection
@section('content')
    <div class="content">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-alt bg-body-light px-4 py-2 rounded push">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">{{ $kelompok }}</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">{{ $list }}</li>
            </ol>
        </nav>
        <!-- Full Table -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">{{ $list }}</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option">
                        <i class="si si-settings"></i>
                    </button>
                </div>
            </div>
            <div class="block-content">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-vcenter">
                        <thead>
                            <tr>
                                <th>Data</th>
                                <th style="width: 50%;  height: 50%;">
                                    {{ $list }}
                                </th>
                                {{-- <th class="text-center" style="width: 100px;">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-semibold">
                                    <ul class="nav-main">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                aria-haspopup="true" aria-expanded="false" href="#">
                                                <i class="nav-main-link-icon fa fa-inbox"></i>
                                                <span class="nav-main-link-name">Detail </span>
                                            </a>
                                            <ul class="nav-main-submenu">

                                                <li class="nav-main-item">
                                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                        aria-haspopup="true" aria-expanded="false" href="#">
                                                        <i class="nav-main-link-icon fa fa-inbox"></i>
                                                        <span class="nav-main-link-name">
                                                            Pariaman Utara
                                                        </span>

                                                    </a>
                                                    <ul class="nav-main-submenu">
                                                        @foreach ($desa as $des)
                                                            <li class="nav-main-item">
                                                                <a class="nav-main-link nav-main-link-submenu"
                                                                    data-toggle="submenu" aria-haspopup="true"
                                                                    aria-expanded="false" href="#">
                                                                    <i class="nav-main-link-icon fa fa-inbox"></i>
                                                                    <span
                                                                        class="nav-main-link-name">{{ $des->nama_desa }}</span>
                                                                </a>
                                                                <ul class="nav-main-submenu">

                                                                    <li class="nav-main-item">
                                                                        @foreach ($bangunan as $dta)
                                                                            <a class="nav-main-link" href="#">
                                                                                <i
                                                                                    class="nav-main-link-icon fa fa-chart-pie"></i>
                                                                                <span class="nav-main-link-name">
                                                                                    {{ $dta }}</span>

                                                                            </a>
                                                                        @endforeach
                                                                    </li>

                                                                </ul>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>

                                                <li class="nav-main-item">
                                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                        aria-haspopup="true" aria-expanded="false" href="#">
                                                        <i class="nav-main-link-icon fa fa-inbox"></i>
                                                        <span class="nav-main-link-name">
                                                            Pariaman Tengah
                                                        </span>

                                                    </a>
                                                    <ul class="nav-main-submenu">

                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link nav-main-link-submenu"
                                                                data-toggle="submenu" aria-haspopup="true"
                                                                aria-expanded="false" href="#">
                                                                <i class="nav-main-link-icon fa fa-inbox"></i>
                                                                <span class="nav-main-link-name">Other</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">

                                                                <li class="nav-main-item">
                                                                    @foreach ($bangunan as $dta)
                                                                        <a class="nav-main-link" href="#">
                                                                            <i
                                                                                class="nav-main-link-icon fa fa-chart-pie"></i>
                                                                            <span class="nav-main-link-name">
                                                                                {{ $dta }}</span>

                                                                        </a>
                                                                    @endforeach
                                                                </li>

                                                            </ul>
                                                        </li>

                                                    </ul>
                                                </li>

                                                <li class="nav-main-item">
                                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                        aria-haspopup="true" aria-expanded="false" href="#">
                                                        <i class="nav-main-link-icon fa fa-inbox"></i>
                                                        <span class="nav-main-link-name">
                                                            Pariaman Selatan
                                                        </span>

                                                    </a>
                                                    <ul class="nav-main-submenu">

                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link nav-main-link-submenu"
                                                                data-toggle="submenu" aria-haspopup="true"
                                                                aria-expanded="false" href="#">
                                                                <i class="nav-main-link-icon fa fa-inbox"></i>
                                                                <span class="nav-main-link-name">Other</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">

                                                                <li class="nav-main-item">
                                                                    @foreach ($bangunan as $dta)
                                                                        <a class="nav-main-link" href="#">
                                                                            <i
                                                                                class="nav-main-link-icon fa fa-chart-pie"></i>
                                                                            <span class="nav-main-link-name">
                                                                                {{ $dta }}</span>

                                                                        </a>
                                                                    @endforeach
                                                                </li>

                                                            </ul>
                                                        </li>

                                                    </ul>
                                                </li>

                                                <li class="nav-main-item">
                                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                        aria-haspopup="true" aria-expanded="false" href="#">
                                                        <i class="nav-main-link-icon fa fa-inbox"></i>
                                                        <span class="nav-main-link-name">
                                                            Pariaman Timur
                                                        </span>

                                                    </a>
                                                    <ul class="nav-main-submenu">

                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link nav-main-link-submenu"
                                                                data-toggle="submenu" aria-haspopup="true"
                                                                aria-expanded="false" href="#">
                                                                <i class="nav-main-link-icon fa fa-inbox"></i>
                                                                <span class="nav-main-link-name">Other</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">

                                                                <li class="nav-main-item">
                                                                    @foreach ($bangunan as $dta)
                                                                        <a class="nav-main-link" href="#">
                                                                            <i
                                                                                class="nav-main-link-icon fa fa-chart-pie"></i>
                                                                            <span class="nav-main-link-name">
                                                                                {{ $dta }}</span>

                                                                        </a>
                                                                    @endforeach
                                                                </li>

                                                            </ul>
                                                        </li>

                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </td>

                                <td>

                                    <a class="nav-main-link" href="#">
                                        <div class="block-content block-content-full text-center">
                                            <div class="py-3">
                                                <!-- Pie Chart Container -->
                                                <canvas id="js-chartjs-pie-statistik"></canvas>
                                            </div>
                                        </div>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END Full Table -->
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
                    1, Chart.defaults.elements.line.borderWidth = 3, Chart.defaults.elements.point.radius = 5,
                    Chart.defaults.elements.point.hoverRadius = 7, Chart.defaults.plugins.tooltip.radius = 3,
                    Chart.defaults.plugins.legend.labels.boxWidth = 5;
                let d_statistik = document.getElementById(
                        "js-chartjs-lines"),
                    statistik = document.getElementById("js-chartjs-pie-statistik"),
                    ampalu = document.getElementById("js-chartjs-pie-ampalu"),
                    tjsabar = document.getElementById("js-chartjs-pie-tjsabar"),
                    apar = document.getElementById("js-chartjs-pie-apar"),
                    naras = document.getElementById("js-chartjs-pie-naras"),
                    balainaras = document.getElementById("js-chartjs-pie-balainaras"),
                    cubadaksel = document.getElementById("js-chartjs-pie-cubadaksel"),
                    cubadakut = document.getElementById("js-chartjs-pie-cubadakut"),
                    cubadakair = document.getElementById("js-chartjs-pie-cubadakair"),
                    mangguang = document.getElementById("js-chartjs-pie-mangguang"),
                    narashilir = document.getElementById("js-chartjs-pie-narashilir"),
                    padangbirik = document.getElementById("js-chartjs-pie-padangbirik"),
                    sikapakbarat = document.getElementById("js-chartjs-pie-sikapakbarat"),
                    sikapaktimur = document.getElementById("js-chartjs-pie-sikapaktimur"),
                    sintuak = document.getElementById("js-chartjs-pie-sintuak"),
                    sungrumbai = document.getElementById("js-chartjs-pie-sungrumbai"),
                    tungkalsel = document.getElementById("js-chartjs-pie-tungkalsel"),
                    tungkalut = document.getElementById("js-chartjs-pie-tungkalut");
                d_statistik = {
                        labels: [

                            'Total Sarana Umum (65%)',
                            'Total Wirausaha (15%)',
                            'Total Rumah Tinggal isi (20%)',
                            'Total Rumah Tinggal Kosong (30%)',
                            // 'Luas Lahan Pemukiman (40%)',
                            // 'Luas Lahan Sawah (60%)',
                            // 'Luas Lahan Semak Belukar (80%)',
                            // 'Luas Lahan Pemakaman (70%)',
                            // 'Luas Lahan Hutan (25%)',
                        ],
                        datasets: [{
                            data: [
                                65,
                                15,
                                20,
                                30,
                                // 40,
                                // 60,
                                // 80,
                                // 70,
                                // 25
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

                    null !== statistik && (statistik = new Chart(statistik, {
                        type: "pie",
                        data: d_statistik
                    })),
                    null !== ampalu && (ampalu = new Chart(ampalu, {
                        type: "pie",
                        data: d_statistik
                    })),
                    null !== tjsabar && (tjsabar = new Chart(tjsabar, {
                        type: "pie",
                        data: d_statistik
                    })),
                    null !== apar && (apar = new Chart(apar, {
                        type: "pie",
                        data: d_statistik
                    })),
                    null !== naras && (naras = new Chart(naras, {
                        type: "pie",
                        data: d_statistik
                    })),
                    null !== balainaras && (balainaras = new Chart(balainaras, {
                        type: "pie",
                        data: d_statistik
                    })),
                    null !== cubadaksel && (cubadaksel = new Chart(cubadaksel, {
                        type: "pie",
                        data: d_statistik
                    })),
                    null !== cubadakut && (cubadakut = new Chart(cubadakut, {
                        type: "pie",
                        data: d_statistik
                    })),
                    null !== cubadakair && (cubadakair = new Chart(cubadakair, {
                        type: "pie",
                        data: d_statistik
                    })),
                    null !== mangguang && (mangguang = new Chart(mangguang, {
                        type: "pie",
                        data: d_statistik
                    })),
                    null !== narashilir && (narashilir = new Chart(narashilir, {
                        type: "pie",
                        data: d_statistik
                    })),
                    null !== padangbirik && (padangbirik = new Chart(padangbirik, {
                        type: "pie",
                        data: d_statistik
                    })),
                    null !== sikapakbarat && (sikapakbarat = new Chart(sikapakbarat, {
                        type: "pie",
                        data: d_statistik
                    })),

                    null !== sikapaktimur && (sikapaktimur = new Chart(sikapaktimur, {
                        type: "pie",
                        data: d_statistik
                    })),
                    null !== sintuak && (sintuak = new Chart(sintuak, {
                        type: "pie",
                        data: d_statistik
                    })),
                    null !== sungrumbai && (sungrumbai = new Chart(sungrumbai, {
                        type: "pie",
                        data: d_statistik
                    })),
                    null !== tungkalsel && (tungkalsel = new Chart(tungkalsel, {
                        type: "pie",
                        data: d_statistik
                    })),
                    null !== tungkalut && (tungkalut = new Chart(tungkalut, {
                        type: "pie",
                        data: d_statistik
                    }));
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
