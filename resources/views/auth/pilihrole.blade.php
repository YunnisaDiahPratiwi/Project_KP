<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Pilih Role</title>
    <link href="{{asset('sdadmin2/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('sdadmin2/css/sb-admin-2.min.css')}}" rel="stylesheet">
</head>
<body class="bg-gradient-primary" style="background: url('{{ asset('img/bylt.jpeg') }}') no-repeat center center fixed; background-size: cover; position: relative;">
<div style="position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0, 0, 0, 0.701);z-index:0;"></div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-7 col-md-8" style="margin-top: 5%">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-5 text-center">
                    <div class="mb-4">
                        <img src="{{ asset('img/logo.png') }}" width="120" alt="Logo">
                    </div>

                    {{-- Tombol ke login staff IT --}}
                    <a href="{{ route('login') }}" class="btn btn-user btn-block mb-3"
                        style="background-color:#2D2D6B; border-color:#2D2D6B; color:#fff;">
                        Staff IT
                    </a>

                    {{-- Tombol ke login karyawan --}}
                    <a href="{{ route('loginKaryawan') }}" class="btn btn-user btn-block"
                        style="background-color:#EA6C2C; border-color:#EA6C2C; color:#fff;">
                        Karyawan
                    </a>

                    <hr>
                    <div class="text-center">
                        <small>
                            Kembali ke beranda?
                            <a href="{{ route('welcome') }}">Klik Disini</a>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
