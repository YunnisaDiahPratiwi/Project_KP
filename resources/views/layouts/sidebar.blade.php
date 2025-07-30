        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center d-flex" href="index.html">
                    <img src="{{ asset('img/logo.png') }}" style="position: absolute;" width="120" alt="Logo">
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{$menuDashboard ?? ''}}">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                MENU
            </div>


            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Charts -->
            <li class="nav-item {{$menuDevice ?? ''}}">
                <a class="nav-link" href="{{ route('device') }}">
                    <i class="fas fa-fw fa-laptop"></i>
                    <span>Data Perangkat</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item {{$menuBeritaAcara ?? ''}}">
                <a class="nav-link" href="{{ route('beritaAcara') }}">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Berita Acara</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->