@extends('frontend.kecamatan.utara.master')
@section('title')
    Apar
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

                                <th>Nama</th>
                                <th style="width: 15%;">Data</th>
                                {{-- <th class="text-center" style="width: 100px;">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($data as $dta)
                                <tr>

                                    <td class="fw-semibold">
                                        <ul class="nav-main">
                                            <li class="nav-main-item">
                                                <div
                                                    class="block-content block-content-sm block-content-full d-flex align-items-center justify-content-between">
                                                    <div class="me-3">
                                                        <input type="date" class="form-control">
                                                    </div>

                                                </div>
                                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                    aria-haspopup="true" aria-expanded="false" href="#">

                                                    <span class="nav-main-link-name">{{ $dta }}</span>
                                                </a>
                                                <ul class="nav-main-submenu">



                                                    <li class="nav-main-item">
                                                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                            aria-haspopup="true" aria-expanded="false" href="#">
                                                            <span class="nav-main-link-name">Data</span>
                                                            <span
                                                                class="nav-main-link-badge badge rounded-pill bg-primary">{{ $nilai }}
                                                                {{ $satuan }}</span>
                                                        </a>
                                                        <ul class="nav-main-submenu">
                                                            <li class="nav-main-item">
                                                                @foreach ($desa as $des)
                                                                    <a class="nav-main-link" href="#">
                                                                        <i class="nav-main-link-icon fa fa-sticky-note"></i>
                                                                        <span class="nav-main-link-name">
                                                                            {{ $des->nama_desa }} </span>
                                                                        <span
                                                                            class="nav-main-link-badge badge rounded-pill bg-warning">{{ $subnilai }}
                                                                            {{ $satuan }}</span>
                                                                    </a>
                                                                @endforeach
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>

                                    <td>
                                        <span class="badge bg-primary">{{ $nilai }} {{ $satuan }}</span>
                                    </td>








                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END Full Table -->


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
