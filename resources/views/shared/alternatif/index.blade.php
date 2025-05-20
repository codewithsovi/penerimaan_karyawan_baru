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
                                @foreach ($kriteria as $ktr)
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
                                                <form action=""
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
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
