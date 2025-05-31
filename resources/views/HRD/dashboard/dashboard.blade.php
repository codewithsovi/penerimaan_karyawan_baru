@extends('HRD.layouts.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-xxl-3 col-sm-6 col-xxxl-6">
            <div class="stats-box style-three card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="d-md-flex justify-content-between align-items-center">
                        <div class="flex-shrink-0">
                            <div class="icon transition">
                                <i class="flaticon-timer"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-md-3 mt-3 mt-md-0">
                            <span class="fs-15 fw-semibold">Total Pelamar</span>
                            <div class="d-flex align-items-center justify-content-between my-1 up-down">
                                <h3 class="body-font fw-bold fs-3 mb-0">{{ $totalPelamar }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6 col-xxxl-6">
            <div class="stats-box style-three card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="d-md-flex justify-content-between align-items-center">
                        <div class="flex-shrink-0">
                            <div class="icon transition">
                                <i class="flaticon-donut-chart"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-md-3 mt-3 mt-md-0">
                            <span class="fs-15 fw-semibold">Pelamar Tidak Diterima</span>
                            <div class="d-flex align-items-center justify-content-between my-1 up-down">
                                <h3 class="body-font fw-bold fs-3 mb-0">{{ $pelamarTidakDiterima }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6 col-xxxl-6">
            <div class="stats-box style-three card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="d-md-flex justify-content-between align-items-center">
                        <div class="flex-shrink-0">
                            <div class="icon transition">
                                <i class="flaticon-goal"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-md-3 mt-3 mt-md-0">
                            <span class="fs-15 fw-semibold">Pelamar Diterima</span>
                            <div class="d-flex align-items-center justify-content-between my-1 up-down">
                                <h3 class="body-font fw-bold fs-3 mb-0">{{ $pelamarDiterima }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6 col-xxxl-6">
            <div class="stats-box style-three card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="d-md-flex justify-content-between align-items-center">
                        <div class="flex-shrink-0">
                            <div class="icon transition">
                                <i class="flaticon-award"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-md-3 mt-3 mt-md-0">
                            <span class="fs-15 fw-semibold">Pelamar Belum Diproses</span>
                            <div class="d-flex align-items-center justify-content-between my-1 up-down">
                                <ul>
                                    @forelse($pelamarBelumDiproses as $pelamar)
                                        <li>{{ $pelamar->name }} - <span class="text-warning">Belum diproses</span></li>
                                    @empty
                                        <li>Semua pelamar sudah diproses</li>
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
