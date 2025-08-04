@extends('layouts.app')

@section('title', 'Package Detail')

@section('content')
    <div>
        <section class="package-inner-page">
            <!-- ***Inner Banner html start form here*** -->
            <div class="inner-banner-wrap">
                <div class="inner-baner-container" style="background-image: url(assets/images/4.jpg);">
                    <div class="container">
                        <div class="inner-banner-content">
                            <h1 class="page-title">Package Detail</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ***Inner Banner html end here*** -->
            <!-- ***career section html start form here*** -->
            <div class="inner-package-detail-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 primary right-sidebar">
                            <div class="single-packge-wrap">
                                <div class="single-package-head d-flex align-items-center">
                                    <div class="package-title">
                                        <h2>SUMMER HOLIDAY TO THE MALIOBORO</h2>
                                        <div class="rating-start-wrap">
                                            <div class="rating-start">
                                                <span style="width: 80%"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="package-price">
                                        <h6 class="price-list">
                                            <span>Rp 650k</span>
                                            / per person
                                        </h6>
                                    </div>
                                </div>
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
                                            <i class="fas fa-swimmer"></i>
                                            Category : Hangout
                                        </li>

                                        <li>
                                            <i class="fas fa-map-marker-alt"></i>
                                            Yogyakarta
                                        </li>
                                    </ul>
                                </div>
                                <figure class="single-package-image">
                                    <img src="assets/images/3.png" alt="">
                                </figure>
                                <div class="package-content-detail">
                                    <article class="package-overview">
                                        <h3>OVERVIEW :</h3>
                                        <p>Weekend Vacation - Goes To Yogyakarta</p>
                                    </article>
                                    <article class="package-include bg-light-grey">
                                        <div class="col-6">
                                            <h3>FACILITY :</h3>
                                            <ul>
                                                <li><i class="fas fa-check"></i>Bus Pariwisata AC</li>
                                                <li><i class="fas fa-check"></i>Snack dan Makan</li>
                                                <li><i class="fas fa-check"></i>Biaya tiket masuk wisata</li>
                                                <li><i class="fas fa-check"></i>Souvenir Kaos</li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <h3>DESTINATION :</h3>
                                            <ul>
                                                <li><i class="fas fa-dot-circle"></i>Malioboro</li>
                                                <li><i class="fas fa-dot-circle"></i>Monumen Jogja Kembali</li>
                                                <li><i class="fas fa-dot-circle"></i>Keraton Yogyakarta</li>
                                                <li><i class="fas fa-dot-circle"></i>Masjid Jogokaryan</li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="package-ininerary">
                                        <h3>ITINERARY :</h3>
                                        <p>Malesuada incidunt excepturi proident quo eros? Id interdum praesent magnis, eius
                                            cumque? Integer aptent officiis recusandae habitasse iure, quisque culpa!</p>
                                        <ul>
                                            <li>
                                                <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                                <span>DAY 1</span>
                                                Departure at the airport and arrival at the hotel
                                            </li>
                                            <li>
                                                <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                                <span>DAY 2</span>
                                                Visit the main museums and lunch included
                                            </li>
                                            <li>
                                                <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                                <span>DAY 3</span>
                                                Excursion in the natural oasis and picnic
                                            </li>
                                            <li>
                                                <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                                <span>DAY 4</span>
                                                Transfer to the airport and return to the agency
                                            </li>
                                        </ul>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="sidebar">
                                <div class="booking-form-wrap">
                                    <div class="booking-form-inner primary-bg">
                                        <h3>BOOKING FORM</h3>
                                        <p>Malesuada incidunt excepturi proident quo eros? Sinterdum praesent magnis, eius
                                            cumque.</p>
                                        <form method="get" class="booking-form">
                                            <p>
                                                <input type="text" name="name" placeholder="Your Name...">
                                            </p>
                                            <p>
                                                <input type="email" name="email" placeholder="Your Email...">
                                            </p>
                                            <p class="width-5">
                                                <label>Checkin Date</label>
                                                <input class="input-date-picker" type="text" name="s"
                                                    placeholder="MM / DD / YY" autocomplete="off" readonly="readonly">
                                            </p>
                                            <p class="width-5">
                                                <label>Checkout Date</label>
                                                <input class="input-date-picker" type="text" name="s"
                                                    placeholder="MM / DD / YY" autocomplete="off" readonly="readonly">
                                            </p>
                                            <p>
                                                <button type="submit" class="outline-btn outline-btn-white">INQUIRY
                                                    NOW</button>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                                <div class="related-package">
                                    <h3>RELATED IMAGES</h3>
                                    <p>Quaerat inventore! Vestibulum aenean volutpat gravida. Sagittis, euismod perferendis.
                                    </p>
                                    <div class="related-package-slide">
                                        <div class="related-package-item">
                                            <img src="assets/images/4.jpg" alt="">
                                        </div>
                                        <div class="related-package-item">
                                            <img src="assets/images/5.jpg" alt="">
                                        </div>
                                        <div class="related-package-item">
                                            <img src="assets/images/6.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="package-map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.540423056448!2d-0.12174238402827448!3d51.50330061882345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b900d26973%3A0x4291f3172409ea92!2slastminute.com%20London%20Eye!5e0!3m2!1sen!2snp!4v1646314586610!5m2!1sen!2snp"
                                        width="600" height="320" style="border:0;" allowfullscreen=""
                                        loading="lazy"></iframe>
                                </div>
                                <div class="package-list">
                                    <div class="overlay"></div>
                                    <h4>MORE PACKAGES</h4>
                                    <ul>
                                        <li>
                                            <a href="#"><i aria-hidden="true"
                                                    class="icon icon-arrow-right-circle"></i>Vacation
                                                Packages</a>
                                        </li>
                                        <li>
                                            <a href="#"><i aria-hidden="true"
                                                    class="icon icon-arrow-right-circle"></i>Homeymoon
                                                Packages</a>
                                        </li>
                                        <li>
                                            <a href="#"><i aria-hidden="true"
                                                    class="icon icon-arrow-right-circle"></i>New Year
                                                Packages</a>
                                        </li>
                                        <li>
                                            <a href="#"><i aria-hidden="true"
                                                    class="icon icon-arrow-right-circle"></i>Weekend
                                                Packages</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ***career section html start form here*** -->
        </section>
    </div>
@endsection
