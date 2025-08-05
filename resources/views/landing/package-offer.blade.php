@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div>
        <section class="inner-page-wrap">
            <!-- ***Inner Banner html start form here*** -->
            <div class="inner-banner-wrap">
                <div class="inner-baner-container" style="background-image: url(assets/images/6.jpg);">
                    <div class="container">
                        <div class="inner-banner-content">
                            <h1 class="page-title">Package Offer</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ***Inner Banner html end here*** -->
            <!-- ***offer package section html start form here*** -->
            <div class="offer-package-wrap">
                <div class="container">
                    <div class="row gx-5">
                        <div class="col-md-6">
                            <article class="offer-item" style="background-image: url(assets/images/img8.jpg);">
                                <div class="offer-badge">
                                    UPTO <span>25%</span> off
                                </div>
                                <div class="offer-content">
                                    <div class="package-meta">
                                        <ul>
                                            <li>
                                                <i class="fas fa-clock"></i>
                                                7D/6N
                                            </li>
                                            <li>
                                                <i class="fas fa-user-friends"></i>
                                                pax: 10
                                            </li>
                                            <li>
                                                <i class="fas fa-map-marker-alt"></i>
                                                Malaysia
                                            </li>
                                        </ul>
                                    </div>
                                    <h3>
                                        <a href="package.html">TOUR TO SATORINI</a>
                                    </h3>
                                    <p>
                                        Fusce hic augue velit wisi ips quibus dam pariatur, iusto.
                                    </p>
                                    <div class="price-list">
                                        price:
                                        <del>$1300 </del>
                                        <ins>$1105</ins>
                                    </div>
                                    <a href="booking.html" class="round-btn">Book Now</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6">
                            <article class="offer-item" style="background-image: url(assets/images/img9.jpg);">
                                <div class="offer-badge">
                                    UPTO <span>17%</span> off
                                </div>
                                <div class="offer-content">
                                    <div class="package-meta">
                                        <ul>
                                            <li>
                                                <i class="fas fa-clock"></i>
                                                5D/4N
                                            </li>
                                            <li>
                                                <i class="fas fa-user-friends"></i>
                                                pax: 10
                                            </li>
                                            <li>
                                                <i class="fas fa-map-marker-alt"></i>
                                                Malaysia
                                            </li>
                                        </ul>
                                    </div>
                                    <h3>
                                        <a href="package.html">WEEKEND TO PARIS</a>
                                    </h3>
                                    <p>
                                        Fusce hic augue velit wisi ips quibus dam pariatur, iusto.
                                    </p>
                                    <div class="price-list">
                                        price:
                                        <del>$1100 </del>
                                        <ins>$900</ins>
                                    </div>
                                    <a href="booking.html" class="round-btn">Book Now</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6">
                            <article class="offer-item" style="background-image: url(assets/images/banner-img1.jpg);">
                                <div class="offer-badge">
                                    UPTO <span>17%</span> off
                                </div>
                                <div class="offer-content">
                                    <div class="package-meta">
                                        <ul>
                                            <li>
                                                <i class="fas fa-clock"></i>
                                                5D/4N
                                            </li>
                                            <li>
                                                <i class="fas fa-user-friends"></i>
                                                pax: 10
                                            </li>
                                            <li>
                                                <i class="fas fa-map-marker-alt"></i>
                                                Malaysia
                                            </li>
                                        </ul>
                                    </div>
                                    <h3>
                                        <a href="package.html">SUMMER TRIP'S BEACH</a>
                                    </h3>
                                    <p>
                                        Fusce hic augue velit wisi ips quibus dam pariatur, iusto.
                                    </p>
                                    <div class="price-list">
                                        price:
                                        <del>$1100 </del>
                                        <ins>$900</ins>
                                    </div>
                                    <a href="booking.html" class="round-btn">Book Now</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6">
                            <article class="offer-item" style="background-image: url(assets/images/img10.jpg);">
                                <div class="offer-badge">
                                    UPTO <span>20%</span> off
                                </div>
                                <div class="offer-content">
                                    <div class="package-meta">
                                        <ul>
                                            <li>
                                                <i class="fas fa-clock"></i>
                                                5D/4N
                                            </li>
                                            <li>
                                                <i class="fas fa-user-friends"></i>
                                                pax: 10
                                            </li>
                                            <li>
                                                <i class="fas fa-map-marker-alt"></i>
                                                Malaysia
                                            </li>
                                        </ul>
                                    </div>
                                    <h3>
                                        <a href="package.html">TREK TO MOUNTAIN</a>
                                    </h3>
                                    <p>
                                        Fusce hic augue velit wisi ips quibus dam pariatur, iusto.
                                    </p>
                                    <div class="price-list">
                                        price:
                                        <del>$1100 </del>
                                        <ins>$900</ins>
                                    </div>
                                    <a href="booking.html" class="round-btn">Book Now</a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ***offer package section html start form here*** -->
            <!-- ***callback section html start form here*** -->
            <div class="bg-img-fullcallback" style="background-image: url(assets/images/1.jpg);">
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
                                <h2 class="section-title">ARE YOU READY TO TRAVEL? REMEMBER US !!</h2>
                                <p>Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum
                                    cumque laudantium. Sit ornare mollitia tenetur, aptent.</p>
                                <div class="callback-btn">
                                    <a href="package.html" class="round-btn">View Packages</a>
                                    <a href="about.html" class="outline-btn outline-btn-white">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ***callback section html end here*** -->
        </section>
    </div>
@endsection
