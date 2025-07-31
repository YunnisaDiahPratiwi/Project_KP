@extends('layouts/app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        {{$title}}
    </h1>
    {{-- <div class="card bg-primary text-white mb-4" style="border-radius: 1rem;">
        <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
            <div>
                <h5 class="card-title font-weight-bold mb-1">Selamat Datang, Staff IT</h5>
                <p class="card-text mb-0">Sistem Manajemen Instalasi dan Troubleshooting Layanan IT</p>
            </div>
            <span class="badge badge-light text-primary font-weight-bold mt-3 mt-md-0">
                Teknisi
            </span>
        </div>
    </div> --}}

    <div class="card bg-primary text-white mb-4" style="border-radius: 1rem;">
        <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
            <div class="d-flex align-items-center">
                <i class="fas fa-house-laptop fa-2x mr-3"></i>
                <div>
                    <h2 class="card-title mb-1">Selamat Datang, Divisi IT</h2>
                    <p class="card-text mb-0">Sistem Manajemen Instalasi dan Troubleshooting Layanan IT UPT Balai Yasa Lahat</p><br>
                    <span class="badge badge-light text-primary font-weight-bold mt-3 mt-md-0">
                        <i class="fas fa-user-tie mr-1"></i> Staff IT
                    </span>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Perangkat</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{$jumlahDevice}}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-laptop fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Berita Acara</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{$jumlahBeritaAcara}}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-file-alt fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Berita Acara Pending</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{$jumlahBAPending}}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-hourglass-start fa-2x text-danger"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Berita Acara Diproses</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{$jumlahBAProses}}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-spinner fa-spin fa-2x text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Berita Acara Selesai</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{$jumlahBASelesai}}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check-circle fa-2x text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
