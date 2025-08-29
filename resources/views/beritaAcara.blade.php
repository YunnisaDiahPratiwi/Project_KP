@extends('layouts/app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        {{$title}}
    </h1>

    <div class="card">
        <div class="card-header d-flex flex-wrap justify-content-center justify-content-xl-between">
            <div class="mb-1 mr-2">
                <a href="{{ route('berita-acara.create') }}" class="btn btn-sm" style="background-color:#2D2D6B; color:#fff; border-bottom:none;">
                    <i class="fas fa-plus mr-2"></i>
                    Tambah Data
                </a>
            </div>
            <div>
                <a href="{{route('beritaAcaraExcel')}}" class="btn btn-sm btn-success">
                    <i class="fas fa-file-excel mr-2"></i>
                    Excel
                </a>

                <a href="{{route('beritaAcaraPdf')}}" class="btn btn-sm btn-danger" target='_blank'>
                    <i class="fas fa-file-excel mr-2"></i>
                    PDF
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead class="text-white" style="background-color:#2D2D6BE5;">
                    <tr class="text-center">
                        <th>No</th>
                        <th>IT Asset</th>
                        <th>User</th>
                        <th>Unit</th>
                        <th>Kategori Layanan</th>
                        <th>Jenis Layanan</th>
                        <th>Detail Pekerjaan</th>
                        <th>Status</th>
                        <th>Keterangan</th>
                        <th>
                            <i class="fas fa-cog"></i>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($beritaAcara as $index => $item)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $item->device->it_asset}}</td>
                            <td>{{ $item->user }}</td>
                            <td>{{ $item->unit }}</td>
                            <td>{{ $item->kategori_layanan }}</td>
                            <td>{{ $item->jenis_layanan }}</td>
                            <td>{{ $item->detail_pekerjaan }}</td>
                            <td class="text-center">
                                @if ($item->status == 'Selesai')
                                    <span class="badge badge-success">{{ $item->status }}</span>
                                @elseif ($item->status == 'Diproses')
                                    <span class="badge badge-warning">{{ $item->status }}</span>
                                @else
                                    <span class="badge badge-danger">{{ $item->status }}</span>
                                @endif
                            </td>
                            <td>{{ $item->keterangan }}</td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('berita-acara.edit', $item->id) }}" class="btn btn-warning btn-sm mr-2">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('berita-acara.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-sm ms-2" data-toggle="modal" data-target="#deleteModal{{ $item->id }}">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Modal Konfirmasi Hapus -->
            <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="deleteModalLabel{{ $item->id }}">Hapus {{ $item->device->it_asset }}?</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus <strong>{{ $item->device->it_asset }}</strong>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
                    <form action="{{ route('berita-acara.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </div>
                </div>
            </div>
            </div>
    </div>
@endsection
