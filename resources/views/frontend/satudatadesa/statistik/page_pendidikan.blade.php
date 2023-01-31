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
            height: 450px;
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
                        <h3 class="block-title">Pendidikan</h3>
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
                            <canvas id="chartPendidikan"></canvas>
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
        var chartPendidikan = document.getElementById("chartPendidikan");

        Chart.defaults.font.family = "Lato";
        Chart.defaults.font.size = 12;
        Chart.defaults.color = "black";

        var d_pendidikan = {
            labels: [
                'Tidak Sekolah (65%)',
                'Tamatan SD dan Sederajat (15%)',
                'Tamatan SMP dan Sederajat  (20%)',
                'Tamatan SMA dan Sederajat (30%)',
                'Tamatan Diploma 1-3 (40%)',
                'Tamatan S1 dan Sederajat (60%)',
                'Tamatan S2 dan Sederajat (80%)',
                'Tamatan S3 dan Sederajat (70%)',
                'Tamatan Pesantren, Seminari , Wihara dan Sejenisnya (25%)',
                'Tamatan Sekolah Lainnya (25%)',
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
                ]
            }]
        };

        var pieChart = new Chart(chartPendidikan, {
            type: 'pie',
            data: d_pendidikan
        });
    </script>
@endpush
