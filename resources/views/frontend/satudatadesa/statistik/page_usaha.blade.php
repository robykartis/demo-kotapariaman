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
                        <h3 class="block-title">Satus Wirausaha</h3>
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
                            <canvas id="chartStatus"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END Lines Chart -->
            </div>
            <div class="col-xl-6">
                <!-- Lines Chart -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Modal Wirausaha</h3>
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
                            <canvas id="chartModal"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END Lines Chart -->
            </div>

            <div class="col-xl-6">
                <!-- Lines Chart -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Perijinan Wirausaha</h3>
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
                            <canvas id="chartPerijinan"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END Lines Chart -->
            </div>


            <div class="col-xl-6">
                <!-- Lines Chart -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Pajak Konsumen</h3>
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
                            <canvas id="chartPajak"></canvas>
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
        var chartStatus = document.getElementById("chartStatus");
        var chartModal = document.getElementById("chartModal");
        var chartPerijinan = document.getElementById("chartPerijinan");
        var chartPajak = document.getElementById("chartPajak");

        Chart.defaults.font.family = "Lato";
        Chart.defaults.font.size = 12;
        Chart.defaults.color = "black";
        var d_status = {
            labels: [
                'Beroperasional (65%)',
                'Tutup Sementara (15%)',
                'Tutup Permanen (20%)',
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
                    "rgba(224, 79, 26, 1)",
                ]
            }]
        };
        var d_modal = {
            labels: [
                ' Milik sendiri (65%)',
                ' Milik Keluarga (15%)	',
                ' Pinjaman Modal (20%)',
                ' Kerjasama (30%)',

            ],
            datasets: [{
                data: [
                    65,
                    15,
                    20,
                    30,
                ],
                backgroundColor: [
                    "rgba(141, 196, 81, 1)",
                    "rgba(255, 177, 25, 1)",
                    "rgba(224, 79, 26, 1)",
                    "rgba(155, 89, 182, 1)",
                ]
            }]
        };
        var d_perijinan = {
            labels: [
                ' Memiliki Ijin Usaha (65%)',
                ' Tidak Memiliki Ijin Usaha (15%)',
            ],
            datasets: [{
                data: [
                    65,
                    15,
                ],
                backgroundColor: [
                    "rgba(141, 196, 81, 1)",
                    "rgba(255, 177, 25, 1)",
                ]
            }]
        };
        var d_pajak = {
            labels: [
                ' Mengenakan Pajak Kepada Konsumen (65%)',
                ' Tidak Mengenakan Pajak Kepada Konsumen (15%)',

            ],
            datasets: [{
                data: [
                    65,
                    15,
                ],
                backgroundColor: [
                    "rgba(141, 196, 81, 1)",
                    "rgba(255, 177, 25, 1)",
                ]
            }]
        };

        var pieChart = new Chart(chartStatus, {
            type: 'pie',
            data: d_status
        });
        var pieChart = new Chart(chartModal, {
            type: 'pie',
            data: d_modal
        });
        var pieChart = new Chart(chartPerijinan, {
            type: 'pie',
            data: d_perijinan
        });
        var pieChart = new Chart(chartPajak, {
            type: 'pie',
            data: d_pajak
        });
    </script>
@endpush
