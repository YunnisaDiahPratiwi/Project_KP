@extends('layouts/app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        {{$title}}
    </h1>

    <div class="card">
        <div class="card-header" style="background-color:#2D2D6B; color:#fff; border-bottom:none;">
                <a href="{{route('beritaAcara')}}" class="btn btn-sm" style="background-color:#fff; border:1px solid #2D2D6B; color:#2D2D6B;">
                    <i class="fas fa-arrow-left mr-2"></i>
                    kembali
                </a>
        </div>
        <div class="card-body">
            <form action="{{route('storeBa')}}" method="post">
            @csrf
            <div class="row mb-2">
                <div class="col-xl-12">
                    {{-- <label class="form-label">
                            <span class="text-danger">*</span>
                            IT Asset :
                        </label>
                        <select id="it_asset_id" name="it_asset_id" class="form-control">
                            <option selected disabled>-- Pilih IT Asset --</option>
                            @foreach ($device as $item)
                                <option value="{{ $item->id }}">{{ $item->it_asset }}</option>
                            @endforeach
                        </select>
                        @error('it_asset_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror --}}
                    <label class="form-label">
                        <span class="text-danger">*</span>
                        IT Asset :
                    </label>
                    <select id="it_asset_id" name="it_asset_id" class="form-control">
                        <option selected disabled>-- Pilih IT Asset --</option>
                        @foreach ($device as $item)
                            <option value="{{ $item->id }}" {{ old('it_asset_id') == $item->id ? 'selected' : '' }}>
                                {{ $item->it_asset }}
                            </option>
                        @endforeach
                    </select>
                    @error('it_asset_id')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 mb-2">
                    <label class="form-label">
                        <span class="text-danger">*</span>
                        User :
                    </label>
                    <input type="text" name="user" class="form-control @error('user') is-invalid @enderror" value="{{ old('user') }}">
                    @error('user')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="col-xl-6">
                    <label class="form-label">
                        <span class="text-danger">*</span>
                        Unit :
                    </label>
                    <input type="text" name="unit" class="form-control @error('unit') is-invalid @enderror" value="{{ old('unit') }}">
                    @error('unit')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 mb-2">
                    <label class="form-label">
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
            <div class="row">
                <div class="col-xl-12 mb-2">
                    <label class="form-label">
                        <span class="text-danger">*</span>
                        Jenis Layanan :
                    </label>
                    <input type="text" name="jenis_layanan" class="form-control @error('jenis_layanan') is-invalid @enderror" value="{{ old('jenis_layanan') }}">
                    @error('jenis_layanan')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 mb-2">
                    <label class="form-label">
                        <span class="text-danger">*</span>
                        Detail Pekerjaan :
                    </label>
                    <textarea name="detail_pekerjaan" rows="5" class="form-control"></textarea>
                    @error('detail_pekerjaan')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 mb-2">
                    <label class="form-label">
                        <span class="text-danger">*</span>
                        Keterangan :
                    </label>
                    <textarea name="keterangan" rows="3" class="form-control"></textarea>
                    @error('keterangan')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-sm btn-primary mt-3">
                    <i class="fas fa-save mr-2"></i>
                    Simpan
                </button>
            </div>
            </form>
    </div>
@endsection
