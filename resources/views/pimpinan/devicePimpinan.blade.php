@extends('layouts.app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        {{$title}}
    </h1>

    <div class="card">
        <div class="card-header d-flex flex-wrap justify-content-center justify-content-xl-between">
            <div>
                <a href="{{route('deviceExcel')}}" class="btn btn-sm btn-success">
                    <i class="fas fa-file-excel mr-2"></i>
                    Excel
                </a>

                <a href="{{route('devicePdf')}}" class="btn btn-sm btn-danger" target='_blank'>
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
                        <th>RAM</th>
                        <th>Media Penyimpanan</th>
                        <th>Processor</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($devices as $index => $device)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td>{{ $device->it_asset }}</td>
                            <td>{{ $device->ram }}</td>
                            <td>{{ $device->storage }}</td>
                            <td>{{ $device->processor }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
@endsection
