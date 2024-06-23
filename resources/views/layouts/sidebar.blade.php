<!-- [ navigation menu ] start -->

<!-- Sidebar -->
<nav class="pcoded-navbar">
    <div class="navbar-wrapper">
        <div class="navbar-content">
            <!-- User Profile -->
            <div class="main-menu-header">
                <img class="img-radius" src="{{ asset('assets/images/user/avatar-1.jpg') }}" alt="User-Profile-Image">
                <div class="user-details">
                    <span>John Doe</span>
                    <div id="more-details">UX Designer<i class="fa fa-chevron-down m-l-5 toggle-collapse"></i></div>
                </div>
            </div>
            <!-- User Profile Menu -->
            <div class="collapse" id="nav-user-link">
                <ul class="list-unstyled">
                    <li class="list-group-item"><a href="{{ url('user-profile') }}"><i
                                class="feather icon-user m-r-5"></i>View Profile</a></li>
                    <li class="list-group-item"><a href="#!"><i
                                class="feather icon-settings m-r-5"></i>Settings</a></li>
                    <li class="list-group-item"><a href="{{ url('auth-normal-sign-in') }}"><i
                                class="feather icon-log-out m-r-5"></i>Logout</a></li>
                </ul>
            </div>

            <!-- Main Menu -->
            <ul class="nav pcoded-inner-navbar">
                <!-- Dashboard Link -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>
                <!-- User Management -->
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link">
                        <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                        <span class="pcoded-mtext">Daftar Pengguna</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{ route('pembina.index') }}"><i class="feather icon-user"></i> Pembina</a></li>
                        <li><a href="{{ route('siswa.index') }}"><i class="feather icon-user-check"></i> Siswa</a></li>
                        <li><a href="{{ route('siswa.index') }}"><i class="feather icon-user-plus"></i> Admin</a></li>
                    </ul>
                </li>
                <!-- Features -->
                <li class="nav-item">
                    <a href="{{ route('ekstrakurikuler.index') }}" class="nav-link">
                        <span class="pcoded-micon"><i class="feather icon-activity"></i></span>
                        <span class="pcoded-mtext">Ekstrakurikuler</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('programkegiatan.index') }}" class="nav-link">
                        <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                        <span class="pcoded-mtext">Program Kegiatan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kehadiran.index') }}" class="nav-link">
                        <span class="pcoded-micon"><i class="feather icon-check-circle"></i></span>
                        <span class="pcoded-mtext">Kehadiran</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('jadwalekstrakurikuler.index') }}" class="nav-link">
                        <span class="pcoded-micon"><i class="feather icon-calendar"></i></span>
                        <span class="pcoded-mtext">Jadwal Ekstrakurikuler</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('prestasisiswa.index') }}" class="nav-link">
                        <span class="pcoded-micon"><i class="feather icon-award"></i></span>
                        <span class="pcoded-mtext">Prestasi Peserta</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('prestasiekstrakurikuler.index') }}" class="nav-link">
                        <span class="pcoded-micon"><i class="feather icon-award"></i></span>
                        <span class="pcoded-mtext">Prestasi Ekstrakurikuler</span>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ route('pengajuanpertemuan.index') }}" class="nav-link">
                        <span class="pcoded-micon"><i class="feather icon-award"></i></span>
                        <span class="pcoded-mtext">Pengajuan Pertemuan</span>
                    </a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a href="{{ route('chat.index') }}" class="nav-link">
                        <span class="pcoded-micon"><i class="feather icon-message-circle"></i></span>
                        <span class="pcoded-mtext">Pertemuan via Chat</span>
                    </a>
                </li> --}}
            </ul>
            
        </div>
    </div>
</nav>
<!-- End Sidebar -->

<!-- [ navigation menu ] end -->
