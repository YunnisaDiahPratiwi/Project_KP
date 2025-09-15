@extends('layouts.app')

@section('content')

    <div class="text-white mb-4" style="border-radius: 1rem; background-color:#2D2D6BE5;">
        <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
            <div class="d-flex align-items-center">
                <i class="fas fa-house-laptop fa-2x mr-3"></i>
                <div>
                    <h2 class="card-title mb-1">Selamat Datang, Divisi IT</h2>
                    <p class="card-text mb-0">Sistem Manajemen Instalasi dan Troubleshooting Layanan IT UPT Balai Yasa Lahat</p><br>
                    <span class="badge badge-light font-weight-bold mt-3 mt-md-0" style="color: #2D2D6BE5;">
                        <i class="fas fa-user-tie mr-1"></i> Staff IT
                    </span>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="row">
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
    </div> --}}

    <div class="row">

    <!-- Total Pengajuan -->
    <div class="col-md-3">
        <div class="card shadow-sm p-3 mb-3 bg-warning text-white">
        <h5>Total Berita Acara</h5>
        <h3>{{ $jumlahBeritaAcara }}</h3>
        </div>
    </div>

    <!-- Pengajuan Baru -->
    <div class="col-md-3">
        <div class="card shadow-sm p-3 mb-3 bg-primary text-white">
        <h5>Pengajuan Baru</h5>
        <h3>{{ $jumlahPengajuanBaru }}</h3>
        </div>
    </div>

    <!-- Pengajuan Diproses -->
    <div class="col-md-3">
        <div class="card shadow-sm p-3 mb-3 bg-info text-white">
        <h5>Pengajuan Diproses</h5>
        <h3>{{ $jumlahPengajuanProses }}</h3>
        </div>
    </div>

    <!-- Pengajuan Selesai -->
    <div class="col-md-3">
        <div class="card shadow-sm p-3 mb-3 bg-success text-white">
        <h5>Pengajuan Selesai</h5>
        <h3>{{ $jumlahPengajuanSelesai }}</h3>
        </div>
    </div>

    </div>


    <div class="card mt-4">
    <div class="card-header text-grey">
        Pengajuan Baru
    </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                    <thead class="text-white" style="background-color:#2D2D6BE5;">
                        <tr>
                            <th>No</th>
                            <th>Nama Karyawan</th>
                            <th>Divisi</th>
                            <th>IT Asset</th>
                            <th>Kategori Layanan</th>
                            <th>Detail Masalah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pengajuans as $i => $p)
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td>{{ $p->karyawan->nama }}</td>
                                <td>{{ $p->karyawan->divisi }}</td>
                                <td>{{ $p->device->it_asset ?? '-' }}</td>
                                <td>{{ $p->kategori_layanan }}</td>
                                <td>{{ $p->detail_masalah }}</td>
                                <td>
                                    <form action="{{ route('teknisi.updateStatus', $p->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        <input type="hidden" name="status" value="diproses">
                                        <button type="submit" class="btn btn-sm btn-success" title="Validasi">
                                            <i class="fas fa-check"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">Tidak ada pengajuan baru</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead class="text-white" style="background-color:#2D2D6BE5;">
                    <tr>
                        <th>No</th>
                        <th>Nama Karyawan</th>
                        <th>Divisi</th>
                        <th>IT Asset</th>
                        <th>Kategori Layanan</th>
                        <th>Detail Masalah</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pengajuans as $i => $p)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $p->karyawan->nama }}</td>
                            <td>{{ $p->karyawan->divisi }}</td>
                            <td>{{ $p->it_asset }}</td>
                            <td>{{ $p->kategori_layanan }}</td>
                            <td>{{ $p->detail_masalah }}</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div> --}}
@endsection
