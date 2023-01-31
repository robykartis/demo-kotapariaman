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
                        <h3 class="block-title">Total Usaha Ikan</h3>
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
            <div class="col-xl-6">
                <!-- Lines Chart -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Total Jenis Budidaya Ikan</h3>
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
                            <canvas id="chartBudidaya"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END Lines Chart -->
            </div>

            <div class="col-xl-6">
                <!-- Lines Chart -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Total Jenis Alat Tangkap Ikan</h3>
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
                            <canvas id="chartTangkap"></canvas>
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
        var chartUsaha = document.getElementById("chartUsaha");
        var chartBudidaya = document.getElementById("chartBudidaya");
        var chartTangkap = document.getElementById("chartTangkap");


        Chart.defaults.font.family = "Lato";
        Chart.defaults.font.size = 12;
        Chart.defaults.color = "black";

        var d_usaha = {
            labels: [

                'Pelaku Usaha Budidaya Ikan (65%)',
                'Kelompok Usaha Budidaya Ikan (15%)',
                'Pelaku Usaha Ikan Tangkap (20%)',
                'Kelompok Usaha Ikan Tangkap (30%)',
            ],
            datasets: [{
                data: [
                    65,
                    15,
                    20,
                    30
                ],
                backgroundColor: [
                    "rgba(141, 196, 81, 1)",
                    "rgba(255, 177, 25, 1)",
                    "rgba(224, 79, 26, 1)",
                    "rgba(155, 89, 182, 1)"
                ]
            }]
        };
        var d_budidaya = {
            labels: [
                'Ikan Kolam Air Tenang (65%)',
                'Ikan Kolam Air Deras (15%)',
                'Ikan Kolam Terpal (20%)',
                'Ikan Keramba (30%)',
            ],
            datasets: [{
                data: [
                    65,
                    15,
                    20,
                    30
                ],
                backgroundColor: [
                    "rgba(141, 196, 81, 1)",
                    "rgba(255, 177, 25, 1)",
                    "rgba(224, 79, 26, 1)",
                    "rgba(155, 89, 182, 1)"
                ],
                hoverBackgroundColor: [
                    "rgba(141, 196, 81, 5)",
                    "rgba(255, 177, 25, 5)",
                    "rgba(224, 79, 26, 5)",
                    "rgba(155, 89, 182, 5)"
                ]
            }]
        };
        var d_tangkap = {
            labels: [
                ' Pancing Ulur (65%)',
                ' Jaring Insang (15%)',
                ' Payang (20%)',
                ' Bagan (30%)',
                ' Tonda (40%)',
                'Kapal Tangkap Kapal Motor (43%)',
                'Kapal Tangkap Motor Tempel(35%)',
                'Kapal Tangkap Tanpa Motor (10%)',
            ],
            datasets: [{
                data: [
                    65,
                    15,
                    20,
                    30,
                    40,
                    43,
                    35,
                    10
                ],
                backgroundColor: [
                    "rgba(141, 196, 81, 1)",
                    "rgba(255, 177, 25, 1)",
                    "rgba(224, 79, 26, 1)",
                    "rgba(155, 89, 182, 1)",
                    "rgba(84, 153, 199, 1)",
                    "rgba(69, 179, 157, 1)",
                    "rgba(220, 118, 51, 1)",
                    "rgba(241, 148, 138, 1)"
                ]
            }]
        };


        var pieChart = new Chart(chartUsaha, {
            type: 'pie',
            data: d_usaha
        });
        var pieChart = new Chart(chartBudidaya, {
            type: 'pie',
            data: d_budidaya
        });
        var pieChart = new Chart(chartTangkap, {
            type: 'pie',
            data: d_tangkap
        });
    </script>
@endpush
