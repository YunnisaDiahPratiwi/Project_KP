@extends('layouts/app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        {{$title}}
    </h1>

    <div class="card">
        <div class="card-header bg-warning">
                <a href="{{route('device')}}" class="btn btn-sm btn-success">
                    <i class="fas fa-arrow-left mr-2"></i>
                    kembali
                </a>
        </div>
        <div class="card-body">
            <form action="{{route('updateDevice', $device->id)}}" method="post">
            @csrf
            <div class="row mb-3">
                <div class="col-xl-6 mb-1">
                    <label class="form-label">
                        <span class="text-danger">*</span>
                        IT Asset :
                    </label>
                    <input type="text" name="it_asset" class="form-control @error('it_asset') is-invalid @enderror" value="{{ $device->it_asset }}">
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
                    <input type="text" name="ram" class="form-control @error('ram') is-invalid @enderror" value="{{ $device->ram }}">
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
                    <input type="text" name="storage" class="form-control @error('storage') is-invalid @enderror" value="{{ $device->storage }}">
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
                    <input type="text" name="processor" class="form-control @error('processor') is-invalid @enderror" value="{{ $device->processor }}">
                    @error('processor')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
            </div>

            <div>
                <button type="submit" class="btn btn-sm btn-warning mt-3">
                    <i class="fas fa-edit mr-2"></i>
                    Edit
                </button>
            </div>
            </form>
        </div>
    </div>
@endsection
