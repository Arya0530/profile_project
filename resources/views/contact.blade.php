@extends('layouts.app')

@section('title', 'Contact - LaunchPage Studio')

@section('content')
    <div class="container">
        <div class="text-center mb-5 mt-4">
            <h1 class="fw-bold">Hubungi Kami</h1>
            <p class="text-muted lead">Punya ide brilian? Mari wujudkan bersama.</p>
        </div>

        <div class="row g-5 mb-5">
            <div class="col-md-7">
                <div class="card shadow-sm border-0 p-4">
                    <h3 class="fw-bold mb-4">Kirim Pesan</h3>
                    <form>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Masukkan nama Anda">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Alamat Email</label>
                            <input type="email" class="form-control" placeholder="nama@email.com">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Jenis Layanan</label>
                            <select class="form-select">
                                <option>Pilih layanan...</option>
                                <option>Pembuatan Landing Page</option>
                                <option>Pembuatan Aplikasi Mobile</option>
                                <option>Konsultasi IT</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label fw-bold">Detail Proyek / Pesan</label>
                            <textarea class="form-control" rows="5" placeholder="Ceritakan detail kebutuhan bisnis Anda..."></textarea>
                        </div>
                        <button type="button" class="btn btn-primary btn-lg w-100 fw-bold">Kirim Pesan Sekarang</button>
                    </form>
                </div>
            </div>

            <div class="col-md-5">
                <div class="bg-light p-4 rounded-3 mb-4">
                    <h4 class="fw-bold">Informasi Kontak</h4>
                    <ul class="list-unstyled mt-3 fs-5 text-muted">
                        <li class="mb-2">📍 <strong>Kantor Pusat:</strong> Jl. Panglima Sudirman, Lamongan, Jawa Timur</li>
                        <li class="mb-2">📧 <strong>Email:</strong> hello@launchpagestudio.com</li>
                        <li class="mb-2">📞 <strong>Telepon/WA:</strong> +62 812-3456-7890</li>
                        <li class="mb-2">⏰ <strong>Jam Kerja:</strong> Senin - Jumat (08:00 - 17:00 WIB)</li>
                    </ul>
                </div>

                <div class="bg-white border p-4 rounded-3 shadow-sm">
                    <h4 class="fw-bold border-bottom pb-2">FAQ (Tanya Jawab)</h4>
                    <div class="mt-3">
                        <p class="fw-bold mb-1">Berapa lama proses pembuatannya?</p>
                        <p class="text-muted small mb-3">Tergantung kerumitan fitur, biasanya memakan waktu 1 hingga 3 minggu untuk landing page standar.</p>
                        
                        <p class="fw-bold mb-1">Apakah ada biaya bulanan?</p>
                        <p class="text-muted small mb-0">Kami menyediakan opsi sekali bayar untuk sistem dasar, dan langganan tahunan hanya untuk domain dan server hosting.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection