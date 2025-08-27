@extends('layouts/app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        {{$title}}
    </h1>

    <div class="card">
        <div class="card-header" style="background-color:#2D2D6B; color:#fff; border-bottom:none;">
                <a href="{{route('device')}}" class="btn btn-sm" style="background-color:#fff; border:1px solid #2D2D6B; color:#2D2D6B;">
                    <i class="fas fa-arrow-left mr-2"></i>
                    kembali
                </a>
        </div>
        <div class="card-body">
            <form action="{{route('storeDevice')}}" method="post">
            @csrf
            <div class="row mb-3">
                <div class="col-xl-6 mb-1">
                    <label class="form-label">
                        <span class="text-danger">*</span>
                        IT Asset :
                    </label>
                    <input type="text" name="it_asset" class="form-control @error('it_asset') is-invalid @enderror" value="{{ old('it_asset') }}">
                    @error('it_asset')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="col-xl-6">
                    <label class="form-label">
                        <span class="text-danger">*</span>
                        RAM :
                    </label>
                    <input type="text" name="ram" class="form-control @error('ram') is-invalid @enderror" value="{{ old('ram') }}">
                    @error('ram')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6 mb-1">
                    <label class="form-label">
                        <span class="text-danger">*</span>
                        Storage :
                    </label>
                    <input type="text" name="storage" class="form-control @error('storage') is-invalid @enderror" value="{{ old('storage') }}">
                    @error('storage')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="col-xl-6">
                    <label class="form-label">
                        <span class="text-danger">*</span>
                        Processor :
                    </label>
                    <input type="text" name="processor" class="form-control @error('processor') is-invalid @enderror" value="{{ old('processor') }}">
                    @error('processor')
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
    </div>
@endsection
