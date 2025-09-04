<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login Karyawan</title>
    <link href="{{asset('sdadmin2/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('sdadmin2/css/sb-admin-2.min.css')}}" rel="stylesheet">
</head>
<body class="bg-gradient-primary" style="background: url('{{ asset('img/bylt.jpeg') }}') no-repeat center center fixed; background-size: cover; position: relative;">
<div style="position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0, 0, 0, 0.701);z-index:0;"></div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-7 col-md-8" style="margin-top: 5%">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <img src="{{ asset('img/logo.png') }}" width="220" alt="Logo">
                                </div>

                                <form class="user" method="POST" action="{{route('loginKaryawanProses')}}">
                                    @csrf

                                    {{-- Divisi --}}
                                    <div class="form-group">
                                        <input type="text"
                                            class="form-control form-control-user @error('unit') is-invalid @enderror"
                                            placeholder="Masukkan Unit"
                                            name="unit"
                                            value="{{ old('unit') }}">
                                        @error('unit')
                                            <small class="text-danger d-block text-left">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    {{-- NIPP --}}
                                    <div class="form-group">
                                        <input type="number"
                                            class="form-control form-control-user @error('nipp') is-invalid @enderror"
                                            placeholder="Masukkan NIPP"
                                            name="nipp"
                                            value="{{ old('nipp') }}">
                                        @error('nipp')
                                            <small class="text-danger d-block text-left">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    {{-- Password --}}
                                    <div class="form-group">
                                        <input type="password"
                                            class="form-control form-control-user @error('password') is-invalid @enderror"
                                            placeholder="Password"
                                            name="password">
                                        @error('password')
                                            <small class="text-danger d-block text-left">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-user btn-block" style="background-color:#2D2D6B; border-color:#2D2D6B; color:#fff;">
                                        Login
                                    </button>

                                    <hr>
                                    <div class="text-center">
                                        <small>
                                            <a href="{{ route('pilihrole') }}">Kembali</a>
                                        </small>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
</div>
</body>
</html>
