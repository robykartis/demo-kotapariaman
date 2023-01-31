@extends('frontend.kecamatan.utara.master')
@section('title')
    Kota Pariaman
@endsection
@section('content')
    <!-- Quick Menu -->






    <!-- END Quick Menu -->

    <!-- Page Content -->
    <div class="content">

        <div class="row">
            <!-- Best Media -->

            <div class="col-xl-12">
                <div class="block block-rounded">
                    <div class="block-content block-content-full">
                        <p class="text-uppercase fw-semibold text-center mt-2 mb-4">
                            Desa / Kelurahan Kecamatan {{ $name }}
                        </p>
                        <a class="block block-rounded block-link-rotate bg-body-light mb-2" href="{{ $public_desa }}">
                            <div
                                class="block-content block-content-sm block-content-full d-flex align-items-center justify-content-between">
                                <div class="me-3">
                                    <p class="fs-lg mb-0">
                                        Apar
                                    </p>

                                </div>
                                <div class="item">
                                    <i class="fa fa-2x fa-book text-muted"></i>
                                </div>
                            </div>
                        </a>
                        @foreach ($desa as $des)
                            <a class="block block-rounded block-link-rotate bg-body-light mb-2" href="javascript:void(0)">
                                <div
                                    class="block-content block-content-sm block-content-full d-flex align-items-center justify-content-between">
                                    <div class="me-3">
                                        <p class="fs-lg mb-0">
                                            {{ $des->nama_desa }}
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
