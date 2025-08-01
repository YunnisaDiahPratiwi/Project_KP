@extends('layouts/app' )

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        {{$title}}
    </h1>

    <div class="card">
        <div class="card-header bg-warning">
            <a href="{{route('beritaAcara')}}" class="btn btn-sm btn-success">
                <i class="fas fa-arrow-left mr-2"></i>
                Kembali
            </a>
        </div>
        <div class="card-body">
            <form action="{{route('updateBa', $beritaAcara->id)}}" method="post">
            @csrf
            @method('PUT')

            <div class="row mb-2">
                <div class="col-xl-12">
                    <label class="form-label
                        <span class="text-danger">*</span>
                        IT Asset :
                    </label>
                    <input type="text" value="{{ $beritaAcara->device->it_asset }}" readonly class="form-control @error('it_asset_id') is-invalid @enderror">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-xl-6 mb-1">
                    <label class="form-label
                        <span class="text-danger">*</span>
                        User :
                    </label>
                    <input type="text" name="user" class="form-control @error('user') is-invalid @enderror" value="{{ $beritaAcara->user }}">
                    @error('user')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="col-xl-6 mb-1">
                    <label class="form-label
                        <span class="text-danger">*</span>
                        Unit :
                    </label>
                    <input type="text" name="unit" class="form-control @error('unit') is-invalid @enderror" value="{{ $beritaAcara->unit }}">
                    @error('unit')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-xl-12 mb-1">
                    <label class="form-label
                        <span class="text-danger">*</span>
                        Kategori Layanan :
                    </label>
                    <select name="kategori_layanan" class="form-control @error('kategori_layanan') is-invalid @enderror">
                        <option selected disabled>-- Pilih Kategori Layanan --</option>
                        <option value="Instalasi">Instalasi</option>
                        <option value="Troubleshooting">Troubleshooting</option>
                    </select>
                    @error('kategori_layanan')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-xl-12 mb-1">
                    <label class="form-label
                        <span class="text-danger">*</span>
                        Jenis Layanan :
                    </label>
                    <input type="text" name="jenis_layanan" class="form-control @error('jenis_layanan') is-invalid @enderror" value="{{ $beritaAcara->jenis_layanan }}">
                    @error('jenis_layanan')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-xl-12 mb-1">
                    <label class="form-label
                        <span class="text-danger">*</span>
                        Status :
                    </label>
                    <select name="status" class="form-control @error('status') is-invalid @enderror">
                        <option selected disabled>-- Pilih Status Layanan --</option>
                        <option value="Pending">Pending</option>
                        <option value="Diproses">Diproses</option>
                        <option value="Selesai">Selesai</option>
                    </select>
                    @error('status')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-xl-12 mb-1">
                    <label class="form-label
                        <span class="text-danger">*</span>
                        Detail Pekerjaan :
                    </label>
                    <textarea name="detail_pekerjaan" class="form-control @error('detail_pekerjaan') is-invalid @enderror">{{ $beritaAcara->detail_pekerjaan }}</textarea>
                    @error('detail_pekerjaan')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-xl-12 mb-1">
                    <label class="form-label">
                        Keterangan :
                    </label>
                    <textarea name="keterangan" class="form-control @error('keterangan') is-invalid @enderror">{{ $beritaAcara->keterangan }}</textarea>
                    @error('keterangan')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-xl-12">
                    <button type="submit" class="btn btn-warning btn-sm">
                        <i class="fas fa-save mr-2"></i>
                        Update
                    </button>
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection
