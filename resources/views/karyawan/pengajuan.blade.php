
@extends('karyawan.appK')

@section('content')
    {{-- <h1 class="h3 mb-4 text-gray-800">
        {{$title}}
    </h1> --}}
    <div class="text-white mb-4" style="border-radius: 1rem; background-color:#BA5826;">
        <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
            <div class="d-flex align-items-center">
                <i class="fas fa-house-laptop fa-2x mr-3"></i>
                <div>
                    <h2 class="card-title mb-1">Selamat Datang, <span  style="color: #2D2D6B">{{ Auth::guard('karyawan')->user()->nama ?? 'Guest' }}</span></h2>

                    <p class="text-white">Silahkan masukkan permasalahan perangkat anda</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('pengajuan.store') }}" method="POST">
                    @csrf
                    <!-- Nama Karyawan -->
                    <div class="row mb-3">
                    <div class="col-xl-6 mb-1">
                        <label for="nama_karyawan" class="form-label">Nama Karyawan</label>
                        <input type="text" class="form-control" id="nama_karyawan"
                               name="nama_karyawan" value="{{ $karyawan->nama }}" readonly>
                    </div>
                    {{-- divisi--}}
                    <div class="col-xl-6">
                        <label for="divisi" class="form-label">Divisi</label>
                        <input type="text" class="form-control" id="divisi" name="divisi" value="{{ $karyawan->divisi }}" readonly>
                    </div>
                    </div>
                    <!-- IT Asset -->
                    <div class="mb-3">
                        <label class="form-label">
                            <span class="text-danger">*</span>
                            IT Asset :
                        </label>
                        <select id="it_asset_id" name="it_asset_id" class="form-control">
                            <option selected disabled>-- Pilih IT Asset --</option>
                            @foreach ($devices as $item)
                                <option value="{{ $item->id }}">{{ $item->it_asset }}</option>
                            @endforeach
                        </select>
                        @error('it_asset_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-xl-12 mb-2">
                            <label class="form-label">
                                Kategori Layanan :
                            </label>
                            <select name="kategori_layanan" class="form-control @error('kategori_layanan') is-invalid @enderror" required>
                                <option selected disabled>-- Pilih Kategori Layanan --</option>
                                <option value="Instalasi">Instalasi</option>
                                <option value="Troubleshooting">Troubleshooting</option>
                            </select>
                            @error('kategori_layanan')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <!-- Detail Masalah -->
                    <div class="mb-3">
                        <label for="detail_masalah" class="form-label" >Detail Masalah</label>
                        <textarea class="form-control" id="detail_masalah" name="detail_masalah" rows="4" placeholder="Jelaskan masalah yang dialami"></textarea>
                    </div>

                    <button type="submit" class="btn" style="background-color:#BA5826; border:none; color:#fff;">
                        Submit
                    </button>

                    {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}

                </form>
        </div>
    </div>
@endsection
