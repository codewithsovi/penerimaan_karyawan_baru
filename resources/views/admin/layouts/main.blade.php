<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/farol/project-management.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 May 2025 04:44:48 GMT -->

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
    <title>spk karyawan baru</title>
</head>

<body>
    <!-- Start Sidebar Area -->
    @include('admin.components.sidebar')
    <!-- End Sidebar Area -->

    <!-- Start Main Content Area -->
    <div class="container-fluid">
        <div class="main-content d-flex flex-column">
            <!-- Start Header Area -->
            @include('admin.components.header')
            <!-- End Header Area -->

            <!-- Start Body Content Area -->
            @yield('content')
            <!-- End Body Content Area -->

            <div class="flex-grow-1"></div>

            <!-- Start Footer Area -->
            @include('admin.components.footer')
            <!-- End Footer Area -->
        </div>
    </div>
    <!-- Start Main Content Area -->

    <!-- Start Theme Setting Area -->
    @include('admin.components.themeSetting')
    <!-- End Theme Setting Area -->

    <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 1055">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true"
            data-bs-autohide="true" data-bs-delay="5000">
            <div class="toast-header bg-primary text-white">
                <img src="assets/images/logo-icon.png" class="rounded me-2" alt="..." height="18">
                <strong class="me-auto">Sistem</strong>
                <small class="text-light" id="toast-time">Baru saja</small>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
            <div class="toast-body" id="toast-message">
                <!-- Pesan akan diisi oleh JS -->
            </div>
        </div>
    </div>


    @if (session('success') || session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const message = @json(session('success') ?? session('error'));
                const toastMessage = document.getElementById('toast-message');
                const toastTime = document.getElementById('toast-time');
                const toastElement = document.getElementById('liveToast');

                // Set pesan dan waktu
                toastMessage.innerText = message;
                toastTime.innerText = new Date().toLocaleTimeString();

                // Tampilkan toast
                const toast = new bootstrap.Toast(toastElement);
                toast.show();
            });
        </script>
    @endif



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
    <script src="{{ asset('farol') }}/assets/js/apexcharts.min.js"></script>
    <script src="{{ asset('farol') }}/assets/js/custom/project-management.js"></script>
    <script src="{{ asset('farol') }}/assets/js/custom/custom.js"></script>



</body>

<!-- Mirrored from templates.hibootstrap.com/farol/project-management.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 May 2025 04:45:03 GMT -->

</html>
