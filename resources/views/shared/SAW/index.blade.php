@extends('admin.layouts.main')

@section('content')
    {{-- tabel alternatif yang memiliki bobot --}}
    <div class="col-lg-12">
        <div class="card bg-white border-0 rounded-10 mb-4">
            <div class="card-body p-4">
                <h4 class="fs-18 mb-4">Alternatif</h4>
                <div class="tab-content" id="myTab5Content">
                    <div class="tab-pane fade show active" id="preview5-tab-pane" role="tabpanel" aria-labelledby="preview5-tab"
                        tabindex="0">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    @foreach ($kriterias as $kriteria)
                                        <th scope="col">{{ $kriteria->kode_kriteria }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($users as $user)
                                    @php
                                        $userPunyaSemuaNilai = $kriterias->every(function ($kriteria) use ($user) {
                                            return $user->alternatifs->where('kriteria_id', $kriteria->id)->first();
                                        });
                                    @endphp

                                    @if ($userPunyaSemuaNilai)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->name }}</td>
                                            @foreach ($kriterias as $kriteria)
                                                @php
                                                    $nilai =
                                                        $user->alternatifs->where('kriteria_id', $kriteria->id)->first()
                                                            ->nilai ?? '-';
                                                @endphp
                                                <td>{{ $nilai }}</td>
                                            @endforeach
                                        </tr>
                                    @endif
                                @empty
                                    <tr>
                                        <td colspan="{{ $kriterias->count() + 1 }}" class="text-center">
                                            Tidak ada pelamar dengan data lengkap.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- tabel hasil konversi --}}
    <div class="col-lg-12">
        <div class="card bg-white border-0 rounded-10 mb-4">
            <div class="card-body p-4">
                <h4 class="fs-18 mb-4">Konversi Alternatif</h4>
                <div class="tab-content" id="myTab5Content">
                    <div class="tab-pane fade show active" id="preview5-tab-pane" role="tabpanel"
                        aria-labelledby="preview5-tab" tabindex="0">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th scope="col">Nama</th>
                                    @foreach ($kriterias as $kriteria)
                                        <th scope="col">{{ $kriteria->kode_kriteria }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($konversi as $userId => $nilaiKriteria)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $users->find($userId)->name }}</td>
                                        @foreach ($kriterias as $kriteria)
                                            <td>
                                                {{ $nilaiKriteria[$kriteria->id] ?? '-' }}
                                            </td>
                                        @endforeach
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- tabel normalisasi --}}
    <div class="col-lg-12">
        <div class="card bg-white border-0 rounded-10 mb-4">
            <div class="card-body p-4">
                <h4 class="fs-18 mb-4">Normalisasi (tiga angka dibelakang koma)</h4>
                <div class="tab-content" id="myTab5Content">
                    <div class="tab-pane fade show active" id="preview5-tab-pane" role="tabpanel"
                        aria-labelledby="preview5-tab" tabindex="0">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th scope="col">Nama</th>
                                    @foreach ($kriterias as $kriteria)
                                        <th scope="col">{{ $kriteria->kode_kriteria }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($normalisasi as $userId => $nilaiKriteria)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $users->find($userId)->name }}</td>
                                        @foreach ($kriterias as $kriteria)
                                            <td>{{ number_format($nilaiKriteria[$kriteria->id] ?? 0, 3) }}</td>
                                        @endforeach
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- hasil akhir --}}
    <div class="col-lg-12">
        <div class="card bg-white border-0 rounded-10 mb-4">
            <div class="card-body p-4">
                <h4 class="fs-18 mb-4">Nilai Akhir</h4>
                <div class="tab-content" id="myTab5Content">
                    <div class="tab-pane fade show active" id="preview5-tab-pane" role="tabpanel"
                        aria-labelledby="preview5-tab" tabindex="0">
                        <form action="">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Rangking</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($skorAkhir as $index => $hasil)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $users->firstWhere('id', $hasil['user_id'])->name ?? 'User ' . $hasil['user_id'] }}
                                            </td>
                                            <td>{{ number_format($hasil['nilai_akhir'], 3) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
