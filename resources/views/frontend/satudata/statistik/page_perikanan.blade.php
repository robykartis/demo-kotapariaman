@extends('frontend.satudata.master')
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

        <!-- Full Table -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">{{ $menu }}</h3>
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
                                <th>Total Usaha Ikan</th>
                                <th style="width: 50%;  height: 50%;">
                                    Data Detail
                                </th>
                                {{-- <th class="text-center" style="width: 100px;">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a class="nav-main-link" href="#">
                                        <div class="block-content block-content-full text-center">
                                            <div class="py-3">
                                                <!-- Pie Chart Container -->
                                                <canvas id="chartUsaha"></canvas>
                                            </div>
                                        </div>
                                    </a>
                                </td>
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
                                                        @foreach ($usaha as $dta)
                                                            <a class="nav-main-link" href="#">
                                                                <i class="nav-main-link-icon fa fa-chart-pie"></i>
                                                                <span class="nav-main-link-name">
                                                                    {{ $dta }}</span>

                                                            </a>
                                                        @endforeach

                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link nav-main-link-submenu"
                                                                data-toggle="submenu" aria-haspopup="true"
                                                                aria-expanded="false" href="#">
                                                                <i class="nav-main-link-icon fa fa-inbox"></i>
                                                                <span class="nav-main-link-name">Data Desa /
                                                                    Kleurahan</span>
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
                                                                                @foreach ($usaha as $dta)
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
                                                                    @foreach ($usaha as $dta)
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
                                                                    @foreach ($usaha as $dta)
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
                                                                    @foreach ($usaha as $dta)
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


                            </tr>
                        </tbody>
                    </table>
                </div>


                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-vcenter">
                        <thead>
                            <tr>

                                <th>Total Jenis Budidaya Ikan</th>
                                <th style="width: 50%;  height: 50%;">
                                    Data Detail
                                </th>
                                {{-- <th class="text-center" style="width: 100px;">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a class="nav-main-link" href="#">
                                        <div class="block-content block-content-full text-center">
                                            <div class="py-3">
                                                <!-- Pie Chart Container -->
                                                <canvas id="chartBudidaya"></canvas>
                                            </div>
                                        </div>
                                    </a>
                                </td>
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
                                                        @foreach ($budidaya as $dta)
                                                            <a class="nav-main-link" href="#">
                                                                <i class="nav-main-link-icon fa fa-chart-pie"></i>
                                                                <span class="nav-main-link-name">
                                                                    {{ $dta }}</span>

                                                            </a>
                                                        @endforeach

                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link nav-main-link-submenu"
                                                                data-toggle="submenu" aria-haspopup="true"
                                                                aria-expanded="false" href="#">
                                                                <i class="nav-main-link-icon fa fa-inbox"></i>
                                                                <span class="nav-main-link-name">Data Desa /
                                                                    Kleurahan</span>
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
                                                                                @foreach ($budidaya as $dta)
                                                                                    <a class="nav-main-link"
                                                                                        href="#">
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
                                                                    @foreach ($budidaya as $dta)
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
                                                                    @foreach ($budidaya as $dta)
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
                                                                    @foreach ($budidaya as $dta)
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


                            </tr>
                        </tbody>
                    </table>
                </div>


                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-vcenter">
                        <thead>
                            <tr>

                                <th> Total Jenis Alat Tangkap Ikan</th>
                                <th style="width: 50%;  height: 50%;">
                                    Data Detail
                                </th>
                                {{-- <th class="text-center" style="width: 100px;">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a class="nav-main-link" href="#">
                                        <div class="block-content block-content-full text-center">
                                            <div class="py-3">
                                                <!-- Pie Chart Container -->
                                                <canvas id="chartTangkap"></canvas>
                                            </div>
                                        </div>
                                    </a>
                                </td>
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
                                                        @foreach ($tangkap as $dta)
                                                            <a class="nav-main-link" href="#">
                                                                <i class="nav-main-link-icon fa fa-chart-pie"></i>
                                                                <span class="nav-main-link-name">
                                                                    {{ $dta }}</span>

                                                            </a>
                                                        @endforeach

                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link nav-main-link-submenu"
                                                                data-toggle="submenu" aria-haspopup="true"
                                                                aria-expanded="false" href="#">
                                                                <i class="nav-main-link-icon fa fa-inbox"></i>
                                                                <span class="nav-main-link-name">Data Desa /
                                                                    Kleurahan</span>
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
                                                                                @foreach ($tangkap as $dta)
                                                                                    <a class="nav-main-link"
                                                                                        href="#">
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
                                                                    @foreach ($tangkap as $dta)
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
                                                                    @foreach ($tangkap as $dta)
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
                                                                    @foreach ($tangkap as $dta)
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
                ' Kapal Motor (43%)',
                ' Motor Tempel(35%)',
                ' Tanpa Motor (10%)',
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
