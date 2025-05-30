@extends(auth()->user()->role === 'admin' ? 'admin.layouts.main' : 'HRD.layouts.main')

{{-- @extends('admin.layouts.main') --}}

@section('content')
    <div class="col-lg-12">
        <div class="card bg-white border-0 rounded-10 mb-4">
            <div class="card-body p-4">
                <h4 class="fs-18 mb-4">kriteria</h4>
                <div class="tab-content" id="myTab5Content">
                    <div class="tab-pane fade show active" id="preview5-tab-pane" role="tabpanel" aria-labelledby="preview5-tab"
                        tabindex="0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kriteria</th>
                                    <th scope="col">Kode Kriteria</th>
                                    <th scope="col">Bobot</th>
                                    <th scope="col">Tipe</th>
                                    <th scope="col">Show</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kriteria as $krt)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $krt->nama }}</td>
                                        <td>{{ $krt->kode_kriteria }}</td>
                                        <td>{{ $krt->bobot }}</td>
                                        <td>{{ $krt->tipe }}</td>
                                        <td>
                                            <a href="{{ route('subkriteria', $krt->id) }}" class="menu-link">
                                                <i class="flaticon-eye" class="menu-icon tf-icons" ></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
