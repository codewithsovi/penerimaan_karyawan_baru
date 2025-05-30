@extends('pelamar.layouts.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="card bg-white border-0 rounded-10 mb-4 shadow-sm">
            <div class="card-body p-5 text-justify">
                <h3 class="fw-bold fs-24 mb-3 text-dark text-center">Halo Pelamar!</h3>
                <p class="fs-16 fw-semibold mb-4 text-center">
                    Selamat datang di halaman informasi hasil seleksi! 👋
                </p>
                <p class="fs-15 mb-3 text-justify">
                    Terima kasih telah berpartisipasi dalam proses seleksi penerimaan karyawan baru di perusahaan kami. Kami sangat menghargai waktu dan usaha yang Anda curahkan selama proses ini berlangsung.
                    Melalui halaman ini, Anda dapat mengecek status akhir dari lamaran Anda. Hasil seleksi akan menunjukkan apakah Anda:
                    <br>
                    <span class="text-success fw-semibold">✔ Dinyatakan Diterima</span> — artinya Anda lolos seluruh tahapan seleksi dan akan melanjutkan ke proses onboarding, atau
                    <br>
                    <span class="text-danger fw-semibold">✘ Dinyatakan Tidak Lolos</span> — artinya Anda belum berhasil pada kesempatan ini, namun kami tetap mengundang Anda untuk mencoba kembali di masa mendatang.
                <p class="fs-15 fw-semibold mb-3 text-justify">
                    Informasi status seleksi Anda bersifat final dan telah melalui proses evaluasi dari tim HRD berdasarkan berbagai kriteria seperti hasil tes, wawancara, dan kelengkapan dokumen.
                     Jika Anda dinyatakan <span class="text-success fw-semibold">diterima</span>, maka informasi lanjutan terkait jadwal, lokasi akan muncul di hasil. Jika belum lolos, jangan berkecil hati — kami sangat mengapresiasi antusiasme Anda dan menyimpan data Anda untuk kemungkinan kesempatan lain yang sesuai.
                </p>
                <p class="fs-15 mb-4 text-center" >
                    Silakan klik <a href="{{ route('hasil.pelamar') }}"><span class="text-info fw-semibold">"hasil seleksi"</span></a> untuk menuju ke halaman pengecekan status Anda.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
