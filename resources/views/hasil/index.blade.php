@extends('pelamar.layouts.main')

@section('content')
<div class="d-flex justify-content-center align-items-center min-vh-100 bg-light">
    <div class="card p-4 shadow" style="width: 90%; max-width: 700px; border-radius: 20px;">
        <div class="text-center mb-4">
            <img src="https://img.icons8.com/color/96/ok--v1.png" alt="Success Icon" style="width: 80px;">
            <h3 class="fw-bold text-primary mt-3">Selamat! 🎉</h3>
            <p class="text-muted">Anda dinyatakan <strong>lolos seleksi karyawan 2025</strong></p>
        </div>

        <div class="row mb-3">
            <div class="col-md-6 mb-2">
                <label class="fw-semibold text-secondary">Nama:</label><br>
                <span class="text-dark">NAMA ANDA</span>
            </div>
            <div class="col-md-6 mb-2">
                <label class="fw-semibold text-secondary">Posisi:</label><br>
                <span class="text-dark">POSISI YANG DILAMAR</span>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6 mb-2">
                <label class="fw-semibold text-secondary">Tanggal Lahir:</label><br>
                <span class="text-dark">01 Januari 2000</span>
            </div>
            <div class="col-md-6 mb-2">
                <label class="fw-semibold text-secondary">Alamat:</label><br>
                <span class="text-dark">Kota/Kabupaten Pelamar</span>
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
@endsection
