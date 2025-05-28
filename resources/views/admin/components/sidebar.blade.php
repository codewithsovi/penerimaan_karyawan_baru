<div class="sidebar-area" id="sidebar-area">
            <div class="logo position-relative">
                <a href="index.html" class="d-block text-decoration-none">
                    <img src="{{ asset('chain-1.0.0') }}/assets/images/logo-sspkb-putih.jpg" alt="Chain App Dev" width="150" height="150">
                </a>
                <button class="sidebar-burger-menu bg-transparent p-0 border-0 opacity-0 z-n1 position-absolute top-50 end-0 translate-middle-y" id="sidebar-burger-menu">
                    <i data-feather="x"></i>
                </button>
            </div>

            <aside id="layout-menu" class="layout-menu menu-vertical menu active" data-simplebar>
                <ul class="menu-inner">
                    <div class="menu-item">
                        <a href="{{ route('dashboard_admin') }}" class="menu-link">
                             <i data-feather="grid" class="menu-icon tf-icons"></i>
                            <span class="title">Dashboard</span>
                        </a>
                        <li class="menu-title small text-uppercase">
                        <span class="menu-title-text">Auth</span>
                        </li>
                        <a href="{{ route('manajemen_akun') }}" class="menu-link">
                            <i data-feather="lock" class="menu-icon tf-icons"></i>
                            <span class="title">Users</span>
                        </a>
                        <li class="menu-title small text-uppercase">
                        <span class="menu-title-text">SAW</span>
                    </li>
                        <a href="{{ route('kriteria') }}" class="menu-link">
                            <i data-feather="file-text" class="menu-icon tf-icons"></i>
                            <span class="title">Kriteria</span>
                        </a>
                        <a href="{{ route('alternatif') }}" class="menu-link">
                            <i data-feather="file-minus" class="menu-icon tf-icons"></i>
                            <span class="title">Alternatif</span>
                        </a>
                        <a href="{{ route('saw.index') }}" class="menu-link">
                            <i data-feather="activity" class="menu-icon tf-icons"></i>
                            <span class="title">SAW</span>
                        </a>
                        <a href="chat.html" class="menu-link">
                            <i data-feather="chevrons-down" class="menu-icon tf-icons"></i>
                            <span class="title">Hasil</span>
                        </a>
                    </div>
                </ul>
            </aside>

            <div class="bg-white z-1 admin">
                <div class="d-flex align-items-center admin-info border-top">
                    <div class="flex-shrink-0">
                        <a href="profile.html" class="d-block">
                            <img src="{{ asset('farol') }}/assets/images/admin.jpg" class="rounded-circle wh-54" alt="admin">
                        </a>
                    </div>
                    <div class="flex-grow-1 ms-3 info">
                        <a href="profile.html" class="d-block name">Adison Jeck</a>
                        <a href="/">Log Out</a>
                    </div>
                </div>
            </div>
        </div>
