@extends('layouts.master')
@section('title')
    Dashboard
@endsection
@section('content')

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if (session('danger'))
<div class="alert alert-danger">
    {{ session('danger') }}
</div>
@endif

@auth
<h2> Selamat Datang {{Auth()->user()->name}} </h2>
@endauth
<body>
  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner rounded-4">
        <div class="carousel-item active">
            <img src="{{asset('template/assets/img/banner-ebook.e479d2f9.jpg')}}" class="d-block w-100" alt="slider image 1">
        </div>
        <div class="carousel-item">
            <img src="{{asset('template/assets/img/tokped.jpeg')}}" class="d-block w-100" alt="slider image 2">
        </div>
        <div class="carousel-item">
            <img src="{{asset('template/assets/img/brand.jpeg')}}" class="d-block w-100" alt="slider image 3">
        </div>
        <div class="carousel-item">
            <img src="{{asset('template/assets/img/penawaran.jpeg')}}" class="d-block w-100" alt="slider image 3">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="relative mx-auto mb-4 flex items-center justify-betweeen" data-testid="productSliderBannerBestSellerBookTitleContainer">
    <span class="max-w-[90%] truncate text-neutral-800 text-2xl-extrabold" data-testid="productSliderBannerBestSellerBookTitle">Buku Favorite</span>
</div>
<div class="container overflow-auto">
    <div class="row flex-nowrap">
        <div class="col-md-auto mb-3 me-3">
            <div class="card" style="width: 12rem;">
                <img src="{{asset('template/assets/img/95ob4.jpg')}}" class="card-img-top" alt="Kemeja Putih Pendek">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 0.9rem;">Seporsi Mie Ayam Sebelum Mati</h5>
                    <p class="card-text" style="font-size: 0.8rem;">Ale, seorang pria berusia 37 tahun memiliki tinggi badan 189 cm dan berat 138 kg. Badannya bongsor, berkulit hitam, dan memiliki masalah dengan bau badan. Sejak kecil, Ale hidup di lingkungan keluarga yang tidak mendukungnya.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-muted">&#9734;</span>
                            <span class="text-muted" style="font-size: 0.7rem;">(15)</span>
                        </div>
                        <h6 class="card-subtitle mb-2 text-primary">Rp93.000</h6>
                    </div>
                    <a href="#" class="btn btn-sm btn-outline-primary mt-2 bi bi-cart4">Keranjang</a>
                    <a href="#" class="btn btn-sm btn-outline-primary mt-2">Beli Sekarang</a>
                </div>
            </div>
        </div>
        <div class="col-md-auto mb-3 me-3">
            <div class="card" style="width: 12rem;">
                <img src="{{asset('template/assets/img/9786.jpg')}}" class="card-img-top" alt="Kemeja Hitam Panjang">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 0.9rem;">Laut Bercerita</h5>
                    <p class="card-text" style="font-size: 0.8rem;">Buku ini terdiri atas dua bagian. Bagian pertama mengambil sudut pandang seorang mahasiswa aktivis bernama Laut, menceritakan bagaimana Laut dan kawan-kawannya menyusun rencana, berpindah-pindah dalam pelarian, hingga tertangkap oleh pasukan rahasia.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-muted" style="font-size: 0.7rem;">(28)</span>
                        </div>
                        <h6 class="card-subtitle mb-2 text-primary">Rp115.000</h6>
                    </div>
                    <a href="#" class="btn btn-sm btn-outline-primary mt-2 bi bi-cart4">Keranjang</a>
                    <a href="#" class="btn btn-sm btn-outline-primary mt-2">Beli Sekarang</a>
                </div>
            </div>
        </div>
        <div class="col-md-auto mb-3 me-3">
            <div class="card" style="width: 12rem;">
                <img src="{{asset('template/assets/img/978602.jpg')}}" class="card-img-top" alt="Celana Pendek Army">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 0.9rem;">Atomic Habits: Perubahan Kecil yang Memberikan Hasil Luar Biasa</h5>
                    <p class="card-text" style="font-size: 0.8rem;">TAtomic Habits: Perubahan Kecil yang Memberikan Hasil Luar Biasa adalah buku kategori self improvement karya James Clear.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-muted">&#9734;</span>
                            <span class="text-muted">&#9734;</span>
                            <span class="text-muted" style="font-size: 0.7rem;">(8)</span>
                        </div>
                        <h6 class="card-subtitle mb-2 text-primary">Rp100.000</h6>
                    </div>
                    <a href="#" class="btn btn-sm btn-outline-primary mt-2 bi bi-cart4">Keranjang</a>
                    <a href="#" class="btn btn-sm btn-outline-primary mt-2">Beli Sekarang</a>
                </div>
            </div>
        </div>
        <div class="col-md-auto mb-3 me-3">
            <div class="card" style="width: 12rem;">
                <img src="{{asset('template/assets/img/6455tc2409.jpg')}}" class="card-img-top" alt="Produk 4">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 0.9rem;">Satine</h5>
                    <p class="card-text" style="font-size: 0.8rem;">Deskripsi singkat untuk produk ini.“I just need a proper date.” “Saya cuma butuh teman bicara.” Ada yang bilang hidup yang tertata sempurna ibarat makanan yang dikemas rapi. Semuanya tersusun pada tempatnya, cantik.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-muted">&#9734;</span>
                            <span class="text-muted" style="font-size: 0.7rem;">(22)</span>
                        </div>
                        <h6 class="card-subtitle mb-2 text-primary">Rp100.000</h6>
                    </div>
                    <a href="#" class="btn btn-sm btn-outline-primary mt-2 bi bi-cart4">Keranjang</a>
                    <a href="#" class="btn btn-sm btn-outline-primary mt-2">Beli Sekarang</a>
                </div>
            </div>
        </div>
        <div class="col-md-auto mb-3 me-3">
            <div class="card" style="width: 12rem;">
                <img src="{{asset('template/assets/img/uzumaki.jpg')}}" class="card-img-top" alt="Produk 5">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 0.9rem;">PAKASHA : Uzumaki</h5>
                    <p class="card-text" style="font-size: 0.8rem;">Uzumaki, atau yang dalam bahasa Jepang memiliki arti spiral merupakan salah satu serial manga dengan genre horor seinen yang dibuat dan diilustrasikan oleh Junji Ito.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-muted" style="font-size: 0.7rem;">(35)</span>
                        </div>
                        <h6 class="card-subtitle mb-2 text-primary">Rp96.500</h6>
                    </div>
                    <a href="#" class="btn btn-sm btn-outline-primary mt-2 bi bi-cart4">Keranjang</a>
                    <a href="#" class="btn btn-sm btn-outline-primary mt-2">Beli Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
@endsection