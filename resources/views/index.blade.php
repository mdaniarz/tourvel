@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div>
        <!-- ***home banner html start form here*** -->
        <section class="home-banner-section home-banner-slider">
            <div class="home-banner d-flex flex-wrap align-items-center"
                style="background-image: url(asset/images/banner-img1.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="banner-content text-center">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <h2 class="banner-title">JOURNEY TO EXPLORE WORLD</h2>
                                <p>Ac mi duis mollis. Sapiente? Scelerisque quae, penatibus? Suscipit class corporis
                                    nostra
                                    rem quos voluptatibus habitant? Fames, vivamus minim nemo enim, gravida lobortis
                                    quasi,
                                    eum.</p>
                                <div class="banner-btn">
                                    <a href="about.html" class="round-btn">LEARN MORE</a>
                                    <a href="booking.html" class="outline-btn outline-btn-white">BOOK NOW</a>
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
                                <h2 class="banner-title">BEAUTIFUL PLACE TO VISIT</h2>
                                <p>Ac mi duis mollis. Sapiente? Scelerisque quae, penatibus? Suscipit class corporis
                                    nostra
                                    rem quos voluptatibus habitant? Fames, vivamus minim nemo enim, gravida lobortis
                                    quasi,
                                    eum.</p>
                                <div class="banner-btn">
                                    <a href="about.html" class="round-btn">LEARN MORE</a>
                                    <a href="booking.html" class="outline-btn outline-btn-white">BOOK NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***home banner html end here*** -->
        <!-- ***Home destination html start from here*** -->
        <section class="home-destination">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-sm-center">
                        <div class="section-heading">
                            <h5 class="sub-title">UNCOVER PLACE</h5>
                            <h2 class="section-title">POPULAR DESTINATION</h2>
                            <p>Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum.
                                Vestibulum
                                cumque laudantium. Sit ornare mollitia tenetur, aptent.</p>
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
                                    <p>Goes To Jakarta (Dufan). Experience the great holiday</p>
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
                                    <p>Overseas Research to the Singapore - Malaysia</p>
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
                                    <p>Weekend Vacation - Goes To Yogyakarta</p>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="section-btn-wrap text-center">
                        <a href="destination.html" class="round-btn">More Destination</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***Home destination html end here*** -->
        <!-- ***Home package html start from here*** -->
        <section class="home-package">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-sm-center">
                        <div class="section-heading">
                            <h5 class="sub-title">POPULAR PACKAGES</h5>
                            <h2 class="section-title">CHECKOUT OUR PACKAGES</h2>
                            <p>Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum.
                                Vestibulum
                                cumque laudantium. Sit ornare mollitia tenetur, aptent.</p>
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
                        <figure class="package-image" style="background-image: url(asset/images/2.png);">
                        </figure>
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
                        <figure class="package-image" style="background-image: url(asset/images/3.png);">
                        </figure>
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
                    <div class="section-btn-wrap text-center">
                        <a href="package.html" class="round-btn">VIEW ALL PACKAGES</a>
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
                            <h2 class="section-title">ARE YOU READY TO TRAVEL? REMEMBER US !!</h2>
                            <p>Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum.
                                Vestibulum
                                cumque laudantium. Sit ornare mollitia tenetur, aptent.</p>
                            <div class="callback-btn">
                                <a href="package.html" class="round-btn">View Packages</a>
                                <a href="about.html" class="outline-btn outline-btn-white">Learn More</a>
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
                            SATISFIED CUSTOMER
                        </span>
                    </div>
                    <div class="counter-item">
                        <span class="counter-no">
                            <span class="counter">18</span>+
                        </span>
                        <span class="counter-desc">
                            ACTIVE MEMBERS
                        </span>
                    </div>
                    <div class="counter-item">
                        <span class="counter-no">
                            <span class="counter">220</span>+
                        </span>
                        <span class="counter-desc">
                            TOUR DESTINATION
                        </span>
                    </div>
                    <div class="counter-item">
                        <span class="counter-no">
                            <span class="counter">75</span>+
                        </span>
                        <span class="counter-desc">
                            TRAVEL GUIDES
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***Home counter html end here*** -->
        <!-- ***Home offer html start from here*** -->
        <section class="home-offer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-sm-center">
                        <div class="section-heading">
                            <h5 class="sub-title">OFFER & DISCOUNT</h5>
                            <h2 class="section-title">OUR SPECIAL PACKAGES</h2>
                            <p>Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum.
                                Vestibulum
                                cumque laudantium. Sit ornare mollitia tenetur, aptent.</p>
                        </div>
                    </div>
                </div>
                <div class="offer-section">
                    <div class="row">
                        <div class="col-md-6">
                            <article class="offer-item" style="background-image: url(asset/images/1.png);">
                                <div class="offer-badge">
                                    UPTO <span>25%</span> off
                                </div>
                                <div class="offer-content">
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
                                    <h3>
                                        <a href="package.html">TOUR TO JAKARTA</a>
                                    </h3>
                                    <p>
                                        Goes To Jakarta (Dufan). Experience the great holiday
                                    </p>
                                    <div class="price-list">
                                        price:
                                        <del>Rp 1.5 Jt </del>
                                        <ins>Rp 1.2 Jt</ins>
                                    </div>
                                    <a href="booking.html" class="round-btn">Book Now</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6">
                            <article class="offer-item" style="background-image: url(asset/images/3.png);">
                                <div class="offer-badge">
                                    UPTO <span>17%</span> off
                                </div>
                                <div class="offer-content">
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
                                                Yogyakarta
                                            </li>
                                        </ul>
                                    </div>
                                    <h3>
                                        <a href="package.html">WEEKEND TO YOGYAKARTA</a>
                                    </h3>
                                    <p>
                                        Weekend Vacation - Goes To Yogyakarta
                                    </p>
                                    <div class="price-list">
                                        price:
                                        <del>Rp 950k </del>
                                        <ins>Rp 650k</ins>
                                    </div>
                                    <a href="booking.html" class="round-btn">Book Now</a>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="section-btn-wrap text-center">
                        <a href="package-offer.html" class="round-btn">VIEW ALL PACKAGES</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***Home offer html end here*** -->
        <!-- ***Home gallery html start from here*** -->
        <section class="home-gallery">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-sm-center">
                        <div class="section-heading">
                            <h5 class="sub-title">PHOTO GALLERY</h5>
                            <h2 class="section-title">PHOTO'S FROM TRAVELLERS</h2>
                            <p>Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum.
                                Vestibulum
                                cumque laudantium. Sit ornare mollitia tenetur, aptent.</p>
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
        <section class="home-testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="section-heading">
                            <h5 class="sub-title">CLIENT'S REVIEWS</h5>
                            <h2 class="section-title">TRAVELLER'S TESTIMONIAL</h2>
                            <p>Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum.
                                Vestibulum
                                cumque laudantium. Sit ornare mollitia tenetur, aptent.</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-section testimonial-slider">
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <div class="rating-start-wrap">
                                <div class="rating-start">
                                    <span style="width: 80%"></span>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.</p>
                            <div class="author-content">
                                <figure class="testimonial-img">
                                    <img src="asset/images/img18.jpg" alt="">
                                </figure>
                                <div class="author-name">
                                    <h5>WILLIAM WRIGHT</h5>
                                    <span>TRAVELLERS</span>
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
                                    <span style="width: 80%"></span>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.</p>
                            <div class="author-content">
                                <figure class="testimonial-img">
                                    <img src="asset/images/img19.jpg" alt="">
                                </figure>
                                <div class="author-name">
                                    <h5>ALISON WHITE</h5>
                                    <span>TRAVELLERS</span>
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
                                    <span style="width: 80%"></span>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.</p>
                            <div class="author-content">
                                <figure class="testimonial-img">
                                    <img src="asset/images/img20.jpg" alt="">
                                </figure>
                                <div class="author-name">
                                    <h5>GEORGE SMITH</h5>
                                    <span>TRAVELLERS</span>
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
                                    <span style="width: 80%"></span>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.</p>
                            <div class="author-content">
                                <figure class="testimonial-img">
                                    <img src="asset/images/img19.jpg" alt="">
                                </figure>
                                <div class="author-name">
                                    <h5>ALISON WHITE</h5>
                                    <span>TRAVELLERS</span>
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
        <section class="home-callback bg-color-callback primary-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h5 class="sub-title">CALL TO ACTION</h5>
                        <h2 class="section-title">READY FOR UNFORGATABLE TRAVEL. REMEMBER US!</h2>
                        <p>Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum
                            cumque
                            laudantium. Sit ornare mollitia tenetur, aptent.</p>
                    </div>
                    <div class="col-md-4 text-md-end">
                        <a href="contact.html" class="outline-btn outline-btn-white">Contact Us !</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***Home callback html end here*** -->
    </div>
@endsection
