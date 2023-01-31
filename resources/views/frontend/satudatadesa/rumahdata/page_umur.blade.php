@extends('frontend.satudatadesa.master')
@section('title')
    Apar
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
            <div class="col-xl-12">
                <div class="block block-rounded">
                    <div class="block-content block-content-full">
                        <p class="text-uppercase fw-semibold text-center mt-2 mb-4">
                            Total Umur Penduduk
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>

                                        <th>Data </th>
                                        @foreach (range(0, 75) as $item)
                                            <th style="width: 50%;"class="fw-bold">{{ $item }} Tahun</th>
                                        @endforeach
                                        <th style="width: 500px;"class="fw-bold">76 + Tahun</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @php
                                            $ba = 0;
                                        @endphp
                                        <td class="fw-semibold">
                                            Desa Apar
                                        </td>
                                        @foreach (range(0, 75) as $item)
                                            <td style="width: 30%;" class="fw-semibold">{{ $ab = rand(0, 85) }}</td>
                                            @php
                                                $ba += $ab;
                                            @endphp
                                        @endforeach
                                        <td style="width: 30%;">{{ rand(0, 9) }}</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="block block-rounded">
                    <div class="block-content block-content-full">
                        <p class="text-uppercase fw-semibold text-center mt-2 mb-4">
                            Total Umur Penduduk Laki-laki
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>

                                        <th style="width: 100px;">Data </th>
                                        @foreach (range(0, 75) as $item)
                                            <th style="width: 50%;"class="fw-bold">{{ $item }} Tahun</th>
                                        @endforeach
                                        <th style="width: 500px;"class="fw-bold">76 + Tahun</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @php
                                            $ba = 0;
                                        @endphp
                                        <td class="fw-semibold">
                                            Desa Apar
                                        </td>
                                        @foreach (range(0, 75) as $item)
                                            <td style="width: 30%;" class="fw-semibold">{{ $ab = rand(0, 85) }}</td>
                                            @php
                                                $ba += $ab;
                                            @endphp
                                        @endforeach
                                        <td style="width: 30%;">{{ rand(0, 9) }}</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="block block-rounded">
                    <div class="block-content block-content-full">
                        <p class="text-uppercase fw-semibold text-center mt-2 mb-4">
                            Total Umur Penduduk Perempuan
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>

                                        <th>Data </th>
                                        @foreach (range(0, 75) as $item)
                                            <th style="width: 50%;"class="fw-bold">{{ $item }} Tahun</th>
                                        @endforeach
                                        <th style="width: 500px;"class="fw-bold">76 + Tahun</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @php
                                            $ba = 0;
                                        @endphp
                                        <td class="fw-semibold">
                                            Desa Apar
                                        </td>
                                        @foreach (range(0, 75) as $item)
                                            <td style="width: 30%;" class="fw-semibold">{{ $ab = rand(0, 85) }}</td>
                                            @php
                                                $ba += $ab;
                                            @endphp
                                        @endforeach
                                        <td style="width: 30%;">{{ rand(0, 9) }}</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('javascript-external')
    <!-- jQuery (required for DataTables plugin) -->
    <script src="{{ asset('assets/js/lib/jquery.min.js') }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/datatables-buttons-jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/datatables-buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/datatables-buttons/buttons.html5.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('assets/js/pages/be_tables_datatables.min.js') }}"></script>
@endpush
@push('css-external')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css') }}">
@endpush
