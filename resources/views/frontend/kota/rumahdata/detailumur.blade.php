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
                <li class="breadcrumb-item active" aria-current="page">Detai Umur</li>
            </ol>
        </nav>
        <!-- Full Table -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Detail Total Umur Penduduk</h3>
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
                                @foreach (range(0, 75) as $item)
                                    <th style="width: 50%;">{{ $item }} Tahun</th>
                                @endforeach
                                <th style="width: 500px;">76 + Tahun</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @php
                                    $ba = 0;
                                @endphp
                                <td class="fw-semibold">
                                    Kecamtan Pariaman Utara
                                </td>
                                @foreach (range(0, 75) as $item)
                                    <td style="width: 30%;" class="fw-semibold">{{ $ab = rand(0, 85) }}</td>
                                    @php
                                        $ba += $ab;
                                    @endphp
                                @endforeach
                                <td style="width: 30%;">{{ rand(0, 9) }}</td>

                            </tr>
                            @foreach ($desa as $des)
                                <tr>
                                    <td class="fw-semibold">
                                        {{ $des->nama_desa }}
                                    </td>
                                    @foreach (range(0, 75) as $item)
                                        <td style="width: 30%;">{{ rand(0, 25) }}</td>
                                    @endforeach
                                    <td style="width: 30%;">{{ rand(0, 9) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>




            </div>
        </div>
        <!-- END Full Table -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Detail Total Umur Penduduk Laki-laki</h3>
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
                                @foreach (range(0, 75) as $item)
                                    <th style="width: 50%;">{{ $item }} Tahun</th>
                                @endforeach
                                <th style="width: 500px;">76 + Tahun</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @php
                                    $ba = 0;
                                @endphp
                                <td class="fw-semibold">
                                    Kecamtan Pariaman Utara
                                </td>
                                @foreach (range(0, 75) as $item)
                                    <td style="width: 30%;" class="fw-semibold">{{ $ab = rand(0, 85) }}</td>
                                    @php
                                        $ba += $ab;
                                    @endphp
                                @endforeach
                                <td style="width: 30%;">{{ rand(0, 9) }}</td>

                            </tr>
                            @foreach ($desa as $des)
                                <tr>
                                    <td class="fw-semibold">
                                        {{ $des->nama_desa }}
                                    </td>
                                    @foreach (range(0, 75) as $item)
                                        <td style="width: 30%;">{{ rand(0, 25) }}</td>
                                    @endforeach
                                    <td style="width: 30%;">{{ rand(0, 9) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Detail Total Umur Penduduk Perempuan</h3>
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
                                @foreach (range(0, 75) as $item)
                                    <th style="width: 50%;">{{ $item }} Tahun</th>
                                @endforeach
                                <th style="width: 500px;">76 + Tahun</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @php
                                    $ba = 0;
                                @endphp
                                <td class="fw-semibold">
                                    Kecamtan Pariaman Utara
                                </td>
                                @foreach (range(0, 75) as $item)
                                    <td style="width: 30%;" class="fw-semibold">{{ $ab = rand(0, 85) }}</td>
                                    @php
                                        $ba += $ab;
                                    @endphp
                                @endforeach
                                <td style="width: 30%;">{{ rand(0, 9) }}</td>

                            </tr>
                            @foreach ($desa as $des)
                                <tr>
                                    <td class="fw-semibold">
                                        {{ $des->nama_desa }}
                                    </td>
                                    @foreach (range(0, 75) as $item)
                                        <td style="width: 30%;">{{ rand(0, 25) }}</td>
                                    @endforeach
                                    <td style="width: 30%;">{{ rand(0, 9) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
