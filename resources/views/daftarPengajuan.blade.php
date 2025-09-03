@extends('layouts.app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        {{$title}}
    </h1>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead class="text-white" style="background-color:#2D2D6BE5;">
                    <tr>
                        <th>No</th>
                        <th>Nama Karyawan</th>
                        <th>Unit</th>
                        <th>IT Asset</th>
                        <th>Kategori Layanan</th>
                        <th>Detail Masalah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

            </table>
        </div>
        </div>
    </div>
@endsection

