<div class="left-sidenav">
    <!-- LOGO -->
    <div class="brand">
        <a href="dashboard/crm-index.html" class="logo">
            <span>
                <img src="{{ asset('assets/images/logo-sm.png') }}" alt="logo-small" class="logo-sm">
            </span>
            <span>
                <img src="{{ asset('assets/images/logo.png') }}" alt="logo-large" class="logo-lg logo-light">
                <img src="{{ asset('assets/images/logo-dark.png') }}" alt="logo-large" class="logo-lg logo-dark">
            </span>
        </a>
    </div>
    <!--end logo-->
    <div class="menu-content h-100" data-simplebar>
        <ul class="metismenu left-sidenav-menu">
            <li class="menu-label mt-0">Menu</li>
            <li>
                <a href="#"><i data-feather="trello" class="align-self-center menu-icon"></i><span>Riwayat
                        Vaksin</span></a>
            </li>
            <li>
                <a href="#"><i data-feather="activity" class="align-self-center menu-icon"></i><span>Pendaftaran
                        Vaksin</span></a>
            </li>

            <hr class="hr-dashed hr-menu">
            <li class="menu-label mt-0">Admin</li>
            <li>
                <a href="#"><i data-feather="thermometer" class="align-self-center menu-icon"></i><span>Jenis
                        Vaksin</span></a>
            </li>
            <li>
                <a href="{{ route('dokter.index') }}"><i data-feather="users"
                        class="align-self-center menu-icon"></i><span>Dokter</span></a>
            </li>
            <li>
                <a href="{{ route('lokasi.index') }}"><i data-feather="map"
                        class="align-self-center menu-icon"></i><span>Lokasi
                        Vaksin</span></a>
            </li>
            <li>
                <a href="#"><i data-feather="book-open"
                        class="align-self-center menu-icon"></i><span>Berita</span></a>
            </li>
            <li>
                <a href="#"><i data-feather="airplay"
                        class="align-self-center menu-icon"></i><span>Frontpage</span></a>
            </li>

            <hr class="hr-dashed hr-menu">
        </ul>
    </div>
</div>
