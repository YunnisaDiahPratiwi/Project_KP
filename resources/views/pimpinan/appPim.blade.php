@include('pimpinan.headerP')

<body id="page-top">

    <!-- Topbar -->
        {{-- <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"> --}}
        <nav class="navbar navbar-expand navbar-light bg-white topbar static-top shadow"
     style="position: fixed; top: 0; left: 0; right: 0; z-index: 1030; width: 100%;">
            <img src="{{ asset('img/logo.png') }}" style="position: absolute;" width="120" alt="Logo">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>


            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">

            </ul>
        </nav>
    <!-- End of Topbar -->

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('pimpinan.sidebarP')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column" style="padding-top: 80px; margin-left: 224px;">

            <!-- Main Content -->
            <div id="content">


                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; UPT Balai Yasa Lahat</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    @include('pimpinan.footerP')

</body>
