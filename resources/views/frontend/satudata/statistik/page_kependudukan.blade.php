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

                                <th>Total KK</th>
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
                                                <canvas id="chartKK"></canvas>
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
                                                        @foreach ($totalkk as $dta)
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
                                                                                @foreach ($totalkk as $dta)
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
                                                                    @foreach ($totalkk as $dta)
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
                                                                    @foreach ($totalkk as $dta)
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
                                                                    @foreach ($totalkk as $dta)
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

                                <th>Rangking Kemiskinan</th>
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
                                                <canvas id="chartKemiskinan"></canvas>
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
                                                        @foreach ($rangkingkemiskinan as $miskin)
                                                            <a class="nav-main-link" href="#">
                                                                <i class="nav-main-link-icon fa fa-chart-pie"></i>
                                                                <span class="nav-main-link-name">
                                                                    {{ $miskin }}</span>

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
                                                                                @foreach ($rangkingkemiskinan as $dta)
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
                                                                    @foreach ($rangkingkemiskinan as $dta)
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
                                                                    @foreach ($rangkingkemiskinan as $dta)
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
                                                                    @foreach ($rangkingkemiskinan as $dta)
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

                                <th>Jenis Kelamin Penduduk</th>
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
                                                <canvas id="chartTotpenduduk"></canvas>
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
                                                        @foreach ($totalpenduduk as $dta)
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
                                                                                @foreach ($totalpenduduk as $dta)
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
                                                                    @foreach ($totalpenduduk as $dta)
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
                                                                    @foreach ($totalpenduduk as $dta)
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
                                                                    @foreach ($totalpenduduk as $dta)
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
                                <th> Status Tinggal Penduduk</th>
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
                                                <canvas id="chartStatustinggal"></canvas>
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
                                                        @foreach ($statustinggal as $dta)
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
                                                                                @foreach ($statustinggal as $dta)
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
                                                                    @foreach ($statustinggal as $dta)
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
                                                                    @foreach ($statustinggal as $dta)
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
                                                                    @foreach ($statustinggal as $dta)
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

                                <th> Agama Penduduk</th>
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
                                                <canvas id="chartAgama"></canvas>
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
                                                        @foreach ($agama as $dta)
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
                                                                                @foreach ($agama as $dta)
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
                                                                    @foreach ($agama as $dta)
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
                                                                    @foreach ($agama as $dta)
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
                                                                    @foreach ($agama as $dta)
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
                                <th> Status Pernikahan Penduduk</th>
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
                                                <canvas id="chartNikah"></canvas>
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
                                                        @foreach ($pernikahan as $dta)
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
                                                                                @foreach ($pernikahan as $dta)
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
                                                                    @foreach ($pernikahan as $dta)
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
                                                                    @foreach ($pernikahan as $dta)
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
                                                                    @foreach ($pernikahan as $dta)
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

                                <th>Status Kewarganegaraan</th>
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
                                                <canvas id="chartWarganegara"></canvas>
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
                                                        @foreach ($kewarganegaraan as $dta)
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
                                                                                @foreach ($kewarganegaraan as $dta)
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
                                                                    @foreach ($kewarganegaraan as $dta)
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
                                                                    @foreach ($kewarganegaraan as $dta)
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
                                                                    @foreach ($kewarganegaraan as $dta)
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
                                <th>Status Hak Politik</th>
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
                                                <canvas id="chartPolitik"></canvas>
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
                                                        @foreach ($hakpolitik as $dta)
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
                                                                                @foreach ($hakpolitik as $dta)
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
                                                                    @foreach ($hakpolitik as $dta)
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
                                                                    @foreach ($hakpolitik as $dta)
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
                                                                    @foreach ($hakpolitik as $dta)
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
                                <th>Status Pekerjaan Penduduk</th>
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
                                                <canvas id="chartStatuspekerjaan"></canvas>
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
                                                        @foreach ($pekerjaan as $dta)
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
                                                                                @foreach ($pekerjaan as $dta)
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
                                                                    @foreach ($pekerjaan as $dta)
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
                                                                    @foreach ($pekerjaan as $dta)
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
                                                                    @foreach ($pekerjaan as $dta)
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
                                <th>Jenis Pekerjaan</th>
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
                                                <canvas id="chartJeniskerja"></canvas>
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
                                                        @foreach ($jenispekerjaan as $dta)
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
                                                                                @foreach ($jenispekerjaan as $dta)
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
                                                                    @foreach ($jenispekerjaan as $dta)
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
                                                                    @foreach ($jenispekerjaan as $dta)
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
                                                                    @foreach ($jenispekerjaan as $dta)
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
        var chartKK = document.getElementById("chartKK");
        var chartKemiskinan = document.getElementById("chartKemiskinan");
        var chartTotpenduduk = document.getElementById("chartTotpenduduk");
        var chartStatustinggal = document.getElementById("chartStatustinggal");
        var chartAgama = document.getElementById("chartAgama");
        var chartNikah = document.getElementById("chartNikah");
        var chartWarganegara = document.getElementById("chartWarganegara");
        var chartPolitik = document.getElementById("chartPolitik");
        var chartStatuspekerjaan = document.getElementById("chartStatuspekerjaan");
        var chartJeniskerja = document.getElementById("chartJeniskerja");
        var chartJeniskerja = document.getElementById("chartJeniskerja");

        Chart.defaults.font.family = "Lato";
        Chart.defaults.font.size = 12;
        Chart.defaults.color = "black";
        var d_kk = {
            labels: [
                'KK Dalam Kota (65%)',
                'KK Luar Kota (15%)',

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
                    // "rgba(224, 79, 26, 1)",
                ]
            }]
        };


        var d_kemiskinan = {
            labels: [
                'KK Mampu (60%)',
                'KK Biasa (20%)',
                'KK Miskin (15%)',
                'KK Miskin Ekstrim (10%)',
            ],
            datasets: [{
                data: [
                    60,
                    20,
                    15,
                    10,
                ],
                backgroundColor: [
                    "rgba(141, 196, 81, 1)",
                    "rgba(255, 177, 25, 1)",
                    "rgba(224, 79, 26, 1)",
                    "rgba(155, 89, 182, 1)",
                ]
            }]
        };

        var d_penduduk = {
            labels: [

                'Laki - laki (65%)',
                'Perempuan (15%)',

            ],
            datasets: [{
                data: [
                    65,
                    15,
                ],
                backgroundColor: [
                    "rgba(141, 196, 81, 1)",
                    "rgba(255, 177, 25, 1)"
                ]
            }]
        };
        var d_kelamin = {
            labels: [
                ' Kelamin Laki-laki (60%)',
                ' Perempuan (40%)',
            ],
            datasets: [{
                data: [
                    60,
                    40,

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

        var d_tinggal = {
            labels: [
                ' Penduduk Menetap (60%)',
                ' Penduduk Merantau (40%)',
            ],
            datasets: [{
                data: [
                    60,
                    40,

                ],
                backgroundColor: [
                    "rgba(141, 196, 81, 1)",
                    "rgba(255, 177, 25, 1)",

                ]

            }]
        };
        var d_agama = {
            labels: [
                ' Beragama Islam (60%)',
                ' Beragama Protestan (10%)',
                ' Beragama Katolik (9%)',
                ' Beragama Budha (5%)',
                ' Beragama Hindu (5%)',
            ],
            datasets: [{
                data: [
                    60,
                    10,
                    9,
                    5,
                    5
                ],
                backgroundColor: [
                    "rgba(141, 196, 81, 1)",
                    "rgba(255, 177, 25, 1)",
                    "rgba(224, 79, 26, 1)",
                    "rgba(155, 89, 182, 1)",
                    "rgba(84, 153, 199, 1)",
                ]
            }]
        };
        var d_pernikahan = {
            labels: [
                ' Kawin (60%)',
                ' Tidak Kawin (10%)',
                ' Janda (9%)',
                ' Duda (5%)',
            ],
            datasets: [{
                data: [
                    60,
                    10,
                    9,
                    5,
                ],
                backgroundColor: [
                    "rgba(141, 196, 81, 1)",
                    "rgba(255, 177, 25, 1)",
                    "rgba(224, 79, 26, 1)",
                    "rgba(155, 89, 182, 1)",
                ]
            }]
        };
        var d_kewarganegaraan = {
            labels: [
                ' WNI (60%)',
                ' WNA(10%)',
            ],
            datasets: [{
                data: [
                    60,
                    10,
                ],
                backgroundColor: [
                    "rgba(141, 196, 81, 1)",
                    "rgba(255, 177, 25, 1)",

                ]
            }]
        };
        var d_politik = {
            labels: [
                ' Hak Pilih Politik (60%)',
                ' Tidak Memiliki Hak Politik(40%)',
            ],
            datasets: [{
                data: [
                    60,
                    40,
                ],
                backgroundColor: [
                    "rgba(141, 196, 81, 1)",
                    "rgba(255, 177, 25, 1)",
                ]
            }]
        };
        var d_pekerjaan = {
            labels: [
                ' Bekerja (30%)',
                ' Tidak Bekerja (10%)',
                ' Sedang Mencari Pekerjaan (10%)',
                ' Bersekolah (11%)',
                ' Mengurus Rumah Tangga (39%)',
            ],
            datasets: [{
                data: [
                    30,
                    10,
                    10,
                    11,
                    39,

                ],
                backgroundColor: [
                    "rgba(141, 196, 81, 1)",
                    "rgba(255, 177, 25, 1)",
                    "rgba(224, 79, 26, 1)",
                    "rgba(155, 89, 182, 1)",
                    "rgba(84, 153, 199, 1)",
                ]
            }]
        };
        var d_jenispekerjaan = {
            labels: [
                ' Petani Pemilik Lahan (30%)',
                ' Petani Penyewa (5%)',
                ' Buruh Tani (10%)',
                ' Nelayan Pemilik Kapal / Perahu (2%)',
                ' Nelayan Penyewa Kapal / Perahu (2%)',
                ' Buruh Nelayan (2%)',
                ' Guru (2%)',
                ' Pedagang (2%)',
                ' Pekerja Pengolahan / Industri (2%)',
                ' PNS (12%)',
                ' TNI (2%)',
                ' Polisi (9%)',
                ' Perangkat Desa (2%)',
                ' Pegawai Honorer Pemda (10%)',
                ' TKI (2%)',
                ' Tenaga Kesehatan (2%)',
                ' Buruh Harian Lepas (2%)',
                ' Tenaga Kerja PPPK (2%)',
                ' Tenaga Kerja Lainya (2%)',
            ],
            datasets: [{
                data: [
                    30,
                    5,
                    2,
                    2,
                    2,
                    2,
                    2,
                    12,
                    2,
                    9,
                    2,
                    10,
                    2,
                    2,
                    2,
                    2,
                    2,
                    2,
                    2,
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
                    "rgba(100, 30, 22, 1)",
                    "rgba(120, 40, 31, 1)",
                    "rgba(81, 46, 95, 1)",
                    "rgba(74, 35, 90, 1)",
                    "rgba(21, 67, 96, 1)",
                    "rgba(27, 79, 114, 1)",
                    "rgba(11, 83, 69, 1)",
                    "rgba(20, 90, 50 , 1)",
                    "rgba(125, 102, 8 , 1)",
                    "rgba(125, 102, 8 , 1)",
                ]
            }]
        };
        var pieChart = new Chart(chartKK, {
            type: 'pie',
            data: d_kk
        });
        var pieChart = new Chart(chartKemiskinan, {
            type: 'pie',
            data: d_kemiskinan
        });
        var pieChart = new Chart(chartTotpenduduk, {
            type: 'pie',
            data: d_penduduk
        });
        var pieChart = new Chart(chartStatustinggal, {
            type: 'pie',
            data: d_tinggal
        });
        var pieChart = new Chart(chartAgama, {
            type: 'pie',
            data: d_agama
        });
        var pieChart = new Chart(chartNikah, {
            type: 'pie',
            data: d_pernikahan
        });
        var pieChart = new Chart(chartWarganegara, {
            type: 'pie',
            data: d_kewarganegaraan
        });
        var pieChart = new Chart(chartPolitik, {
            type: 'pie',
            data: d_politik
        });
        var pieChart = new Chart(chartStatuspekerjaan, {
            type: 'pie',
            data: d_pekerjaan
        });
        var pieChart = new Chart(chartJeniskerja, {
            type: 'pie',
            data: d_jenispekerjaan
        });
    </script>
@endpush
