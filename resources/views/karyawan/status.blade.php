<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengajuan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Styling tabel */
    .table-custom {
    border-radius: 12px;
    overflow: hidden;
    background-color: #fff;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .table-custom thead {
    background-color: #de944b;
    color: white;
    }

    .table-custom tbody tr:nth-child(even) {
    background-color: #fbe8d5; /* baris genap */
    }

    .table-custom tbody tr:nth-child(odd) {
    background-color: #fff; /* baris ganjil */
    }

    .table-custom tbody tr:hover {
    background-color: #ffe3c4; /* efek hover */
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
    .table-custom th,
    .table-custom td {
    padding: 14px 20px; /* atas-bawah 14px, kiri-kanan 20px */
    text-align: center; /* rata tengah biar rapi */
    vertical-align: middle;
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
        </div>
    </nav>
    </header>

    <div class="text-center mb-4" style="position: relative; z-index: 1;">
    <h3 class="text-white">
        Status Pengajuan <span style="color: #de944b;">{{ Auth::guard('karyawan')->user()->nama ?? 'Guest' }}</span>
    </h3>
    {{-- <p class="text-white">Silahkan masukkan permasalahan perangkat anda</p> --}}

       <!-- Tabel Pengajuan -->
    <div class="container mt-5 mb-3" >
    <div class="row justify-content-center">
        <table class="table-custom">
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
        <tbody>
            <tr>
                <td>1</td>
                <td>Laptop</td>
                <td>Troubleshooting</td>
                <td>Layar tidak menyala</td>
                <td><span class="badge bg-warning text-dark">Pending</span></td>
                <td>2025-09-02 10:30</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Printer</td>
                <td>Troubleshooting</td>
                <td>Driver tidak terbaca</td>
                <td><span class="badge bg-primary">Diproses</span></td>
                <td>2025-09-02 11:00</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Server</td>
                <td>Instalasi</td>
                <td>Pembaruan sistem</td>
                <td><span class="badge bg-success">Selesai</span></td>
                <td>2025-09-02 12:15</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Jaringan</td>
                <td>Troubleshooting</td>
                <td>Internet lambat</td>
                <td><span class="badge bg-info text-dark">Dikonfirmasi</span></td>
                <td>2025-09-02 13:00</td>
            </tr>
        </tbody>

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
        </table>
    </div>
    </div>
    </div>


</body>
</html>

