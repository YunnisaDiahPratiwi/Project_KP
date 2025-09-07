        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:#32cd32;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center d-flex" href="index.html">
                    <img src="{{ asset('img/logo.png') }}" style="position: absolute;" width="120" alt="Logo">
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{$menuDashboard ?? ''}}">
                <a class="nav-link" href="{{ route('pimpinan.dashboardPimpinan') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                MENU
            </div>

            <hr class="sidebar-divider">

            <!-- Nav Item - Charts -->
            <li class="nav-item {{$menuDevice ?? ''}}">
                <a class="nav-link" href="{{ route('devicePimpinan') }}">
                    <i class="fas fa-fw fa-laptop"></i>
                    <span>Data Perangkat</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item {{$menuBeritaAcara ?? ''}}">
                <a class="nav-link" href="{{ route('BApimpinan') }}">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>Berita Acara</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item {{$menuDaftarPengajuan ?? ''}}">
                <a class="nav-link" href="{{ route('daftarPengajuanPimpinan') }}">
                    <i class="fas fa-list-ul"></i>
                    <span>Daftar Pengajuan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Menu Logout -->
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="nav-link d-flex align-items-center"
                            style="border: none; background: none; width: 100%; text-align: left;">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
