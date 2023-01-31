@extends('frontend.kecamatan.utara.master')
@section('title')
    Kota Pariaman
@endsection
@section('content')
    <!-- Quick Menu -->
    <div class="bg-body-dark">
        <div class="content">
            <div class="row g-sm push">
                <div class="col-12 col-md-4 col-xl-12">
                    <div class="block block-rounded text-center bg-image"
                        style="background-image: url('{{ asset('vendor/camat.jpg') }}');" href="javascript:void(0)">
                        <div class="block-content block-content-full  ratio ratio-16x9">

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>




    <!-- END Quick Menu -->

    <!-- Page Content -->
    <div class="content">

        <div class="row">
            <!-- Best Media -->

            <div class="col-xl-12">
                <div class="block block-rounded">
                    <div class="block-content block-content-full">
                        <p class="text-uppercase fw-semibold text-center mt-2 mb-4">
                            {{-- Books Collection --}}
                        </p>
                        {{-- <a class="block block-rounded block-link-rotate bg-body-light mb-2" href="javascript:void(0)">
                            <div
                                class="block-content block-content-sm block-content-full d-flex align-items-center justify-content-between">
                                <div class="me-3">
                                    <p class="fs-lg mb-0">
                                        260
                                    </p>
                                    <p class="text-muted fs-sm mb-0">
                                        Total Wirausaha tidak Mengenakan Pajak kepada konsumen
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
                                        430
                                    </p>
                                    <p class="text-muted fs-sm mb-0">
                                        in Fiction
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
                                        368
                                    </p>
                                    <p class="text-muted fs-sm mb-0">
                                        in Business
                                    </p>
                                </div>
                                <div class="item">
                                    <i class="fa fa-2x fa-book text-muted"></i>
                                </div>
                            </div>
                        </a>
                        <a class="block block-rounded block-link-rotate bg-body-light mb-0" href="javascript:void(0)">
                            <div
                                class="block-content block-content-sm block-content-full d-flex align-items-center justify-content-between">
                                <div class="me-3">
                                    <p class="fs-lg mb-0">
                                        580
                                    </p>
                                    <p class="text-muted fs-sm mb-0">
                                        in Science
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
            <!-- END Best Media -->
        </div>
    </div>
@endsection
