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

    // tambahkan disini
    <script>
        const routes = {
            pelamarIndex: "{{ route('data_pelamar') }}",
            kriteriaIndex: "{{ route('kriteria') }}",
            alternatifIndex: "{{ route('alternatif') }}",
            sawIndex: "{{ route('saw.index') }}",
            hasilIndex: "{{ route('hasil_seleksi') }}",
        };
    </script>

    <title>spk karyawan baru</title>
</head>

<body>
    <!-- Start Sidebar Area -->
    @include('HRD.components.sidebar')
    <!-- End Sidebar Area -->

    <!-- Start Main Content Area -->
    <div class="container-fluid">
        <div class="main-content d-flex flex-column">
            <!-- Start Header Area -->
            @include('HRD.components.header')
            <!-- End Header Area -->

            <!-- Start Body Content Area -->
            @yield('content')
            <!-- End Body Content Area -->

            <div class="flex-grow-1"></div>

            <!-- Start Footer Area -->
            @include('HRD.components.footer')
            <!-- End Footer Area -->
        </div>
    </div>
    <!-- Start Main Content Area -->

    <!-- Start Theme Setting Area -->
    @include('HRD.components.themeSetting')
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
    <script src="{{ asset('farol') }}/assets/js/apexcharts.min.js"></script>
    <script src="{{ asset('farol') }}/assets/js/custom/project-management.js"></script>
    <script src="{{ asset('farol') }}/assets/js/custom/custom.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    // tambahkan disini
    <script>
        function handleSearch(event) {
            event.preventDefault();
            const query = document.getElementById('searchInput').value.toLowerCase();

            if (query === "data pelamar" || query === "Data Pelamar") {
                window.location.href = "{{ route('data_pelamar') }}";
            } else if (query === "kriteria" || query === "kriterias") {
                window.location.href = "{{ route('kriteria') }}";
            } else if (query === "alternatif" || query === "alternatifs") {
                window.location.href = "{{ route('alternatif') }}";
            } else if (query === "saw" || query === "SWA") {
                window.location.href = "{{ route('saw.index') }}";
            } else if (query === "hasil" || query === "hasil seleksi") {
                window.location.href = "{{ route('hasil_seleksi') }}";
            } else {
                alert("Halaman tidak ditemukan");
            }
        }
    </script>



</body>

<!-- Mirrored from templates.hibootstrap.com/farol/project-management.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 May 2025 04:45:03 GMT -->

</html>
