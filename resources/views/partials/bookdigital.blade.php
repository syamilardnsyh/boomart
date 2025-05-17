@extends('layouts.master')
@section('title')
    Book Digital
@endsection
@section('content')
<h2> Book Digital</h2>
<body>
    <div class="container overflow-auto">
    <div class="row flex-nowrap">
        <div class="col-md-auto mb-3 me-3">
            <div class="card" style="width: 12rem;">
                <img src="{{asset('template/assets/img/cantikituluka.jpg')}}" class="card-img-top" alt="Kemeja Putih Pendek">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 0.9rem;">Cantik Itu Luka</h5>
                    <p class="card-text" style="font-size: 0.8rem;">Di satu sore, seorang perempuan bangkit dari kuburannya setelah dua puluh satu tahun kematian. Kebangkitannya menguak kutukan dan tragedi keluarga, yang terentang sejak akhir masa kolonial perpaduan antara epik keluarga yang dibalut roman, kisah hantu, kekejaman politik, mitologi, dan petualangan. Dari kekasih yang lenyap ditelan kabut hingga seorang ibu yang menginginkan bayi buruk rupa.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-muted">&#9734;</span>
                            <span class="text-muted" style="font-size: 0.7rem;">(15)</span>
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
                <img src="{{asset('template/assets/img/filosofi.jpg')}}" class="card-img-top" alt="Kemeja Hitam Panjang">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 0.9rem;">Filosofi Teras</h5>
                    <p class="card-text" style="font-size: 0.8rem;">Lebih dari 2.000 tahun lalu, sebuah mazhab filsafat menemukan akar masalah dan juga solusi dari banyak emosi negatif. Stoisisme, atau Filosofi Teras, adalah filsafat Yunani-Romawi kuno yang bisa membantu kita mengatasi emosi negatif dan menghasilkan mental yang tangguh dalam menghadapi naik-turunnya kehidupan. Jauh dari kesan filsafat sebagai topik berat dan mengawang-awang, Filosofi Teras justru bersifat praktis dan relevan dengan kehidupan Generasi Milenial dan Gen-Z masa kini.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-muted" style="font-size: 0.7rem;">(28)</span>
                        </div>
                        <h6 class="card-subtitle mb-2 text-primary">Rp80.000</h6>
                    </div>
                    <a href="#" class="btn btn-sm btn-outline-primary mt-2 bi bi-cart4">Keranjang</a>
                    <a href="#" class="btn btn-sm btn-outline-primary mt-2">Beli Sekarang</a>
                </div>
            </div>
        </div>
        <div class="col-md-auto mb-3 me-3">
            <div class="card" style="width: 12rem;">
                <img src="{{asset('template/assets/img/sisigelap.jpg')}}" class="card-img-top" alt="Celana Pendek Army">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 0.9rem;">Sisi Tergelap Surga</h5>
                    <p class="card-text" style="font-size: 0.8rem;">Pemulung, pengamen, pramuria yang menjajakan tubuh agar anaknya bisa makan, pemimpin-pemimpin kecil yang culas, lelaki tua di balik kostum badut ayam, pencuri motor yang ingin membeli obat untuk ibunya, remaja yang melumuri tubuh dengan cat perak, hingga mereka yang bergelut di terminal setelah terpaksa merelakan impiannya habis digerus kejinya ibu kota.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-muted">&#9734;</span>
                            <span class="text-muted">&#9734;</span>
                            <span class="text-muted" style="font-size: 0.7rem;">(8)</span>
                        </div>
                        <h6 class="card-subtitle mb-2 text-primary">Rp90.000</h6>
                    </div>
                    <a href="#" class="btn btn-sm btn-outline-primary mt-2 bi bi-cart4">Keranjang</a>
                    <a href="#" class="btn btn-sm btn-outline-primary mt-2">Beli Sekarang</a>
                </div>
            </div>
        </div>
        <div class="col-md-auto mb-3 me-3">
            <div class="card" style="width: 12rem;">
                <img src="{{asset('template/assets/img/beranitidak.jpg')}}" class="card-img-top" alt="Produk 4">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 0.9rem;">Berani Tidak Disukai</h5>
                    <p class="card-text" style="font-size: 0.8rem;">Apakah kebahagiaan adalah sesuatu yang Anda pilih?
Berani Tidak Disukai menyajikan jawabannya secara sederhana dan langsung. Berdasarkan teori Alfred Adler, satu dari tiga psikolog terkemuka abad kesembilan belas selain Freud dan Jung, buku ini mengikuti percakapan yang menggugah antara seorang filsuf dan seorang pemuda. Dalam lima percakapan yang terjalin, sang filsuf membantu muridnya memahami bagaimana masing-masing dari kita mampu menentukan arah hidup kita, bebas dari belenggu trauma masa lalu dan beban ekspektasi orang lain.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-muted">&#9734;</span>
                            <span class="text-muted" style="font-size: 0.7rem;">(22)</span>
                        </div>
                        <h6 class="card-subtitle mb-2 text-primary">Rp110.000</h6>
                    </div>
                    <a href="#" class="btn btn-sm btn-outline-primary mt-2 bi bi-cart4">Keranjang</a>
                    <a href="#" class="btn btn-sm btn-outline-primary mt-2">Beli Sekarang</a>
                </div>
            </div>
        </div>
        <div class="col-md-auto mb-3 me-3">
            <div class="card" style="width: 12rem;">
                <img src="{{asset('template/assets/img/poppy.jpg')}}" class="card-img-top" alt="Produk 5">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 0.9rem;">Perang Opium (The Poppy War)</h5>
                    <p class="card-text" style="font-size: 0.8rem;">Karena dianggap anak kampung miskin, Rin jadi bulan-bulanan. Apalagi karena ia perempuan. Dalam keadaan putus asa, Rin mendapati dirinya ternyata memiliki kekuatan supernatural yang mematikan—syamanisme. Di bawah bimbingan guru yang dianggap gila, Rin jadi tahu bahwa dewa-dewa yang selama ini dikira mati, ternyata masih hidup.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-warning">&#9733;</span>
                            <span class="text-muted" style="font-size: 0.7rem;">(35)</span>
                        </div>
                        <h6 class="card-subtitle mb-2 text-primary">R140.000</h6>
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