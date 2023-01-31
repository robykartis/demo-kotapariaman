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


        <div class="table-responsive">
            <table class="table table-bordered table-striped table-vcenter">
                <thead>
                    <tr>

                        <th>Data</th>
                        <th style="width: 50%;  height: 50%;">
                            Rangking Kemiskinan
                        </th>
                        {{-- <th class="text-center" style="width: 100px;">Actions</th> --}}
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="fw-semibold">
                            <ul class="nav-main">
                                <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                        aria-haspopup="true" aria-expanded="false" href="#">
                                        <i class="nav-main-link-icon fa fa-inbox"></i>
                                        <span class="nav-main-link-name">Detail </span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        @foreach ($desa as $des)
                                            <li class="nav-main-item">
                                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                    aria-haspopup="true" aria-expanded="false" href="#">
                                                    <i class="nav-main-link-icon fa fa-inbox"></i>
                                                    <span class="nav-main-link-name">{{ $des->nama_desa }}</span>
                                                </a>
                                                <ul class="nav-main-submenu">

                                                    <li class="nav-main-item">
                                                        @foreach ($rangkingkemiskinan as $dta)
                                                            <a class="nav-main-link" href="#">
                                                                <i class="nav-main-link-icon fa fa-chart-pie"></i>
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
                        </td>

                        <td>

                            <a class="nav-main-link" href="#">
                                <div class="block-content block-content-full text-center">
                                    <div class="py-3">
                                        <!-- Pie Chart Container -->
                                        <canvas id="js-chartjs-pie-kemiskinan"></canvas>
                                    </div>
                                </div>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

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

                                <th>Data</th>
                                <th style="width: 50%;  height: 50%;">
                                    Total KK
                                </th>
                                {{-- <th class="text-center" style="width: 100px;">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-semibold">
                                    <ul class="nav-main">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                aria-haspopup="true" aria-expanded="false" href="#">
                                                <i class="nav-main-link-icon fa fa-inbox"></i>
                                                <span class="nav-main-link-name">Detail </span>
                                            </a>
                                            <ul class="nav-main-submenu">
                                                @foreach ($desa as $des)
                                                    <li class="nav-main-item">
                                                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                            aria-haspopup="true" aria-expanded="false" href="#">
                                                            <i class="nav-main-link-icon fa fa-inbox"></i>
                                                            <span class="nav-main-link-name">{{ $des->nama_desa }}</span>
                                                        </a>
                                                        <ul class="nav-main-submenu">

                                                            <li class="nav-main-item">
                                                                @foreach ($totalkk as $dta)
                                                                    <a class="nav-main-link" href="#">
                                                                        <i class="nav-main-link-icon fa fa-chart-pie"></i>
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
                                </td>

                                <td>

                                    <a class="nav-main-link" href="#">
                                        <div class="block-content block-content-full text-center">
                                            <div class="py-3">
                                                <!-- Pie Chart Container -->
                                                <canvas id="js-chartjs-pie-kk"></canvas>
                                            </div>
                                        </div>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>




                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-vcenter">
                        <thead>
                            <tr>

                                <th>Data</th>
                                <th style="width: 50%;  height: 50%;">
                                    Total Penduduk
                                </th>
                                {{-- <th class="text-center" style="width: 100px;">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-semibold">
                                    <ul class="nav-main">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                aria-haspopup="true" aria-expanded="false" href="#">
                                                <i class="nav-main-link-icon fa fa-inbox"></i>
                                                <span class="nav-main-link-name">Detail </span>
                                            </a>
                                            <ul class="nav-main-submenu">
                                                @foreach ($desa as $des)
                                                    <li class="nav-main-item">
                                                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                            aria-haspopup="true" aria-expanded="false" href="#">
                                                            <i class="nav-main-link-icon fa fa-inbox"></i>
                                                            <span class="nav-main-link-name">{{ $des->nama_desa }}</span>
                                                        </a>
                                                        <ul class="nav-main-submenu">

                                                            <li class="nav-main-item">
                                                                @foreach ($totalpenduduk as $dta)
                                                                    <a class="nav-main-link" href="#">
                                                                        <i class="nav-main-link-icon fa fa-chart-pie"></i>
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
                                </td>

                                <td>

                                    <a class="nav-main-link" href="#">
                                        <div class="block-content block-content-full text-center">
                                            <div class="py-3">
                                                <!-- Pie Chart Container -->
                                                <canvas id="js-chartjs-pie-penduduk"></canvas>
                                            </div>
                                        </div>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-vcenter">
                        <thead>
                            <tr>

                                <th>Data</th>
                                <th style="width: 50%;  height: 50%;">
                                    Jenis Kelamin Penduduk
                                </th>
                                {{-- <th class="text-center" style="width: 100px;">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-semibold">
                                    <ul class="nav-main">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                aria-haspopup="true" aria-expanded="false" href="#">
                                                <i class="nav-main-link-icon fa fa-inbox"></i>
                                                <span class="nav-main-link-name">Detail </span>
                                            </a>
                                            <ul class="nav-main-submenu">
                                                @foreach ($desa as $des)
                                                    <li class="nav-main-item">
                                                        <a class="nav-main-link nav-main-link-submenu"
                                                            data-toggle="submenu" aria-haspopup="true"
                                                            aria-expanded="false" href="#">
                                                            <i class="nav-main-link-icon fa fa-inbox"></i>
                                                            <span class="nav-main-link-name">{{ $des->nama_desa }}</span>
                                                        </a>
                                                        <ul class="nav-main-submenu">

                                                            <li class="nav-main-item">
                                                                @foreach ($jeniskelamin as $dta)
                                                                    <a class="nav-main-link" href="#">
                                                                        <i class="nav-main-link-icon fa fa-chart-pie"></i>
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
                                </td>

                                <td>

                                    <a class="nav-main-link" href="#">
                                        <div class="block-content block-content-full text-center">
                                            <div class="py-3">
                                                <!-- Pie Chart Container -->
                                                <canvas id="js-chartjs-pie-kelamin"></canvas>
                                            </div>
                                        </div>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-vcenter">
                        <thead>
                            <tr>

                                <th>Data</th>
                                <th style="width: 50%;  height: 50%;">
                                    Status Tinggal Penduduk
                                </th>
                                {{-- <th class="text-center" style="width: 100px;">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-semibold">
                                    <ul class="nav-main">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                aria-haspopup="true" aria-expanded="false" href="#">
                                                <i class="nav-main-link-icon fa fa-inbox"></i>
                                                <span class="nav-main-link-name">Detail </span>
                                            </a>
                                            <ul class="nav-main-submenu">
                                                @foreach ($desa as $des)
                                                    <li class="nav-main-item">
                                                        <a class="nav-main-link nav-main-link-submenu"
                                                            data-toggle="submenu" aria-haspopup="true"
                                                            aria-expanded="false" href="#">
                                                            <i class="nav-main-link-icon fa fa-inbox"></i>
                                                            <span class="nav-main-link-name">{{ $des->nama_desa }}</span>
                                                        </a>
                                                        <ul class="nav-main-submenu">

                                                            <li class="nav-main-item">
                                                                @foreach ($statustinggal as $dta)
                                                                    <a class="nav-main-link" href="#">
                                                                        <i class="nav-main-link-icon fa fa-chart-pie"></i>
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
                                </td>

                                <td>

                                    <a class="nav-main-link" href="#">
                                        <div class="block-content block-content-full text-center">
                                            <div class="py-3">
                                                <!-- Pie Chart Container -->
                                                <canvas id="js-chartjs-pie-tinggal"></canvas>
                                            </div>
                                        </div>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-vcenter">
                        <thead>
                            <tr>

                                <th>Data</th>
                                <th style="width: 50%;  height: 50%;">
                                    Agama Penduduk
                                </th>
                                {{-- <th class="text-center" style="width: 100px;">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-semibold">
                                    <ul class="nav-main">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                aria-haspopup="true" aria-expanded="false" href="#">
                                                <i class="nav-main-link-icon fa fa-inbox"></i>
                                                <span class="nav-main-link-name">Detail </span>
                                            </a>
                                            <ul class="nav-main-submenu">
                                                @foreach ($desa as $des)
                                                    <li class="nav-main-item">
                                                        <a class="nav-main-link nav-main-link-submenu"
                                                            data-toggle="submenu" aria-haspopup="true"
                                                            aria-expanded="false" href="#">
                                                            <i class="nav-main-link-icon fa fa-inbox"></i>
                                                            <span class="nav-main-link-name">{{ $des->nama_desa }}</span>
                                                        </a>
                                                        <ul class="nav-main-submenu">

                                                            <li class="nav-main-item">
                                                                @foreach ($agama as $dta)
                                                                    <a class="nav-main-link" href="#">
                                                                        <i class="nav-main-link-icon fa fa-chart-pie"></i>
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
                                </td>

                                <td>

                                    <a class="nav-main-link" href="#">
                                        <div class="block-content block-content-full text-center">
                                            <div class="py-3">
                                                <!-- Pie Chart Container -->
                                                <canvas id="js-chartjs-pie-agama"></canvas>
                                            </div>
                                        </div>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-vcenter">
                        <thead>
                            <tr>

                                <th>Data</th>
                                <th style="width: 50%;  height: 50%;">
                                    Status Pernikahan Penduduk
                                </th>
                                {{-- <th class="text-center" style="width: 100px;">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-semibold">
                                    <ul class="nav-main">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                aria-haspopup="true" aria-expanded="false" href="#">
                                                <i class="nav-main-link-icon fa fa-inbox"></i>
                                                <span class="nav-main-link-name">Detail </span>
                                            </a>
                                            <ul class="nav-main-submenu">
                                                @foreach ($desa as $des)
                                                    <li class="nav-main-item">
                                                        <a class="nav-main-link nav-main-link-submenu"
                                                            data-toggle="submenu" aria-haspopup="true"
                                                            aria-expanded="false" href="#">
                                                            <i class="nav-main-link-icon fa fa-inbox"></i>
                                                            <span class="nav-main-link-name">{{ $des->nama_desa }}</span>
                                                        </a>
                                                        <ul class="nav-main-submenu">

                                                            <li class="nav-main-item">
                                                                @foreach ($pernikahan as $dta)
                                                                    <a class="nav-main-link" href="#">
                                                                        <i class="nav-main-link-icon fa fa-chart-pie"></i>
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
                                </td>

                                <td>

                                    <a class="nav-main-link" href="#">
                                        <div class="block-content block-content-full text-center">
                                            <div class="py-3">
                                                <!-- Pie Chart Container -->
                                                <canvas id="js-chartjs-pie-pernikahan"></canvas>
                                            </div>
                                        </div>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-vcenter">
                        <thead>
                            <tr>

                                <th>Data</th>
                                <th style="width: 50%;  height: 50%;">
                                    Status Kewarganegaraan
                                </th>
                                {{-- <th class="text-center" style="width: 100px;">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-semibold">
                                    <ul class="nav-main">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                aria-haspopup="true" aria-expanded="false" href="#">
                                                <i class="nav-main-link-icon fa fa-inbox"></i>
                                                <span class="nav-main-link-name">Detail </span>
                                            </a>
                                            <ul class="nav-main-submenu">
                                                @foreach ($desa as $des)
                                                    <li class="nav-main-item">
                                                        <a class="nav-main-link nav-main-link-submenu"
                                                            data-toggle="submenu" aria-haspopup="true"
                                                            aria-expanded="false" href="#">
                                                            <i class="nav-main-link-icon fa fa-inbox"></i>
                                                            <span class="nav-main-link-name">{{ $des->nama_desa }}</span>
                                                        </a>
                                                        <ul class="nav-main-submenu">

                                                            <li class="nav-main-item">
                                                                @foreach ($kewarganegaraan as $dta)
                                                                    <a class="nav-main-link" href="#">
                                                                        <i class="nav-main-link-icon fa fa-chart-pie"></i>
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
                                </td>

                                <td>

                                    <a class="nav-main-link" href="#">
                                        <div class="block-content block-content-full text-center">
                                            <div class="py-3">
                                                <!-- Pie Chart Container -->
                                                <canvas id="js-chartjs-pie-kewarganegaraam"></canvas>
                                            </div>
                                        </div>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-vcenter">
                        <thead>
                            <tr>

                                <th>Data</th>
                                <th style="width: 50%;  height: 50%;">
                                    Status Hak Politik
                                </th>
                                {{-- <th class="text-center" style="width: 100px;">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-semibold">
                                    <ul class="nav-main">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                aria-haspopup="true" aria-expanded="false" href="#">
                                                <i class="nav-main-link-icon fa fa-inbox"></i>
                                                <span class="nav-main-link-name">Detail </span>
                                            </a>
                                            <ul class="nav-main-submenu">
                                                @foreach ($desa as $des)
                                                    <li class="nav-main-item">
                                                        <a class="nav-main-link nav-main-link-submenu"
                                                            data-toggle="submenu" aria-haspopup="true"
                                                            aria-expanded="false" href="#">
                                                            <i class="nav-main-link-icon fa fa-inbox"></i>
                                                            <span class="nav-main-link-name">{{ $des->nama_desa }}</span>
                                                        </a>
                                                        <ul class="nav-main-submenu">

                                                            <li class="nav-main-item">
                                                                @foreach ($hakpolitik as $dta)
                                                                    <a class="nav-main-link" href="#">
                                                                        <i class="nav-main-link-icon fa fa-chart-pie"></i>
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
                                </td>

                                <td>

                                    <a class="nav-main-link" href="#">
                                        <div class="block-content block-content-full text-center">
                                            <div class="py-3">
                                                <!-- Pie Chart Container -->
                                                <canvas id="js-chartjs-pie-politik"></canvas>
                                            </div>
                                        </div>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-vcenter">
                        <thead>
                            <tr>

                                <th>Data</th>
                                <th style="width: 50%;  height: 50%;">
                                    Status Pekerjaan Penduduk
                                </th>
                                {{-- <th class="text-center" style="width: 100px;">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-semibold">
                                    <ul class="nav-main">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                aria-haspopup="true" aria-expanded="false" href="#">
                                                <i class="nav-main-link-icon fa fa-inbox"></i>
                                                <span class="nav-main-link-name">Detail </span>
                                            </a>
                                            <ul class="nav-main-submenu">
                                                @foreach ($desa as $des)
                                                    <li class="nav-main-item">
                                                        <a class="nav-main-link nav-main-link-submenu"
                                                            data-toggle="submenu" aria-haspopup="true"
                                                            aria-expanded="false" href="#">
                                                            <i class="nav-main-link-icon fa fa-inbox"></i>
                                                            <span class="nav-main-link-name">{{ $des->nama_desa }}</span>
                                                        </a>
                                                        <ul class="nav-main-submenu">

                                                            <li class="nav-main-item">
                                                                @foreach ($pekerjaan as $dta)
                                                                    <a class="nav-main-link" href="#">
                                                                        <i class="nav-main-link-icon fa fa-chart-pie"></i>
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
                                </td>

                                <td>

                                    <a class="nav-main-link" href="#">
                                        <div class="block-content block-content-full text-center">
                                            <div class="py-3">
                                                <!-- Pie Chart Container -->
                                                <canvas id="js-chartjs-pie-pekerjaan"></canvas>
                                            </div>
                                        </div>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-vcenter">
                        <thead>
                            <tr>

                                <th>Data</th>
                                <th style="width: 50%;  height: 50%;">
                                    Jenis Pekerjaan
                                </th>
                                {{-- <th class="text-center" style="width: 100px;">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-semibold">
                                    <ul class="nav-main">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                aria-haspopup="true" aria-expanded="false" href="#">
                                                <i class="nav-main-link-icon fa fa-inbox"></i>
                                                <span class="nav-main-link-name">Detail </span>
                                            </a>
                                            <ul class="nav-main-submenu">
                                                @foreach ($desa as $des)
                                                    <li class="nav-main-item">
                                                        <a class="nav-main-link nav-main-link-submenu"
                                                            data-toggle="submenu" aria-haspopup="true"
                                                            aria-expanded="false" href="#">
                                                            <i class="nav-main-link-icon fa fa-inbox"></i>
                                                            <span class="nav-main-link-name">{{ $des->nama_desa }}</span>
                                                        </a>
                                                        <ul class="nav-main-submenu">

                                                            <li class="nav-main-item">
                                                                @foreach ($jenispekerjaan as $dta)
                                                                    <a class="nav-main-link" href="#">
                                                                        <i class="nav-main-link-icon fa fa-chart-pie"></i>
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
                                </td>

                                <td>
                                    <a class="nav-main-link" href="#">
                                        <div class="block-content block-content-full text-center">
                                            <div class="py-3">
                                                <!-- Pie Chart Container -->
                                                <canvas id="js-chartjs-pie-jenispekerjaan"></canvas>
                                            </div>
                                        </div>
                                    </a>
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

    <!-- Page JS Code -->
    {{-- <script src="{{ asset('assets/js/pages/be_comp_charts.min.js') }}"></script> --}}

    <!-- Page JS Helpers (Easy Pie Chart + jQuery Sparkline Plugins) -->
    <script>
        Dashmix.helpersOnLoad(['jq-easy-pie-chart', 'jq-sparkline']);
    </script>
@endpush
@push('javascript-internal')
    <script>
        Dashmix.onLoad(class {
            static initChartsChartJS() {
                Chart.defaults.color = "#818d96", Chart.defaults.scale.grid.color = "rgba(0,0,0,.04)", Chart
                    .defaults.scale.grid.zeroLineColor = "rgba(0,0,0,.1)", Chart.defaults.scale.beginAtZero = !
                    1, Chart.defaults.elements.line.borderWidth = 3, Chart.defaults.elements.point.radius = 5,
                    Chart.defaults.elements.point.hoverRadius = 7, Chart.defaults.plugins.tooltip.radius = 3,
                    Chart.defaults.plugins.legend.labels.boxWidth = 5;
                let d_statistik, d_kk, d_kemiskinan, d_penduduk, d_kelamin, d_tinggal, d_agama, d_pernikahan,
                    d_kewarganegaraan, d_politik, d_pekerjaan, d_jenispekerjaan = document.getElementById(
                        "js-chartjs-lines"),
                    kk = document.getElementById("js-chartjs-pie-kk"),
                    kemiskinan = document.getElementById("js-chartjs-pie-kemiskinan"),
                    penduduk = document.getElementById("js-chartjs-pie-penduduk"),
                    kelamin = document.getElementById("js-chartjs-pie-kelamin"),
                    tinggal = document.getElementById("js-chartjs-pie-tinggal"),
                    agama = document.getElementById("js-chartjs-pie-agama"),
                    pernikahan = document.getElementById("js-chartjs-pie-pernikahan"),
                    kewarganegaraan = document.getElementById("js-chartjs-pie-kewarganegaraam"),
                    politik = document.getElementById("js-chartjs-pie-politik"),
                    pekerjaan = document.getElementById("js-chartjs-pie-pekerjaan"),
                    jenispekerjaan = document.getElementById("js-chartjs-pie-jenispekerjaan"),




                    ampalu = document.getElementById("js-chartjs-pie-ampalu"),
                    tjsabar = document.getElementById("js-chartjs-pie-tjsabar"),
                    apar = document.getElementById("js-chartjs-pie-apar"),
                    naras = document.getElementById("js-chartjs-pie-naras"),
                    balainaras = document.getElementById("js-chartjs-pie-balainaras"),
                    cubadaksel = document.getElementById("js-chartjs-pie-cubadaksel"),
                    cubadakut = document.getElementById("js-chartjs-pie-cubadakut"),
                    cubadakair = document.getElementById("js-chartjs-pie-cubadakair"),
                    mangguang = document.getElementById("js-chartjs-pie-mangguang"),
                    narashilir = document.getElementById("js-chartjs-pie-narashilir"),
                    padangbirik = document.getElementById("js-chartjs-pie-padangbirik"),
                    sikapakbarat = document.getElementById("js-chartjs-pie-sikapakbarat"),
                    sikapaktimur = document.getElementById("js-chartjs-pie-sikapaktimur"),
                    sintuak = document.getElementById("js-chartjs-pie-sintuak"),
                    sungrumbai = document.getElementById("js-chartjs-pie-sungrumbai"),
                    tungkalsel = document.getElementById("js-chartjs-pie-tungkalsel"),
                    tungkalut = document.getElementById("js-chartjs-pie-tungkalut");
                d_statistik = {
                        labels: [

                            'Luas Lahan Ladang / Tegalan (65%)',
                            'Luas Lahan Kebun (15%)',
                            'Luas Lahan Kolam (20%)',
                            'Luas Lahan Terbuka (30%)',
                            'Luas Lahan Pemukiman (40%)',
                            'Luas Lahan Sawah (60%)',
                            'Luas Lahan Semak Belukar (80%)',
                            'Luas Lahan Pemakaman (70%)',
                            'Luas Lahan Hutan (25%)',
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
                            ],
                            hoverBackgroundColor: [
                                "rgba(141, 196, 81, 5)",
                                "rgba(255, 177, 25, 5)",
                                "rgba(224, 79, 26, 5)",
                                "rgba(155, 89, 182, 5)",
                                "rgba(84, 153, 199, 5)",
                                "rgba(69, 179, 157, 5)",
                                "rgba(220, 118, 51, 5)",
                                "rgba(241, 148, 138, 5)",
                                "rgba(110, 44, 0, 5)",
                            ]
                        }]
                    },
                    d_kk = {
                        labels: [

                            'Total KK Dalam Desa / Kelurahan (65%)',
                            'Total KK Luar Desa / Kelurahan Disatu Kecamatan (15%)',
                            'Total KK Luar Desa / Kelurahan Beda Kecamatan Disatu Kota (20%)',
                        ],
                        datasets: [{
                            data: [
                                65,
                                15,
                                20,


                            ],
                            backgroundColor: [
                                "rgba(141, 196, 81, 1)",
                                "rgba(255, 177, 25, 1)",
                                "rgba(224, 79, 26, 1)",

                            ],
                            hoverBackgroundColor: [
                                "rgba(141, 196, 81, 5)",
                                "rgba(255, 177, 25, 5)",
                                "rgba(224, 79, 26, 5)",

                            ]
                        }]
                    },
                    d_kemiskinan = {
                        labels: [
                            'Total KK Dengan Rangking Kemiskinan Mampu (60%)',
                            'Total KK Dengan Rangking Kemiskinan Biasa (20%)',
                            'Total KK Dengan Rangking Kemiskinan Miskin (15%)',
                            'Total KK Dengan Rangking Kemiskinan Miskin Ekstrim (10%)',
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
                                // "rgba(84, 153, 199, 1)",
                                // "rgba(69, 179, 157, 1)",
                                // "rgba(220, 118, 51, 1)",
                                // "rgba(241, 148, 138, 1)",
                                // "rgba(110, 44, 0, 1)",

                            ],
                            hoverBackgroundColor: [
                                "rgba(141, 196, 81, 5)",
                                "rgba(255, 177, 25, 5)",
                                "rgba(224, 79, 26, 5)",
                                "rgba(155, 89, 182, 5)",
                                // "rgba(84, 153, 199, 5)",
                                // "rgba(69, 179, 157, 5)",
                                // "rgba(220, 118, 51, 5)",
                                // "rgba(241, 148, 138, 5)",
                                // "rgba(110, 44, 0, 5)",

                            ]
                        }]
                    },
                    d_penduduk = {
                        labels: [
                            'Total Laki-laki (60%)',
                            'Total Prempuan (40%)',
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
                    },
                    d_kelamin = {
                        labels: [
                            'Total Kelamin Laki-laki (60%)',
                            'Total Perempuan (40%)',
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
                    },
                    d_tinggal = {
                        labels: [
                            'Total Penduduk Menetap (60%)',
                            'Total Penduduk Merantau (40%)',
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
                    },
                    d_agama = {
                        labels: [
                            'Total Beragama Islam (60%)',
                            'Total Beragama Protestan (10%)',
                            'Total Beragama Katolik (9%)',
                            'Total Beragama Budha (5%)',
                            'Total Beragama Hindu (5%)',

                        ],
                        datasets: [{
                            data: [
                                60,
                                10,
                                9,
                                5,
                                5, ,

                            ],
                            backgroundColor: [
                                "rgba(141, 196, 81, 1)",
                                "rgba(255, 177, 25, 1)",
                                "rgba(224, 79, 26, 1)",
                                "rgba(155, 89, 182, 1)",
                                "rgba(84, 153, 199, 1)",
                                // "rgba(69, 179, 157, 1)",
                                // "rgba(220, 118, 51, 1)",
                                // "rgba(241, 148, 138, 1)",
                                // "rgba(110, 44, 0, 1)",

                            ],
                            hoverBackgroundColor: [
                                "rgba(141, 196, 81, 5)",
                                "rgba(255, 177, 25, 5)",
                                "rgba(224, 79, 26, 5)",
                                "rgba(155, 89, 182, 5)",
                                "rgba(84, 153, 199, 5)",
                                // "rgba(69, 179, 157, 5)",
                                // "rgba(220, 118, 51, 5)",
                                // "rgba(241, 148, 138, 5)",
                                // "rgba(110, 44, 0, 5)",

                            ]
                        }]
                    },
                    d_pernikahan = {
                        labels: [
                            'Total Kawin (60%)',
                            'Total Tidak Kawin (10%)',
                            'Total Janda (9%)',
                            'Total Duda (5%)',


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
                                // "rgba(84, 153, 199, 1)",
                                // "rgba(69, 179, 157, 1)",
                                // "rgba(220, 118, 51, 1)",
                                // "rgba(241, 148, 138, 1)",
                                // "rgba(110, 44, 0, 1)",

                            ],
                            hoverBackgroundColor: [
                                "rgba(141, 196, 81, 5)",
                                "rgba(255, 177, 25, 5)",
                                "rgba(224, 79, 26, 5)",
                                "rgba(155, 89, 182, 5)",
                                // "rgba(84, 153, 199, 5)",
                                // "rgba(69, 179, 157, 5)",
                                // "rgba(220, 118, 51, 5)",
                                // "rgba(241, 148, 138, 5)",
                                // "rgba(110, 44, 0, 5)",

                            ]
                        }]
                    },
                    d_kewarganegaraan = {
                        labels: [
                            'Total WNI (60%)',
                            'Total WNA(10%)',
                            // 'Total Janda (9%)',
                            // 'Total Duda (5%)',


                        ],
                        datasets: [{
                            data: [
                                60,
                                10,



                            ],
                            backgroundColor: [
                                "rgba(141, 196, 81, 1)",
                                "rgba(255, 177, 25, 1)",
                                // "rgba(224, 79, 26, 1)",
                                // "rgba(155, 89, 182, 1)",
                                // "rgba(84, 153, 199, 1)",
                                // "rgba(69, 179, 157, 1)",
                                // "rgba(220, 118, 51, 1)",
                                // "rgba(241, 148, 138, 1)",
                                // "rgba(110, 44, 0, 1)",

                            ],
                            hoverBackgroundColor: [
                                "rgba(141, 196, 81, 5)",
                                "rgba(255, 177, 25, 5)",
                                // "rgba(224, 79, 26, 5)",
                                // "rgba(155, 89, 182, 5)",
                                // "rgba(84, 153, 199, 5)",
                                // "rgba(69, 179, 157, 5)",
                                // "rgba(220, 118, 51, 5)",
                                // "rgba(241, 148, 138, 5)",
                                // "rgba(110, 44, 0, 5)",

                            ]
                        }]
                    },
                    d_politik = {
                        labels: [
                            'Total Hak Pilih Politik (60%)',
                            'Total Tidak Memiliki Hak Politik(40%)',
                            // 'Total Janda (9%)',
                            // 'Total Duda (5%)',


                        ],
                        datasets: [{
                            data: [
                                60,
                                40,



                            ],
                            backgroundColor: [
                                "rgba(141, 196, 81, 1)",
                                "rgba(255, 177, 25, 1)",
                                // "rgba(224, 79, 26, 1)",
                                // "rgba(155, 89, 182, 1)",
                                // "rgba(84, 153, 199, 1)",
                                // "rgba(69, 179, 157, 1)",
                                // "rgba(220, 118, 51, 1)",
                                // "rgba(241, 148, 138, 1)",
                                // "rgba(110, 44, 0, 1)",

                            ],
                            hoverBackgroundColor: [
                                "rgba(141, 196, 81, 5)",
                                "rgba(255, 177, 25, 5)",
                                // "rgba(224, 79, 26, 5)",
                                // "rgba(155, 89, 182, 5)",
                                // "rgba(84, 153, 199, 5)",
                                // "rgba(69, 179, 157, 5)",
                                // "rgba(220, 118, 51, 5)",
                                // "rgba(241, 148, 138, 5)",
                                // "rgba(110, 44, 0, 5)",

                            ]
                        }]
                    },
                    d_pekerjaan = {
                        labels: [
                            'Total Bekerja (30%)',
                            'Total Tidak Bekerja (10%)',
                            'Total Sedang Mencari Pekerjaan (10%)',
                            'Total Bersekolah (11%)',
                            'Total Mengurus Rumah Tangga (39%)',



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
                                // "rgba(69, 179, 157, 1)",
                                // "rgba(220, 118, 51, 1)",
                                // "rgba(241, 148, 138, 1)",
                                // "rgba(110, 44, 0, 1)",

                            ],
                            hoverBackgroundColor: [
                                "rgba(141, 196, 81, 5)",
                                "rgba(255, 177, 25, 5)",
                                "rgba(224, 79, 26, 5)",
                                "rgba(155, 89, 182, 5)",
                                "rgba(84, 153, 199, 5)",
                                // "rgba(69, 179, 157, 5)",
                                // "rgba(220, 118, 51, 5)",
                                // "rgba(241, 148, 138, 5)",
                                // "rgba(110, 44, 0, 5)",

                            ]
                        }]
                    },
                    d_jenispekerjaan = {
                        labels: [
                            'Total Petani Pemilik Lahan (30%)',
                            'Total Petani Penyewa (5%)',
                            'Total Buruh Tani (10%)',
                            'Total Nelayan Pemilik Kapal / Perahu (2%)',
                            'Total Nelayan Penyewa Kapal / Perahu (2%)',
                            'Total Buruh Nelayan (2%)',
                            'Total Guru (2%)',
                            'Total Pedagang (2%)',
                            'Total Pekerja Pengolahan / Industri (2%)',
                            'Total PNS (12%)',
                            'Total TNI (2%)',
                            'Total Polisi (9%)',
                            'Total Perangkat Desa (2%)',
                            'Total Pegawai Honorer Pemda (10%)',
                            'Total TKI (2%)',
                            'Total Tenaga Kesehatan (2%)',
                            'Total Buruh Harian Lepas (2%)',
                            'Total Tenaga Kerja PPPK (2%)',
                            'Total Tenaga Kerja Lainya (2%)',



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
                            ],
                            hoverBackgroundColor: [
                                "rgba(141, 196, 81, 5)",
                                "rgba(255, 177, 25, 5)",
                                "rgba(224, 79, 26, 5)",
                                "rgba(155, 89, 182, 5)",
                                "rgba(84, 153, 199, 5)",
                                "rgba(69, 179, 157, 5)",
                                "rgba(220, 118, 51, 5)",
                                "rgba(241, 148, 138, 5)",
                                "rgba(110, 44, 0, 5)",

                                "rgba(100, 30, 22, 5)",
                                "rgba(120, 40, 31, 5)",
                                "rgba(81, 46, 95, 5)",
                                "rgba(74, 35, 90, 5)",
                                "rgba(21, 67, 96, 5)",
                                "rgba(27, 79, 114, 5)",
                                "rgba(11, 83, 69, 5)",
                                "rgba(20, 90, 50 , 5)",
                                "rgba(125, 102, 8 , 5)",
                                "rgba(125, 102, 8 , 5)",

                            ]
                        }]
                    },
                    null !== kk && (kk = new Chart(kk, {
                        type: "pie",
                        data: d_kk
                    })),
                    null !== kemiskinan && (kemiskinan = new Chart(kemiskinan, {
                        type: "pie",
                        data: d_kemiskinan
                    })),
                    null !== penduduk && (penduduk = new Chart(penduduk, {
                        type: "pie",
                        data: d_penduduk
                    })),
                    null !== kelamin && (kelamin = new Chart(kelamin, {
                        type: "pie",
                        data: d_kelamin
                    })),
                    null !== tinggal && (tinggal = new Chart(tinggal, {
                        type: "pie",
                        data: d_tinggal
                    })),
                    null !== agama && (agama = new Chart(agama, {
                        type: "pie",
                        data: d_agama
                    })),
                    null !== pernikahan && (pernikahan = new Chart(pernikahan, {
                        type: "pie",
                        data: d_pernikahan
                    })),
                    null !== kewarganegaraan && (kewarganegaraan = new Chart(kewarganegaraan, {
                        type: "pie",
                        data: d_kewarganegaraan
                    })),
                    null !== politik && (politik = new Chart(politik, {
                        type: "pie",
                        data: d_politik
                    })),
                    null !== pekerjaan && (pekerjaan = new Chart(pekerjaan, {
                        type: "pie",
                        data: d_pekerjaan
                    })),
                    null !== jenispekerjaan && (jenispekerjaan = new Chart(jenispekerjaan, {
                        type: "pie",
                        data: d_jenispekerjaan
                    })),

                    null !== ampalu && (ampalu = new Chart(ampalu, {
                        type: "pie",
                        data: d_statistik
                    })),
                    null !== tjsabar && (tjsabar = new Chart(tjsabar, {
                        type: "pie",
                        data: d_statistik
                    })),
                    null !== apar && (apar = new Chart(apar, {
                        type: "pie",
                        data: d_statistik
                    })),
                    null !== naras && (naras = new Chart(naras, {
                        type: "pie",
                        data: d_statistik
                    })),
                    null !== balainaras && (balainaras = new Chart(balainaras, {
                        type: "pie",
                        data: d_statistik
                    })),
                    null !== cubadaksel && (cubadaksel = new Chart(cubadaksel, {
                        type: "pie",
                        data: d_statistik
                    })),
                    null !== cubadakut && (cubadakut = new Chart(cubadakut, {
                        type: "pie",
                        data: d_statistik
                    })),
                    null !== cubadakair && (cubadakair = new Chart(cubadakair, {
                        type: "pie",
                        data: d_statistik
                    })),
                    null !== mangguang && (mangguang = new Chart(mangguang, {
                        type: "pie",
                        data: d_statistik
                    })),
                    null !== narashilir && (narashilir = new Chart(narashilir, {
                        type: "pie",
                        data: d_statistik
                    })),
                    null !== padangbirik && (padangbirik = new Chart(padangbirik, {
                        type: "pie",
                        data: d_statistik
                    })),
                    null !== sikapakbarat && (sikapakbarat = new Chart(sikapakbarat, {
                        type: "pie",
                        data: d_statistik
                    })),

                    null !== sikapaktimur && (sikapaktimur = new Chart(sikapaktimur, {
                        type: "pie",
                        data: d_statistik
                    })),
                    null !== sintuak && (sintuak = new Chart(sintuak, {
                        type: "pie",
                        data: d_statistik
                    })),
                    null !== sungrumbai && (sungrumbai = new Chart(sungrumbai, {
                        type: "pie",
                        data: d_statistik
                    })),
                    null !== tungkalsel && (tungkalsel = new Chart(tungkalsel, {
                        type: "pie",
                        data: d_statistik
                    })),
                    null !== tungkalut && (tungkalut = new Chart(tungkalut, {
                        type: "pie",
                        data: d_statistik
                    }));
            }
            static initRandomEasyPieChart() {
                document.querySelectorAll(".js-pie-randomize").forEach((a => {
                    a.addEventListener("click", (t => {
                        a.closest(".block").querySelectorAll(".pie-chart").forEach((
                            a => {
                                jQuery(a).data("easyPieChart").update(Math
                                    .floor(100 * Math.random() + 1))
                            }))
                    }))
                }))
            }
            static init() {
                this.initChartsChartJS(), this.initRandomEasyPieChart()
            }
        }.init());
    </script>
@endpush
