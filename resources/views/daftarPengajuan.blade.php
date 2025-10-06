@extends('layouts.app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        {{$title}}
    </h1>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-white" style="background-color:#2D2D6B;">
                        <tr>
                            <th>No</th>
                            <th>Nama Karyawan</th>
                            <th>Divisi</th>
                            <th>IT Asset</th>
                            <th>Kategori Layanan</th>
                            <th>Detail Masalah</th>
                            <th>Total Hari</th>
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
                                <td>{{ $p->device->it_asset ?? '-' }}</td>
                                <td>{{ $p->kategori_layanan }}</td>
                                <td>{{ $p->detail_masalah }}</td>
                                <td>
                                    @if ($p->status === 'selesai' && $p->tanggal_selesai !== null)
                                        {{ floor(
                                            \Carbon\Carbon::parse($p->created_at)
                                                ->diffInHours(\Carbon\Carbon::parse($p->tanggal_selesai)) / 24
                                        ) }} hari
                                    @else
                                        {{ floor(
                                            \Carbon\Carbon::parse($p->created_at)
                                                ->diffInHours(now()) / 24
                                        ) }} hari
                                    @endif
                                </td>

                                {{-- <td>
                                    @if ($p->status === 'selesai' && $p->tanggal_selesai !== null)
                                        {{ floor(\Carbon\Carbon::parse($p->created_at)->diffInHours($p->tanggal_selesai) / 24) }} hari
                                    @else
                                        {{ floor(\Carbon\Carbon::parse($p->created_at)->diffInHours(now()) / 24) }} hari
                                    @endif
                                </td> --}}
                                <td>
                                    <span class="badge
                                        @if($p->status == 'pending') badge-danger
                                        @elseif($p->status == 'diproses') badge-warning
                                        @else badge-success @endif">
                                        {{ ucfirst($p->status) }}
                                    </span>
                                </td>
                                <td>
                                    <form action="{{ route('teknisi.updateStatus', $p->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        <select name="status" class="form-control form-control-sm d-inline w-auto" onchange="this.form.submit()">
                                            <option value="pending" {{ $p->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="diproses" {{ $p->status == 'diproses' ? 'selected' : '' }}>Diproses</option>
                                            <option value="selesai" {{ $p->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
                                        </select>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

