<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <meta charset="utf-8">
    <title>Vitour - Travel & Tour Booking HTML Template</title>

    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{asset('user/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/textanimation.css')}}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="assets/images/favico.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/favico.png">

</head>

<body class="body header-fixed counter-scroll">

    <div class="preload preload-container">
        <svg class="pl" width="240" height="240" viewBox="0 0 240 240">
            <circle class="pl__ring pl__ring--a" cx="120" cy="120" r="105" fill="none" stroke="#000" stroke-width="20"
                stroke-dasharray="0 660" stroke-dashoffset="-330" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--b" cx="120" cy="120" r="35" fill="none" stroke="#000" stroke-width="20"
                stroke-dasharray="0 220" stroke-dashoffset="-110" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--c" cx="85" cy="120" r="70" fill="none" stroke="#000" stroke-width="20"
                stroke-dasharray="0 440" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--d" cx="155" cy="120" r="70" fill="none" stroke="#000" stroke-width="20"
                stroke-dasharray="0 440" stroke-linecap="round"></circle>
        </svg>
    </div>

    <!-- /preload -->

    <div id="wrapper">
        <div id="pagee" class="clearfix">

            <!-- Main Header -->
            <header class="main-header flex">
                <!-- Header Lower -->
                <div id="header">
                    <div class="header-top">
                        <div class="header-top-wrap flex-two">
                            <div class="header-top-right">
                                <ul class=" flex-three">
                                    <li class="flex-three">
                                        <i class="icon-mail"></i>
                                        <span>Info@Webmail.Com</span>
                                    </li>
                                    <li class="flex-three">
                                        <i class="icon-phone"></i>
                                        <span>684 555-0102 490</span>
                                    </li>


                                </ul>
                            </div>
                            <div class="header-top-left flex-two">
                                <div class="follow-social flex-two">
                                    <span>Follow Us :</span>
                                    <ul class="flex-two">
                                        <li><a href="#"><i class="icon-icon-2"></i></a></li>
                                        <li><a href="#"><i class="icon-icon_03"></i></a></li>
                                        <li><a href="#"><i class="icon-x"></i></a></li>
                                        <li><a href="#"><i class="icon-icon"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="header-lower">
                        <div class="tf-container full">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="inner-container flex justify-space align-center">
                                        <!-- Logo Box -->
                                        <div class="mobile-nav-toggler mobie-mt mobile-button">
                                            <i class="icon-Vector3"></i>
                                        </div>
                                        <div class="logo-box">
                                            <div class="logo">
                                                <a href="{{ route('user.index') }}">
                                                    <img src="{{ asset('images/logo.png') }}" alt="Logo">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="nav-outer flex align-center">
                                            <!-- Main Menu -->
                                            <nav class="main-menu show navbar-expand-md">
                                                <div class="navbar-collapse collapse clearfix"
                                                    id="navbarSupportedContent">
                                                    <ul class="navigation clearfix">
                                                        <li class="current">
                                                            <a href="{{ route('user.index') }}">Home</a>
                                                        </li>
                                                        <li><a href="{{ route('user.lapangan') }}">Lapangan</a></li>
                                                        <li><a href="{{ route('user.about-us') }}">About Us</a></li>
                                                        <li><a href="#">Booking</a></li>
                                                    </ul>
                                                </div>
                                            </nav>
                                            <!-- Main Menu End-->
                                        </div>
                                        <div class="header-account flex align-center">
                                            <div class="register">
                                                <ul class="flex align-center">
                                                    <li>
                                                        <a href="{{ route('user.index') }}" class="flex-three">
                                                            <img src="{{ asset('images/verified.png') }}" alt="image">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="./assets/images/page/fl1.png" alt="" class="fly-ab">
                    </div>
                </div>

                <!-- End Header Lower -->
                <a href="#" class="header-sidebar flex-three" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <i class="icon-Bars"></i>
                </a>

                <!-- Mobile Menu  -->
                <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>
                <div class="mobile-menu">
                    <div class="menu-backdrop"></div>
                    <nav class="menu-box">
                        <div class="nav-logo"><a href="index.html">
                                <img src="assets/images/logo2.png" alt=""></a></div>
                        <div class="bottom-canvas">
                            <div class="menu-outer">
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- End Mobile Menu -->

            </header>
            <!-- End Main Header -->
            <main id="main">


                <!-- Widget Slider -->
                <section class="slider relative">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            {{-- Slider 1 --}}
                            <div class="slider-home1 relative overflow-hidden swiper-slide">
                                <div class="silider-image">
                                    <img src="{{ asset('images/futsal-field.jpg') }}" alt="Image" class="image-slide">
                                    <div class="booking-title tf-anime-rorate">
                                        <p class="booking">Booking</p>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="slider-content">
                                    <div class="tf-container">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <span
                                                    class="sub-title text-main font-yes fs-28-46 fadeInDown wow">Explore
                                                    the
                                                    world</span>
                                                <h1 class="title-slide text-white mb-32 fadeInDown wow">Booking Sekarang, Main Besok!
                                                    <span class="animationtext clip text-main">
                                                        <span class="cd-words-wrapper">
                                                            <span class="item-text is-visible">Kuy!</span>
                                                            <span class="item-text is-hidden">Kuy!</span>
                                                        </span>                                          
                                                    </span>
                                                </h1>
                                                <p class="des text-white mb-45 fadeInDown wow">Ingin bermain di lapangan yang selalu ramai? Jangan sampai ketinggalan, karena jumlah lapangan terbatas. Segera booking sekarang sebelum kehabisan!
                                                </p>
                                                <div class="btn-group">
                                                    <a href="{{ route('user.lapangan') }}" class="btn-main fadeInDown wow">
                                                        <p class="btn-main-text">Cek Lapangan</p>
                                                        <p class="iconer">
                                                            <i class="icon-arrow-right"></i>
                                                        </p>
                                                    </a>
                                                    <a href="{{ route('user.about-us') }}" class="btn-w-wa fadeInDown wow">Tentang Kami <i
                                                            class="icon-Group-13"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Slider 2 --}}
                            <div class="slider-home1 relative overflow-hidden swiper-slide">
                                <div class="silider-image">
                                    <img src="{{ asset('images/soccer-field.jpg') }}" alt="Image" class="image-slide">
                                    <div class="booking-title tf-anime-rorate">
                                        <p class="booking">Booking</p>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="slider-content">
                                    <div class="tf-container">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <span
                                                    class="sub-title text-main font-yes fs-28-46 fadeInDown wow">Explore
                                                    the
                                                    world</span>
                                                <h1 class="title-slide text-white mb-32 fadeInDown wow">Lapangan Keren, Harga Merakyat
                                                    <span class="animationtext clip text-main">
                                                        <span class="cd-words-wrapper">
                                                            <span class="item-text is-visible">Skuy!</span>
                                                            <span class="item-text is-hidden">Skuy!</span>
                                                        </span>                                          
                                                    </span>
                                                </h1>
                                                <p class="des text-white mb-45 fadeInDown wow">Ingin bermain di lapangan yang selalu ramai? Jangan sampai ketinggalan, karena jumlah lapangan terbatas. Segera booking sekarang sebelum kehabisan!
                                                </p>
                                                <div class="btn-group">
                                                    <a href="{{ route('user.lapangan') }}" class="btn-main fadeInDown wow">
                                                        <p class="btn-main-text">Cek Lapangan</p>
                                                        <p class="iconer">
                                                            <i class="icon-arrow-right"></i>
                                                        </p>
                                                    </a>
                                                    <a href="{{ route('user.about-us') }}" class="btn-w-wa fadeInDown wow">Tentang Kami <i
                                                            class="icon-Group-13"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Slider 3 --}}
                            <div class="slider-home1 relative overflow-hidden swiper-slide">
                                <div class="silider-image">
                                    <img src="{{ asset('images/badminton-field.jpg') }}" alt="Image" class="image-slide">
                                    <div class="booking-title tf-anime-rorate">
                                        <p class="booking">Booking</p>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="slider-content">
                                    <div class="tf-container">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <span
                                                    class="sub-title text-main font-yes fs-28-46 fadeInDown wow">Explore
                                                    the
                                                    world</span>
                                                <h1 class="title-slide text-white mb-32 fadeInDown wow">Sewa Lapangan? Gampang Banget!
                                                    <span class="animationtext clip text-main">
                                                        <span class="cd-words-wrapper">
                                                            <span class="item-text is-visible">Skuy!</span>
                                                            <span class="item-text is-hidden">Skuy!</span>
                                                        </span>                                          
                                                    </span>
                                                </h1>
                                                <p class="des text-white mb-45 fadeInDown wow">Ingin bermain di lapangan yang selalu ramai? Jangan sampai ketinggalan, karena jumlah lapangan terbatas. Segera booking sekarang sebelum kehabisan!
                                                </p>
                                                <div class="btn-group">
                                                    <a href="{{ route('user.lapangan') }}" class="btn-main fadeInDown wow">
                                                        <p class="btn-main-text">Cek Lapangan</p>
                                                        <p class="iconer">
                                                            <i class="icon-arrow-right"></i>
                                                        </p>
                                                    </a>
                                                    <a href="{{ route('user.about-us') }}" class="btn-w-wa fadeInDown wow">Tentang Kami <i
                                                            class="icon-Group-13"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-nex-prev">
                            <div class="swiper-button-next  next-home1"></div>
                            <div class="swiper-button-prev  prev-home1"></div>
                        </div>
                    </div>
                </section>
                <!-- Widget Slider -->

                <!-- Widget Tourpackage (Main Menu Buat Lapangan) -->
                
                <!-- Widget Tour Package -->
                <section class="tour-package2">
                    <div class="tf-container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-30 center">
                                    <span
                                        class="sub-title-heading text-main font-yes fs-28-46 wow fadeInUp animated">Explore
                                        the world</span>
                                    <h2 class="title-heading wow fadeInUp animated">Our Featured Tour</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-15">
                            <div class="col-lg-12 relative tour-package-swipper-wrap">
                                <div class="swiper tour-package-swipper overflow-hidden relative">
                                    <div class="swiper-wrapper">
                                        @foreach ($lapangans as $lapangan)
                                            <div class="swiper-slide">
                                                <div class="tour-listing box-sd">
                                                    <a href="{{ route('user.show', $lapangan->id) }}" class="tour-listing-image">
                                                        <div class="badge-top flex-two">
                                                            <span class="feature bg-2">{{ $lapangan->nama_kategori }}</span>
                                                        </div>
                                                        <img src="{{ asset('storage/foto-lapangan/'.$lapangan->foto) }}" alt="Image Listing">
                                                    </a>
                                                    <div class="tour-listing-content">
                                                        <span class="map"><i class="icon-Vector4"></i>United States
                                                            USA</span>
                                                        <h3 class="title-tour-list"><a href="{{ route('user.show', $lapangan->id) }}">{{ $lapangan->nama }}</a>
                                                        </h3>
                                                        <div class="flex-two">
                                                            <div class="price-box flex-three">
                                                                <p>From <span class="price-sale">IDR. {{ $lapangan->harga }}</span></p>
                                                                <span class="price">IDR. {{ $lapangan->harga }}</span>
                                                            </div>
                                                            <div class="icon-bookmark">
                                                                <i class="icon-Vector-151"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 relative">
                                <a href="{{ route('user.lapangan') }}"
                                    class="tour-link center flex-five  m0-auto z-index3 relative">
                                    <span>all tour</span>
                                    <i class="icon-Group-13"></i>
                                </a>
                                <div class="line"></div>
                            </div>
                        </div>

                    </div>
                </section>
                <!-- Widget Tour Package -->
                <!-- Widget Tourpackage -->

                <!-- Widget Banner Contact -->
                {{-- Foto disini dapet dari style.css .widget-banner-contact --}}
                <section class="widget-banner-contact relative">
                    <div class="tf-container">
                        <div class="row z-index3 relative">
                            <div class="col-lg-7 content-banner-contact">
                                <div class="mb-32">
                                    <span
                                        class="sub-title-heading text-main mb-15 font-yes fs-28-46 wow fadeInUp animated">Explore
                                        the
                                        world</span>
                                    <h2 class="title-heading text-white wow fadeInUp animated">Ready to travel with real
                                        adventure & enjoy
                                        natural</h2>
                                </div>
                                <div class="flex-three">
                                    <address class="wow fadeInUp animated">
                                        Contact us at <a href="mailto:@Hooktheme.co"> @Hooktheme.co</a><br>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Widget Banner Contact -->
            </main>

            {{-- Footer Start --}}
            <footer class="footer footer-style2">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="footer-item-logo">
                                <div class="logo">
                                    <img src="{{ asset('images/logo.png') }}" alt="image">
                                </div>
                                <p class="des-footer">A new way to make the payments easy,
                                    reliable and 100% secure. claritatem
                                    itamconse quat. Exerci tation ullamcorper.
                                </p>
                                <ul class="social flex-three ">
                                    <li>
                                        <a href="#">
                                            <i class="icon-icon-2"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-x"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-icon_03"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-2"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="footer-item-company">
                                <h6 class="title mb-30">Our Company</h6>
                                <ul class="footer-menu">
                                    <li>
                                        <a href="about-us.html">Our About </a>
                                    </li>
                                    <li>
                                        <a href="terms-condition.html">Terms Condition</a>
                                    </li>
                                    <li>
                                        <a href="team.html">Team</a>
                                    </li>
                                    <li>
                                        <a href="help-center.html">Help Center</a>
                                    </li>
                                    <li>
                                        <a href="gallery.html">Gallery</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-item-quick-link">
                                <h6 class="title mb-30">Quick Link</h6>
                                <ul class="footer-menu">
                                    <li>
                                        <a href="dashboard.html">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="my-booking.html">My Booking</a>
                                    </li>
                                    <li>
                                        <a href="my-favorite.html">My Favorite</a>
                                    </li>
                                    <li>
                                        <a href="my-listing.html">My Listing</a>
                                    </li>
                                    <li>
                                        <a href="my-profile.html">My Profile</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-item-newsletter">
                                <h6 class="title mb-30">Our Newsletter</h6>
                                <p class="des mb-22">Exerci tation ullamcorper suscipit lobortis nisl aliquip ex ea
                                    commodo </p>
                                <form action="/" class="form-footer-st2 flex-three ">
                                    <input type="email" class="input-search" placeholder="Enter Mail">
                                    <button type="submit"><i class="icon-paper-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row footer-bottom">
                        <div class="col-md-6">
                            <p class="copy-right">Copyright© 2024 by <a href="#" class="text-main">Themesflat.</a> All
                                Rights Reserved</p>
                        </div>
                        <div class="col-md-6">
                            <ul class="policy-tern flex-six">
                                <li>
                                    <a href="terms-condition.html">Terms and conditions</a>
                                </li>
                                <li>
                                    <a href="help-center.html"> Privacy policy</a>
                                </li>
                                <li>
                                    <a href="login.html">Login / Signup</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            {{-- Footer End --}}
            
            <!-- Bottom -->
        </div>
        <!-- /#page -->
    </div>

    <!-- Modal Popup Bid -->

    <a id="scroll-top" class="button-go"></a>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="logo-canvas">
                <img src="./assets/images/logo.png" alt="image">
            </div>
            <p class="des">The world’s first and largest digital market
                for crypto collectibles and non-fungible
            </p>
            <ul class="canvas-info">
                <li class="flex-three">
                    <i class="icon-noun-mail-5780740-1"></i>
                    <p>Info@webmail.com</p>
                </li>
                <li class="flex-three">
                    <i class="icon-Group-9"></i>
                    <p>684 555-0102 490</p>
                </li>
                <li class="flex-three">
                    <i class="icon-Layer-19"></i>
                    <p>6391 Elgin St. Celina, NYC 10299</p>
                </li>
            </ul>
            <ul class="social flex-three">
                <li>
                    <a href="#">
                        <i class="icon-icon-2"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-icon-1"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-8"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-6"></i>
                    </a>
                </li>
            </ul>

        </div>
    </div>

    <!-- Javascript -->
    <script src="{{asset('user/js/jquery.min.js')}}"></script>
    <script src="{{asset('user/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('user/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('user/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('user/js/swiper.js')}}"></script>
    <script src="{{asset('user/js/plugin.js')}}"></script>
    <script src="{{asset('user/js/count-down.js')}}"></script>
    <script src="{{asset('user/js/countto.js')}}"></script>
    <script src="{{asset('user/js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('user/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('user/js/price-ranger.js')}}"></script>
    <script src="{{asset('user/js/textanimation.js')}}"></script>
    <script src="{{asset('user/js/wow.min.js')}}"></script>
    <script src="{{asset('user/js/shortcodes.js')}}"></script>
    <script src="{{asset('user/js/main.js')}}"></script>

</body>

</html>