@extends('pelamar.layouts.main')

@section('content')
{{-- diterima --}}
@if ($hasilSeleksi && $hasilSeleksi->status === 'diterima')
<div class="d-flex justify-content-center align-items-center min-vh-100 bg-light">
    <div class="card p-3 shadow" style="width: 100%; max-width: 1000px; border-radius: 20px;">
        <div class="text-center mb-6">
            <img src="https://img.icons8.com/color/96/ok--v1.png" alt="Success Icon" style="width: 80px;">
            <h3 class="fw-bold text-primary mt-3">Pengumuman! 🎉</h3> <br>
            <p class="text-muted">Anda dinyatakan <strong>lolos seleksi 2025</strong></p>
        </div> <br>

        <div class="row mb-10">
            <div class="col-md-6 mb-5">
                <label class="fw-semibold text-secondary">Nama :</label><br>
                <span class="text-dark">{{ Auth::user()->name }}</span>
            </div>
        </div>

        <div class="row mb-10">
            <div class="col-md-6 mb-5">
                <label class="fw-semibold text-secondary">Email :</label><br>
                <span class="text-dark">{{ Auth::user()->email }}</span>
            </div>
        </div>

        <div class="text-center">
            <p class="text-muted mb-2">Untuk informasi onboarding selanjutnya, hubungi kami lewat WhatsApp:</p>
            <a href="https://wa.me/+6282143759499" target="_blank" class="btn btn-success px-4 py-2 rounded-pill">
                💬 Hubungi via WhatsApp
            </a>
        </div>
    </div>
</div>

{{-- tidak diterima --}}
@elseif ($hasilSeleksi && $hasilSeleksi->status === 'tidak diterima')
<div class="d-flex justify-content-center align-items-center min-vh-100 bg-light">
    <div class="card p-3 shadow" style="width: 100%; max-width: 1000px; border-radius: 20px;">
        <div class="text-center mb-6">
            <img src="https://img.icons8.com/?size=100&id=13903&format=png&color=000000" alt="Success Icon" style="width: 80px;">
            <h3 class="fw-bold text-primary mt-3">Pengumuman! 🎉</h3> <br>
            <p class="text-muted">Maaf Anda dinyatakan <strong>tidak lolos seleksi 2025</strong></p>
        </div> <br>

        <div class="row mb-10">
            <div class="col-md-6 mb-5">
                <label class="fw-semibold text-secondary">Nama :</label><br>
                <span class="text-dark">{{ Auth::user()->name }}</span>
            </div>
        </div>

        <div class="row mb-10">
            <div class="col-md-6 mb-5">
                <label class="fw-semibold text-secondary">Email :</label><br>
                <span class="text-dark">{{ Auth::user()->email }}</span>
            </div>
        </div>
    </div>
</div>

@else
    {{-- BELUM DIPROSES --}}
    <div class="d-flex justify-content-center align-items-center min-vh-100 bg-light">
        <div class="card p-4 shadow" style="width: 100%; max-width: 600px; border-radius: 20px;">
            <div class="text-center">
                <h3 class="fw-bold text-secondary">Pengumuman Belum Tersedia</h3>
                <p class="text-muted">Silakan tunggu hingga proses seleksi selesai.</p>
            </div>
        </div>
    </div>
@endif
@endsection
