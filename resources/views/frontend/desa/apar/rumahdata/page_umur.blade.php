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
            <div class="col-xl-12">
                <div class="block block-rounded">
                    <div class="block-content block-content-full">
                        <p class="text-uppercase fw-semibold text-center mt-2 mb-4">
                            Total Umur Penduduk
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>

                                        <th>Data </th>
                                        @foreach (range(0, 75) as $item)
                                            <th style="width: 50%;"class="fw-bold">{{ $item }} Tahun</th>
                                        @endforeach
                                        <th style="width: 500px;"class="fw-bold">76 + Tahun</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @php
                                            $ba = 0;
                                        @endphp
                                        <td class="fw-semibold">
                                            Desa Apar
                                        </td>
                                        @foreach (range(0, 75) as $item)
                                            <td style="width: 30%;" class="fw-semibold">{{ $ab = rand(0, 85) }}</td>
                                            @php
                                                $ba += $ab;
                                            @endphp
                                        @endforeach
                                        <td style="width: 30%;">{{ rand(0, 9) }}</td>

                                    </tr>
                                    @foreach ($data as $dta)
                                        <tr>
                                            @php
                                                $ba = 0;
                                            @endphp

                                            <td class="fw-semibold">
                                                {{ $dta }}
                                            </td>


                                            @foreach (range(0, 75) as $key => $item)
                                                <td style="width: 30%;">{{ $ab = rand(0, 25) }}</td>
                                                @php
                                                    $ba += $ab;
                                                @endphp
                                            @endforeach
                                            <td style="width: 30%;">{{ rand(0, 9) }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>



        </div>
    </div>
@endsection
