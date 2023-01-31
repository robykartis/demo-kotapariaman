@extends('frontend.kota.master')
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
                        style="background-image: url('{{ asset('vendor/wali.jpg') }}');" href="javascript:void(0)">
                        <div class="block-content block-content-full  ratio ratio-16x9">

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    {{-- <div class="bg-body-dark">
    <div class="content">
        <div class="row g-sm push">
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block block-rounded text-center bg-image"
                    style="background-image: url('assets/media/photos/photo15.jpg');"
                    href="javascript:void(0)">
                    <div class="block-content block-content-full bg-gd-fruit-op ratio ratio-16x9">
                        <div class="d-flex justify-content-center align-items-center">
                            <div>
                                <i class="fa fa-2x fa-home text-white"></i>
                                <div class="fw-semibold mt-3 text-uppercase text-white">Home</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block block-rounded text-center bg-image"
                    style="background-image: url('assets/media/photos/photo16.jpg');"
                    href="javascript:void(0)">
                    <div class="block-content block-content-full bg-gd-sublime-op ratio ratio-16x9">
                        <div class="d-flex justify-content-center align-items-center">
                            <div>
                                <i class="far fa-2x fa-chart-bar text-white"></i>
                                <div class="fw-semibold mt-3 text-uppercase text-white">Statistics</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block block-rounded text-center bg-image"
                    style="background-image: url('assets/media/photos/photo17.jpg');"
                    href="javascript:void(0)">
                    <div class="block-content block-content-full bg-gd-aqua-op ratio ratio-16x9">
                        <div class="d-flex justify-content-center align-items-center">
                            <div>
                                <i class="fa fa-2x fa-user-circle text-white"></i>
                                <div class="fw-semibold mt-3 text-uppercase text-white">Accounts</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block block-rounded text-center bg-image"
                    style="background-image: url('assets/media/photos/photo18.jpg');"
                    href="javascript:void(0)">
                    <div class="block-content block-content-full bg-gd-sea-op ratio ratio-16x9">
                        <div class="d-flex justify-content-center align-items-center">
                            <div>
                                <i class="fa fa-2x fa-briefcase text-white"></i>
                                <div class="fw-semibold mt-3 text-uppercase text-white">Projects</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block block-rounded text-center bg-image"
                    style="background-image: url('assets/media/photos/photo19.jpg');"
                    href="javascript:void(0)">
                    <div class="block-content block-content-full bg-gd-dusk-op ratio ratio-16x9">
                        <div class="d-flex justify-content-center align-items-center">
                            <div>
                                <i class="fa fa-2x fa-file-alt text-white"></i>
                                <div class="fw-semibold mt-3 text-uppercase text-white">Invoices</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block block-rounded text-center bg-image"
                    style="background-image: url('assets/media/photos/photo20.jpg');"
                    href="javascript:void(0)">
                    <div class="block-content block-content-full bg-gd-sun-op ratio ratio-16x9">
                        <div class="d-flex justify-content-center align-items-center">
                            <div>
                                <i class="fa fa-2x fa-sign-out-alt text-white"></i>
                                <div class="fw-semibold mt-3 text-uppercase text-white">Logout</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div> --}}


    <!-- END Quick Menu -->

    <!-- Page Content -->
    <div class="content">

        <div class="row">
            <!-- Best Media -->

            <div class="col-xl-12">
                <div class="block block-rounded">
                    <div class="block-content block-content-full">
                        <p class="text-uppercase fw-semibold text-center mt-2 mb-4">

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
