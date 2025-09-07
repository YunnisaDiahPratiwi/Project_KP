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
                                <td>{{ $p->it_asset }}</td>
                                <td>{{ $p->kategori_layanan }}</td>
                                <td>{{ $p->detail_masalah }}</td>
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
@endsection
