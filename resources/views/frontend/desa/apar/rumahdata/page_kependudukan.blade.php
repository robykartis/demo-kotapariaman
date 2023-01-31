@extends('frontend.desa.apar.master')
@section('title')
    Apar
@endsection
@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt bg-body-light px-4 py-2 rounded push">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0)">{{ $kelompok }}</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $list }}</li>
                </ol>
            </nav>
        </div>

        <div class="row">

            <div class="block block-rounded">
                <div class="block-content block-content-full">
                    <p class="text-uppercase fw-semibold text-center mt-2 mb-4">
                        Data {{ $list }}
                    </p>

                    <a class="block block-rounded block-link-rotate bg-body-light mb-2" href="javascript:void(0)">
                        <div
                            class="block-content block-content-sm block-content-full d-flex align-items-center justify-content-between">
                            <div class="me-3">
                                <p class="fs-lg mb-0">
                                    Kartu Keluarga Masuk
                                </p>
                                <p class="fs-lg mb-0">
                                    <input type="date" class="form-control">
                                </p>
                                <p class="text-uppercase fw-semibold text-center mt-2 mb-4">
                                    {{ $kkmasuk }}
                                </p>

                                <p class="text-muted fs-m mb-0">

                                </p>
                            </div>
                            <div class="item">
                                <i class="fa fa-2x fa-book text-muted"></i>
                            </div>
                        </div>
                    </a>
                    <a class="block block-rounded block-link-rotate bg-body-light mb-2" href="javascript:void(0)">
                        <div
                            class="block-content block-content-sm block-content-full d-flex align-items-center justify-content-between">
                            <div class="me-3">
                                <p class="fs-lg mb-0">
                                    Kartu Keluarga Keluar
                                </p>
                                <p class="fs-lg mb-0">
                                    <input type="date" class="form-control">
                                </p>
                                <p class="text-uppercase fw-semibold text-center mt-2 mb-4">
                                    {{ $kkkeluar }}
                                </p>

                                <p class="text-muted fs-m mb-0">

                                </p>
                            </div>
                            <div class="item">
                                <i class="fa fa-2x fa-book text-muted"></i>
                            </div>
                        </div>
                    </a>
                    <a class="block block-rounded block-link-rotate bg-body-light mb-2" href="javascript:void(0)">
                        <div
                            class="block-content block-content-sm block-content-full d-flex align-items-center justify-content-between">
                            <div class="me-3">

                                <p class="fs-lg mb-0">
                                    Kartu Keluarga Pecahan
                                </p>
                                <p class="fs-lg mb-0">
                                    <input type="date" class="form-control">
                                </p>
                                <p class="text-uppercase fw-semibold text-center mt-2 mb-4">
                                    {{ $kkpecahan }}
                                </p>

                                <p class="text-muted fs-m mb-0">

                                </p>
                            </div>
                            <div class="item">
                                <i class="fa fa-2x fa-book text-muted"></i>
                            </div>
                        </div>
                    </a>

                    <hr>

                    <a class="block block-rounded block-link-rotate bg-body-light mb-2" href="javascript:void(0)">
                        <div
                            class="block-content block-content-sm block-content-full d-flex align-items-center justify-content-between">
                            <div class="me-3">
                                <p class="fs-lg mb-0">
                                    Data Penduduk Masuk
                                </p>
                                <p class="fs-lg mb-0">
                                    <input type="date" class="form-control">
                                </p>
                                <p class="text-uppercase fw-semibold text-center mt-2 mb-4">
                                    {{ $penmasuk }}
                                </p>

                                <p class="text-muted fs-m mb-0">

                                </p>
                            </div>
                            <div class="item">
                                <i class="fa fa-2x fa-book text-muted"></i>
                            </div>
                        </div>
                    </a>
                    <a class="block block-rounded block-link-rotate bg-body-light mb-2" href="javascript:void(0)">
                        <div
                            class="block-content block-content-sm block-content-full d-flex align-items-center justify-content-between">
                            <div class="me-3">
                                <p class="fs-lg mb-0">
                                    Data Penduduk Keluar
                                </p>
                                <p class="fs-lg mb-0">
                                    <input type="date" class="form-control">
                                </p>
                                <p class="text-uppercase fw-semibold text-center mt-2 mb-4">
                                    {{ $penkeluar }}
                                </p>

                                <p class="text-muted fs-m mb-0">

                                </p>
                            </div>
                            <div class="item">
                                <i class="fa fa-2x fa-book text-muted"></i>
                            </div>
                        </div>
                    </a>
                    {{-- <a class="block block-rounded block-link-rotate bg-body-light mb-2" href="javascript:void(0)">
                        <div
                            class="block-content block-content-sm block-content-full d-flex align-items-center justify-content-between">
                            <div class="me-3">
                                <p class="fs-lg mb-0">
                                    Data Penduduk Pecahan
                                </p>
                                <p class="fs-lg mb-0">
                                    <input type="date" class="form-control">
                                </p>
                                <p class="text-uppercase fw-semibold text-center mt-2 mb-4">
                                    {{ $penpecahan }}
                                </p>

                                <p class="text-muted fs-m mb-0">

                                </p>
                            </div>
                            <div class="item">
                                <i class="fa fa-2x fa-book text-muted"></i>
                            </div>
                        </div>
                    </a> --}}

                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-xl-12">
                <div class="block block-rounded">
                    <div class="block-content block-content-full">
                        <p class="text-uppercase fw-semibold text-center mt-2 mb-4">
                            {{ $list }}
                        </p>
                        @foreach ($data as $dta)
                            <a class="block block-rounded block-link-rotate bg-body-light mb-2" href="javascript:void(0)">
                                <div
                                    class="block-content block-content-sm block-content-full d-flex align-items-center justify-content-between">
                                    <div class="me-3">
                                        <p class="fs-lg mb-0">
                                            {{ $nilai }} {{ $satuan }}
                                        </p>
                                        <p class="text-muted fs-m mb-0">
                                            {{ $dta }}
                                        </p>
                                    </div>
                                    <div class="item">
                                        <i class="fa fa-2x fa-book text-muted"></i>
                                    </div>
                                </div>
                            </a>
                        @endforeach


                    </div>
                </div>
            </div>
            <!-- END Best Media -->
        </div>


    </div>
@endsection
