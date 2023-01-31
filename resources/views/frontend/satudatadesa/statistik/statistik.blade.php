@extends('frontend.satudatadesa.master')
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


        <div class="row">
            @foreach ($data as $dta)
                <div class="col-6 col-md-4 col-sm-4 col-xl-4">
                    <a class="block block-rounded block-bordered block-link-shadow text-center" href="{{ $dta['link'] }}">
                        <div class="block-content">
                            <p class="my-2">
                                <img height="50px" src="{{ asset('vendor/logosiap.png') }}"
                                    srcset="{{ asset('vendor/logosiap.png') }}" alt="" />
                            </p>
                            <p class="fw-semibold">{{ $dta['nama'] }}</p>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
@endsection
