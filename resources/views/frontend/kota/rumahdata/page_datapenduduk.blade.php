@extends('frontend.kota.master')
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
                            <tr>
                                <td class="fw-semibold">
                                    <ul class="nav-main">
                                        <li class="nav-main-item">
                                            <p class="fs-lg mb-0">
                                                Kartu Keluarga Masuk
                                            </p>
                                            <p class="fs-lg mb-0">
                                                <input type="date" class="form-control">
                                            </p>
                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                aria-haspopup="true" aria-expanded="false" href="#">
                                                <span class="nav-main-link-name">{{ $kkmasuk }}</span>
                                                <span
                                                    class="nav-main-link-badge badge rounded-pill bg-warning">{{ $nilai }}
                                                    {{ $satuan }}</span>
                                            </a>
                                            <ul class="nav-main-submenu">

                                                @foreach ($kecamatan as $kec)
                                                    <li class="nav-main-item">

                                                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                            aria-haspopup="true" aria-expanded="false" href="#">
                                                            <span class="nav-main-link-name">{{ $kec }}</span>
                                                            <span
                                                                class="nav-main-link-badge badge rounded-pill bg-warning">{{ $subnilai }}
                                                                {{ $satuan }}</span>
                                                        </a>
                                                        <ul class="nav-main-submenu">
                                                            <li class="nav-main-item">
                                                                <a class="nav-main-link nav-main-link-submenu"
                                                                    data-toggle="submenu" aria-haspopup="true"
                                                                    aria-expanded="false" href="#">
                                                                    <span class="nav-main-link-name">Data Desa /
                                                                        Kleurahan</span>
                                                                </a>
                                                                <ul class="nav-main-submenu">
                                                                    <li class="nav-main-item">
                                                                        @foreach ($desa as $des)
                                                                            <a class="nav-main-link" href="#">
                                                                                <i
                                                                                    class="nav-main-link-icon fa fa-sticky-note"></i>
                                                                                <span
                                                                                    class="nav-main-link-name">{{ $des->nama_desa }}
                                                                                    {{ $satuan }}</span>
                                                                                <span
                                                                                    class="nav-main-link-badge badge rounded-pill bg-warning">{{ $nilaidesa }}
                                                                                    {{ $satuan }}</span>
                                                                            </a>
                                                                        @endforeach

                                                                    </li>

                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                @endforeach

                                                <li class="nav-main-item">

                                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                        aria-haspopup="true" aria-expanded="false" href="#">
                                                        <span class="nav-main-link-name">Pariaman Tengah</span>
                                                        <span
                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                    </a>

                                                    <ul class="nav-main-submenu">

                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link nav-main-link-submenu"
                                                                data-toggle="submenu" aria-haspopup="true"
                                                                aria-expanded="false" href="#">
                                                                <span class="nav-main-link-name">Data Desa /
                                                                    Kleurahan</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">

                                                                    <a class="nav-main-link" href="#">
                                                                        <i class="nav-main-link-icon fa fa-sticky-note"></i>
                                                                        <span class="nav-main-link-name">Other</span>
                                                                        <span
                                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="nav-main-item">
                                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                        aria-haspopup="true" aria-expanded="false" href="#">
                                                        <span class="nav-main-link-name">Pariaman Selatan</span>
                                                        <span
                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                    </a>
                                                    <ul class="nav-main-submenu">
                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link nav-main-link-submenu"
                                                                data-toggle="submenu" aria-haspopup="true"
                                                                aria-expanded="false" href="#">
                                                                <span class="nav-main-link-name">Data Desa /
                                                                    Kleurahan</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <i class="nav-main-link-icon fa fa-sticky-note"></i>
                                                                        <span class="nav-main-link-name">Other</span>
                                                                        <span
                                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="nav-main-item">
                                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                        aria-haspopup="true" aria-expanded="false" href="#">
                                                        <span class="nav-main-link-name">Pariaman Timur</span>
                                                        <span
                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                    </a>
                                                    <ul class="nav-main-submenu">
                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link nav-main-link-submenu"
                                                                data-toggle="submenu" aria-haspopup="true"
                                                                aria-expanded="false" href="#">
                                                                <span class="nav-main-link-name">Data Desa /
                                                                    Kleurahan</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <i
                                                                            class="nav-main-link-icon fa fa-sticky-note"></i>
                                                                        <span class="nav-main-link-name">Other</span>
                                                                        <span
                                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                                    </a>
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
                                    <span class="badge bg-primary">{{ $nilai }} {{ $satuan }}</span>
                                </td>
                            </tr>


                            <tr>
                                <td class="fw-semibold">
                                    <ul class="nav-main">
                                        <li class="nav-main-item">
                                            <p class="fs-lg mb-0">
                                                Kartu Keluarga Keluar
                                            </p>
                                            <p class="fs-lg mb-0">
                                                <input type="date" class="form-control">
                                            </p>
                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                aria-haspopup="true" aria-expanded="false" href="#">
                                                <span class="nav-main-link-name">{{ $kkkeluar }}</span>
                                                <span
                                                    class="nav-main-link-badge badge rounded-pill bg-warning">{{ $nilai }}
                                                    {{ $satuan }}</span>
                                            </a>
                                            <ul class="nav-main-submenu">

                                                @foreach ($kecamatan as $kec)
                                                    <li class="nav-main-item">

                                                        <a class="nav-main-link nav-main-link-submenu"
                                                            data-toggle="submenu" aria-haspopup="true"
                                                            aria-expanded="false" href="#">
                                                            <span class="nav-main-link-name">{{ $kec }}</span>
                                                            <span
                                                                class="nav-main-link-badge badge rounded-pill bg-warning">{{ $subnilai }}
                                                                {{ $satuan }}</span>
                                                        </a>
                                                        <ul class="nav-main-submenu">
                                                            <li class="nav-main-item">
                                                                <a class="nav-main-link nav-main-link-submenu"
                                                                    data-toggle="submenu" aria-haspopup="true"
                                                                    aria-expanded="false" href="#">
                                                                    <span class="nav-main-link-name">Data Desa /
                                                                        Kleurahan</span>
                                                                </a>
                                                                <ul class="nav-main-submenu">
                                                                    <li class="nav-main-item">
                                                                        @foreach ($desa as $des)
                                                                            <a class="nav-main-link" href="#">
                                                                                <i
                                                                                    class="nav-main-link-icon fa fa-sticky-note"></i>
                                                                                <span
                                                                                    class="nav-main-link-name">{{ $des->nama_desa }}
                                                                                    {{ $satuan }}</span>
                                                                                <span
                                                                                    class="nav-main-link-badge badge rounded-pill bg-warning">{{ $nilaidesa }}
                                                                                    {{ $satuan }}</span>
                                                                            </a>
                                                                        @endforeach

                                                                    </li>

                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                @endforeach

                                                <li class="nav-main-item">

                                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                        aria-haspopup="true" aria-expanded="false" href="#">
                                                        <span class="nav-main-link-name">Pariaman Tengah</span>
                                                        <span
                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                    </a>

                                                    <ul class="nav-main-submenu">

                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link nav-main-link-submenu"
                                                                data-toggle="submenu" aria-haspopup="true"
                                                                aria-expanded="false" href="#">
                                                                <span class="nav-main-link-name">Data Desa /
                                                                    Kleurahan</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">

                                                                    <a class="nav-main-link" href="#">
                                                                        <i
                                                                            class="nav-main-link-icon fa fa-sticky-note"></i>
                                                                        <span class="nav-main-link-name">Other</span>
                                                                        <span
                                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="nav-main-item">
                                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                        aria-haspopup="true" aria-expanded="false" href="#">
                                                        <span class="nav-main-link-name">Pariaman Selatan</span>
                                                        <span
                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                    </a>
                                                    <ul class="nav-main-submenu">
                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link nav-main-link-submenu"
                                                                data-toggle="submenu" aria-haspopup="true"
                                                                aria-expanded="false" href="#">
                                                                <span class="nav-main-link-name">Data Desa /
                                                                    Kleurahan</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <i
                                                                            class="nav-main-link-icon fa fa-sticky-note"></i>
                                                                        <span class="nav-main-link-name">Other</span>
                                                                        <span
                                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="nav-main-item">
                                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                        aria-haspopup="true" aria-expanded="false" href="#">
                                                        <span class="nav-main-link-name">Pariaman Timur</span>
                                                        <span
                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                    </a>
                                                    <ul class="nav-main-submenu">
                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link nav-main-link-submenu"
                                                                data-toggle="submenu" aria-haspopup="true"
                                                                aria-expanded="false" href="#">
                                                                <span class="nav-main-link-name">Data Desa /
                                                                    Kleurahan</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <i
                                                                            class="nav-main-link-icon fa fa-sticky-note"></i>
                                                                        <span class="nav-main-link-name">Other</span>
                                                                        <span
                                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                                    </a>
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
                                    <span class="badge bg-primary">{{ $nilai }} {{ $satuan }}</span>
                                </td>
                            </tr>


                            <tr>
                                <td class="fw-semibold">
                                    <ul class="nav-main">
                                        <li class="nav-main-item">
                                            <p class="fs-lg mb-0">
                                                Kartu Keluarga Pecahan
                                            </p>
                                            <p class="fs-lg mb-0">
                                                <input type="date" class="form-control">
                                            </p>
                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                aria-haspopup="true" aria-expanded="false" href="#">
                                                <span class="nav-main-link-name">{{ $kkpecahan }}</span>
                                                <span
                                                    class="nav-main-link-badge badge rounded-pill bg-warning">{{ $nilai }}
                                                    {{ $satuan }}</span>
                                            </a>
                                            <ul class="nav-main-submenu">

                                                @foreach ($kecamatan as $kec)
                                                    <li class="nav-main-item">

                                                        <a class="nav-main-link nav-main-link-submenu"
                                                            data-toggle="submenu" aria-haspopup="true"
                                                            aria-expanded="false" href="#">
                                                            <span class="nav-main-link-name">{{ $kec }}</span>
                                                            <span
                                                                class="nav-main-link-badge badge rounded-pill bg-warning">{{ $subnilai }}
                                                                {{ $satuan }}</span>
                                                        </a>
                                                        <ul class="nav-main-submenu">
                                                            <li class="nav-main-item">
                                                                <a class="nav-main-link nav-main-link-submenu"
                                                                    data-toggle="submenu" aria-haspopup="true"
                                                                    aria-expanded="false" href="#">
                                                                    <span class="nav-main-link-name">Data Desa /
                                                                        Kleurahan</span>
                                                                </a>
                                                                <ul class="nav-main-submenu">
                                                                    <li class="nav-main-item">
                                                                        @foreach ($desa as $des)
                                                                            <a class="nav-main-link" href="#">
                                                                                <i
                                                                                    class="nav-main-link-icon fa fa-sticky-note"></i>
                                                                                <span
                                                                                    class="nav-main-link-name">{{ $des->nama_desa }}
                                                                                    {{ $satuan }}</span>
                                                                                <span
                                                                                    class="nav-main-link-badge badge rounded-pill bg-warning">{{ $nilaidesa }}
                                                                                    {{ $satuan }}</span>
                                                                            </a>
                                                                        @endforeach

                                                                    </li>

                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                @endforeach

                                                <li class="nav-main-item">

                                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                        aria-haspopup="true" aria-expanded="false" href="#">
                                                        <span class="nav-main-link-name">Pariaman Tengah</span>
                                                        <span
                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                    </a>

                                                    <ul class="nav-main-submenu">

                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link nav-main-link-submenu"
                                                                data-toggle="submenu" aria-haspopup="true"
                                                                aria-expanded="false" href="#">
                                                                <span class="nav-main-link-name">Data Desa /
                                                                    Kleurahan</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">

                                                                    <a class="nav-main-link" href="#">
                                                                        <i
                                                                            class="nav-main-link-icon fa fa-sticky-note"></i>
                                                                        <span class="nav-main-link-name">Other</span>
                                                                        <span
                                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="nav-main-item">
                                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                        aria-haspopup="true" aria-expanded="false" href="#">
                                                        <span class="nav-main-link-name">Pariaman Selatan</span>
                                                        <span
                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                    </a>
                                                    <ul class="nav-main-submenu">
                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link nav-main-link-submenu"
                                                                data-toggle="submenu" aria-haspopup="true"
                                                                aria-expanded="false" href="#">
                                                                <span class="nav-main-link-name">Data Desa /
                                                                    Kleurahan</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <i
                                                                            class="nav-main-link-icon fa fa-sticky-note"></i>
                                                                        <span class="nav-main-link-name">Other</span>
                                                                        <span
                                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="nav-main-item">
                                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                        aria-haspopup="true" aria-expanded="false" href="#">
                                                        <span class="nav-main-link-name">Pariaman Timur</span>
                                                        <span
                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                    </a>
                                                    <ul class="nav-main-submenu">
                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link nav-main-link-submenu"
                                                                data-toggle="submenu" aria-haspopup="true"
                                                                aria-expanded="false" href="#">
                                                                <span class="nav-main-link-name">Data Desa /
                                                                    Kleurahan</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <i
                                                                            class="nav-main-link-icon fa fa-sticky-note"></i>
                                                                        <span class="nav-main-link-name">Other</span>
                                                                        <span
                                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                                    </a>
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
                                    <span class="badge bg-primary">{{ $nilai }} {{ $satuan }}</span>
                                </td>
                            </tr>


                            <tr>
                                <td class="fw-semibold">
                                    <ul class="nav-main">
                                        <li class="nav-main-item">
                                            <p class="fs-lg mb-0">
                                                Data Penduduk Masuk
                                            </p>
                                            <p class="fs-lg mb-0">
                                                <input type="date" class="form-control">
                                            </p>
                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                aria-haspopup="true" aria-expanded="false" href="#">
                                                <span class="nav-main-link-name">{{ $penmasuk }}</span>
                                                <span
                                                    class="nav-main-link-badge badge rounded-pill bg-warning">{{ $nilai }}
                                                    {{ $satuan }}</span>
                                            </a>
                                            <ul class="nav-main-submenu">

                                                @foreach ($kecamatan as $kec)
                                                    <li class="nav-main-item">

                                                        <a class="nav-main-link nav-main-link-submenu"
                                                            data-toggle="submenu" aria-haspopup="true"
                                                            aria-expanded="false" href="#">
                                                            <span class="nav-main-link-name">{{ $kec }}</span>
                                                            <span
                                                                class="nav-main-link-badge badge rounded-pill bg-warning">{{ $subnilai }}
                                                                {{ $satuan }}</span>
                                                        </a>
                                                        <ul class="nav-main-submenu">
                                                            <li class="nav-main-item">
                                                                <a class="nav-main-link nav-main-link-submenu"
                                                                    data-toggle="submenu" aria-haspopup="true"
                                                                    aria-expanded="false" href="#">
                                                                    <span class="nav-main-link-name">Data Desa /
                                                                        Kleurahan</span>
                                                                </a>
                                                                <ul class="nav-main-submenu">
                                                                    <li class="nav-main-item">
                                                                        @foreach ($desa as $des)
                                                                            <a class="nav-main-link" href="#">
                                                                                <i
                                                                                    class="nav-main-link-icon fa fa-sticky-note"></i>
                                                                                <span
                                                                                    class="nav-main-link-name">{{ $des->nama_desa }}
                                                                                    {{ $satuan }}</span>
                                                                                <span
                                                                                    class="nav-main-link-badge badge rounded-pill bg-warning">{{ $nilaidesa }}
                                                                                    {{ $satuan }}</span>
                                                                            </a>
                                                                        @endforeach

                                                                    </li>

                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                @endforeach

                                                <li class="nav-main-item">

                                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                        aria-haspopup="true" aria-expanded="false" href="#">
                                                        <span class="nav-main-link-name">Pariaman Tengah</span>
                                                        <span
                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                    </a>

                                                    <ul class="nav-main-submenu">

                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link nav-main-link-submenu"
                                                                data-toggle="submenu" aria-haspopup="true"
                                                                aria-expanded="false" href="#">
                                                                <span class="nav-main-link-name">Data Desa /
                                                                    Kleurahan</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">

                                                                    <a class="nav-main-link" href="#">
                                                                        <i
                                                                            class="nav-main-link-icon fa fa-sticky-note"></i>
                                                                        <span class="nav-main-link-name">Other</span>
                                                                        <span
                                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="nav-main-item">
                                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                        aria-haspopup="true" aria-expanded="false" href="#">
                                                        <span class="nav-main-link-name">Pariaman Selatan</span>
                                                        <span
                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                    </a>
                                                    <ul class="nav-main-submenu">
                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link nav-main-link-submenu"
                                                                data-toggle="submenu" aria-haspopup="true"
                                                                aria-expanded="false" href="#">
                                                                <span class="nav-main-link-name">Data Desa /
                                                                    Kleurahan</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <i
                                                                            class="nav-main-link-icon fa fa-sticky-note"></i>
                                                                        <span class="nav-main-link-name">Other</span>
                                                                        <span
                                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="nav-main-item">
                                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                        aria-haspopup="true" aria-expanded="false" href="#">
                                                        <span class="nav-main-link-name">Pariaman Timur</span>
                                                        <span
                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                    </a>
                                                    <ul class="nav-main-submenu">
                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link nav-main-link-submenu"
                                                                data-toggle="submenu" aria-haspopup="true"
                                                                aria-expanded="false" href="#">
                                                                <span class="nav-main-link-name">Data Desa /
                                                                    Kleurahan</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <i
                                                                            class="nav-main-link-icon fa fa-sticky-note"></i>
                                                                        <span class="nav-main-link-name">Other</span>
                                                                        <span
                                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                                    </a>
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
                                    <span class="badge bg-primary">{{ $nilai }} {{ $satuan }}</span>
                                </td>
                            </tr>

                            <tr>
                                <td class="fw-semibold">
                                    <ul class="nav-main">
                                        <li class="nav-main-item">
                                            <p class="fs-lg mb-0">
                                                Data Penduduk Keluar
                                            </p>
                                            <p class="fs-lg mb-0">
                                                <input type="date" class="form-control">
                                            </p>
                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                aria-haspopup="true" aria-expanded="false" href="#">
                                                <span class="nav-main-link-name">{{ $penkeluar }}</span>
                                                <span
                                                    class="nav-main-link-badge badge rounded-pill bg-warning">{{ $nilai }}
                                                    {{ $satuan }}</span>
                                            </a>
                                            <ul class="nav-main-submenu">

                                                @foreach ($kecamatan as $kec)
                                                    <li class="nav-main-item">

                                                        <a class="nav-main-link nav-main-link-submenu"
                                                            data-toggle="submenu" aria-haspopup="true"
                                                            aria-expanded="false" href="#">
                                                            <span class="nav-main-link-name">{{ $kec }}</span>
                                                            <span
                                                                class="nav-main-link-badge badge rounded-pill bg-warning">{{ $subnilai }}
                                                                {{ $satuan }}</span>
                                                        </a>
                                                        <ul class="nav-main-submenu">
                                                            <li class="nav-main-item">
                                                                <a class="nav-main-link nav-main-link-submenu"
                                                                    data-toggle="submenu" aria-haspopup="true"
                                                                    aria-expanded="false" href="#">
                                                                    <span class="nav-main-link-name">Data Desa /
                                                                        Kleurahan</span>
                                                                </a>
                                                                <ul class="nav-main-submenu">
                                                                    <li class="nav-main-item">
                                                                        @foreach ($desa as $des)
                                                                            <a class="nav-main-link" href="#">
                                                                                <i
                                                                                    class="nav-main-link-icon fa fa-sticky-note"></i>
                                                                                <span
                                                                                    class="nav-main-link-name">{{ $des->nama_desa }}
                                                                                    {{ $satuan }}</span>
                                                                                <span
                                                                                    class="nav-main-link-badge badge rounded-pill bg-warning">{{ $nilaidesa }}
                                                                                    {{ $satuan }}</span>
                                                                            </a>
                                                                        @endforeach

                                                                    </li>

                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                @endforeach

                                                <li class="nav-main-item">

                                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                        aria-haspopup="true" aria-expanded="false" href="#">
                                                        <span class="nav-main-link-name">Pariaman Tengah</span>
                                                        <span
                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                    </a>

                                                    <ul class="nav-main-submenu">

                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link nav-main-link-submenu"
                                                                data-toggle="submenu" aria-haspopup="true"
                                                                aria-expanded="false" href="#">
                                                                <span class="nav-main-link-name">Data Desa /
                                                                    Kleurahan</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">

                                                                    <a class="nav-main-link" href="#">
                                                                        <i
                                                                            class="nav-main-link-icon fa fa-sticky-note"></i>
                                                                        <span class="nav-main-link-name">Other</span>
                                                                        <span
                                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="nav-main-item">
                                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                        aria-haspopup="true" aria-expanded="false" href="#">
                                                        <span class="nav-main-link-name">Pariaman Selatan</span>
                                                        <span
                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                    </a>
                                                    <ul class="nav-main-submenu">
                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link nav-main-link-submenu"
                                                                data-toggle="submenu" aria-haspopup="true"
                                                                aria-expanded="false" href="#">
                                                                <span class="nav-main-link-name">Data Desa /
                                                                    Kleurahan</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <i
                                                                            class="nav-main-link-icon fa fa-sticky-note"></i>
                                                                        <span class="nav-main-link-name">Other</span>
                                                                        <span
                                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="nav-main-item">
                                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                        aria-haspopup="true" aria-expanded="false" href="#">
                                                        <span class="nav-main-link-name">Pariaman Timur</span>
                                                        <span
                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                    </a>
                                                    <ul class="nav-main-submenu">
                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link nav-main-link-submenu"
                                                                data-toggle="submenu" aria-haspopup="true"
                                                                aria-expanded="false" href="#">
                                                                <span class="nav-main-link-name">Data Desa /
                                                                    Kleurahan</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <i
                                                                            class="nav-main-link-icon fa fa-sticky-note"></i>
                                                                        <span class="nav-main-link-name">Other</span>
                                                                        <span
                                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                                    </a>
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
                                    <span class="badge bg-primary">{{ $nilai }} {{ $satuan }}</span>
                                </td>
                            </tr>

                            {{-- <tr>
                                <td class="fw-semibold">
                                    <ul class="nav-main">
                                        <li class="nav-main-item">
                                            <p class="fs-lg mb-0">
                                                Data Penduduk Pecahan
                                            </p>
                                            <p class="fs-lg mb-0">
                                                <input type="date" class="form-control">
                                            </p>
                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                aria-haspopup="true" aria-expanded="false" href="#">
                                                <span class="nav-main-link-name">{{ $penpecahan }}</span>
                                                <span
                                                    class="nav-main-link-badge badge rounded-pill bg-warning">{{ $nilai }}
                                                    {{ $satuan }}</span>
                                            </a>
                                            <ul class="nav-main-submenu">

                                                @foreach ($kecamatan as $kec)
                                                    <li class="nav-main-item">

                                                        <a class="nav-main-link nav-main-link-submenu"
                                                            data-toggle="submenu" aria-haspopup="true"
                                                            aria-expanded="false" href="#">
                                                            <span class="nav-main-link-name">{{ $kec }}</span>
                                                            <span
                                                                class="nav-main-link-badge badge rounded-pill bg-warning">{{ $subnilai }}
                                                                {{ $satuan }}</span>
                                                        </a>
                                                        <ul class="nav-main-submenu">
                                                            <li class="nav-main-item">
                                                                <a class="nav-main-link nav-main-link-submenu"
                                                                    data-toggle="submenu" aria-haspopup="true"
                                                                    aria-expanded="false" href="#">
                                                                    <span class="nav-main-link-name">Data Desa /
                                                                        Kleurahan</span>
                                                                </a>
                                                                <ul class="nav-main-submenu">
                                                                    <li class="nav-main-item">
                                                                        @foreach ($desa as $des)
                                                                            <a class="nav-main-link" href="#">
                                                                                <i
                                                                                    class="nav-main-link-icon fa fa-sticky-note"></i>
                                                                                <span
                                                                                    class="nav-main-link-name">{{ $des->nama_desa }}
                                                                                    {{ $satuan }}</span>
                                                                                <span
                                                                                    class="nav-main-link-badge badge rounded-pill bg-warning">{{ $nilaidesa }}
                                                                                    {{ $satuan }}</span>
                                                                            </a>
                                                                        @endforeach

                                                                    </li>

                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                @endforeach

                                                <li class="nav-main-item">

                                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                        aria-haspopup="true" aria-expanded="false" href="#">
                                                        <span class="nav-main-link-name">Pariaman Tengah</span>
                                                        <span
                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                    </a>

                                                    <ul class="nav-main-submenu">

                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link nav-main-link-submenu"
                                                                data-toggle="submenu" aria-haspopup="true"
                                                                aria-expanded="false" href="#">
                                                                <span class="nav-main-link-name">Data Desa /
                                                                    Kleurahan</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">

                                                                    <a class="nav-main-link" href="#">
                                                                        <i
                                                                            class="nav-main-link-icon fa fa-sticky-note"></i>
                                                                        <span class="nav-main-link-name">Other</span>
                                                                        <span
                                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="nav-main-item">
                                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                        aria-haspopup="true" aria-expanded="false" href="#">
                                                        <span class="nav-main-link-name">Pariaman Selatan</span>
                                                        <span
                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                    </a>
                                                    <ul class="nav-main-submenu">
                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link nav-main-link-submenu"
                                                                data-toggle="submenu" aria-haspopup="true"
                                                                aria-expanded="false" href="#">
                                                                <span class="nav-main-link-name">Data Desa /
                                                                    Kleurahan</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <i
                                                                            class="nav-main-link-icon fa fa-sticky-note"></i>
                                                                        <span class="nav-main-link-name">Other</span>
                                                                        <span
                                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="nav-main-item">
                                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                        aria-haspopup="true" aria-expanded="false" href="#">
                                                        <span class="nav-main-link-name">Pariaman Timur</span>
                                                        <span
                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                    </a>
                                                    <ul class="nav-main-submenu">
                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link nav-main-link-submenu"
                                                                data-toggle="submenu" aria-haspopup="true"
                                                                aria-expanded="false" href="#">
                                                                <span class="nav-main-link-name">Data Desa /
                                                                    Kleurahan</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <i
                                                                            class="nav-main-link-icon fa fa-sticky-note"></i>
                                                                        <span class="nav-main-link-name">Other</span>
                                                                        <span
                                                                            class="nav-main-link-badge badge rounded-pill bg-warning">0</span>
                                                                    </a>
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
                                    <span class="badge bg-primary">{{ $nilai }} {{ $satuan }}</span>
                                </td>
                            </tr> --}}
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
