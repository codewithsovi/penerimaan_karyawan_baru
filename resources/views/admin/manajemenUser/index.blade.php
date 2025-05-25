@extends('admin.layouts.main')

@section('content')
    <div class="card bg-white border-0 rounded-10 mb-4">
        <div class="card-body p-4">
            <div class="d-sm-flex text-center justify-content-between align-items-center border-bottom pb-20 mb-20">
                <h4 class="fw-semibold fs-18 mb-sm-0">Users List</h4>
                <button type="button" class="btn btn-primary text-white py-2 px-4 fw-semibold" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop">
                    <i class="ri-add-line text-white"></i>
                    Create User
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
                                        <th scope="col">username</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->role }}</td>
                                            <td>
                                                <div class="dropdown action-opt">
                                                    <button class="btn bg p-0" type="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i data-feather="more-vertical"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                                        <li>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                                data-bs-target="#editModal-{{ $item->id }}">
                                                                <i data-feather="edit-3"></i>
                                                                Edit
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <form action="{{ route('manajemen_akun.destroy', $item->id) }}"
                                                                method="POST"
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

                                        <!-- Modal Edit User -->
                                        <div class="modal fade" id="editModal-{{ $item->id }}" tabindex="-1"
                                            aria-labelledby="editModalLabel-{{ $item->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5"
                                                            id="editModalLabel-{{ $item->id }}">Edit User</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form action="{{ route('manajemen_akun.update', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <div class="form-group mb-2">
                                                                <label class="label">Nama</label>
                                                                <input type="text" class="form-control text-dark h-58"
                                                                    name="name" value="{{ $item->name }}" required>
                                                            </div>
                                                            <div class="form-group mb-2">
                                                                <label class="label">Email</label>
                                                                <input type="email" class="form-control text-dark h-58"
                                                                    name="email" value="{{ $item->email }}" required>
                                                            </div>
                                                            <div class="form-group mb-2">
                                                                <label class="label">Password <small
                                                                        class="text-muted">(Kosongkan jika tidak ingin
                                                                        mengubah)</small></label>
                                                                <input type="password" class="form-control text-dark h-58"
                                                                    name="password">
                                                            </div>
                                                            <div class="form-group mb-2">
                                                                <label class="label">Role</label>
                                                                <select class="form-control text-dark h-58" name="role"
                                                                    required>
                                                                    <option value="admin"
                                                                        {{ $item->role == 'admin' ? 'selected' : '' }}>
                                                                        Admin</option>
                                                                    <option value="hrd"
                                                                        {{ $item->role == 'hrd' ? 'selected' : '' }}>User
                                                                    </option>
                                                                </select>
                                                            </div>
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
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- modal create users --}}
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Management Users</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('manajemen_akun.store') }}" method="POST">
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
                            <label class="label">Password</label>
                            <div class="form-group">
                                <input type="password" class="form-control text-dark h-58" name="password" required>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="label">Role</label>
                            <div class="form-group">
                                <select class="form-control text-dark h-58" name="role" required>
                                    <option value="" disabled selected>Pilih Role</option>
                                    <option value="admin">Admin</option>
                                    <option value="hrd">HRD</option>
                                    <option value="pelamar">Pelamar</option>
                                </select>
                            </div>
                        </div>
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
