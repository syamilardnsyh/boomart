@extends('layouts.master')
@section('title')
    Mainan & Hobby
@endsection
@section('content')
<h3 style="text-align:center; background-color:green"> Mainan & Hobby </h3>
<body>
    <div class="container overflow-auto">
    <div class="row flex-nowrap">
        <div class="col-md-auto mb-3 me-3">
            <div class="card" style="width: 12rem;">
                <img src="{{asset('template/assets/img/bubukapi.jpg')}}" class="card-img-top" alt="Kemeja Putih Pendek">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 0.9rem;">Bubuk Api Warna Warni Sulap Magic Trick Fire Flame Powder 15g</h5>
                    <p class="card-text" style="font-size: 0.8rem;">Buat tampilan api unggun menjadi lebih menarik dengan mengubah warna api menjadi warna-warni secara instan menggunakan bubuk api ini. Cukup dengan menaburkan bubuk api ini ke dalam api unggun. Dalam waktu singkat, api akan berubah warnanya menjadi warna-warni. Bubuk api ini bisa juga digunakan sebagai properti sulap untuk memukau keluarga atau teman-teman Anda dengan mengubah warna api menjadi warna yang unik dan tidak umum.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-muted">&#9734;</span>
                            <span class="text-muted" style="font-size: 0.7rem;">(15)</span>
                        </div>
                        <h6 class="card-subtitle mb-2 text-primary">Rp10.000</h6>
                    </div>
                    <a href="#" class="btn btn-sm btn-outline-primary mt-2 bi bi-cart4">Keranjang</a>
                    <a href="#" class="btn btn-sm btn-outline-primary mt-2">Beli Sekarang</a>
                </div>
            </div>
        </div>
        <div class="col-md-auto mb-3 me-3">
            <div class="card" style="width: 12rem;">
                <img src="{{asset('template/assets/img/rubik.jpg')}}" class="card-img-top" alt="Kemeja Hitam Panjang">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 0.9rem;">Magic Cube Rubik Puzzle New Style 3x3x3 - BY-168</h5>
                    <p class="card-text" style="font-size: 0.8rem;">Rubik cube merupakan permainan tangan mekanik yang sangat cocok bagi Anda yang ingin menguji kemampuan logika dan kesabaran. Hadir dengan desain yang menarik, simpel, dan portabel, sehingga memudahkan Anda membawanya ke mana saja.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-muted" style="font-size: 0.7rem;">(28)</span>
                        </div>
                        <h6 class="card-subtitle mb-2 text-primary">Rp20.000</h6>
                    </div>
                    <a href="#" class="btn btn-sm btn-outline-primary mt-2 bi bi-cart4">Keranjang</a>
                    <a href="#" class="btn btn-sm btn-outline-primary mt-2">Beli Sekarang</a>
                </div>
            </div>
        </div>
        <div class="col-md-auto mb-3 me-3">
            <div class="card" style="width: 12rem;">
                <img src="{{asset('template/assets/img/kartu.jpg')}}" class="card-img-top" alt="Celana Pendek Army">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 0.9rem;">Black Diamond Kartu Poker Remi Plastik Waterproof - K8356</h5>
                    <p class="card-text" style="font-size: 0.8rem;">Kartu remi yang terbuat dari material plastik PVC yang lentur sehingga tahan air dan tidak akan mudah rusak. Cocok untuk dimainkan bersama teman-teman Anda saat sedang kumpul bersama.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-muted">&#9734;</span>
                            <span class="text-muted">&#9734;</span>
                            <span class="text-muted" style="font-size: 0.7rem;">(8)</span>
                        </div>
                        <h6 class="card-subtitle mb-2 text-primary">Rp24.000</h6>
                    </div>
                    <a href="#" class="btn btn-sm btn-outline-primary mt-2 bi bi-cart4">Keranjang</a>
                    <a href="#" class="btn btn-sm btn-outline-primary mt-2">Beli Sekarang</a>
                </div>
            </div>
        </div>
        <div class="col-md-auto mb-3 me-3">
            <div class="card" style="width: 12rem;">
                <img src="{{asset('template/assets/img/crazy.jpg')}}" class="card-img-top" alt="Produk 4">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 0.9rem;">HAIZHOU Crazy Pirates Roulette Lucky Barrel Running Man Game - YF555</h5>
                    <p class="card-text" style="font-size: 0.8rem;">Permainan pirate roulette ini sangat cocok dimainkan bersama keluarga dan teman-teman Anda. Cara bermainnya dengan menusuk pisau ke tong bajak laut. Jika salah menusuk, maka bajak laut akan lompat keluar memberi sensasi kaget dan keseruan pada permainan ini. Game pirate roulette ini juga pernah muncul pada game show acara Running Man dari Korea.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-muted">&#9734;</span>
                            <span class="text-muted" style="font-size: 0.7rem;">(22)</span>
                        </div>
                        <h6 class="card-subtitle mb-2 text-primary">Rp97.000</h6>
                    </div>
                    <a href="#" class="btn btn-sm btn-outline-primary mt-2 bi bi-cart4">Keranjang</a>
                    <a href="#" class="btn btn-sm btn-outline-primary mt-2">Beli Sekarang</a>
                </div>
            </div>
        </div>
        <div class="col-md-auto mb-3 me-3">
            <div class="card" style="width: 12rem;">
                <img src="{{asset('template/assets/img/pedang.jpg')}}" class="card-img-top" alt="Produk 5">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 0.9rem;">Pedang Mainan Double Bladed Lightsaber Star Wars - 693</h5>
                    <p class="card-text" style="font-size: 0.8rem;">edang mainan ini merupakan pedang tiruan dari serial film populer Star Wars. Terdapat dua buah bilah pedang mainan, yang dapat disatukan dengan satu pegangan di bagian tengah. Pedang mainan ini cocok untuk anak Anda yang menyukai permainan pedang-pedangan.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-muted" style="font-size: 0.7rem;">(35)</span>
                        </div>
                        <h6 class="card-subtitle mb-2 text-primary">R88.000</h6>
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