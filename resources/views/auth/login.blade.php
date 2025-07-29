<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('sdadmin2/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('sdadmin2/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>
<body class="bg-gradient-primary" style="background: url('{{ asset('img/bylt.jpeg') }}') no-repeat center center fixed; background-size: cover; position: relative;">
<div style="position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0, 0, 0, 0.701);z-index:0;"></div>

{{-- <body class="bg-gradient-primary"> --}}

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-7 col-md-8" style="margin-top: 5%">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <div class="align-items-center justify-content-center d-flex" >
                                            <img src="{{ asset('img/logo.png') }}" width="220" alt="Deskripsi gambar">
                                        </div>
                                        <form class="user" method="POST" action="{{route('loginProses')}}">
                                        @csrf

                                        {{-- nama --}}
                                        <div class="form-group">
                                            <input type="name" class="form-control form-control-user @error('name') is-invalid @enderror"
                                                placeholder="Enter Username" name="name" value="{{old('name')}}">
                                                @error('name')
                                                    <small class="text-danger">
                                                        {{$message}}
                                                    </small>
                                                @enderror
                                        </div>

                                        {{-- password --}}
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror"
                                                placeholder="Password" name="password">
                                                @error('password')
                                                    <small class="text-danger">
                                                        {{$message}}
                                                    </small>
                                                @enderror
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>
                                        <div class="text-center">
                                            <small>
                                                Kembali Ke Beranda?
                                                <a href="#">Klik Disini</a>
                                            </small>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script src="{{asset('sdadmin2/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('sdadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('sdadmin2/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('sdadmin2/js/sb-admin-2.min.js')}}"></script>
    <script src="{{asset('sweetalert2/dist/sweetalert2.all.min.js')}}"></script>


    @session('success')
        <script>
        Swal.fire({
            title: "Sukses!",
            text: "{{ session('success') }}",
            icon: "success"
        });
        </script>
    @endsession

    @session('error')
        <script>
        Swal.fire({
            title: "Gagal",
            text: "{{ session('error') }}",
            icon: "error"
        });
        </script>
    @endsession


</body>

</html>
