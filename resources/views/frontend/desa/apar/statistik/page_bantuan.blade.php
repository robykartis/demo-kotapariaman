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


        <div class="row justify-content-center">
            <div class="col-xl-8">
                <!-- Pie Chart -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Bantuan Sosial</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full text-center">
                        <div class="py-3">
                            <!-- Pie Chart Container -->
                            <canvas id="js-chartjs-bantuansosial"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END Pie Chart -->
            </div>

            <!-- END Best Media -->
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
                let data_bantuan = document.getElementById("js-chartjs-lines"),

                    bantuansosial = document.getElementById("js-chartjs-bantuansosial");
                data_bantuan = {
                    labels: [

                        'Total Penerima BLT dana Desa (65%)',
                        'Total Penerima BLT dana Kota (15%)',
                        'Total Penerima BLT dana Provinsi  (20%)',
                        'Total Penerima Program Keluarga Harapan ( PKH ) (30%)',
                        'Total Penerima Bantuan Sosial Tunai (40%)',
                        'Total Penerima BPNT (60%)',
                        'Total Penerima Bantuan Presiden (80%)',
                        'Total Penerima Bantuan UMKM (70%)',
                        'Total Penerima Bantuan Untuk Pekerja (25%)',
                        'Total Penerima Bantuan Ketahanan Pangan  (25%)',
                        'Total Penerima Bantuan Lainnya (25%)',

                    ],
                    datasets: [{
                        data: [
                            65,
                            15,
                            20,
                            30,
                            40,
                            60,
                            80,
                            70,
                            25,
                            25,
                            25
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
                            "rgba(19, 141, 117, 1)",
                            "rgba(169, 50, 38, 1)",
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
                            "rgba(19, 141, 117, 5)",
                            "rgba(169, 50, 38, 5)",
                        ]
                    }]
                }, null !== bantuansosial && (bantuansosial = new Chart(bantuansosial, {
                    type: "pie",
                    data: data_bantuan
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
