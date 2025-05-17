@extends('admin.layouts.main')

@section('content')
    <div class="col-lg-12">
        <div class="card bg-white border-0 rounded-10 mb-4">
            <div class="card-body p-4">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="preview-tab-pane" role="tabpanel" aria-labelledby="preview-tab"
                        tabindex="0">
                        <div
                            class="d-sm-flex text-center justify-content-between align-items-center border-bottom pb-20 mb-20">
                            <h4 class="fw-semibold fs-18 mb-sm-0">Alternatif (Pelamar)</h4>

                            {{-- khusus HRD --}}
                            <button type="button" class="btn btn-primary text-white py-2 px-4 fw-semibold"
                                data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <i class="ri-add-line text-white"></i>
                                Create Alternatif
                            </button>
                        </div>

                        <div class="default-table-area members-list">
                            <div class="table-responsive">
                                <table class="table align-middle">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Tanggal Lahir</th>
                                            @foreach ($kriteria as $ktr)
                                                <th scope="col">{{ $ktr->kode_kriteria }}</th>
                                            @endforeach

                                            {{-- khusus HRD --}}
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td>1</td>
                                            <td>
                                                sovi alfi nafilah
                                            </td>
                                            <td>
                                                12 mei 2013
                                            </td>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                3
                                            </td>
                                            <td>
                                                3
                                            </td>
                                            <td>
                                                3
                                            </td>

                                            {{-- khusus HRD --}}
                                            <td>
                                                <ul>
                                                    <li><a href="#">Edit</a></li>
                                                    <li><a href="#">Hapus</a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-sm-flex justify-content-between align-items-center text-center">
                                <span class="fs-14">Showing 1 To 6 Of 20 Entries</span>

                                <nav aria-label="Page navigation example">
                                    <ul class="pagination mb-0 mt-3 mt-sm-0 justify-content-center">
                                        <li class="page-item">
                                            <a class="page-link icon" href="members-list.html" aria-label="Previous">
                                                <i data-feather="arrow-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link active" href="members-list.html">1</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="members-list.html">2</a></li>
                                        <li class="page-item"><a class="page-link" href="members-list.html">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link icon" href="members-list.html" aria-label="Next">
                                                <i data-feather="arrow-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modals Tambah alternnatif--}}
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Alternatif</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="modal-dialog modal-dialog-scrollable">
                        <div class="form-group mb-2">
                            <label class="label">Nama</label>
                            <div class="form-group">
                                <input type="text" class="form-control text-dark h-58">
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="label">Email</label>
                            <div class="form-group">
                                <input type="email" class="form-control text-dark h-58">
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="label">Tanggal Lahir</label>
                            <div class="form-group">
                                <input type="text" class="form-control text-dark h-58">
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="label">Nilai</label>
                            <div class="form-group">
                                <input type="text" class="form-control text-dark h-58">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary text-white">Understood</button>
                </div>
            </div>
        </div>
    </div>
@endsection
