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
            height: 250px;
        }

        canvas {
            max-height: 60%;
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
            <div class="col-xl-6">
                <!-- Lines Chart -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Total Ternak</h3>
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
                            <canvas id="chartTernak"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END Lines Chart -->
            </div>
            <div class="col-xl-6">
                <!-- Lines Chart -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Total Hewan Peliharaan</h3>
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
                            <canvas id="chartPeliharaan"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END Lines Chart -->
            </div>

            <div class="col-xl-6">
                <!-- Lines Chart -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Total Hewan Vaksin Rabies</h3>
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
                            <canvas id="chartRabies"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END Lines Chart -->
            </div>


            <div class="col-xl-6">
                <!-- Lines Chart -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Total Usaha Bidang Peternakan</h3>
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
                            <canvas id="chartUsaha"></canvas>
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
        var chartTernak = document.getElementById("chartTernak");
        var chartPeliharaan = document.getElementById("chartPeliharaan");
        var chartRabies = document.getElementById("chartRabies");
        var chartUsaha = document.getElementById("chartUsaha");

        Chart.defaults.font.family = "Lato";
        Chart.defaults.font.size = 12;
        Chart.defaults.color = "black";

        var d_ternak = {
            labels: [

                'Ayam (65%)',
                'itik (15%)',
                'Puyuh (20%)',
                'Sapi (30%)',
                'Kerbau (40%)',
                'Kuda (60%)',
                'Kambing (12%)',
                'Domba (13%)',
            ],
            datasets: [{
                data: [
                    65,
                    15,
                    20,
                    30,
                    40,
                    60,
                    12,
                    13,
                    // 25
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
                    // "rgba(110, 44, 0, 1)",
                ]
            }]
        };
        var d_hewan = {
            labels: [

                'Kucing (65%)',
                'Anjing (15%)',
            ],
            datasets: [{
                data: [
                    65,
                    15
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
        var d_usaha = {
            labels: [
                'Kerupuk Kulit (65%)',
                'Telur Asin (15%)',
                'Ayam Potong (20%)',
            ],
            datasets: [{
                data: [
                    65,
                    15,
                    20
                ],
                backgroundColor: [
                    "rgba(141, 196, 81, 1)",
                    "rgba(255, 177, 25, 1)",
                    "rgba(224, 79, 26, 1)"
                ]
            }]
        };


        var pieChart = new Chart(chartTernak, {
            type: 'pie',
            data: d_ternak
        });
        var pieChart = new Chart(chartPeliharaan, {
            type: 'pie',
            data: d_hewan
        });
        var pieChart = new Chart(chartRabies, {
            type: 'pie',
            data: d_hewan
        });
        var pieChart = new Chart(chartUsaha, {
            type: 'pie',
            data: d_usaha
        });
    </script>
@endpush
