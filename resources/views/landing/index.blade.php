@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div>
        <!-- ***home banner html start form here*** -->
        <section id="home" class="home-banner-section home-banner-slider">
            <div class="home-banner d-flex flex-wrap align-items-center"
                style="background-image: url(asset/images/banner-img1.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="banner-content text-center">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <h2 class="banner-title">JELAJAHI DUNIA BERSAMA KAMI</h2>
                                <p>Temukan pengalaman wisata terbaik, destinasi menarik, dan petualangan seru untuk Anda dan keluarga.</p>
                                <div class="banner-btn">
                                    <a href="about.html" class="round-btn">SELENGKAPNYA</a>
                                    <a href="booking.html" class="outline-btn outline-btn-white">PESAN SEKARANG</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-banner d-flex flex-wrap align-items-center" style="background-image: url(asset/images/2.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="banner-content text-center">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <h2 class="banner-title">TEMPAT INDAH UNTUK DIKUNJUNGI</h2>
                                <p>Jelajahi destinasi wisata favorit, ciptakan momen tak terlupakan bersama orang tercinta.</p>
                                <div class="banner-btn">
                                    <a href="about.html" class="round-btn">SELENGKAPNYA</a>
                                    <a href="booking.html" class="outline-btn outline-btn-white">PESAN SEKARANG</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***home banner html end here*** -->
        <!-- ***Home destination html start from here*** -->
        <section id="destination" class="home-destination">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-sm-center">
                        <div class="section-heading">
                            <h5 class="sub-title">DESTINASI PILIHAN</h5>
                            <h2 class="section-title">DESTINASI POPULER</h2>
                            <p>Temukan berbagai destinasi wisata favorit yang siap memberikan pengalaman tak terlupakan.</p>
                        </div>
                    </div>
                </div>
                <div class="destination-section">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <article class="destination-item" style="background-image: url(asset/images/1.png);">
                                <div class="destination-content">
                                    <div class="rating-start-wrap">
                                        <div class="rating-start">
                                            <span style="width: 100%"></span>
                                        </div>
                                    </div>
                                    <span class="cat-link">
                                    <a href="destination.html">JAKARTA</a>
                                    </span>
                                    <h3>
                                        <a href="package-detail.html">DUFAN</a>
                                    </h3>
                                    <p>Liburan seru ke Dufan, Jakarta. Nikmati wahana dan hiburan keluarga.</p>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <article class="destination-item" style="background-image: url(asset/images/2.png);">
                                <div class="destination-content">
                                    <div class="rating-start-wrap">
                                        <div class="rating-start">
                                            <span style="width: 100%"></span>
                                        </div>
                                    </div>
                                    <span class="cat-link">
                                    <a href="destination.html">SINGAPURA - MALAYSIA</a>
                                    </span>
                                    <h3>
                                        <a href="package-detail.html">MERLION PARK</a>
                                    </h3>
                                    <p>Wisata edukasi dan liburan ke Singapura & Malaysia.</p>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <article class="destination-item" style="background-image: url(asset/images/3.png);">
                                <div class="destination-content">
                                    <div class="rating-start-wrap">
                                        <div class="rating-start">
                                            <span style="width: 100%"></span>
                                        </div>
                                    </div>
                                    <span class="cat-link">
                                    <a href="destination.html">YOGYAKARTA</a>
                                    </span>
                                    <h3>
                                        <a href="package-detail.html">MALIOBORO</a>
                                    </h3>
                                    <p>Liburan akhir pekan ke Malioboro, Yogyakarta.</p>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="section-btn-wrap text-center">
                        <a href="destination.html" class="round-btn">Lihat Semua Destinasi</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***Home destination html end here*** -->
        <!-- ***Home package html start from here*** -->
        <section id="package" class="home-package">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-sm-center">
                        <div class="section-heading">
                            <h5 class="sub-title">PAKET TERPOPULER</h5>
                            <h2 class="section-title">CEK PAKET WISATA KAMI</h2>
                            <p>Pilih paket wisata terbaik sesuai kebutuhan Anda, mulai dari wisata keluarga hingga petualangan seru.</p>
                        </div>
                    </div>
                </div>
                <div class="package-section">
                    <article class="package-item">
                        <figure class="package-image" style="background-image: url(asset/images/1.png);">
                        </figure>
                        <div class="package-content">
                            <h3>
                                <a href="package-detail.html">
                                    Dufan
                                </a>
                            </h3>
                            <p>Liburan seru ke Dufan, Jakarta. Nikmati wahana dan hiburan keluarga.</p>
                            <div class="package-meta">
                                <ul>
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        7 Hari
                                    </li>
                                    <li>
                                        <i class="fas fa-user-friends"></i>
                                        Peserta: 10
                                    </li>
                                    <li>
                                        <i class="fas fa-map-marker-alt"></i>
                                        Jakarta
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="package-price">
                            <div class="review-area">
                                <span class="review-text">(25 ulasan)</span>
                                <div class="rating-start-wrap d-inline-block">
                                    <div class="rating-start">
                                        <span style="width: 80%"></span>
                                    </div>
                                </div>
                            </div>
                            <h6 class="price-list">
                                <span>Rp 1,2 Jt</span>
                                / per orang
                            </h6>
                            <a href="booking.html" class="outline-btn outline-btn-white">Pesan Sekarang</a>
                        </div>
                    </article>
                    <article class="package-item">
                        <figure class="package-image" style="background-image: url(asset/images/2.png);">
                        </figure>
                        <div class="package-content">
                            <h3>
                                <a href="package-detail.html">
                                    MERLION PARK - TWIN TOWER
                                </a>
                            </h3>
                            <p>Liburan musim panas & edukasi ke Singapura - Malaysia</p>
                            <div class="package-meta">
                                <ul>
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        5 Hari
                                    </li>
                                    <li>
                                        <i class="fas fa-user-friends"></i>
                                        Peserta: 10
                                    </li>
                                    <li>
                                        <i class="fas fa-map-marker-alt"></i>
                                        Singapura, Malaysia
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="package-price">
                            <div class="review-area">
                                <span class="review-text">(12 ulasan)</span>
                                <div class="rating-start-wrap d-inline-block">
                                    <div class="rating-start">
                                        <span style="width: 80%"></span>
                                    </div>
                                </div>
                            </div>
                            <h6 class="price-list">
                                <span>Rp 7,8 Jt</span>
                                / per orang
                            </h6>
                            <a href="booking.html" class="outline-btn outline-btn-white">Pesan Sekarang</a>
                        </div>
                    </article>
                    <article class="package-item">
                        <figure class="package-image" style="background-image: url(asset/images/3.png);">
                        </figure>
                        <div class="package-content">
                            <h3>
                                <a href="package-detail.html">
                                    MALIOBORO
                                </a>
                            </h3>
                            <p>Liburan akhir pekan ke Malioboro, Yogyakarta.</p>
                            <div class="package-meta">
                                <ul>
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        6 Hari
                                    </li>
                                    <li>
                                        <i class="fas fa-user-friends"></i>
                                        Peserta: 10
                                    </li>
                                    <li>
                                        <i class="fas fa-map-marker-alt"></i>
                                        Yogyakarta
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="package-price">
                            <div class="review-area">
                                <span class="review-text">(43 ulasan)</span>
                                <div class="rating-start-wrap d-inline-block">
                                    <div class="rating-start">
                                        <span style="width: 80%"></span>
                                    </div>
                                </div>
                            </div>
                            <h6 class="price-list">
                                <span>Rp 650rb</span>
                                / per orang
                            </h6>
                            <a href="booking.html" class="outline-btn outline-btn-white">Pesan Sekarang</a>
                        </div>
                    </article>
                    <div class="section-btn-wrap text-center">
                        <a href="package.html" class="round-btn">Lihat Semua Paket</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***Home package html end here*** -->
        <!-- ***Home callback html start from here*** -->
        <section class="home-callback bg-img-fullcallback" style="background-image: url(asset/images/2.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="callback-content">
                            <div class="video-button">
                                <a id="video-container" data-fancybox="video-gallery"
                                    href="https://www.youtube.com/watch?v=2OYar8OHEOU">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                            <h2 class="section-title">Siap Berpetualang? Percayakan Perjalananmu pada Kami!</h2>
                            <p>Rencanakan liburan impian Anda bersama kami. Nikmati kemudahan, kenyamanan, dan pengalaman tak terlupakan di setiap perjalanan.</p>
                            <div class="callback-btn">
                                <a href="package.html" class="round-btn">Lihat Paket</a>
                                <a href="about.html" class="outline-btn outline-btn-white">Tentang Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***Home callback html end here*** -->
        <!-- ***Home counter html start from here*** -->
        <div class="home-counter">
            <div class="container">
                <div class="counter-wrap">
                    <div class="counter-item">
                        <span class="counter-no">
                            <span class="counter">80</span>K+
                        </span>
                        <span class="counter-desc">
                            Pelanggan Puas
                        </span>
                    </div>
                    <div class="counter-item">
                        <span class="counter-no">
                            <span class="counter">18</span>+
                        </span>
                        <span class="counter-desc">
                            Member Aktif
                        </span>
                    </div>
                    <div class="counter-item">
                        <span class="counter-no">
                            <span class="counter">220</span>+
                        </span>
                        <span class="counter-desc">
                            Destinasi Wisata
                        </span>
                    </div>
                    <div class="counter-item">
                        <span class="counter-no">
                            <span class="counter">75</span>+
                        </span>
                        <span class="counter-desc">
                            Pemandu Wisata
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***Home counter html end here*** -->
        <!-- ***Home offer html start from here*** -->
        <section id="offer" class="home-offer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-sm-center">
                        <div class="section-heading">
                            <h5 class="sub-title">PROMO & DISKON</h5>
                            <h2 class="section-title">PAKET SPESIAL KAMI</h2>
                            <p>Dapatkan promo menarik dan diskon spesial untuk paket wisata pilihan.</p>
                        </div>
                    </div>
                </div>
                <div class="offer-section">
                    <div class="row">
                        <div class="col-md-6">
                            <article class="offer-item" style="background-image: url(asset/images/1.png);">
                                <div class="offer-badge">
                                    HEMAT <span>25%</span>
                                </div>
                                <div class="offer-content">
                                    <div class="package-meta">
                                        <ul>
                                            <li>
                                                <i class="fas fa-clock"></i>
                                                7 Hari
                                            </li>
                                            <li>
                                                <i class="fas fa-user-friends"></i>
                                                Peserta: 10
                                            </li>
                                            <li>
                                                <i class="fas fa-map-marker-alt"></i>
                                                Jakarta
                                            </li>
                                        </ul>
                                    </div>
                                    <h3>
                                    <a href="package.html">WISATA JAKARTA</a>
                                    </h3>
                                    <p>
                                        Liburan seru ke Dufan, Jakarta. Nikmati wahana dan hiburan keluarga.
                                    </p>
                                    <div class="price-list">
                                    harga:
                                    <del>Rp 1,5 Jt </del>
                                    <ins>Rp 1,2 Jt</ins>
                                    </div>
                                    <a href="booking.html" class="round-btn">Pesan Sekarang</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6">
                            <article class="offer-item" style="background-image: url(asset/images/3.png);">
                                <div class="offer-badge">
                                    HEMAT <span>17%</span>
                                </div>
                                <div class="offer-content">
                                    <div class="package-meta">
                                        <ul>
                                            <li>
                                                <i class="fas fa-clock"></i>
                                                5 Hari
                                            </li>
                                            <li>
                                                <i class="fas fa-user-friends"></i>
                                                Peserta: 10
                                            </li>
                                            <li>
                                                <i class="fas fa-map-marker-alt"></i>
                                                Yogyakarta
                                            </li>
                                        </ul>
                                    </div>
                                    <h3>
                                    <a href="package.html">AKHIR PEKAN DI YOGYAKARTA</a>
                                    </h3>
                                    <p>
                                        Liburan akhir pekan ke Malioboro, Yogyakarta.
                                    </p>
                                    <div class="price-list">
                                    harga:
                                    <del>Rp 950rb </del>
                                    <ins>Rp 650rb</ins>
                                    </div>
                                    <a href="booking.html" class="round-btn">Pesan Sekarang</a>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="section-btn-wrap text-center">
                        <a href="package-offer.html" class="round-btn">Lihat Semua Paket</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***Home offer html end here*** -->
        <!-- ***Home gallery html start from here*** -->
        <section id="gallery" class="home-gallery">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-sm-center">
                        <div class="section-heading">
                            <h5 class="sub-title">GALERI FOTO</h5>
                            <h2 class="section-title">FOTO DARI PELANCONG</h2>
                            <p>Kumpulan foto perjalanan dan momen seru dari para pelanggan kami.</p>
                        </div>
                    </div>
                </div>
                <div class="gallery-section">
                    <div class="gallery-container grid">
                        <div class="single-gallery grid-item">
                            <figure class="gallery-img">
                                <a href="asset/images/1.jpg" data-fancybox="gallery">
                                    <img src="asset/images/1.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="single-gallery grid-item">
                            <figure class="gallery-img">
                                <a href="asset/images/2.jpg" data-fancybox="gallery">
                                    <img src="asset/images/2.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="single-gallery grid-item">
                            <figure class="gallery-img">
                                <a href="asset/images/3.jpg" data-fancybox="gallery">
                                    <img src="asset/images/3.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="single-gallery grid-item">
                            <figure class="gallery-img">
                                <a href="asset/images/4.jpg" data-fancybox="gallery">
                                    <img src="asset/images/4.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="single-gallery grid-item">
                            <figure class="gallery-img">
                                <a href="asset/images/5.jpg" data-fancybox="gallery">
                                    <img src="asset/images/5.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="single-gallery grid-item">
                            <figure class="gallery-img">
                                <a href="asset/images/6.jpg" data-fancybox="gallery">
                                    <img src="asset/images/6.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***Home gallery html end here*** -->
        <!-- ***Home testimonial html start from here*** -->
        <section id="testimonial" class="home-testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="section-heading">
                            <h5 class="sub-title">ULASAN PELANGGAN</h5>
                            <h2 class="section-title">TESTIMONI TRAVELLER</h2>
                            <p>Simak pengalaman seru dan kepuasan pelanggan yang telah berwisata bersama kami.</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-section testimonial-slider">
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <div class="rating-start-wrap">
                                <div class="rating-start">
                                    <span style="width: 95%"></span>
                                </div>
                            </div>
                            <p>Pelayanan ramah, perjalanan sangat menyenangkan! Saya dan keluarga sangat puas dengan paket wisata yang ditawarkan.</p>
                            <div class="author-content">
                                <figure class="testimonial-img">
                                    <img src="asset/images/img18.jpg" alt="">
                                </figure>
                                <div class="author-name">
                                    <h5>Budi Santoso</h5>
                                    <span>Wiraswasta</span>
                                </div>
                            </div>
                            <div class="testimonial-icon">
                                <i aria-hidden="true" class="fas fa-quote-left"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <div class="rating-start-wrap">
                                <div class="rating-start">
                                    <span style="width: 90%"></span>
                                </div>
                            </div>
                            <p>Destinasi wisata yang ditawarkan sangat menarik dan sesuai ekspektasi. Terima kasih atas pelayanannya!</p>
                            <div class="author-content">
                                <figure class="testimonial-img">
                                    <img src="asset/images/img19.jpg" alt="">
                                </figure>
                                <div class="author-name">
                                    <h5>Siti Aminah</h5>
                                    <span>Ibu Rumah Tangga</span>
                                </div>
                            </div>
                            <div class="testimonial-icon">
                                <i aria-hidden="true" class="fas fa-quote-left"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <div class="rating-start-wrap">
                                <div class="rating-start">
                                    <span style="width: 85%"></span>
                                </div>
                            </div>
                            <p>Rekomendasi banget! Proses booking mudah, fasilitas lengkap, dan guide sangat informatif.</p>
                            <div class="author-content">
                                <figure class="testimonial-img">
                                    <img src="asset/images/img20.jpg" alt="">
                                </figure>
                                <div class="author-name">
                                    <h5>Andi Pratama</h5>
                                    <span>Mahasiswa</span>
                                </div>
                            </div>
                            <div class="testimonial-icon">
                                <i aria-hidden="true" class="fas fa-quote-left"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <div class="rating-start-wrap">
                                <div class="rating-start">
                                    <span style="width: 90%"></span>
                                </div>
                            </div>
                            <p>Liburan bersama teman-teman jadi lebih seru dan berkesan. Terima kasih sudah membantu mewujudkan perjalanan impian kami!</p>
                            <div class="author-content">
                                <figure class="testimonial-img">
                                    <img src="asset/images/img19.jpg" alt="">
                                </figure>
                                <div class="author-name">
                                    <h5>Rina Oktaviani</h5>
                                    <span>Karyawan Swasta</span>
                                </div>
                            </div>
                            <div class="testimonial-icon">
                                <i aria-hidden="true" class="fas fa-quote-left"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***Home testimonial html end here*** -->
        <!-- ***Home callback html start from here*** -->
        <section id="contact" class="home-callback bg-color-callback primary-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h5 class="sub-title">Ayo Berangkat!</h5>
                        <h2 class="section-title">Siap Liburan Tak Terlupakan Bersama Kami?</h2>
                        <p>Hubungi tim kami untuk konsultasi gratis dan dapatkan penawaran terbaik untuk perjalanan Anda.</p>
                    </div>
                    <div class="col-md-4 text-md-end">
                        <a href="contact.html" class="outline-btn outline-btn-white">Hubungi Kami!</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***Home callback html end here*** -->
    </div>
@endsection
