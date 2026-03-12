@extends('layouts.app')

@section('title', 'Home - LaunchPage Studio')

@section('content')
    <div class="p-5 mb-5 bg-primary text-white rounded-3 text-center shadow">
        <h1 class="display-4 fw-bold">LaunchPage Studio</h1>
        <p class="col-md-8 mx-auto fs-5 mt-3">Mitra Digital Terbaik untuk UMKM Lokal. Kami merancang website dan aplikasi modern untuk melesatkan bisnis Anda ke level selanjutnya.</p>
        <a href="/contact" class="btn btn-light btn-lg mt-3 fw-bold text-primary">Mulai Proyek Anda</a>
    </div>

    <div class="container mb-5">
        <h2 class="text-center mb-4 fw-bold">Layanan Kami</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 bg-light">
                    <div class="card-body text-center p-4">
                        <h4 class="card-title fw-bold text-primary">Landing Page UMKM</h4>
                        <p class="card-text text-muted">Desain website responsif dan menarik untuk menampilkan produk unggulan bisnis Anda secara profesional.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 bg-light">
                    <div class="card-body text-center p-4">
                        <h4 class="card-title fw-bold text-primary">Web Development</h4>
                        <p class="card-text text-muted">Sistem backend yang kuat dan aman menggunakan framework Laravel untuk manajemen bisnis yang efisien.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 bg-light">
                    <div class="card-body text-center p-4">
                        <h4 class="card-title fw-bold text-primary">Mobile Apps</h4>
                        <p class="card-text text-muted">Pembuatan aplikasi Android & iOS berkinerja tinggi menggunakan Flutter untuk menjangkau lebih banyak pelanggan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5 p-5 bg-white rounded-3 shadow-sm border">
        <h2 class="text-center mb-4 fw-bold">Mengapa Memilih Kami?</h2>
        <div class="row align-items-center">
            <div class="col-md-6">
                <ul class="list-group list-group-flush fs-5">
                    <li class="list-group-item border-0">✅ Desain Modern & User-Friendly</li>
                    <li class="list-group-item border-0">✅ Performa Cepat & SEO Optimized</li>
                    <li class="list-group-item border-0">✅ Harga Terjangkau untuk UMKM</li>
                    <li class="list-group-item border-0">✅ Dukungan Teknis Penuh</li>
                </ul>
            </div>
            <div class="col-md-6 text-center">
                <p class="text-muted fs-5">Kami tidak hanya membuat website, kami membangun jembatan digital antara bisnis Anda dan ribuan calon pelanggan di luar sana.</p>
            </div>
        </div>
    </div>
@endsection