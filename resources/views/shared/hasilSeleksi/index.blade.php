{{-- @extends('admin.layouts.main') --}}

@extends(auth()->user()->role === 'admin' ? 'admin.layouts.main' : 'HRD.layouts.main')

@section('content')
    <div class="col-lg-12">
        <div class="card bg-white border-0 rounded-10 mb-4">
            <div class="card-body p-4">
                <h4 class="fs-18 mb-4">Data Hasil Seleksi</h4>
                <div class="tab-content" id="myTab5Content">
                    <div class="tab-pane fade show active" id="preview5-tab-pane" role="tabpanel" aria-labelledby="preview5-tab"
                        tabindex="0">
                        <!-- Form Penentu Jumlah Pelamar yang Diterima -->
                         @if (auth()->user()->role === 'hrd')
                        <form method="POST" action="{{ route('seleksi.proses') }}" class="mb-4 d-flex align-items-center">
                            @csrf
                            <label class="me-2 mb-0">Jumlah Diterima:</label>
                            <input type="number" name="jumlah_diterima" value="{{ old('jumlah_diterima', 5) }}"
                                min="1" class="form-control w-auto me-2" required />
                            <button type="submit" class="btn btn-primary">Proses Seleksi Otomatis</button>
                        </form>
                        @endif
                        <!-- Tabel Nilai Akhir -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Ranking</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Nilai Akhir</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $index => $hasil)
                                    @php
                                        $user = $users->firstWhere('id', $hasil['user_id']);
                                        $hasilSeleksi = $hasilSeleksis[$hasil['user_id']] ?? null;
                                        $status = $hasilSeleksi->status ?? 'Belum Diproses';
                                        $badgeClass = match ($status) {
                                            'diterima' => 'success',
                                            'tidak diterima' => 'danger',
                                            default => 'secondary',
                                        };
                                    @endphp
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->name ?? 'User ' . $hasil['user_id'] }}</td>
                                        <td>{{ $hasil->user->email }}</td>
                                        <td>{{ number_format($hasil->score->nilai_akhir, 3) }}</td>
                                        <td><span class="badge bg-{{ $badgeClass }}">{{ ucfirst($status) }}</span></td>
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
