{{-- @extends('layouts.app') --}}
{{--
@section('content')
<div class="container">
    <h1 class="h3 mb-4 text-gray-800">
        {{$title}}
    </h1>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif --}}

    <!-- Form Pengajuan -->
    {{-- <div class="card mb-4">
        <div class="card-header">Form Pengajuan</div>
        <div class="card-body">
            <form method="POST" action="{{ route('pengajuan.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="it_asset" class="form-label">IT Asset</label>
                    <select class="form-select @error('it_asset') is-invalid @enderror" id="it_asset" name="it_asset" required>
                        <option value="">Pilih IT Asset</option> --}}
                        {{-- @foreach($itAssets as $asset)
                            <option value="{{ $asset }}" {{ old('it_asset') == $asset ? 'selected' : '' }}>{{ $asset }}</option>
                        @endforeach --}}
                    {{-- </select>
                    @error('it_asset')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div> --}}

                {{-- <div class="mb-3">
                    <label for="kategori_layanan" class="form-label">Kategori Layanan</label>
                    <select class="form-select @error('kategori_layanan') is-invalid @enderror" id="kategori_layanan" name="kategori_layanan" required>
                        <option value="">Pilih Kategori Layanan</option> --}}
                        {{-- @foreach($kategoriLayanan as $kategori)
                            <option value="{{ $kategori }}" {{ old('kategori_layanan') == $kategori ? 'selected' : '' }}>{{ $kategori }}</option>
                        @endforeach --}}
                    {{-- </select>
                    @error('kategori_layanan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div> --}}
{{--
                <div class="mb-3">
                    <label for="detail_masalah" class="form-label">Detail Masalah</label>
                    <textarea class="form-control @error('detail_masalah') is-invalid @enderror" id="detail_masalah" name="detail_masalah" rows="3" required>{{ old('detail_masalah') }}</textarea>
                    @error('detail_masalah')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit Pengajuan</button>
            </form>
        </div>
    </div> --}}

    <!-- Tabel Pengajuan -->
    {{-- <h3>Daftar Pengajuan Anda</h3>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>IT Asset</th>
                <th>Kategori Layanan</th>
                <th>Detail Masalah</th>
                <th>Status</th>
                <th>Waktu Pengajuan</th>
            </tr>
        </thead>
        <tbody> --}}
            {{-- @forelse($pengajuans as $pengajuan)
            <tr>
                <td>{{ $pengajuan->id }}</td>
                <td>{{ $pengajuan->it_asset }}</td>
                <td>{{ $pengajuan->kategori_layanan }}</td>
                <td>{{ $pengajuan->detail_masalah }}</td>
                <td>
                    @php
                        $statusClass = match($pengajuan->status) {
                            'pending' => 'badge bg-warning text-dark',
                            'dikonfirmasi' => 'badge bg-primary',
                            'diproses' => 'badge bg-info text-dark',
                            'selesai' => 'badge bg-success',
                            default => 'badge bg-secondary',
                        };
                    @endphp
                    <span class="{{ $statusClass }}">{{ ucfirst($pengajuan->status) }}</span>
                </td>
                <td>{{ $pengajuan->created_at->format('d M Y H:i') }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">Belum ada pengajuan</td>
            </tr>
            @endforelse
        </tbody> --}}
    {{-- </table>
</div>
@endsection --}}

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengajuan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #FEF1E4;
        }
        .card {
            border-radius: 10px;
        }
        .nav-link.active {
            color: #ecc69f !important;
            border-bottom: 2px solid #ecc69f;
        }
        .btn-custom {
        background-color: #de944b;
        color: white;
        border: none;
        }
        .btn-custom:hover {
        background-color: #c97f3d; /* warna lebih gelap pas hover */
        }

    </style>
</head>
<body class="bg-gradient-primary" style="background: url('{{ asset('img/bylt.jpeg') }}') no-repeat center center fixed; background-size: cover; position: relative;">
<div style="position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0, 0, 0, 0.701);z-index:0;"></div>
  <header class="navbar">
    <nav class="w-100">
        <div class="d-flex justify-content-center">
        <ul class="nav mb-4">
            <li class="nav-item">
            <a class="nav-link fw-bold text-white {{ request()->routeIs('pengajuan.index') ? 'active' : '' }}"
            href="{{ route('pengajuan.index') }}">
                Pengajuan
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link fw-bold text-white {{ request()->routeIs('status.pengajuan') ? 'active' : '' }}"
            href="{{ route('status.pengajuan') }}">
                Status Pengajuan
            </a>
            </li>
        </ul>
        <!-- Logout kanan -->
        <form action="{{ route('logout') }}" method="POST" class="mr-100">
            @csrf
            <button type="submit" class="btn btn-link text-white p-0" style="font-size: 1.5rem;">
            <i class="bi bi-box-arrow-right"></i>
            </button>
        </form>
        </div>
    </nav>
    </header>

    <div class="text-center mb-4" style="position: relative; z-index: 1;">
    <h3 class="text-white">
        Selamat Datang <span style="color: orange;">{{ Auth::guard('karyawan')->user()->nama ?? 'Guest' }}</span> Di Divisi IT
    </h3>
    <p class="text-white">Silahkan masukkan permasalahan perangkat anda</p>
    </div>

    <div class="container mt-5 mb-3" >
        <div class="row justify-content-center">
            <div class="col-md-9">
            <div class="card shadow"  style="background-color: #FEF1E4">
            <div class="card-header text-white" style="background-color: #ecc69f">
                <h4>Form Pengajuan</h4>
            </div>
            <div class="card-body" style="color: #de944b;">
                <form action="{{ route('pengajuan.store') }}" method="POST">
                    @csrf

                    <!-- Nama Karyawan -->
                    <div class="row mb-3">
                    <div class="col-xl-6 mb-1">
                        <label for="nama_karyawan" class="form-label">Nama Karyawan</label>
                        <input type="text" class="form-control" style="color: #de944b" id="nama_karyawan"
                               name="nama_karyawan" value="{{ $karyawan->nama }}" readonly>
                    </div>
                    {{-- divisi--}}
                    <div class="col-xl-6">
                        <label for="divisi" class="form-label">Divisi</label>
                        <input type="text" class="form-control" style="color: #de944b" id="divisi" name="divisi" value="{{ $karyawan->divisi }}" readonly>
                    </div>
                    </div>
                    <!-- IT Asset (input manual) -->
                    <div class="mb-3">
                        <label for="it_asset" class="form-label">IT Asset</label>
                        <input type="text" class="form-control" style="color: #de944b" id="it_asset" name="it_asset">
                    </div>

                    <!-- Kategori Layanan (Dropdown) -->
                    <div class="mb-3">
                        <label for="kategori_layanan" class="form-label">Kategori Layanan</label>
                        <select class="form-select" style="color: #de944b" id="kategori_layanan" name="kategori_layanan" required>
                            <option value="">-- Pilih Kategori --</option>
                            <option value="perbaikan">Instalasi</option>
                            <option value="instalasi">Troubleshooting</option>
                        </select>
                    </div>

                    <!-- Deskripsi Masalah -->
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label" >Deskripsi Masalah</label>
                        <textarea class="form-control" style="color: #de944b" id="deskripsi" name="deskripsi" rows="4" placeholder="Jelaskan masalah yang dialami"></textarea>
                    </div>

                    <button type="submit" class="btn btn-custom">Submit</button>

                </form>
            </div>
        </div>
    </div>

</body>
</html>

