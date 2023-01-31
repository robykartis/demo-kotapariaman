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

                                <th> Status Wirausaha</th>
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
                                                <canvas id="chartStatus"></canvas>
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
                                                        @foreach ($statuswirausaha as $dta)
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
                                                                                @foreach ($statuswirausaha as $dta)
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
                                                                    @foreach ($statuswirausaha as $dta)
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
                                                                    @foreach ($statuswirausaha as $dta)
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
                                                                    @foreach ($statuswirausaha as $dta)
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

                                <th> Modal Wirausaha</th>
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
                                                <canvas id="chartModal"></canvas>
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
                                                        @foreach ($modal as $dta)
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
                                                                                @foreach ($statuswirausaha as $dta)
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
                                                                    @foreach ($statuswirausaha as $dta)
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
                                                                    @foreach ($statuswirausaha as $dta)
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
                                                                    @foreach ($statuswirausaha as $dta)
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

                                <th>Perijinan Wirausaha</th>
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
                                                <canvas id="chartPerijinan"></canvas>
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
                                                        @foreach ($perijinanwirausaha as $dta)
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
                                                                                @foreach ($perijinanwirausaha as $dta)
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
                                                                    @foreach ($perijinanwirausaha as $dta)
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
                                                                    @foreach ($perijinanwirausaha as $dta)
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
                                                                    @foreach ($perijinanwirausaha as $dta)
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

                                <th>Pajak Konsumen</th>
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
                                                <canvas id="chartPajak"></canvas>
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
                                                        @foreach ($pajakwirausaha as $dta)
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
                                                                                @foreach ($pajakwirausaha as $dta)
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
                                                                    @foreach ($pajakwirausaha as $dta)
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
                                                                    @foreach ($pajakwirausaha as $dta)
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
                                                                    @foreach ($pajakwirausaha as $dta)
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
