@extends('admin.layouts.main')

@section('content')
    <div class="col-lg-12">
        <div class="card bg-white border-0 rounded-10 mb-4">
            <div class="card-body p-4">
                    <h4 class="fs-18 mb-4">
                        Sub Kriteria : {{ $kriteria->nama }}
                    </h4>
                <div class="tab-content" id="myTab6Content">
                    <div class="tab-pane fade show active" id="preview6-tab-pane" role="tabpanel" aria-labelledby="preview6-tab"
                        tabindex="0">
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Bobot</th>
                                    <th scope="col">Min</th>
                                    <th scope="col">Max</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subkriteria as $skr)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $skr->bobot }}</td>
                                    <td>{{ $skr->min }}</td>
                                    <td>{{ $skr->max }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <button onclick="window.location='{{ route('kriteria') }}'"
                    class="border-0 btn btn-primary py-2 px-3 px-sm-4 text-white fs-14 fw-semibold rounded-3"
                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <span class="py-sm-1 d-block">
                        <i data-feather="arrow-left"></i>
                        <span>Kriteria</span>
                    </span>
                </button>
            </div>
        </div>
    </div>
@endsection
