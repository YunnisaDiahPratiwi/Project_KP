        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:#f0b493;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center d-flex" href="index.html">
                    <img src="{{ asset('img/logo.png') }}" style="position: absolute;" width="120" alt="Logo">
            </a>



            <!-- Heading -->
            <div class="sidebar-heading">
                MENU
            </div>

            <hr class="sidebar-divider">

            <!-- Nav Item - Charts -->
            <li class="nav-item {{$menuPengajuan ?? ''}}">
                <a class="nav-link" href="{{ route('pengajuan.index') }}">
                    <i class="fas fa-fw fa-laptop"></i>
                    <span>Form Pengajuan</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item {{$menuStatusPengajuan ?? ''}}">
                <a class="nav-link" href="{{ route('status.pengajuan') }}">
                    <i class="fas fa-sync-alt"></i>
                    <span>Status pengajuan</span></a>
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
