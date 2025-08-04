<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- favicon -->
    <link rel="icon" type="ico" href="{{ asset('asset/images/favicon.ico') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('asset/vendors/bootstrap/css/bootstrap.min.css') }}" media="all">
    <!-- jquery-ui css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/vendors/jquery-ui/jquery-ui.min.css') }}">
    <!-- fancybox box css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/vendors/fancybox/dist/jquery.fancybox.min.css') }}">
    <!-- Fonts Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/vendors/fontawesome/css/all.min.css') }}">
    <!-- Elmentkit Icon CSS -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('asset/vendors/elementskit-icon-pack/asset/css/ekiticons.css') }}">
    <!-- slick slider css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/vendors/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/vendors/slick/slick-theme.css') }}">
    <!-- google fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap"
        rel="stylesheet">
    <!-- Custom CSS -->
    {{-- <link rel="stylesheet" type="text/css" href="style.css"> --}}
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <title>Travel Al-Irsyad Purwokerto</title>
</head>

<body class="home">
    <div id="siteLoader" class="site-loader">
        <div class="preloader-content">
            <img src="asset/images/loader1.gif" alt="">
        </div>
    </div>
    <div id="page" class="page">
        <!-- site header html start  -->
        <header id="masthead" class="site-header">
            <!-- header html start -->
            <div class="top-header">
                <div class="container">
                    <div class="top-header-inner">
                        <div class="header-contact text-left">
                            <a href="tel:+01977259912">
                                <i aria-hidden="true" class="icon icon-phone-call2"></i>
                                <div class="header-contact-details">
                                    <span class="contact-label">Informasi & Pemesanan :</span>
                                    <h5 class="header-contact-no">(0281) 63 6623</h5>
                                </div>
                            </a>
                        </div>
                        <div class="site-logo text-center">
                            <h1 class="site-title">
                                <a href="index.html">
                                    <img src="asset/images/logo2.png" alt="Logo">
                                </a>
                            </h1>
                        </div>
                        <div class="header-icon text-right">
                            <div class="header-search-icon d-inline-block">
                                <a href="#">
                                    <i aria-hidden="true" class="fas fa-search"></i>
                                </a>
                            </div>
                            <!-- <div class="offcanvas-menu d-inline-block">
                        <a href="#">
                           <i aria-hidden="true" class="icon icon-burger-menu"></i>
                        </a>
                     </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-header">
                <div class="container">
                    <div class="bottom-header-inner d-flex justify-content-between align-items-center">
                        <div class="header-social social-icon">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com" target="_blank">
                                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com" target="_blank">
                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com" target="_blank">
                                        <i class="fab fa-youtube" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="navigation-container d-none d-lg-block">
                            <nav id="navigation" class="navigation">
                                <ul>
                                    <li class="menu-active">
                                        <a href="#home">Beranda</a>
                                    </li>
                                    <li>
                                        <a href="#">Tentang Kami</a>
                                    </li>
                                    <li>
                                        <a href="#destination">Destinasi</a>
                                    </li>
                                    <li>
                                        <a href="#package">Paket Wisata</a>
                                    </li>
                                    <li>
                                        <a href="#gallery">Galeri</a>
                                    </li>
                                    <li>
                                        <a href="#testimonial">Testimoni</a>
                                    </li>
                                    <li>
                                        <a href="#contact">Kontak</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-btn">
                            <a href="#contact" class="round-btn">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-container"></div>
        </header>
        <!-- site header html end  -->
        <main id="content" class="site-main">
            @yield('content')
        </main>
        <!-- ***site footer html start form here*** -->
        <footer id="colophon" class="site-footer footer-primary">
            <div class="top-footer">
                <div class="container">
                    <div class="upper-footer">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <aside class="widget widget_text">
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="asset/images/logo2.png" alt=""></a>
                                    </div>
                                    <div class="textwidget widget-text">
                                        <strong>Travel Al-Irsyad Purwokerto</strong> adalah partner perjalanan Anda untuk wisata, umroh, dan perjalanan edukasi terbaik. Kami siap membantu mewujudkan liburan impian Anda dengan pelayanan profesional dan harga terjangkau.
                                    </div>
                                </aside>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <aside class="widget widget_latest_post widget-post-thumb">
                                  
                                </aside>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <aside class="widget widget_text">
                                    <h3 class="widget-title">KONTAK KAMI</h3>
                                    <div class="textwidget widget-text">
                                        <p>Butuh bantuan atau ingin konsultasi perjalanan? Hubungi kami:</p>
                                        <ul>
                                            <li>
                                                <a href="tel:+62281636623">
                                                    <i aria-hidden="true" class="icon icon-phone1"></i>
                                                    (0281) 63 6623
                                                </a>
                                            </li>
                                            <li>
                                                <a href="mailto:travelairsyadpwt@gmail.com">
                                                    <i aria-hidden="true" class="icon icon-envelope1"></i>
                                                    travelairsyadpwt@gmail.com
                                                </a>
                                            </li>
                                            <li>
                                                <i aria-hidden="true" class="icon icon-map-marker1"></i>
                                                Jl. Jatiwinangun No 37, Purwokerto
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <aside class="widget">
                                    <h3 class="widget-title">Galeri</h3>
                                    <div class="gallery gallery-colum-3">
                                        <figure class="gallery-item">
                                            <a href="asset/images/1.jpg" data-fancybox="gallery-1">
                                                <img src="asset/images/1.jpg" alt="Foto suasana wisata">
                                            </a>
                                        </figure>
                                        <figure class="gallery-item">
                                            <a href="asset/images/2.jpg" data-fancybox="gallery-1">
                                                <img src="asset/images/2.jpg" alt="Foto peserta tour">
                                            </a>
                                        </figure>
                                        <figure class="gallery-item">
                                            <a href="asset/images/3.jpg" data-fancybox="gallery-1">
                                                <img src="asset/images/3.jpg" alt="Foto destinasi favorit">
                                            </a>
                                        </figure>
                                        <figure class="gallery-item">
                                            <a href="asset/images/4.jpg" data-fancybox="gallery-1">
                                                <img src="asset/images/4.jpg" alt="Foto perjalanan umroh">
                                            </a>
                                        </figure>
                                        <figure class="gallery-item">
                                            <a href="asset/images/5.jpg" data-fancybox="gallery-1">
                                                <img src="asset/images/5.jpg" alt="Foto edukasi">
                                            </a>
                                        </figure>
                                        <figure class="gallery-item">
                                            <a href="asset/images/6.jpg" data-fancybox="gallery-1">
                                                <img src="asset/images/6.jpg" alt="Foto kebersamaan">
                                            </a>
                                        </figure>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                    <div class="lower-footer">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="footer-newsletter">
                                    <p>Dapatkan info promo, tips wisata, dan update terbaru dari kami langsung ke email Anda!</p>
                                    <form class="newsletter">
                                        <input type="email" name="email" placeholder="Masukkan Email Anda">
                                        <button type="submit"
                                            class="outline-btn outline-btn-white">Langganan</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 text-right">
                                <div class="social-icon">
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/" target="_blank">
                                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.twitter.com/" target="_blank">
                                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/" target="_blank">
                                                <i class="fab fa-youtube" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/" target="_blank">
                                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/" target="_blank">
                                                <i class="fab fa-linkedin" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer-menu">
                                    <ul>
                                        <li>
                                            <a href="#">Kebijakan Privasi</a>
                                        </li>
                                        <li>
                                            <a href="#">Syarat & Ketentuan</a>
                                        </li>
                                        <li>
                                            <a href="#">FAQ</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer">
                <div class="container">
                    <div class="copy-right text-center">&copy; {{ date('Y') }} Tour & Travel. Semua hak cipta dilindungi.
                    </div>
                </div>
            </div>
        </footer>
        <!-- ***site footer html end*** -->
        <a id="backTotop" href="#" class="to-top-icon">
            <i class="fas fa-chevron-up"></i>
        </a>
        <!-- ***custom search field html*** -->
        <div class="header-search-form">
            <div class="container">
                <div class="header-search-container">
                    <form class="search-form" role="search" method="get">
                        <input type="text" name="s" placeholder="Enter your text...">
                    </form>
                    <a href="#" class="search-close">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- ***custom search field html*** -->
    </div>

    <!-- JavaScript -->
    <script src="asset/vendors/jquery/jquery.js"></script>
    <script src="asset/vendors/waypoint/waypoints.js"></script>
    <script src="asset/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="asset/vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="asset/vendors/countdown-date-loop-counter/loopcounter.js"></script>
    <script src="asset/vendors/counterup/jquery.counterup.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script src="asset/vendors/masonry/masonry.pkgd.min.js"></script>
    <script src="asset/vendors/slick/slick.min.js"></script>
    <script src="asset/vendors/fancybox/dist/jquery.fancybox.min.js"></script>
    <script src="asset/vendors/slick-nav/jquery.slicknav.js"></script>
    <script src="asset/js/custom.min.js"></script>
</body>

</html>
