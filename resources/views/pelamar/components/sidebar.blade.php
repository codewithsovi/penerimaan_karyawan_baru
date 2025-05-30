<div class="sidebar-area" id="sidebar-area">
    <div class="logo position-relative">
        <a href="index.html" class="d-block text-decoration-none">
            <img src="{{ asset('chain-1.0.0') }}/assets/images/logo-sspkb-putih.jpg" alt="Chain App Dev" width="150"
                height="150">
        </a>
        <button
            class="sidebar-burger-menu bg-transparent p-0 border-0 opacity-0 z-n1 position-absolute top-50 end-0 translate-middle-y"
            id="sidebar-burger-menu">
            <i data-feather="x"></i>
        </button>
    </div>

    <aside id="layout-menu" class="layout-menu menu-vertical menu active" data-simplebar>
        <ul class="menu-inner">
            <div class="menu-item">
                <a href="{{ route('beranda.pelamar') }}" class="menu-link">
                    <i data-feather="grid" class="menu-icon tf-icons"></i>
                    <span class="title">Beranda</span>
                </a>
                <a href="{{ route('hasil.pelamar') }}" class="menu-link">
                    <i data-feather="chevrons-down" class="menu-icon tf-icons"></i>
                    <span class="title">Hasil Seleksi</span>
                </a>
            </div>
        </ul>
    </aside>
</div>
