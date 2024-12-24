<!DOCTYPE html>
<html lang="en">

<?php    
	 $headTitle="Home Four | Online Charity Plateform";
     $css = '<link rel="stylesheet" href="' . asset('https://fonts.googleapis.com/css2?family=Castoro:ital@0;1&display=swap') . '"/>
             <link rel="stylesheet" href="' . asset('assets/vendors/oxpins-icons-two/style.css') . '"/>
             <link rel="stylesheet" href="' . asset('assets/css/oxpins-update.css') . '"/>
             <link rel="stylesheet" href="' . asset('assets/css/oxpins-color-2.css') . '"/>';

?>
<x-head headTitle='{{ $headTitle }}' css='{!! isset($css) ? $css : "" !!}'/>

<body class="customCursor">

    <x-customCursor/>

    <x-preloader/>

    <!-- /.preloader -->

    <div class="page-wrapper">
        <div class="topbar-five">
            <div class="container">
                <ul class="list-unstyled topbar-five__info">
                    <li class="topbar-five__info__item">
                        <i class="oxpins-icon-two-location-pin topbar-five__info__icon"></i>
                        <a href="https://www.google.com/maps">30 Commercial Road Fratton, Australia</a>
                    </li>
                    <li class="topbar-five__info__item">
                        <i class="oxpins-icon-two-envelop topbar-five__info__icon"></i>
                        <a href="mailto:shahzaibtariq559@gmail.com">shahzaibtariq559@gmail.com</a>
                    </li>
                    <li class="topbar-five__info__item">
                        <i class="oxpins-icon-two-phone topbar-five__info__icon"></i>
                        <a href="mailto:3035550105">(303) 555-0105</a>
                    </li>
                </ul><!-- /.list-unstyled topbar-five__info -->
            </div><!-- /.container -->
        </div>
        <header class="main-header-five">
            <nav class="main-menu main-header-five__inner">
                <div class="main-header-five__logo">
                   <a href="/"><img src="{{ asset('assets/images/resources/logo-4.png') }}" width="135" alt="oxpins"></a>
                </div>
                <div class="main-header-five__main-menu">
                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                    <ul class="main-menu__list">
                        <li class="megamenu current megamenu-clickable megamenu-clickable--toggler">
                                           <a href="/">Demos</a>
                                            <ul>
                                                <li>
                                                    <div class="megamenu-popup">
                                                        <a href="#" class="megamenu-clickable--close"><span class="icon-close"></span></a>
                                                        <!-- /.megamenu-clickable--close -->
                                                        <div class="megamenu-popup__content">
                                                            <div class="demo-one">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-md-6 col-lg-4">
                                                                            <div class="demo-one__card">
                                                                                <div class="demo-one__image">
                                                                                    <img width="370" height="431" src="{{ asset('assets/images/home-showcase/home-1-1.png') }}"
                                                                                        alt="Home Page 01">
                                                                                    <div class="demo-one__btns">
                                                                                        <a href="/" class="thm-btn">Multi Page </a>
                                                                                        <a href="{{ route('indexOnePage') }}" class="thm-btn">One Page</a>
                                                                                        <a href="{{ route('indexDark') }}" class="thm-btn">Dark Page</a>
                                                                                    </div><!-- /.demo-one__btns -->
                                                                                </div><!-- /.demo-one__image -->
                                                                                <div class="demo-one__content">
                                                                                    <h3 class="demo-one__title">
                                                                                       <a href="/">Home Page 01</a>
                                                                                    </h3><!-- /.demo-one__title -->
                                                                                </div><!-- /.demo-one__content -->
                                                                            </div><!-- /.demo-one__card -->
                                                                        </div><!-- /.col-md-6 -->
                                                                        <div class="col-md-6 col-lg-4">
                                                                            <div class="demo-one__card">
                                                                                <div class="demo-one__image">
                                                                                    <img width="370" height="431" src="{{ asset('assets/images/home-showcase/home-1-2.png') }}"
                                                                                        alt="Home Page 02">
                                                                                    <div class="demo-one__btns">
                                                                                        <a href="{{ route('index2') }}" class="thm-btn">Multi Page </a>
                                                                                        <a href="{{ route('index2OnePage') }}" class="thm-btn">One
                                                                                            Page</a>
                                                                                        <a href="{{ route('index2Dark') }}" class="thm-btn">Dark Page</a>
                                                                                    </div><!-- /.demo-one__btns -->
                                                                                </div><!-- /.demo-one__image -->
                                                                                <div class="demo-one__content">
                                                                                    <h3 class="demo-one__title">
                                                                                        <a href="{{ route('index2') }}">Home Page 02</a>
                                                                                    </h3><!-- /.demo-one__title -->
                                                                                </div><!-- /.demo-one__content -->
                                                                            </div><!-- /.demo-one__card -->
                                                                        </div><!-- /.col-md-6 -->
                                                                        <div class="col-md-6 col-lg-4">
                                                                            <div class="demo-one__card">
                                                                                <div class="demo-one__image">
                                                                                    <img width="370" height="431" src="{{ asset('assets/images/home-showcase/home-1-3.png') }}"
                                                                                        alt="Home page 03">
                                                                                    <div class="demo-one__btns">
                                                                                        <a href="{{ route('index3') }}" class="thm-btn">Multi Page </a>
                                                                                        <a href="{{ route('index3OnePage') }}" class="thm-btn">One
                                                                                            Page</a>
                                                                                        <a href="{{ route('index3Dark') }}" class="thm-btn">Dark Page</a>
                                                                                    </div><!-- /.demo-one__btns -->
                                                                                </div><!-- /.demo-one__image -->
                                                                                <div class="demo-one__content">
                                                                                    <h3 class="demo-one__title">
                                                                                        <a href="{{ route('index3') }}">Home Page 03</a>
                                                                                    </h3><!-- /.demo-one__title -->
                                                                                </div><!-- /.demo-one__content -->
                                                                            </div><!-- /.demo-one__card -->
                                                                        </div><!-- /.col-md-6 -->
                                                                        <div class="col-md-6 col-lg-4">
                                                                            <div class="demo-one__card">
                                                                                <div class="demo-one__image">
                                                                                    <img width="370" height="431" src="{{ asset('assets/images/home-showcase/home-1-4.png') }}"
                                                                                        alt="Home page 04">
                                                                                    <div class="demo-one__btns">
                                                                                        <a href="{{ route('index4') }}" class="thm-btn">Multi Page </a>
                                                                                        <a href="{{ route('index4OnePage') }}" class="thm-btn">One
                                                                                            Page</a>
                                                                                        <a href="{{ route('index4Dark') }}" class="thm-btn">Dark Page</a>
                                                                                    </div><!-- /.demo-one__btns -->
                                                                                </div><!-- /.demo-one__image -->
                                                                                <div class="demo-one__content">
                                                                                    <h3 class="demo-one__title">
                                                                                        <a href="{{ route('index4') }}">Home Page 04</a>
                                                                                    </h3><!-- /.demo-one__title -->
                                                                                </div><!-- /.demo-one__content -->
                                                                            </div><!-- /.demo-one__card -->
                                                                        </div><!-- /.col-md-6 -->
                                                                        <div class="col-md-6 col-lg-4">
                                                                            <div class="demo-one__card">
                                                                                <div class="demo-one__image">
                                                                                    <img width="370" height="431" src="{{ asset('assets/images/home-showcase/home-1-5.png') }}"
                                                                                        alt="Home page 05">
                                                                                    <div class="demo-one__btns">
                                                                                        <a href="{{ route('index5') }}" class="thm-btn">Multi Page </a>
                                                                                        <a href="{{ route('index5OnePage') }}" class="thm-btn">One
                                                                                            Page</a>
                                                                                        <a href="{{ route('index5OnePage') }}" class="thm-btn">Dark Page</a>
                                                                                    </div><!-- /.demo-one__btns -->
                                                                                </div><!-- /.demo-one__image -->
                                                                                <div class="demo-one__content">
                                                                                    <h3 class="demo-one__title">
                                                                                        <a href="{{ route('index5') }}">Home Page 05</a>
                                                                                    </h3><!-- /.demo-one__title -->
                                                                                </div><!-- /.demo-one__content -->
                                                                            </div><!-- /.demo-one__card -->
                                                                        </div><!-- /.col-md-6 -->
                                                                        <div class="col-md-6 col-lg-4">
                                                                            <div class="demo-one__card">
                                                                                <div class="demo-one__image">
                                                                                    <img width="370" height="431" src="{{ asset('assets/images/home-showcase/home-1-6.png') }}"
                                                                                        alt="Home Boxed">
                                                                                    <div class="demo-one__btns">
                                                                                        <a href="{{ route('indexBoxed') }}" class="thm-btn">View
                                                                                            Page</a>
                                                                                    </div><!-- /.demo-one__btns -->
                                                                                </div><!-- /.demo-one__image -->
                                                                                <div class="demo-one__content">
                                                                                    <h3 class="demo-one__title">
                                                                                        <a href="{{ route('indexBoxed') }}">Home Boxed</a>
                                                                                    </h3><!-- /.demo-one__title -->
                                                                                </div><!-- /.demo-one__content -->
                                                                            </div><!-- /.demo-one__card -->
                                                                        </div><!-- /.col-md-6 -->
                                                                        <div class="col-md-6 col-lg-4">
                                                                            <div class="demo-one__card">
                                                                                <div class="demo-one__image">
                                                                                    <img width="370" height="431" src="{{ asset('assets/images/home-showcase/home-1-7.png') }}"
                                                                                        alt="Home RTL">
                                                                                    <div class="demo-one__btns">
                                                                                        <a href="index-rtl#googtrans(en%7car)" class="thm-btn">View Page</a>
                                                                                    </div><!-- /.demo-one__btns -->
                                                                                </div><!-- /.demo-one__image -->
                                                                                <div class="demo-one__content">
                                                                                    <h3 class="demo-one__title">
                                                                                        <a href="index-rtl#googtrans(en%7car)">Home RTL</a>
                                                                                    </h3><!-- /.demo-one__title -->
                                                                                </div><!-- /.demo-one__content -->
                                                                            </div><!-- /.demo-one__card -->
                                                                        </div><!-- /.col-md-6 -->
                                                                    </div><!-- /.row -->
                                                                </div><!-- /.container -->
                                                            </div><!-- /.demos-one -->
                                                        </div><!-- /.megamenu-popup__content -->
                                                    </div><!-- /.megamenu-popup -->
                                                </li>
                                            </ul>
                                        </li>
                        <li class="dropdown">
                            <a href="#">Pages</a>
                            <ul>
                                <li><a href="{{ route('about') }}">About</a></li>
                                 <li><a href="{{ route('volunteer') }}">Volunteer</a></li>
                                <li><a href="#">Become volunteer</a></li>
                                <li><a href="{{ route('volunteerCarousel') }}">Volunteer carousel</a>
                                </li>
                                <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                <li><a href="{{ route('galleryCarousel') }}">Gallery carousel</a></li>
                                <li><a href="{{ route('faq') }}">FAQs</a></li>
                                <li><a href="{{ route('errorPage') }}">404 Error</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#">Donations</a>
                            <ul>
                                <li><a href="{{ route('donation') }}">Donation</a></li>
                                <li><a href="{{ route('donationsList') }}">Donation list</a></li>
                                <li><a href="{{ route('donationCarousel') }}">Donation carousel</a></li>
                                <li><a href="{{ route('donationDetails') }}">Donation details</a></li>
                                <li><a href="{{ route('donateNow') }}">Donate Now</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#">Events</a>
                            <ul>
                                <li><a href="{{ route('events') }}">Events</a></li>
                                <li><a href="{{ route('eventsCarousel') }}">Events carousel</a></li>
                                <li><a href="{{ route('eventDetails') }}">Event details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#">News</a>
                            <ul>
                                <li><a href="{{ route('news') }}">News</a></li>
                                <li><a href="{{ route('newsCarousel') }}">News carousel</a></li>
                               <li><a href="{{ route('newsSidebar') }}">News right sidebar</a></li>
                                <li><a href="{{ route('newsSidebarLeft') }}">News left sidebar</a></li>
                                <li><a href="{{ route('newsDetails') }}">News details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('products') }}">Shop</a>
                            <ul>
                               <li><a href="{{ route('products') }}">Shop</a></li>
                               <li><a href="{{ route('productDetails') }}">Product details</a></li>
                               <li><a href="{{ route('cart') }}">Cart</a></li>
                               <li><a href="{{ route('checkout') }}">Checkout</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>    
                <div class="main-header-five__btn">
                    <a href="{{ route('contact') }}" class="thm-btn-two">Appoinment</a>
                    <div class="main-header-five__btn__border"></div>
                    <a href="#" class="main-header-five__search search-toggler"><i class="icon-magnifying-glass"></i></a>
                    <a href="{{ route('cart') }}" class="main-header-five__cart"><i class="icon-shopping-cart"></i></a>
                    <div class="main-header-five__social">
                        <a href="https://facebook.com">
                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                            <span class="sr-only">Facebook</span>
                        </a>
                        <a href="https://twitter.com">
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                            <span class="sr-only">Twitter</span>
                        </a>
                        <a href="https://pinterest.com">
                            <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                            <span class="sr-only">Pinterest</span>
                        </a>
                        <a href="https://instagram.com">
                            <i class="fab fa-instagram" aria-hidden="true"></i>
                            <span class="sr-only">Instagram</span>
                        </a>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu main-header-five">
            <div class="sticky-header__content main-header-five__inner"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Main Slider Start-->
        <section class="main-slider-five clearfix">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-five__pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider-five__nav__next",
                "prevEl": "#main-slider-five__nav__prev"
                },
                "autoplay": {
                "delay": 7000
                }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="main-slider-five__bg" style="background-image:url('{{ asset('assets/images/backgrounds/main-slider-5-1.jpg') }}')"></div>
                        <div class="main-slider-five__shape" style="background-image:url('{{ asset('assets/images/shapes/main-slider-5-shape.png') }}')"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-five__content">
                                        <p class="main-slider-five__sub-title"><span><i>Enriching Happiness</i></span></p>
                                        <h2 class="main-slider-five__title">
                                            Taking Care of the<br> Elderly Makes Happy
                                        </h2>
                                        <p class="main-slider-five__text">
                                            There are many variations of passages of Lorem Ip available, but<br> the majority have suffered aeration in some form,
                                        </p>
                                        <div class="main-slider-five__btn-box">
                                            <a href="{{ route('contact') }}" class="thm-btn-two">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- item -->
                    <div class="swiper-slide">
                        <div class="main-slider-five__bg" style="background-image:url('{{ asset('assets/images/backgrounds/main-slider-5-2.jpg') }}')"></div>
                        <div class="main-slider-five__shape" style="background-image:url('{{ asset('assets/images/shapes/main-slider-5-shape.png') }}')"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-five__content">
                                        <p class="main-slider-five__sub-title"><span><i>Enriching Happiness</i></span></p>
                                        <h2 class="main-slider-five__title">
                                            Taking Care of the<br> Elderly Makes Happy
                                        </h2>
                                        <p class="main-slider-five__text">
                                            There are many variations of passages of Lorem Ip available, but<br> the majority have suffered aeration in some form,
                                        </p>
                                        <div class="main-slider-five__btn-box">
                                            <a href="{{ route('contact') }}" class="thm-btn-two">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- item -->
                </div>
                <!-- If we need navigation buttons -->
                <div class="main-slider-five__nav">
                    <div class="swiper-button-prev" id="main-slider-five__nav__next">
                        <i class="oxpins-icon-two-arrow-left"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider-five__nav__prev">
                        <i class="oxpins-icon-two-arrow-right"></i>
                    </div>
                </div>
            </div>
        </section>
        <!--Main Slider End-->

        <!--Feature Five Start-->
        <section class="feature-five">
            <div class="container">
                <div class="feature-five__inner" style="background-image:url('{{ asset('assets/images/shapes/feature-5-bg.png') }}')">
                    <div class="feature-five__item">
                        <div class="feature-five__item__icon">
                            <span class="oxpins-icon-two-marketing-agent"></span>
                        </div>
                        <h3 class="feature-five__item__title">World Class Senior Service</h3>
                        <p class="feature-five__item__text">
                            There are many free variations of passages of Lorem Ip fr available, but the majority
                        </p>
                        <a class="feature-five__item__rm" href="{{ route('contact') }}"></a>
                    </div><!-- fature-item -->
                    <div class="feature-five__item">
                        <div class="feature-five__item__icon">
                            <span class="oxpins-icon-two-health-insurance"></span>
                        </div>
                        <h3 class="feature-five__item__title">Trusted Quality Care Solutions</h3>
                        <p class="feature-five__item__text">
                            There are many free variations of passages of Lorem Ip fr available, but the majority
                        </p>
                        <a class="feature-five__item__rm"href="{{ route('events') }}"></a>
                    </div><!-- fature-item -->
                    <div class="feature-five__item">
                        <div class="feature-five__item__icon">
                            <span class="oxpins-icon-two-nurse"></span>
                        </div>
                        <h3 class="feature-five__item__title">Professional & Expert Nurse</h3>
                        <p class="feature-five__item__text">
                            There are many free variations of passages of Lorem Ip fr available, but the majority
                        </p>
                        <a class="feature-five__item__rm"href="{{ route('volunteer') }}"></a>
                    </div><!-- fature-item -->
                </div>
            </div>
        </section>
        <!--Feature Five End-->

        <!--About Six Start-->
        <section class="about-six">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="about-six__content">
                            <div class="section-title section-title--home-five">
                                <span class="section-title__tagline">
                                    <i class="section-title__tagline__left-icon oxpins-icon-two-heart"></i>
                                    About Us
                                    <i class="section-title__tagline__right-icon oxpins-icon-two-heart"></i>
                                </span>
                                <h2 class="section-title__title">We Provide a Comfortable living and Ideal Home Environment</h2>
                            </div>
                            <p class="about-six__content__text">
                                There are many variations of passages of Lorem Ipsum avagtilable, but the majority have suffered alteration in some 
                                There are many variations of passages of Lorem Ipsum
                            </p>
                            <ul class="about-six__content__list">
                                <li><i class="oxpins-icon-two-check"></i>Many variations of passages of Lorem Ipsum</li>
                                <li><i class="oxpins-icon-two-check"></i>Mauris nulla nisl, pellentesque vetae.</li>
                                <li><i class="oxpins-icon-two-check"></i>Expert Many variations Teacher</li>
                            </ul>
                            <a href="{{ route('donateNow') }}" class="thm-btn-two">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-six__image">
                            <div class="about-six__image__one wow fadeInUp" data-wow-delay="100ms">
                                <img src="{{ asset('assets/images/resources/about-6-1.jpg') }}" alt="oxpins">
                            </div>
                            <div class="about-six__image__two wow fadeInUp" data-wow-delay="200ms">
                                <img src="{{ asset('assets/images/resources/about-6-2.jpg') }}" alt="oxpins">
                            </div>
                            <div class="about-six__image__expriance wow fadeInUp" data-wow-delay="300ms">
                                <div class="about-six__image__expriance__number">
                                    <span class="odometer" data-count="30">00</span>
                                    <span>+</span>
                                </div>
                                <h5 class="about-six__image__expriance__text">Years of <br>Experience</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Six End-->

        <!--Services Start-->
        <section class="service-one" style="background-image:url('{{ asset('assets/images/shapes/service-bg-1.jpg') }}')">
            <div class="service-one__shape" style="background-image:url('{{ asset('assets/images/shapes/service-shape-1.png') }}')"></div>
            <div class="container">
                <div class="section-title section-title--home-five text-center">
                    <span class="section-title__tagline">
                        <i class="section-title__tagline__left-icon oxpins-icon-two-heart"></i>
                        Servoce
                        <i class="section-title__tagline__right-icon oxpins-icon-two-heart"></i>
                    </span>
                    <h2 class="section-title__title">We’re Offering the Best <br>Services to You</h2>
                </div>
                <div class="row gutter-y-30">
                    <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="service-one__item">
                            <div class="service-one__item__normal">
                                <div class="service-one__item__normal__icon"><i class="oxpins-icon-two-resident"></i></div>
                                <h3 class="service-one__item__normal__title">Resident Care</h3>
                                <p class="service-one__item__normal__text">There are many variations of passages  Lorem Ipiosum aagtilable but the</p>
                                <div class="service-one__item__normal__thumb">
                                    <img src="{{ asset('assets/images/resources/service-1-1-normal.jpg') }}" alt="oxpins">
                                </div>
                            </div><!-- feature-normal-content -->
                            <div class="service-one__item__hover" style="background-image:url('{{ asset('assets/images/resources/service-1-1.jpg') }}')">
                                <div class="service-one__item__hover__icon"><i class="oxpins-icon-two-resident"></i></div>
                                <h3 class="service-one__item__hover__title">Resident Care</h3>
                                <p class="service-one__item__hover__text">There are many variations of passages  Lorem Ipiosum aagtilable but the</p>
                                <div class="service-one__item__hover__btn"><a href="{{ route('about') }}"><i class="oxpins-icon-two-arrow-right-two"></i></a></div>
                            </div><!-- feature-hover-content -->
                        </div><!-- service-item -->
                    </div>
                    <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="service-one__item">
                            <div class="service-one__item__normal">
                                <div class="service-one__item__normal__icon"><i class="oxpins-icon-two-nurse"></i></div>
                                <h3 class="service-one__item__normal__title">Expert Nursing</h3>
                                <p class="service-one__item__normal__text">There are many variations of passages  Lorem Ipiosum aagtilable but the</p>
                                <div class="service-one__item__normal__thumb">
                                    <img src="{{ asset('assets/images/resources/service-1-2-normal.jpg') }}" alt="oxpins">
                                </div>
                            </div><!-- feature-normal-content -->
                            <div class="service-one__item__hover" style="background-image:url('{{ asset('assets/images/resources/service-1-2.jpg') }}')">
                                <div class="service-one__item__hover__icon"><i class="oxpins-icon-two-nurse"></i></div>
                                <h3 class="service-one__item__hover__title">Expert Nursing</h3>
                                <p class="service-one__item__hover__text">There are many variations of passages  Lorem Ipiosum aagtilable but the</p>
                                <div class="service-one__item__hover__btn"><a href="{{ route('about') }}"><i class="oxpins-icon-two-arrow-right-two"></i></a></div>
                            </div><!-- feature-hover-content -->
                        </div><!-- service-item -->
                    </div>
                    <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="service-one__item">
                            <div class="service-one__item__normal">
                                <div class="service-one__item__normal__icon"><i class="oxpins-icon-two-elderly"></i></div>
                                <h3 class="service-one__item__normal__title">Elder Care</h3>
                                <p class="service-one__item__normal__text">There are many variations of passages  Lorem Ipiosum aagtilable but the</p>
                                <div class="service-one__item__normal__thumb">
                                    <img src="{{ asset('assets/images/resources/service-1-3-normal.jpg') }}" alt="oxpins">
                                </div>
                            </div><!-- feature-normal-content -->
                            <div class="service-one__item__hover" style="background-image:url('{{ asset('assets/images/resources/service-1-3.jpg') }}')">
                                <div class="service-one__item__hover__icon"><i class="oxpins-icon-two-elderly"></i></div>
                                <h3 class="service-one__item__hover__title">Elder Care</h3>
                                <p class="service-one__item__hover__text">There are many variations of passages  Lorem Ipiosum aagtilable but the</p>
                                <div class="service-one__item__hover__btn"><a href="{{ route('about') }}"><i class="oxpins-icon-two-arrow-right-two"></i></a></div>
                            </div><!-- feature-hover-content -->
                        </div><!-- service-item -->
                    </div>
                    <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="service-one__item">
                            <div class="service-one__item__normal">
                                <div class="service-one__item__normal__icon"><i class="oxpins-icon-two-diet"></i></div>
                                <h3 class="service-one__item__normal__title">Diet & Nutrition</h3>
                                <p class="service-one__item__normal__text">There are many variations of passages  Lorem Ipiosum aagtilable but the</p>
                                <div class="service-one__item__normal__thumb">
                                    <img src="{{ asset('assets/images/resources/service-1-4-normal.jpg') }}" alt="oxpins">
                                </div>
                            </div><!-- feature-normal-content -->
                            <div class="service-one__item__hover" style="background-image:url('{{ asset('assets/images/resources/service-1-4.jpg') }}')">
                                <div class="service-one__item__hover__icon"><i class="oxpins-icon-two-diet"></i></div>
                                <h3 class="service-one__item__hover__title">Diet & Nutrition</h3>
                                <p class="service-one__item__hover__text">There are many variations of passages  Lorem Ipiosum aagtilable but the</p>
                                <div class="service-one__item__hover__btn"><a href="{{ route('about') }}"><i class="oxpins-icon-two-arrow-right-two"></i></a></div>
                            </div><!-- feature-hover-content -->
                        </div><!-- service-item -->
                    </div>
                </div>
            </div>
        </section>
        <!--Services End-->

        <!--Causes Five Start-->
        <section class="causes-five">
            <div class="container">
                <div class="section-title section-title--home-five text-center">
                    <span class="section-title__tagline">
                        <i class="section-title__tagline__left-icon oxpins-icon-two-heart"></i>
                        Help & Donate
                        <i class="section-title__tagline__right-icon oxpins-icon-two-heart"></i>
                    </span>
                    <h2 class="section-title__title">We Enrich Lives by Respecting <br>and Caring for Them</h2>
                </div>
                <div class="row gutter-y-30">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="causes-five__single">
                            <div class="causes-five__img">
                                <img src="{{ asset('assets/images/resources/causes-5-1.jpg') }}" alt="oxpins">
                            </div>
                            <div class="causes-five__content">
                                <div class="causes-five__cat">
                                    <p>Elderly</p>
                                </div>
                                <h3 class="causes-five__title">
                                    <a href="{{ route('donationDetails') }}">Support Seniors Every Step of the Way</a>
                                </h3>
                                <div class="causes-five__progress">
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="36%">
                                            <div class="count-text">36%</div>
                                        </div>
                                    </div>
                                    <div class="causes-five__goals">
                                        <p class="causes-five__goals__price">$4,599 <span>Raised</span></p>
                                        <p class="causes-five__goals__price">$5,000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- item -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="causes-five__single">
                            <div class="causes-five__img">
                                <img src="{{ asset('assets/images/resources/causes-5-2.jpg') }}" alt="oxpins">
                            </div>
                            <div class="causes-five__content">
                                <div class="causes-five__cat">
                                    <p>Medical</p>
                                </div>
                                <h3 class="causes-five__title">
                                    <a href="{{ route('donationDetails') }}">We Give Seniors The Love They Deserve</a>
                                </h3>
                                <div class="causes-five__progress">
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="50%">
                                            <div class="count-text">50%</div>
                                        </div>
                                    </div>
                                    <div class="causes-five__goals">
                                        <p class="causes-five__goals__price">$4,599 <span>Raised</span></p>
                                        <p class="causes-five__goals__price">$5,000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- item -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="causes-five__single">
                            <div class="causes-five__img">
                                <img src="{{ asset('assets/images/resources/causes-5-3.jpg') }}" alt="oxpins">
                            </div>
                            <div class="causes-five__content">
                                <div class="causes-five__cat">
                                    <p>Care</p>
                                </div>
                                <h3 class="causes-five__title">
                                    <a href="{{ route('donationDetails') }}">The Nation's No.1 esse Cillum Home Care</a>
                                </h3>
                                <div class="causes-five__progress">
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="70%">
                                            <div class="count-text">70%</div>
                                        </div>
                                    </div>
                                    <div class="causes-five__goals">
                                        <p class="causes-five__goals__price">$4,599 <span>Raised</span></p>
                                        <p class="causes-five__goals__price">$5,000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- item -->
                </div>
                <div class="causes-five__bottom">
                    <h5 class="causes-five__bottom__title">Support Seniors Every Step of the Way</h5>
                    <a href="{{ route('donateNow') }}" class="thm-btn-two">Donate Now</a>
                </div>
            </div>
        </section>
        <!--Causes Five End-->

        <!--Become Volunteer Start-->
        <section class="become-volunteer-three">
            <div class="container">
                <div class="become-volunteer-three__inner" style="background-image:url('{{ asset('assets/images/shapes/become-volunteer-shape-3.png') }}')">
                    <div class="become-volunteer-three__inner__shape"></div>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="become-volunteer-three__content">
                                <h2 class="become-volunteer-three__title">We Have a Dedicated<br> & Professionals Doctors</h2>
                                <p class="become-volunteer-three__text">
                                    There are many variations of passages of Lorem Ipsum avagtilable, but the majority have suffered 
                                    alteration in some  There are many variations of passages
                                </p>
                                <a href="{{ route('contact') }}" class="thm-btn-two">Get In Touch</a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="become-volunteer-three__image">
                                <img src="{{ asset('assets/images/resources/become-volunteer-three.png') }}" alt="oxpins">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Become Volunteer End-->

        <!--Testimonial Five Start-->
        <section class="testimonial-five" style="background-image:url('{{ asset('assets/images/shapes/testimonial-bg-5.png') }}')">
            <div class="container">
                <div class="section-title section-title--home-five text-left">
                    <span class="section-title__tagline">
                        <i class="section-title__tagline__left-icon oxpins-icon-two-heart"></i>
                        Testimonial
                        <i class="section-title__tagline__right-icon oxpins-icon-two-heart"></i>
                    </span>
                    <h2 class="section-title__title">What They’re Talking <br> About oxpins</h2>
                </div>
                <div class="testimonial-five__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                    "loop": true,
                    "autoplay": true,
                    "margin": 30,
                    "nav": true,
                    "dots": false,
                    "smartSpeed": 500,
                    "navText": ["<span class=\"oxpins-icon-two-arrow-left\"></span>","<span class=\"oxpins-icon-two-arrow-right\"></span>"],
                    "responsive": {
                        "0": {
                            "items": 1
                        },
                        "992": {
                            "items": 2
                        }
                    }
                    }'>
                    <div class="item">
                        <!--Testimonial Item Start-->
                        <div class="testimonial-five__single">
                            <div class="testimonial-five__single__shape" style="background-image:url('{{ asset('assets/images/shapes/testimonial-5-shape.png') }}')"></div>
                            <div class="testimonial-five__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p class="testimonial-five__text">
                                posuere luctus orci. Donec vitae mattis quam vitae tempor arcu. Aenean non odio porttitor, convallis erat sit amet.  including.
                            </p>
                            <div class="testimonial-five__author">
                                <img src="{{ asset('assets/images/testimonial/testimonial-5-1.jpg') }}" alt="oxpins">
                                <h3 class="testimonial-five__title">Kenneth S.</h3>
                                <p class="testimonial-five__designation">Volunteer</p>
                            </div>
                            <div class="testimonial-five__single__quote" style="background-image:url('{{ asset('assets/images/shapes/testimonial-5-quote.png') }}')"></div>
                        </div>
                        <!--Testimonial Item End-->
                    </div>
                    <div class="item">
                        <!--Testimonial Item Start-->
                        <div class="testimonial-five__single">
                            <div class="testimonial-five__single__shape" style="background-image:url('{{ asset('assets/images/shapes/testimonial-5-shape.png') }}')"></div>
                            <div class="testimonial-five__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p class="testimonial-five__text">
                                posuere luctus orci. Donec vitae mattis quam vitae tempor arcu. Aenean non odio porttitor, convallis erat sit amet.  including.
                            </p>
                            <div class="testimonial-five__author">
                                <img src="{{ asset('assets/images/testimonial/testimonial-5-2.jpg') }}" alt="oxpins">
                                <h3 class="testimonial-five__title">Jhon Smith</h3>
                                <p class="testimonial-five__designation">Volunteer</p>
                            </div>
                            <div class="testimonial-five__single__quote" style="background-image:url('{{ asset('assets/images/shapes/testimonial-5-quote.png') }}')"></div>
                        </div>
                        <!--Testimonial Item End-->
                    </div>
                    <div class="item">
                        <!--Testimonial Item Start-->
                        <div class="testimonial-five__single">
                            <div class="testimonial-five__single__shape" style="background-image:url('{{ asset('assets/images/shapes/testimonial-5-shape.png') }}')"></div>
                            <div class="testimonial-five__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p class="testimonial-five__text">
                                posuere luctus orci. Donec vitae mattis quam vitae tempor arcu. Aenean non odio porttitor, convallis erat sit amet.  including.
                            </p>
                            <div class="testimonial-five__author">
                                <img src="{{ asset('assets/images/testimonial/testimonial-5-3.jpg') }}" alt="oxpins">
                                <h3 class="testimonial-five__title">Jhon Doe</h3>
                                <p class="testimonial-five__designation">Volunteer</p>
                            </div>
                            <div class="testimonial-five__single__quote" style="background-image:url('{{ asset('assets/images/shapes/testimonial-5-quote.png') }}')"></div>
                        </div>
                        <!--Testimonial Item End-->
                    </div>
                    <div class="item">
                        <!--Testimonial Item Start-->
                        <div class="testimonial-five__single">
                            <div class="testimonial-five__single__shape" style="background-image:url('{{ asset('assets/images/shapes/testimonial-5-shape.png') }}')"></div>
                            <div class="testimonial-five__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p class="testimonial-five__text">
                                posuere luctus orci. Donec vitae mattis quam vitae tempor arcu. Aenean non odio porttitor, convallis erat sit amet.  including.
                            </p>
                            <div class="testimonial-five__author">
                                <img src="{{ asset('assets/images/testimonial/testimonial-5-4.jpg') }}" alt="oxpins">
                                <h3 class="testimonial-five__title">Mike Smith</h3>
                                <p class="testimonial-five__designation">Volunteer</p>
                            </div>
                            <div class="testimonial-five__single__quote" style="background-image:url('{{ asset('assets/images/shapes/testimonial-5-quote.png') }}')"></div>
                        </div>
                        <!--Testimonial Item End-->
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial Five End-->

        <!--Why Choose Start-->
        <section class="why-choose-one" style="background-image:url('{{ asset('assets/images/shapes/why-choose-bg.png') }}')">
            <div class="why-choose-one__image">
                <img src="{{ asset('assets/images/resources/why-choose-1.jpg') }}" alt="oxpins">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        
                    </div>
                    <div class="col-xl-6">
                        <div class="why-choose-one__content">
                            <div class="section-title section-title--home-five">
                                <span class="section-title__tagline">
                                    <i class="section-title__tagline__left-icon oxpins-icon-two-heart"></i>
                                    Why Choose Us
                                    <i class="section-title__tagline__right-icon oxpins-icon-two-heart"></i>
                                </span>
                                <h2 class="section-title__title">Why You Should Choose Our <br>Oxpin Non Profit</h2>
                            </div>
                            <p class="why-choose-one__content__text">
                                There are many variations of passages of Lorem Ipsum avagtilable, but<br> the majority have suffered alteration in some
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row gutter-y-30">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="why-choose-one__box">
                            <div class="why-choose-one__box__icon"><i class="oxpins-icon-two-check-up"></i></div>
                            <h4 class="why-choose-one__box__title">Free Medical Check Up</h4>
                            <p class="why-choose-one__box__text">
                                There are many free variations of passages of Lorem Ip fr available, but the majority
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="why-choose-one__box">
                            <div class="why-choose-one__box__icon"><i class="oxpins-icon-two-hospice"></i></div>
                            <h4 class="why-choose-one__box__title">Hospice Care</h4>
                            <p class="why-choose-one__box__text">
                                There are many free variations of passages of Lorem Ip fr available, but the majority
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="why-choose-one__box">
                            <div class="why-choose-one__box__icon"><i class="oxpins-icon-two-money-bag"></i></div>
                            <h4 class="why-choose-one__box__title">Reasonable Cost Service</h4>
                            <p class="why-choose-one__box__text">
                                There are many free variations of passages of Lorem Ip fr available, but the majority
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Why Choose End-->

        <!--Counter Three Start-->
        <section class="counter-three">
            <div class="counter-three__bg" style="background-image:url('{{ asset('assets/images/shapes/counter-bg-3.jpg') }}')"></div>
            <div class="container">
                <ul class="list-unstyled counter-three__list">
                    <li class="counter-three__single">
                        <div class="counter-three__icon"><i class="oxpins-icon-two-elder"></i></div>
                        <h3 class="counter-three__count-box">
                            <span class="odometer" data-count="80">00</span>
                            <span>M</span>
                        </h3>
                        <p class="counter-three__text">Happy Senior</p>
                    </li>
                    <li class="counter-three__single">
                        <div class="counter-three__icon"><i class="oxpins-icon-two-voluntary-work"></i></div>
                        <h3 class="counter-three__count-box">
                            <span class="odometer" data-count="59">00</span>
                            <span>k</span>
                        </h3>
                        <p class="counter-three__text">Volunteers</p>
                    </li>
                    <li class="counter-three__single">
                        <div class="counter-three__icon"><i class="oxpins-icon-two-nurse"></i></div>
                        <h3 class="counter-three__count-box">
                            <span class="odometer" data-count="33">00</span>
                            <span>k</span>
                        </h3>
                        <p class="counter-three__text">Nursing Staff</p>
                    </li>
                    <li class="counter-three__single">
                        <div class="counter-three__icon"><i class="oxpins-icon-two-medical"></i></div>
                        <h3 class="counter-three__count-box">
                            <span class="odometer" data-count="50">00</span>
                            <span>%</span>
                        </h3>
                        <p class="counter-three__text">Senior Doctors</p>
                    </li>
                </ul>
            </div>
        </section>
        <!--Counter Three End-->

        <!--FAQ Three Start-->
        <section class="faq-three">
            <div class="container">
                <div class="section-title section-title--home-five text-center">
                    <span class="section-title__tagline">
                        <i class="section-title__tagline__left-icon oxpins-icon-two-heart"></i>
                        FAQS
                        <i class="section-title__tagline__right-icon oxpins-icon-two-heart"></i>
                    </span>
                    <h2 class="section-title__title">Have Questions in Your Mind? <br>Get the Answers Now</h2>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="faq-three__image">
                            <img src="{{ asset('assets/images/resources/faq-3-1.jpg') }}" alt="oxpins">
                            <div class="faq-three__info">
                                <div class="faq-three__info__icon"><img src="{{ asset('assets/images/shapes/faq-three-icon.png') }}" alt="oxpins"></div>
                                <h5 class="faq-three__info__title">Still have Questions?</h5>
                                <p class="faq-three__info__text">Sent to <a href="mailto:shahzaibtariq559@gmail.com">shahzaibtariq559@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="accrodion-grp faq-three__accrodion" data-grp-name="faq-three-accrodion">
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>How do I choose a long-term care facility?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteradution 
                                            in some form by injected humour, or randomised words which don't look even slightly believable.
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>How can I help my older parents from afar?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteradution 
                                            in some form by injected humour, or randomised words which don't look even slightly believable.
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Can I get paid to take care of a family member?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteradution 
                                            in some form by injected humour, or randomised words which don't look even slightly believable.
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>How can we pay for long-term care?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteradution 
                                            in some form by injected humour, or randomised words which don't look even slightly believable.
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>How can I talk with an older person’s doctor?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteradution 
                                            in some form by injected humour, or randomised words which don't look even slightly believable.
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>I’m new to caregiving. Where do I start?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteradution 
                                            in some form by injected humour, or randomised words which don't look even slightly believable.
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--FAQ Three End-->

        <!--News Four Start-->
        <section class="news-four">
            <div class="container">
                <div class="section-title section-title--home-five text-center">
                    <span class="section-title__tagline">
                        <i class="section-title__tagline__left-icon oxpins-icon-two-heart"></i>
                        Articles
                        <i class="section-title__tagline__right-icon oxpins-icon-two-heart"></i>
                    </span>
                    <h2 class="section-title__title">Directly From the Latest <br>News & Articles</h2>
                </div>
                <div class="row gutter-y-30">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-four__single">
                            <div class="news-four__single__content">
                                <div class="news-four__single__meta"><i class="oxpins-icon-two-comments"></i>2 Comments</div>
                                <h3 class="news-four__single__title"><a href="{{ route('newsDetails') }}">10 Simple Practices Will Help You Free Get 1% Better Every Day</a></h3>
                                <a class="news-four__single__rm" href="{{ route('newsDetails') }}">Read More</a>
                            </div>
                            <div class="news-four__single__img">
                                <img src="{{ asset('assets/images/blog/news-4-1.jpg') }}" alt="oxpins">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="news-four__single news-four__single--reverse">
                            <div class="news-four__single__content">
                                <div class="news-four__single__meta"><i class="oxpins-icon-two-comments"></i>2 Comments</div>
                                <h3 class="news-four__single__title"><a href="{{ route('newsDetails') }}">Solution This Business For is company fast Marketing Blog</a></h3>
                                <a class="news-four__single__rm" href="{{ route('newsDetails') }}">Read More</a>
                            </div>
                            <div class="news-four__single__img">
                                <img src="{{ asset('assets/images/blog/news-4-2.jpg') }}" alt="oxpins">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="news-four__single">
                            <div class="news-four__single__content">
                                <div class="news-four__single__meta"><i class="oxpins-icon-two-comments"></i>2 Comments</div>
                                <h3 class="news-four__single__title"><a href="{{ route('newsDetails') }}">Business Web Agency This Business company Fast Solution Blog</a></h3>
                                <a class="news-four__single__rm" href="{{ route('newsDetails') }}">Read More</a>
                            </div>
                            <div class="news-four__single__img">
                                <img src="{{ asset('assets/images/blog/news-4-3.jpg') }}" alt="oxpins">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--News Four End-->

        <div class="brand-four brand-four--border">
            <div class="container">
                <div class="brand-four__carousel thm-owl__carousel owl-theme owl-carousel" data-owl-options='{
                    "items": 5,
                    "margin": 65,
                    "smartSpeed": 700,
                    "loop":true,
                    "autoplay": 6000,
                    "nav":false,
                    "dots":false,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive":{
                        "0":{
                            "items":1,
                            "margin": 0
                        },
                        "360":{
                            "items":2,
                            "margin": 0
                        },
                        "575":{
                            "items":3,
                            "margin": 30
                        },
                        "768":{
                            "items":3,
                            "margin": 40
                        },
                        "992":{
                            "items": 4,
                            "margin": 40
                        },
                        "1200":{
                            "items": 5
                        }
                    }
                    }'>
                    <div class="brand-four__carousel__item">
                        <img src="{{ asset('assets/images/brand/brand-3-1.png') }}" alt="oxpins">
                    </div><!-- /.owl-slide-item-->
                    <div class="brand-four__carousel__item">
                        <img src="{{ asset('assets/images/brand/brand-3-1.png') }}" alt="oxpins">
                    </div><!-- /.owl-slide-item-->
                    <div class="brand-four__carousel__item">
                        <img src="{{ asset('assets/images/brand/brand-3-1.png') }}" alt="oxpins">
                    </div><!-- /.owl-slide-item-->
                    <div class="brand-four__carousel__item">
                        <img src="{{ asset('assets/images/brand/brand-3-1.png') }}" alt="oxpins">
                    </div><!-- /.owl-slide-item-->
                    <div class="brand-four__carousel__item">
                        <img src="{{ asset('assets/images/brand/brand-3-1.png') }}" alt="oxpins">
                    </div><!-- /.owl-slide-item-->
                    <div class="brand-four__carousel__item">
                        <img src="{{ asset('assets/images/brand/brand-3-1.png') }}" alt="oxpins">
                    </div><!-- /.owl-slide-item-->
                    <div class="brand-four__carousel__item">
                        <img src="{{ asset('assets/images/brand/brand-3-1.png') }}" alt="oxpins">
                    </div><!-- /.owl-slide-item-->
                    <div class="brand-four__carousel__item">
                        <img src="{{ asset('assets/images/brand/brand-3-1.png') }}" alt="oxpins">
                    </div><!-- /.owl-slide-item-->
                    <div class="brand-four__carousel__item">
                        <img src="{{ asset('assets/images/brand/brand-3-1.png') }}" alt="oxpins">
                    </div><!-- /.owl-slide-item-->
                    <div class="brand-four__carousel__item">
                        <img src="{{ asset('assets/images/brand/brand-3-1.png') }}" alt="oxpins">
                    </div><!-- /.owl-slide-item-->
                </div><!-- /.thm-owl__slider -->
            </div><!-- /.container -->
        </div><!-- /.brand-four -->

        <!--Gallery Five Start-->
        <section class="gallery-four">
            <div class="gallery-four__carousel thm-owl__carousel owl-carousel owl-theme" data-owl-options='{
                "items": 1,
                "margin": 0,
                "loop": false,
                "smartSpeed": 700,
                "nav": false,
                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                "dots": false,
                "autoplay": false,
                "responsive": {
                    "0": {
                        "items": 1
                    },
                    "576": {
                        "items": 2
                    },
                    "992": {
                        "items": 3
                    },
                    "1200": {
                        "items": 4
                    },
                    "1600": {
                        "items": 5
                    }
                }
                }'>
                <div class="gallery-four__item">
                    <img src="{{ asset('assets/images/gallery/gallery-4-1.jpg') }}" alt="oxpins">
                    <a href="assets/images/gallery/gallery-4-1.jpg" class="img-popup"></a>
                </div>
                <div class="gallery-four__item">
                    <img src="{{ asset('assets/images/gallery/gallery-4-2.jpg') }}" alt="oxpins">
                    <a href="assets/images/gallery/gallery-4-2.jpg" class="img-popup"></a>
                </div>
                <div class="gallery-four__item">
                    <img src="{{ asset('assets/images/gallery/gallery-4-3.jpg') }}" alt="oxpins">
                    <a href="assets/images/gallery/gallery-4-3.jpg" class="img-popup"></a>
                </div>
                <div class="gallery-four__item">
                    <img src="{{ asset('assets/images/gallery/gallery-4-4.jpg') }}" alt="oxpins">
                    <a href="assets/images/gallery/gallery-4-4.jpg" class="img-popup"></a>
                </div>
                <div class="gallery-four__item">
                    <img src="{{ asset('assets/images/gallery/gallery-4-5.jpg') }}" alt="oxpins">
                    <a href="assets/images/gallery/gallery-4-5.jpg" class="img-popup"></a>
                </div>
            </div>
        </section>
        <!--Gallery Five End-->

        <!--Site Footer Start-->
        <footer class="site-footer-three">
            <div class="site-footer-three__bg" style="background-image:url('{{ asset('assets/images/shapes/site-footer-three-bg.png') }}')"></div>
            <div class="site-footer-three__wrapper">
                <div class="container">
                    <div class="site-footer-three__top">
                        <div class="site-footer-three__logo">
                           <a href="/"><img src="{{ asset('assets/images/resources/footer-logo-three.png') }}" alt="oxpins"></a>
                        </div>
                        <div class="site-footer-three__social">
                            <a href="https://facebook.com">
                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                <span class="sr-only">Facebook</span>
                            </a>
                            <a href="https://twitter.com">
                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                <span class="sr-only">Twitter</span>
                            </a>
                            <a href="https://pinterest.com">
                                <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                <span class="sr-only">Pinterest</span>
                            </a>
                            <a href="https://instagram.com">
                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                <span class="sr-only">Instagram</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__links clearfix">
                                <h3 class="footer-widget__title">Links</h3>
                                <ul class="footer-widget__links-list list-unstyled clearfix">
                                    <li><a href="{{ route('about') }}">About us</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                    <li><a href="{{ route('news') }}">Latest News</a></li>
                                    <li><a href="{{ route('eventDetails') }}">Recent Events</a></li>
                                    <li><a href="{{ route('donation') }}">Donations</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__non-profit clearfix">
                                <h3 class="footer-widget__title">Non profit</h3>
                                <ul class="footer-widget__non-profit-list list-unstyled clearfix">
                                    <li><a href="{{ route('donationDetails') }}">Differently Abled Kids</a></li>
                                    <li><a href="{{ route('donationDetails') }}">Help Child Cancer</a></li>
                                    <li><a href="{{ route('donationDetails') }}">Clean Pure Water</a></li>
                                    <li><a href="{{ route('donationDetails') }}">Give them Education</a></li>
                                    <li><a href="{{ route('donationDetails') }}">Start a Fundraising</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__contact">
                                <h3 class="footer-widget__title">Contact</h3>
                                <p class="footer-widget__contact-text">6391 Elgin St. Celina, Delaware <br>New York. USA</p>
                                <ul class="list-unstyled footer-widget__contact-list">
                                    <li>
                                        <div class="icon">
                                            <i class="oxpins-icon-two-phone"></i>
                                        </div>
                                        <div class="text">
                                            <p><a href="tel:3035550105">(303) 555-0105</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="oxpins-icon-two-envelop"></i>
                                        </div>
                                        <div class="text">
                                            <p><a href="mailto:michael.mitc@example.com">michael.mitc@example.com</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__newsletter">
                                <h3 class="footer-widget__title">Subscribe to get latest updates daily.</h3>
                                <form action="#" data-url="MAILCHIMP_FORM_URL" class="footer-widget__form mc-form" novalidate="novalidate">
                                    <input type="text" placeholder="Email Address">
                                    <button type="submit">
                                        <i class="oxpins-icon-two-arrow-right-two"></i>
                                    </button>
                                </form>
                                <div class="footer-widget__checked-box">
                                    <input type="checkbox" name="agree" id="agree" checked="">
                                    <label for="agree"><span></span>I agree to all your terms and policies</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer-three__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer-three__bottom-inner">
                                <p class="site-footer-three__bottom-text">© All Copyright 2023 by <a href="#">oxpins.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->
    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="/" aria-label="logo image"><img src="{{ asset('assets/images/resources/logo-2.png') }}" width="143"
                        alt="oxpins" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">shahzaibtariq559@gmail.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:+923056266559">+92 (305) 626 6559</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="https://www.linkedin.com/in/shahzaibtariq559/"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/shahzaibtariq559"><i class="fab fa-github"></i></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <x-searchPopup />    
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-up-arrow"></i></a>

    <x-script />

</body>

</html>