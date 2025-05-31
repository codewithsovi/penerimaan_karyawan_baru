<header class="header-area bg-white mb-4 rounded-bottom-10" id="header-area">
    <div class="row align-items-center">
        <div class="col-lg-4 col-sm-6 col-md-4">
            <div class="left-header-content">
                <ul
                    class="d-flex align-items-center ps-0 mb-0 list-unstyled justify-content-center justify-content-sm-start">
                    <li>
                        <button class="header-burger-menu bg-transparent p-0 border-0" id="header-burger-menu">
                            <i data-feather="menu"></i>
                        </button>
                    </li>
                      <li>
                        <form class="src-form position-relative" onsubmit="handleSearch(event)">
                            <input type="text" class="form-control" placeholder="Search here.." id="searchInput">
                            <button type="submit"
                                class="src-btn position-absolute top-50 end-0 translate-middle-y bg-transparent p-0 border-0">
                                <i data-feather="search"></i>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-8 col-sm-6 col-md-8">
            <div class="right-header-content mt-2 mt-sm-0">
                <ul
                    class="d-flex align-items-center justify-content-center justify-content-sm-end ps-0 mb-0 list-unstyled">
                    <li class="header-right-item">
                        <div class="dropdown notifications language">
                        </div>
                    </li>
                    <li class="header-right-item d-none d-md-block">
                        <div class="today-date">
                            <span id="digitalDate"></span>
                            <i data-feather="calendar"></i>
                        </div>
                    </li>
                    <li class="header-right-item">
                        <div class="dropdown admin-profile">
                            <div class="d-xxl-flex align-items-center bg-transparent border-0 text-start p-0 cursor"
                                data-bs-toggle="dropdown">
                                <div class="flex-shrink-0">
                                    <img class="rounded-circle wh-54" src="{{ asset('farol/assets/images/profile.webp') }}" alt="admin">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-none d-xxl-block">
                                            <span class="degeneration">{{ Auth::user()->role }}</span>
                                            <div class="d-flex align-content-center">
                                                <h3>{{ Auth::user()->name }}</h3>
                                                <div class="down">
                                                    <i data-feather="chevron-down"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <ul class="dropdown-menu border-0 bg-white w-100 admin-link">
                                <li>
                                    <a class="dropdown-item d-flex align-items-center text-body" href="{{ route('logout') }}">
                                        <i data-feather="log-out"></i>
                                        <span class="ms-2">Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    {{-- <li class="header-right-item">
                        <div class="admin-profile d-flex align-items-center">
                            <!-- Profil -->
                            <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center me-3"
                                style="width: 48px; height: 48px;">
                                <i data-feather="user" class="text-white"></i>
                            </div>
                            <!-- Info & Logout -->
                            <div class="d-flex flex-column">
                                <span class="fw-semibold" style="color: blue;">ADMIN</span>
                                <a href="logout.html" class="d-flex align-items-center text-decoration-none mt-1"
                                    style="color: red;">
                                    <i data-feather="log-out" class="me-1"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </div>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
</header>
