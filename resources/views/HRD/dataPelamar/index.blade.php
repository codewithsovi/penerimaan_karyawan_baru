@extends('HRD.layouts.main')

@section('content')
    <div class="card bg-white border-0 rounded-10 mb-4">
        <div class="card-body p-4">
            <div class="d-sm-flex text-center justify-content-between align-items-center border-bottom pb-20 mb-20">
                <h4 class="fw-semibold fs-18 mb-sm-0">Pelamar List</h4>
                <button type="button" class="btn btn-primary text-white py-2 px-4 fw-semibold" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop">
                    <i class="ri-add-line text-white"></i>
                    Tambah Pelamar
                </button>
            </div>
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="default-table-area members-list">
                        <div class="table-responsive">

                            <table class="table align-middle" id="myTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        {{-- <th scope="col">Tanggal Lahir</th> --}}
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pelamars as $pelamar)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $pelamar->name }}</td>
                                            <td>{{ $pelamar->email }}</td>
                                            {{-- <td>{{ $pelamar->password }}</td> --}}
                                            <td>
                                                <div class="dropdown action-opt">
                                                    <button class="btn bg p-0" type="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i data-feather="more-vertical"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                                        <li>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#editModal-{{ $pelamar->id }}">
                                                                <i data-feather="edit-3"></i>
                                                                Edit
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <form action="{{ route('pelamar.destroy', $pelamar->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus user ini?')">
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

                                        <!-- Modal Edit Pelamar -->
                                        <div class="modal fade" id="editModal-{{ $pelamar->id }}" tabindex="-1" aria-labelledby="editModalLabel-{{ $pelamar->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="editModalLabel-{{ $pelamar->id }}">Edit Pelamar</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="{{ route('pelamar.update', $pelamar->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <div class="form-group mb-2">
                                                                <label class="label">Nama</label>
                                                                <input type="text" class="form-control text-dark h-58" name="name" value="{{ $pelamar->name }}" required>
                                                            </div>
                                                            <div class="form-group mb-2">
                                                                <label class="label">Email</label>
                                                                <input type="email" class="form-control text-dark h-58" name="email" value="{{ $pelamar->email }}" required>
                                                            </div>
                                                            <div class="form-group mb-2">
                                                                <label class="label">Tanggal Lahir <small class="text-muted">(Kosongkan jika tidak ingin mengubah)</small></label>
                                                                <input type="text" class="form-control text-dark h-58" name="password">
                                                            </div>
                                                            <input type="hidden" value="pelamar" class="form-control text-dark h-58" name="role">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary text-white">Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- modal create pelamar --}}
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Pelamar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('pelamar.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group mb-2">
                            <label class="label">Nama</label>
                            <div class="form-group">
                                <input type="text" class="form-control text-dark h-58" name="name" required>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="label">Email</label>
                            <div class="form-group">
                                <input type="email" class="form-control text-dark h-58" name="email" required>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="label">Tanggal Lahir</label>
                            <div class="form-group">
                                <input type="text" class="form-control text-dark h-58" name="password" placeholder="DD-MM-YYYY" required>
                            </div>
                        </div>
                        <input type="hidden" value="pelamar" class="form-control text-dark h-58" name="role">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary text-white">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
