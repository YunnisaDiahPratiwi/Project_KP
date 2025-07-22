@extends('layouts/app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        {{$title}}
    </h1>

    <div class="card">
        <div class="card-header d-flex flex-wrap justify-content-center justify-content-xl-between">
            <div class="mb-1 mr-2">
                <a href="#" class="btn btn-sm btn-primary">
                    <i class="fas fa-plus mr-2"></i>
                    Tambah Perangkat
                </a>
            </div>
            <div>
                <a href="#" class="btn btn-sm btn-success">
                    <i class="fas fa-file-excel mr-2"></i>
                    Excel
                </a>
            
                <a href="#" class="btn btn-sm btn-danger">
                    <i class="fas fa-file-excel mr-2"></i>
                    PDF
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-primary text-white">
                    <tr class="text-center">
                        <th>No</th>
                        <th>IT Asset</th>
                        <th>Layanan</th>
                        <th>Jenis Layanan</th>
                        <th>Deskripsi</th>
                        <th>status</th>
                        <th>Catatan</th>
                        <th>
                            <i class="fas fa-cog"></i>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>112.329837.y060.0009</td>
                        <td>Instalasi</td>
                        <td>WIndows 10 Pro</td>
                        <td>blablabla</td>
                        <td class="text-center">
                            <span class="badge badge-success badge-pill">
                                Selesai
                            </span>
                        </td>
                        <td>aaaaaaaaaaabajshachuuwedhuwehid</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
    </div>    
@endsection
