{{-- @extends('admin.layouts.main') --}}

@extends(auth()->user()->role === 'admin' ? 'admin.layouts.main' : 'HRD.layouts.main')

@section('content')
    <div class="card bg-white border-0 rounded-10 mb-4">
        <div class="card-body p-4">
            <div class="d-sm-flex text-center justify-content-between align-items-center border-bottom pb-20 mb-20">
                <h4 class="fw-semibold fs-18 mb-sm-0">Alternatif List</h4>
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
                                        @if (auth()->user()->role === 'hrd')
                                            <th scope="col">Aksi</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $index => $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->name }}</td>
                                            @foreach ($kriterias as $kriteria)
                                                @php
                                                    $nilai =
                                                        $user->alternatifs->firstWhere('kriteria_id', $kriteria->id)
                                                            ->nilai ?? '-';
                                                @endphp
                                                <td>{{ $nilai }}</td>
                                            @endforeach
                                             @if (auth()->user()->role === 'hrd')
                                            <td>
                                                <div class="dropdown action-opt">
                                                    <button class="btn bg p-0" type="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i data-feather="more-vertical"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                                        <li>
                                                            <a class="dropdown-item" href="" data-bs-toggle="modal"
                                                                data-bs-target="#editModal-{{ $user->id }}">
                                                                <i data-feather="edit-3"></i>
                                                                Edit
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <form action="{{ route('alternatif.destroy', $user) }}"
                                                                method="POST"
                                                                onsubmit="return confirm('Yakin ingin menghapus user ini?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="dropdown-item text-danger">
                                                                    <i data-feather="trash-2"></i>
                                                                    Hapus
                                                                </button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                             @endif
                                        </tr>

                                        <div class="modal fade" id="editModal-{{ $user->id }}" tabindex="-1"
                                            aria-labelledby="editModalLabel-" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5"
                                                            id="editModalLabel-{{ $user->id }}">Edit Alternatif -
                                                            {{ $user->name }}</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form action="{{ route('alternatif.update', $user) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            @foreach ($kriterias as $kriteria)
                                                                @php
                                                                    $nilai =
                                                                        $user->alternatifs->firstWhere(
                                                                            'kriteria_id',
                                                                            $kriteria->id,
                                                                        )->nilai ?? '';
                                                                @endphp
                                                                <div class="mb-2">
                                                                    <label>{{ $kriteria->nama }}</label>
                                                                    <input type="number" name="nilai[{{ $kriteria->id }}]"
                                                                        value="{{ $nilai }}" class="form-control"
                                                                        required>
                                                                </div>
                                                            @endforeach
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
@endsection
