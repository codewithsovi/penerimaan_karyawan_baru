@extends('admin.layouts.main')

@section('content')
    <div class="card bg-white border-0 rounded-10 mb-4">
        <div class="card-body p-4">
            <div class="d-sm-flex text-center justify-content-between align-items-center border-bottom pb-20 mb-20">
                <h4 class="fw-semibold fs-18 mb-sm-0">Alternatif List</h4>
                <button type="button" class="btn btn-primary text-white py-2 px-4 fw-semibold" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop">
                    <i class="ri-add-line text-white"></i>
                    Alternatif
                </button>
            </div>
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="default-table-area members-list">
                        <div class="table-responsive">

                            <table class="table align-middle" id="myTable">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        @foreach ($kriterias as $kriteria)
                                            <th scope="col">{{ $kriteria->kode_kriteria }}</th>
                                        @endforeach
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>sovi</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>
                                            <div class="dropdown action-opt">
                                                <button class="btn bg p-0" type="button" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                                    <li>
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                            data-bs-target="#editModal-">
                                                            <i data-feather="edit-3"></i>
                                                            Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form action="" method="POST"
                                                            onsubmit="return confirm('Yakin ingin menghapus user ini?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="dropdown-item text-danger">
                                                                <i data-feather="trash-2"></i>
                                                                Remove
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Modal Edit Alternaif -->
                                    <div class="modal fade" id="editModal-" tabindex="-1" aria-labelledby="editModalLabel-"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="editModalLabel-">Edit Alternatif</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="form-group mb-2">
                                                            <label class="label">Nama</label>
                                                            <input type="text" class="form-control text-dark h-58"
                                                                name="name" value="" required>
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <label class="label">Email</label>
                                                            <input type="email" class="form-control text-dark h-58"
                                                                name="email" value="" required>
                                                        </div>
                                                        <div class="form-group mb-2">
                                                            <label class="label">Tanggal Lahir <small
                                                                    class="text-muted">(Kosongkan jika tidak ingin
                                                                    mengubah)</small></label>
                                                            <input type="text" class="form-control text-dark h-58"
                                                                name="password">
                                                        </div>
                                                        <input type="hidden" value="kriteria"
                                                            class="form-control text-dark h-58" name="role">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger text-white"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit"
                                                            class="btn btn-primary text-white">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- modal create alternatif --}}
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Alternatif</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group mb-2">
                            <div class="form-group mb-2">
                                <label class="label">Nama Pelamar</label>
                                <div class="form-group">
                                    <select class="form-select form-control ps-5 h-58"
                                        aria-label="Default select example">
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                    <i class="ri-font-size position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <div class="form-group mb-2">
                                <label class="label">kriteria</label>
                                <div class="form-group position-relative">
                                    <select class="form-select form-control ps-5 h-58"
                                        aria-label="Default select example">
                                        @foreach ($kriterias as $kriteria)
                                            <option value="{{ $kriteria->id }}">{{ $kriteria->nama }}</option>
                                        @endforeach
                                    </select>
                                    <i
                                        class="ri-list-ordered position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="label">Nilai</label>
                            <input type="number" class="form-control text-dark h-58" name="nilai" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary text-white">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
