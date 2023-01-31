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

                                <th>Total Ternak</th>
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
                                                <canvas id="chartTernak"></canvas>
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
                                                        @foreach ($ternak as $dta)
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
                                                                                @foreach ($ternak as $dta)
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
                                                                    @foreach ($ternak as $dta)
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
                                                                    @foreach ($ternak as $dta)
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
                                                                    @foreach ($ternak as $dta)
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

                                <th> Total Hewan Peliharaan</th>
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
                                                <canvas id="chartPeliharaan"></canvas>
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
                                                        @foreach ($hewan as $dta)
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
                                                                                @foreach ($hewan as $dta)
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
                                                                    @foreach ($hewan as $dta)
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
                                                                    @foreach ($hewan as $dta)
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
                                                                    @foreach ($hewan as $dta)
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

                                <th>Total Hewan Di Vaksin Rabies</th>
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
                                                <canvas id="chartRabies"></canvas>
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
                                                        @foreach ($hewan as $dta)
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
                                                                                @foreach ($hewan as $dta)
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
                                                                    @foreach ($hewan as $dta)
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
                                                                    @foreach ($hewan as $dta)
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
                                                                    @foreach ($hewan as $dta)
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

                                <th> Total Usaha Bidang Peternakan</th>
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
