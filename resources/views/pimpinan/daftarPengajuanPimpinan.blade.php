@extends('layouts.app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        {{$title}}
    </h1>

    <div class="card">
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
                            <th>Aksi</th>
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
                                    <span class="badge
                                        @if($p->status == 'pending') badge-danger
                                        @elseif($p->status == 'diproses') badge-warning
                                        @else badge-success @endif">
                                        {{ ucfirst($p->status) }}
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

