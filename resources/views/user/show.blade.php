<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <meta charset="utf-8">
    <title>Vitour - Travel & Tour Booking HTML Template</title>

    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{asset('user/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/map.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/jquery.fancybox.min.css')}}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="assets/images/favico.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/favico.png">

</head>

<body class="body header-fixed ">

    <div class="preload preload-container">
        <svg class="pl" width="240" height="240" viewBox="0 0 240 240">
            <circle class="pl__ring pl__ring--a" cx="120" cy="120" r="105" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 660" stroke-dashoffset="-330" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--b" cx="120" cy="120" r="35" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 220" stroke-dashoffset="-110" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--c" cx="85" cy="120" r="70" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 440" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--d" cx="155" cy="120" r="70" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 440" stroke-linecap="round"></circle>
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

                <section>
                    <div class="tf-container full">
                        <div class="row">
                            @if ($lapangan->nama_kategori === 'Voli')
                                <div class="col-md-12">
                                    <img src="{{ asset('images/voley3-banner.jpg') }}" alt="image">
                                </div>
                            @endif
                            @if ($lapangan->nama_kategori === 'Futsal')
                                <div class="col-md-12">
                                    <img src="{{ asset('images/soccer-banner.jpg') }}" alt="image">
                                </div>
                            @endif
                        </div>
                    </div>
                </section>

                <section class="tour-single">
                    <div class="tf-container">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-auto">
                                {{-- Menu Atas --}}
                                <ul class="nav justify-content-between tab-tour-single" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-information-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-information" type="button" role="tab"
                                            aria-controls="pills-information" aria-selected="true"><i
                                                class="icon-Vector-51"></i> Information</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-shot-gallery-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-shot-gallery" type="button" role="tab"
                                            aria-controls="pills-shot-gallery" aria-selected="false"><i
                                                class="icon-image-gallery-1"></i> Shot Gallery</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row pd-main">
                            <div class="col-lg-12">
                                {{-- Content Bawah --}}
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-information" role="tabpanel"
                                        aria-labelledby="pills-information-tab" tabindex="0">
                                        <div class="row mb-50">
                                            <div class="col-lg-12">
                                                <div class="inner-heading-wrap flex-two">
                                                    <div class="inner-heading">
                                                        <span class="feature">{{$lapangan->nama_kategori}}</span>
                                                        <h2 class="title">{{ $lapangan->nama }}</h2>
                                                        <ul class="flex-three list-wrap-heading">
                                                            <li class="flex-three">
                                                                <i class="icon-18"></i>
                                                                <span>{{ $lapangan->lokasi }}</span>
                                                            </li>


                                                        </ul>

                                                    </div>
                                                    <div class="inner-price">
                                                        <p class="price-sale text-main">IDR. {{ $lapangan->harga }} <span
                                                                class="price">IDR. {{ $lapangan->harga }} </span></p>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="information-content-tour">
                                                    <div class="description-wrap mb-40">
                                                        <span class="description">Deskripsi:</span>
                                                        <p class="des">{{$lapangan->deskripsi}}</p>
                                                    </div>
                                                    <div class="description-wrap mb-40">
                                                        <span class="description">Advance Facilities</span>
                                                        <p class="des">Leave your guidebooks at home and dive into the
                                                            local cultures that make each destination so special. We’ll
                                                            connect you with our exclusive experiences. Each trip is
                                                            carefully crafted to let enjoy your vacation.</p>
                                                    </div>
                                                    <div class="expect-wrap">
                                                        <h4 class="title mb-40">Tour Amenities</h4>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <ul class="listing-icon">
                                                                    <li class="flex-three">
                                                                        <i class="icon-10"></i>
                                                                        <p>Air Conditioning</p>
                                                                    </li>
                                                                    <li class="flex-three">
                                                                        <i class="icon-10"></i>
                                                                        <p>Microwave</p>
                                                                    </li>
                                                                    <li class="flex-three">
                                                                        <i class="icon-10"></i>
                                                                        <p>Central Heating</p>
                                                                    </li>
                                                                    <li class="flex-three">
                                                                        <i class="icon-10"></i>
                                                                        <p>Central Heating</p>
                                                                    </li>
                                                                </ul>

                                                            </div>
                                                            <div class="col-md-4">
                                                                <ul class="listing-icon">
                                                                    <li class="flex-three">
                                                                        <i class="icon-10"></i>
                                                                        <p>Laundry</p>
                                                                    </li>
                                                                    <li class="flex-three">
                                                                        <i class="icon-10"></i>
                                                                        <p>Outdoor Shower</p>
                                                                    </li>
                                                                    <li class="flex-three">
                                                                        <i class="icon-10"></i>
                                                                        <p>Swimming Pool</p>
                                                                    </li>
                                                                    <li class="flex-three">
                                                                        <i class="icon-10"></i>
                                                                        <p>Wifi</p>
                                                                    </li>
                                                                </ul>

                                                            </div>
                                                            <div class="col-md-4">
                                                                <ul class="listing-icon">
                                                                    <li class="flex-three">
                                                                        <i class="icon-10"></i>
                                                                        <p>Window Covering</p>
                                                                    </li>
                                                                    <li class="flex-three">
                                                                        <i class="icon-10"></i>
                                                                        <p>Refrigerator</p>
                                                                    </li>
                                                                    <li class="flex-three">
                                                                        <i class="icon-10"></i>
                                                                        <p>Alarm System</p>
                                                                    </li>
                                                                    <li class="flex-three">
                                                                        <i class="icon-10"></i>
                                                                        <p>Window Coverings</p>
                                                                    </li>
                                                                </ul>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="side-bar-right">
                                                    <div class="sidebar-widget">
                                                        <h6 class="block-heading">Book This Tour</h6>
                                                        <form action="/" id="form-book-tour">
                                                            <div class="input-wrap mb-30">
                                                                <input type="date">
                                                            </div>
                                                            <div class="flex-two mb-30">
                                                                <span class="label">Time:</span>
                                                                <div class="radio">
                                                                    <input id="first" type="radio" name="numbers"
                                                                        value="first" checked>
                                                                    <label for="first">14.00</label>
                                                                    <input id="second" type="radio" name="numbers"
                                                                        value="second">
                                                                    <label for="second">16.00</label>
                                                                </div>
                                                            </div>
                                                            <div class="flex-two mb-40">
                                                                <span class="label">Total:</span>
                                                                <span class="total text-main">$130.00</span>
                                                            </div>
                                                            <button type="submit">Procced Booking</button>

                                                        </form>
                                                    </div>
                                                    <div class="sidebar-widget">
                                                        <h6 class="block-heading">Book With Confidence</h6>
                                                        <ul class="category-confidence">
                                                            <li class="flex-three">
                                                                <i class="icon-customer-service-1"></i>
                                                                <span>Customer care available 24/7</span>
                                                            </li>
                                                            <li class="flex-three">
                                                                <i class="icon-Vector-6"></i>
                                                                <span>Hand-picked Tours & Activities</span>
                                                            </li>
                                                            <li class="flex-three">
                                                                <i class="icon-insurance-1"></i>
                                                                <span>Free Travel Insureance</span>
                                                            </li>
                                                            <li class="flex-three">
                                                                <i class="icon-price-tag-1-1"></i>
                                                                <span>No-hassle best price guarantee</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    {{-- Foto foto disini --}}
                                    <div class="tab-pane fade" id="pills-shot-gallery" role="tabpanel"
                                        aria-labelledby="pills-shot-gallery-tab" tabindex="0">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="gallery-content-tour">
                                                    @foreach ($fotos as $foto)
                                                        @if ($loop->iteration == 1 || $loop->iteration % 2 == 1)
                                                            <div class="image-gallery{{ $loop->iteration }} image">
                                                                <img src="{{ asset('storage/foto-lapangan/'.$foto) }}" alt="image"
                                                                    class="item1">
                                                            </div>
                                                        @endif
                                                        @if ($loop->iteration == 2 || $loop->iteration % 2 == 0)
                                                            <div class="image-gallery{{ $loop->iteration }} image">
                                                                <img src="{{ asset('storage/foto-lapangan/'.$foto) }}" alt="image"
                                                                    class="item2">
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                    
                                                </div>

                                            </div>
                                            <div class="col-lg-4">
                                                <div class="side-bar-right">
                                                    <div class="sidebar-widget">
                                                        <h6 class="block-heading">Book This Tour</h6>
                                                        <form action="/" id="form-book-tour">
                                                            <div class="input-wrap mb-30">
                                                                <input type="date">
                                                            </div>
                                                            <div class="flex-two mb-30">
                                                                <span class="label">Time:</span>
                                                                <div class="radio">
                                                                    <input id="first" type="radio" name="numbers"
                                                                        value="first" checked>
                                                                    <label for="first">14.00</label>
                                                                    <input id="second" type="radio" name="numbers"
                                                                        value="second">
                                                                    <label for="second">16.00</label>
                                                                </div>
                                                            </div>
                                                            <div class="input-wrap-sellect mb-30">
                                                                <span class="label">Tickets:</span>
                                                                <div class="flex-two mb-15">
                                                                    <p>Children (0-12 years)$129.00</p>
                                                                    <div class="nice-select" tabindex="0">
                                                                        <span class="current">1</span>
                                                                        <ul class="list">
                                                                            <li data-value=""
                                                                                class="option selected focus">1</li>
                                                                            <li data-value="2" class="option">2</li>
                                                                            <li data-value="3" class="option">3</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-two mb-15">
                                                                    <p>Youth (13-17 years)$169.00</p>
                                                                    <div class="nice-select" tabindex="0">
                                                                        <span class="current">1</span>
                                                                        <ul class="list">
                                                                            <li data-value=""
                                                                                class="option selected focus">1</li>
                                                                            <li data-value="2" class="option">2</li>
                                                                            <li data-value="3" class="option">3</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-two">
                                                                    <p>Adult (18+ years)$189.00</p>
                                                                    <div class="nice-select" tabindex="0">
                                                                        <span class="current">1</span>
                                                                        <ul class="list">
                                                                            <li data-value=""
                                                                                class="option selected focus">1</li>
                                                                            <li data-value="2" class="option">2</li>
                                                                            <li data-value="3" class="option">3</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex-two mb-40">
                                                                <span class="label">Total:</span>
                                                                <span class="total text-main">$130.00</span>
                                                            </div>
                                                            <button type="submit">Procced Booking</button>

                                                        </form>
                                                    </div>
                                                    <div class="sidebar-widget">
                                                        <h6 class="block-heading">Book With Confidence</h6>
                                                        <ul class="category-confidence">
                                                            <li class="flex-three">
                                                                <i class="icon-customer-service-1"></i>
                                                                <span>Customer care available 24/7</span>
                                                            </li>
                                                            <li class="flex-three">
                                                                <i class="icon-Vector-6"></i>
                                                                <span>Hand-picked Tours & Activities</span>
                                                            </li>
                                                            <li class="flex-three">
                                                                <i class="icon-insurance-1"></i>
                                                                <span>Free Travel Insureance</span>
                                                            </li>
                                                            <li class="flex-three">
                                                                <i class="icon-price-tag-1-1"></i>
                                                                <span>No-hassle best price guarantee</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="sidebar-widget">
                                                        <h4 class="block-heading">Recent News</h4>
                                                        <div class="recent-post-list">
                                                            <div class="list-recent flex-three">
                                                                <a href="blog-details.html" class="recent-image">
                                                                    <img src="./assets/images/blog/re-blog1.jpg"
                                                                        alt="Image">
                                                                </a>
                                                                <div class="recent-info">
                                                                    <div class="start">
                                                                        <i class="icon-Star"></i>
                                                                        <i class="icon-Star"></i>
                                                                        <i class="icon-Star"></i>
                                                                        <i class="icon-Star"></i>
                                                                        <i class="icon-Star"></i>
                                                                    </div>
                                                                    <h4 class="title">
                                                                        <a href="blog-details.html">Walking the Amalfi
                                                                            Coast</a>
                                                                    </h4>
                                                                    <p>From <span class="text-main">$129.00</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="list-recent flex-three">
                                                                <a href="blog-details.html" class="recent-image">
                                                                    <img src="./assets/images/blog/re-blog2.jpg"
                                                                        alt="Image">
                                                                </a>
                                                                <div class="recent-info">
                                                                    <div class="start">
                                                                        <i class="icon-Star"></i>
                                                                        <i class="icon-Star"></i>
                                                                        <i class="icon-Star"></i>
                                                                        <i class="icon-Star"></i>
                                                                        <i class="icon-Star"></i>
                                                                    </div>
                                                                    <h4 class="title">
                                                                        <a href="blog-details.html">Walking the Amalfi
                                                                            Coast</a>
                                                                    </h4>
                                                                    <p>From <span class="text-main">$129.00</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="list-recent flex-three">
                                                                <a href="blog-details.html" class="recent-image">
                                                                    <img src="./assets/images/blog/re-blog3.jpg"
                                                                        alt="Image">
                                                                </a>
                                                                <div class="recent-info">
                                                                    <div class="start">
                                                                        <i class="icon-Star"></i>
                                                                        <i class="icon-Star"></i>
                                                                        <i class="icon-Star"></i>
                                                                        <i class="icon-Star"></i>
                                                                        <i class="icon-Star"></i>
                                                                    </div>
                                                                    <h4 class="title">
                                                                        <a href="blog-details.html">Walking the Amalfi
                                                                            Coast</a>
                                                                    </h4>
                                                                    <p>From <span class="text-main">$129.00</span></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>


                <section class="mb--93">
                    <div class="tf-container">
                        <div class="callt-to-action flex-two z-index3 relative">
                            <div class="callt-to-action-content flex-three">
                                @if ($lapangan->nama_kategori === 'Voli')
                                    <div class="image">
                                        <img src="{{ asset('images/volleyball-icon.png') }}" alt="Image">
                                    </div>
                                @endif
                                @if ($lapangan->nama_kategori === 'Futsal')
                                    <div class="image">
                                        <img src="{{ asset('images/soccer-ball-icon.png') }}" alt="Image">
                                    </div>
                                @endif
                                <div class="content">
                                    <h2 class="title-call">Ready to adventure and enjoy natural</h2>
                                    <p class="des">Lorem ipsum dolor sit amet, consectetur notted adipisicin</p>
                                </div>
                            </div>
                            <div class="callt-to-action-button">
                                <a href="#" class="get-call">Let,s get started</a>
                            </div>
                        </div>
                    </div>

                </section>

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
                        <i class="icon-x"></i>
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
    <script src="{{asset('user/js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('user/js/map.min.js')}}"></script>
    <script src="{{asset('user/js/map.js')}}"></script>
    <script src="{{asset('user/js/shortcodes.js')}}"></script>
    <script src="{{asset('user/js/main.js')}}"></script>

</body>

</html>