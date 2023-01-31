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
            @foreach ($data as $dta)
                <div class="col-6 col-md-4 col-sm-4 col-xl-4">
                    <a class="block block-rounded block-bordered block-link-shadow text-center" href="javascript:void(0)">
                        <div class="block-content">
                            <p class="my-2">
                                <i class="fa fa-file-word fa-2x text-muted"></i>
                            </p>
                            <p class="fw-semibold">{{ $dta }}</p>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
@endsection
