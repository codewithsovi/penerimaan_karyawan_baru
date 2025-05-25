<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Links Of CSS File -->
    <link rel="stylesheet" href="{{ asset('farol') }}/assets/css/remixicon.css">
    <link rel="stylesheet" href="{{ asset('farol') }}/assets/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('farol') }}/assets/css/sidebar-menu.css">
    <link rel="stylesheet" href="{{ asset('farol') }}/assets/css/simplebar.css">
    <link rel="stylesheet" href="{{ asset('farol') }}/assets/css/apexcharts.css">
    <link rel="stylesheet" href="{{ asset('farol') }}/assets/css/prism.css">
    <link rel="stylesheet" href="{{ asset('farol') }}/assets/css/rangeslider.css">
    <link rel="stylesheet" href="{{ asset('farol') }}/assets/css/sweetalert.min.css">
    <link rel="stylesheet" href="{{ asset('farol') }}/assets/css/quill.snow.css">
    <link rel="stylesheet" href="{{ asset('farol') }}/assets/css/style.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('farol') }}/assets/images/favicon.png">
    <!-- Title -->
    <title>Login</title>
</head>

<body>
    <!-- Start Main Content Area -->
    <div class="container-fluid">
        <div class="main-content d-flex flex-column px-0">
            <!-- Start Authentication Area -->
            <div class="m-auto py-5" style="max-width: 600px; width: 100%;">
                <form action="{{ route('proses.login') }}" method="POST" class="card shadow-sm border-0 rounded-10">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <h4 class="fs-3 mb-0">Get’s started.</h4>
                    </div>
                    <p class="fs-18 mb-5">Silakan login dengan menggunakan email terdaftar dan tanggal lahir Anda (format: DD-MM-YYYY) sebagai password.</p>
                    <div class="d-flex align-items-center gap-4 mb-3 justify-content-center">
                        <h4 class="fs-3 mb-0" style="">Login</h4>
                    </div>
                    @csrf
                    <div class="card bg-white border-0 rounded-10 mb-4">
                        <div class="card-body p-4">
                            <div class="form-group mb-4">
                                <label class="label">Email</label>
                                <input type="email" name="email" class="form-control h-58"
                                    placeholder="syam@gmail.com">
                                @error('email')
                                    <div style="color:red">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-0">
                                <label class="label">Password</label>
                                <div class="form-group">
                                    <div class="password-wrapper position-relative">
                                        <input name="password" type="password" id="password"
                                            class="form-control h-58 text-dark" placeholder="DD-MM-YYYY">
                                        <i style="color: #A9A9C8; font-size: 16px; right: 15px !important;"
                                            class="ri-eye-off-line password-toggle-icon translate-middle-y top-50 end-0 position-absolute"
                                            aria-hidden="true"></i>
                                        @error('password')
                                            <div style="color:red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-sm-flex justify-content-between mb-4">

                    </div>
                    <button type="submit"
                        class="btn btn-primary fs-16 fw-semibold text-dark heading-fornt py-2 py-md-3 px-4 text-white w-100">
                        Login
                    </button>
                </form>
                <div class="mt-3" >
                        <button onclick="window.location.href='{{ route('halaman_utama') }}'"
                            class="btn btn-danger fs-16 fw-semibold text-dark heading-fornt py-2 py-md-3 px-4 text-white w-100">
                            Batal
                        </button>
                    </div>
            </div>
            <!-- End Authentication Area -->
        </div>
    </div>
    <!-- Start Theme Setting Area -->
    @include('admin.components.themeSetting')
    <!-- End Theme Setting Area -->

    <!-- Link Of JS File -->
    <script src="{{ asset('farol') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('farol') }}/assets/js/sidebar-menu.js"></script>
    <script src="{{ asset('farol') }}/assets/js/dragdrop.js"></script>
    <script src="{{ asset('farol') }}/assets/js/rangeslider.min.js"></script>
    <script src="{{ asset('farol') }}/assets/js/sweetalert.js"></script>
    <script src="{{ asset('farol') }}/assets/js/quill.min.js"></script>
    <script src="{{ asset('farol') }}/assets/js/data-table.js"></script>
    <script src="{{ asset('farol') }}/assets/js/prism.js"></script>
    <script src="{{ asset('farol') }}/assets/js/clipboard.min.js"></script>
    <script src="{{ asset('farol') }}/assets/js/feather.min.js"></script>
    <script src="{{ asset('farol') }}/assets/js/simplebar.min.js"></script>
    <script src="{{ asset('farol') }}/assets/js/fslightbox.js"></script>
    <script src="{{ asset('farol') }}/assets/js/custom/custom.js"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/farol/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 May 2025 04:47:54 GMT -->

</html>
