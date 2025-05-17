@extends('layouts.main')

@section('body')
<div class="row justify-content-center">
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
                                        <span class="fs-15 fw-semibold">Jumlah Pelamar</span>
                                        <div class="d-flex align-items-center justify-content-between my-1 up-down">
                                            <h3 class="body-font fw-bold fs-3 mb-0">41</h3>
                                            <span class="bg-success text-success bg-opacity-10 fs-13 fw-semibold py-1 px-2 rounded-2">5.80% <i class="flaticon-arrow-up fs-13 fw-normal ms-1"></i></span>
                                        </div>
                                        <p class="fs-15">Jumlah keseluruhan pelamar yang di inputkan</p>
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
                                        <span class="fs-15 fw-semibold">Ditolak</span>
                                        <div class="d-flex align-items-center justify-content-between my-1 up-down">
                                            <h3 class="body-font fw-bold fs-3 mb-0">65</h3>
                                            <span class="bg-danger text-danger bg-opacity-10 fs-13 fw-semibold py-1 px-2 rounded-2">1.04% <i class="flaticon-down-filled-triangular-arrow fs-13 fw-normal ms-1"></i></span>
                                        </div>
                                        <p class="fs-15">Projects this month</p>
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
                                            <i class="flaticon-timer"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-md-3 mt-3 mt-md-0">
                                        <span class="fs-15 fw-semibold">Belum Diproses</span>
                                        <div class="d-flex align-items-center justify-content-between my-1 up-down">
                                            <h3 class="body-font fw-bold fs-3 mb-0">801:30 Hr</h3>
                                            <span class="bg-success text-success bg-opacity-10 fs-13 fw-semibold py-1 px-2 rounded-2">5.80% <i class="flaticon-arrow-up fs-13 fw-normal ms-1"></i></span>
                                        </div>
                                        <p class="fs-15">Projects this month</p>
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
                                        <span class="fs-15 fw-semibold">Diterima</span>
                                        <div class="d-flex align-items-center justify-content-between my-1 up-down">
                                            <h3 class="body-font fw-bold fs-3 mb-0">24k</h3>
                                            <span class="bg-success text-success bg-opacity-10 fs-13 fw-semibold py-1 px-2 rounded-2">5.80% <i class="flaticon-arrow-up fs-13 fw-normal ms-1"></i></span>
                                        </div>
                                        <p class="fs-15">Projects this month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-xl-4">
                        <div class="card bg-white border-0 rounded-10 mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                                    <h4 class="fw-semibold fs-18 mb-0">Peringkat Tertinggi</h4>
                                    <div class="dropdown action-opt">
                                        <button class="btn bg-transparent p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i data-feather="more-horizontal"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="clock"></i>
                                                    Today
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="pie-chart"></i>
                                                    Last 7 Days
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="rotate-cw"></i>
                                                    Last Month
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="calendar"></i>
                                                    Last 1 Year
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="bar-chart"></i>
                                                    All Time
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="eye"></i>
                                                    View
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="trash"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div id="total_users"></div>

                                <ul class="ps-0 mb-0 mt-3 list-unstyled d-flex justify-content-between text-center">
                                    <li>
                                        <span class="d-block fw-semibold text-gray-light mb-2">Target</span>
                                        <span class="d-block fs-20 fw-semibold d-flex align-items-center"><i class="ri-arrow-down-line fw-normal me-1 text-danger"></i> 18k</span>
                                    </li>
                                    <li>
                                        <span class="d-block fw-semibold text-gray-light mb-2">Last Week</span>
                                        <span class="d-block fs-20 fw-semibold d-flex align-items-center"><i class="ri-arrow-up-line fw-normal me-1 text-success"></i> 5.21k</span>
                                    </li>
                                    <li>
                                        <span class="d-block fw-semibold text-gray-light mb-2">Last Month</span>
                                        <span class="d-block fs-20 fw-semibold d-flex align-items-center"><i class="ri-arrow-down-line fw-normal me-1 text-danger"></i> 32k</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card bg-white border-0 rounded-10 mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                                    <h4 class="fw-semibold fs-18 mb-0">Completed Tasks</h4>
                                    <div class="dropdown action-opt">
                                        <button class="btn bg-transparent p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i data-feather="more-horizontal"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="clock"></i>
                                                    Today
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="pie-chart"></i>
                                                    Last 7 Days
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="rotate-cw"></i>
                                                    Last Month
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="calendar"></i>
                                                    Last 1 Year
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="bar-chart"></i>
                                                    All Time
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="eye"></i>
                                                    View
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="trash"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div id="completed_tasks"></div>

                                <ul class="ps-0 mb-0 mt-3 list-unstyled d-flex justify-content-between text-center">
                                    <li>
                                        <span class="d-block fw-semibold text-gray-light mb-2">Target</span>
                                        <span class="d-block fs-20 fw-semibold d-flex align-items-center"><i class="ri-arrow-down-line fw-normal me-1 text-danger"></i> 18k</span>
                                    </li>
                                    <li>
                                        <span class="d-block fw-semibold text-gray-light mb-2">Last Week</span>
                                        <span class="d-block fs-20 fw-semibold d-flex align-items-center"><i class="ri-arrow-up-line fw-normal me-1 text-success"></i> 5.21k</span>
                                    </li>
                                    <li>
                                        <span class="d-block fw-semibold text-gray-light mb-2">Last Month</span>
                                        <span class="d-block fs-20 fw-semibold d-flex align-items-center"><i class="ri-arrow-down-line fw-normal me-1 text-danger"></i> 32k</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card bg-white border-0 rounded-10 mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                                    <h4 class="fw-semibold fs-18 mb-0">Tasks Performance</h4>
                                    <div class="dropdown action-opt">
                                        <button class="btn bg-transparent p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i data-feather="more-horizontal"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="clock"></i>
                                                    Today
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="pie-chart"></i>
                                                    Last 7 Days
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="rotate-cw"></i>
                                                    Last Month
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="calendar"></i>
                                                    Last 1 Year
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="bar-chart"></i>
                                                    All Time
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="eye"></i>
                                                    View
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="trash"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div id="tasks_performance"></div>

                                <ul class="ps-0 mb-0 mt-3 list-unstyled d-flex justify-content-between text-center">
                                    <li>
                                        <span class="d-block fw-semibold text-gray-light mb-2">Target</span>
                                        <span class="d-block fs-20 fw-semibold d-flex align-items-center"><i class="ri-arrow-down-line fw-normal me-1 text-danger"></i> 18k</span>
                                    </li>
                                    <li>
                                        <span class="d-block fw-semibold text-gray-light mb-2">Last Week</span>
                                        <span class="d-block fs-20 fw-semibold d-flex align-items-center"><i class="ri-arrow-up-line fw-normal me-1 text-success"></i> 5.21k</span>
                                    </li>
                                    <li>
                                        <span class="d-block fw-semibold text-gray-light mb-2">Last Month</span>
                                        <span class="d-block fs-20 fw-semibold d-flex align-items-center"><i class="ri-arrow-down-line fw-normal me-1 text-danger"></i> 32k</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
