@extends('admin.layouts.main')

@section('content')
    <div class="card bg-white border-0 rounded-10 mb-4">
        <div class="card-body p-4">
            <div class="default-table-area members-list">
                <div class="table-responsive">
                    <button type="button" class="btn btn btn-primary py-2 px-4 text-white fw-semibold" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Launch demo modal
                    </button>
                    <table class="table align-middle" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                @foreach ($kriteria as $ktr )
                                <th scope="col">{{ $ktr->kode_kriteria }}</th>
                                @endforeach
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>dani@gmail.com</td>
                                <td>30</td>
                                <td>15</td>
                                <td>20</td>
                                <td>14</td>
                                <td>
                                    <div class="dropdown action-opt">
                                        <button class="btn bg p-0" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i data-feather="more-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                            <li>
                                                <a class="dropdown-item" href="">
                                                    <i data-feather="edit-3"></i>
                                                    Edit
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="">
                                                    <i data-feather="trash-2"></i>
                                                    Remove
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    {{-- Modals Tambah alternnatif --}}
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Alternatif</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        @csrf
                        <div class="col-lg-12">
                            <div class="form-group mb-4">
                                <label class="label">Country</label>
                                <div class="form-group position-relative">
                                    <select class="form-select form-control ps-5 h-58" aria-label="Default select example">
                                        <option selected class="text-dark">United Kingdom</option>
                                        <option value="1" class="text-dark">United States</option>
                                        <option value="2" class="text-dark">Canada</option>
                                        <option value="3" class="text-dark">France</option>
                                    </select>
                                    <i
                                        class="ri-map-2-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                </div>
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
                    <button type="button" class="btn btn-primary text-white">Submit</button>
                </div>
            </div>
        </div>
    </div>
@endsection
