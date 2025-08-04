@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div>
        <section class="inner-page-wrap">
            <!-- ***Inner Banner html start form here*** -->
            <div class="inner-banner-wrap">
                <div class="inner-baner-container" style="background-image: url(assets/images/4.jpg);">
                    <div class="container">
                        <div class="inner-banner-content">
                            <h1 class="page-title">Tour Packages</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ***Inner Banner html end here*** -->
            <!-- ***package section html start form here*** -->
            <div class="package-item-wrap">
                <div class="container">
                    <article class="package-item">
                        <figure class="package-image" style="background-image: url(assets/images/1.png);"></figure>
                        <div class="package-content">
                            <h3>
                                <a href="package-detail.html">
                                    Dufan
                                </a>
                            </h3>
                            <p>Goes To Jakarta (Dufan). Experience the great holiday on Dufan</p>
                            <div class="package-meta">
                                <ul>
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        7 Days
                                    </li>
                                    <li>
                                        <i class="fas fa-user-friends"></i>
                                        pax: 10
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
                                <span class="review-text">(25 reviews)</span>
                                <div class="rating-start-wrap d-inline-block">
                                    <div class="rating-start">
                                        <span style="width: 80%"></span>
                                    </div>
                                </div>
                            </div>
                            <h6 class="price-list">
                                <span>Rp 1.2 Jt</span>
                                / per person
                            </h6>
                            <a href="booking.html" class="outline-btn outline-btn-white">Book now</a>
                        </div>
                    </article>
                    <article class="package-item">
                        <figure class="package-image" style="background-image: url(assets/images/2.png);"></figure>
                        <div class="package-content">
                            <h3>
                                <a href="package-detail.html">
                                    MERLION PARK - TWIN TOWER
                                </a>
                            </h3>
                            <p>Overseas Research & Summer Holiday to the Singapore - Malaysia</p>
                            <div class="package-meta">
                                <ul>
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        5 Days
                                    </li>
                                    <li>
                                        <i class="fas fa-user-friends"></i>
                                        pax: 10
                                    </li>
                                    <li>
                                        <i class="fas fa-map-marker-alt"></i>
                                        Singapore, Malaysia
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="package-price">
                            <div class="review-area">
                                <span class="review-text">(12 reviews)</span>
                                <div class="rating-start-wrap d-inline-block">
                                    <div class="rating-start">
                                        <span style="width: 80%"></span>
                                    </div>
                                </div>
                            </div>
                            <h6 class="price-list">
                                <span>Rp 7.8 Jt</span>
                                / per person
                            </h6>
                            <a href="booking.html" class="outline-btn outline-btn-white">Book now</a>
                        </div>
                    </article>
                    <article class="package-item">
                        <figure class="package-image" style="background-image: url(assets/images/3.png);"></figure>
                        <div class="package-content">
                            <h3>
                                <a href="package-detail.html">
                                    MALIOBORO
                                </a>
                            </h3>
                            <p>Weekend Vacation - Goes To Yogyakarta</p>
                            <div class="package-meta">
                                <ul>
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        6 Days
                                    </li>
                                    <li>
                                        <i class="fas fa-user-friends"></i>
                                        pax: 10
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
                                <span class="review-text">(43 reviews)</span>
                                <div class="rating-start-wrap d-inline-block">
                                    <div class="rating-start">
                                        <span style="width: 80%"></span>
                                    </div>
                                </div>
                            </div>
                            <h6 class="price-list">
                                <span>Rp 650k</span>
                                / per person
                            </h6>
                            <a href="booking.html" class="outline-btn outline-btn-white">Book now</a>
                        </div>
                    </article>
                    <article class="package-item">
                        <figure class="package-image" style="background-image: url(assets/images/banner-img1.jpg);">
                        </figure>
                        <div class="package-content">
                            <h3>
                                <a href="package-detail.html">
                                    BEAUTIFUL PLACE TO VISIT IN BEACH OF MALDIVES
                                </a>
                            </h3>
                            <p>Laoreet, voluptatum nihil dolor esse quaerat mattis explicabo maiores, est aliquet porttitor!
                                Eaque, cras, aspernatur.</p>
                            <div class="package-meta">
                                <ul>
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        6D/5N
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
                        </div>
                        <div class="package-price">
                            <div class="review-area">
                                <span class="review-text">(43 reviews)</span>
                                <div class="rating-start-wrap d-inline-block">
                                    <div class="rating-start">
                                        <span style="width: 80%"></span>
                                    </div>
                                </div>
                            </div>
                            <h6 class="price-list">
                                <span>$460</span>
                                / per person
                            </h6>
                            <a href="booking.html" class="outline-btn outline-btn-white">Book now</a>
                        </div>
                    </article>
                </div>
            </div>
            <!-- ***package section html start form here*** -->
        </section>
    </div>
@endsection
