@extends('karyawan.appK')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        Status Pengajuan
    </h1>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-white" style="background-color:#f0b493;">
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
                                    @if ($p->status == 'pending')
                                        <span class="badge badge-danger">Pending</span>
                                    @elseif ($p->status == 'diproses')
                                        <span class="badge badge-warning">Diproses</span>
                                    @elseif ($p->status == 'selesai')
                                        <span class="badge badge-success">Selesai</span>
                                    @else
                                        <span class="badge badge-secondary">-</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        setInterval(() => {
            location.reload();
        }, 10000); // refresh otomatis tiap 10 detik
    </script>
@endsection
