@extends('pimpinan.appPim')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        {{$title}}
    </h1>

    <div class="card">
        <div class="card-header d-flex flex-wrap justify-content-center justify-content-xl-between">
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
                {{-- <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0"> --}}
                <thead class="text-white" style="background-color:#2D6B36;">
                    <tr class="text-center">
                        <th>No</th>
                        <th>IT Asset</th>
                        <th>Nama Karyawan</th>
                        <th>Divisi</th>
                        <th>Kategori Layanan</th>
                        <th>Jenis Layanan</th>
                        <th>Detail Pekerjaan</th>
                        <th>Keterangan</th>
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
                            <td>{{ $item->keterangan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@endsection
