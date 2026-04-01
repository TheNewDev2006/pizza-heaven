@extends('frontend.layouts.app')
@section('title', 'Index Four')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/style-sky-blue.css') }}">
@endsection
@section('content')

    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

   <!-- Hero Area Start -->
        <section class="hero-area-four bgs-cover pt-185 rpt-145 pb-120 rpb-110 rel z-1" style="background-image: url(assets/images/background/hero-four.jpg)">
            <div class="container">
                <div class="hero-content-four text-center text-white" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                    <span class="sub-title">special for your best choice</span>
                    <h1>{{ $personalization['tagline'] ?? 'Delicious Food' }}</h1>
                    <img src="{{ asset('/assets/images/hero/hero-four.png') }}" alt="Hero">
                    <div class="quality-food" style="background-image: url(assets/images/shapes/about-star.png)">
                        <span class="for-border"></span>
                        <span class="text">quality <br>food</span>
                    </div>
                </div>
            </div>
            <div class="hero-shapes">
                <div class="shape one">
                    <img src="{{ asset('/assets/images/shapes/hero-shape1.png') }}" alt="Hero Shape">
                </div>
                <div class="shape two">
                    <img src="{{ asset('/assets/images/shapes/hero-shape2.png') }}" alt="Hero Shape">
                </div>
                <div class="shape five">
                    <img src="{{ asset('/assets/images/shapes/hero-shape5.png') }}" alt="Hero Shape">
                </div>
            </div>
        </section>
        <!-- Hero Area End -->
        
        
        <!-- Headline area start -->
        <div class="headline-area pt-110 rpt-90 mb-105 rmb-85 rel z-1">
            <span class="marquee-wrap white-text">
               <span class="marquee-inner left">
                    <span class="marquee-item">Italian pizza</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">delicious foods</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">burger king</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
               </span>
               <span class="marquee-inner left">
                    <span class="marquee-item">Italian pizza</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">delicious foods</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">burger king</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
               </span>
               <span class="marquee-inner left">
                    <span class="marquee-item">Italian pizza</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">delicious foods</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">burger king</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
               </span>
            </span>
            <div class="headline-shapes">
                <div class="shape one">
                    <img src="{{ asset('/assets/images/shapes/tomato.png') }}" alt="Shape">
                </div>
                <div class="shape two">
                    <img src="{{ asset('/assets/images/shapes/burger.png') }}" alt="Shape">
                </div>
            </div>
        </div>
        <!-- Headline Area end -->
        
        
        <!-- About Us Area start -->
        <section class="about-us-area-four pb-95 rpb-65 rel z-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-us-content text-white ms-0 rmb-25" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            <div class="section-title mb-25">
                                <span class="sub-title mb-5">learn About {{ $personalization['business_name'] ?? 'Cynix Inc Digital Solutions' }}</span>
                                <h2>we provide best Quality food for your health</h2>
                            </div>
                            <p>Welcome too restaurant, where culinary excellence meets warm hospitality in every dish we serve. Nestled in the heart of {{ $personalization['address'] ?? '267, Jampettah Street, Colombo 13' }} our eatery invites you on a journey</p>
                            <a href="{{ route('about') }}" class="theme-btn mt-25 mb-60">learn more us <i class="far fa-arrow-alt-right"></i></a>
                            <div class="row">
                                <div class="col-sm-4 col-6">
                                    <div class="counter-item style-two counter-text-wrap">
                                        <span class="count-text k-plus" data-speed="3000" data-stop="34">0</span>
                                        <span class="counter-title">Organic Planting</span>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-6">
                                    <div class="counter-item style-two counter-text-wrap">
                                        <span class="count-text plus" data-speed="3000" data-stop="356">0</span>
                                        <span class="counter-title">Passionate Chef’s</span>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-6">
                                    <div class="counter-item style-two counter-text-wrap">
                                        <span class="count-text plus" data-speed="3000" data-stop="8534">0</span>
                                        <span class="counter-title">Favourite Dishes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-image-four mb-30" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                            <div class="row">
                                <div class="col">
                                    <img src="{{ asset('/assets/images/about/about-four1.jpg') }}" alt="About">
                                </div>
                                <div class="col mt-80">
                                    <img src="{{ asset('/assets/images/about/about-four2.jpg') }}" alt="About">
                                </div>
                            </div>
                            <div class="badge"><img src="{{ asset('/assets/images/about/about-four-badge.jpg') }}" alt="Badge"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us Area end -->
        
        
        <!-- Category Banner area start -->
        <div class="category-banner-area-two pb-85 rpb-65">
           <div class="container-fluid">
               <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 justify-content-center">
                    <div class="col" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="category-banner-item style-three" style="background-image: url(assets/images/banner/category-banner-three1.jpg);">
                            <h3>SPECIALTY PIZZA</h3>
                            <a href="{{ route('shop') }}" class="theme-btn">Shop now <i class="far fa-arrow-alt-right"></i></a>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                        <div class="category-banner-item style-four" style="background-image: url(assets/images/banner/category-banner-three2.jpg);">
                            <h3>buy 1</h3>
                            <span class="get-one">get free 1</span>
                            <a href="{{ route('shop') }}" class="theme-btn">Shop now <i class="far fa-arrow-alt-right"></i></a>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                        <div class="category-banner-item style-three" style="background-image: url(assets/images/banner/category-banner-three3.jpg);">
                            <h3>delicious fast foods</h3>
                            <a href="{{ route('shop') }}" class="theme-btn">Shop now <i class="far fa-arrow-alt-right"></i></a>
                        </div>
                    </div>
               </div>
           </div>
        </div>
        <!-- Category Banner area end -->
        
        
        <!-- Video Area start -->
        <div class="video-area pb-120 rpb-90 rel z-1">
            <div class="container">
                <div class="video-title-wrap">
                    <span class="video-title" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">Fried Chicken</span>
                    <span class="video-title text-end" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">quality food</span>
                </div>
                <div class="video-wrap overlay" data-aos="zoom-in" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                    <img src="{{ asset('/assets/images/background/video.jpg') }}" alt="Video">
                    <a href="https://www.youtube.com/watch?v=9Y7ma241N8k" class="mfp-iframe video-play"><i class="fas fa-play"></i></a>
                </div>
            </div>
            <div class="testimonials-shapes">
                <div class="shape three">
                    <img src="{{ asset('/assets/images/shapes/video1.png') }}" alt="Shape">
                </div>
                <div class="shape two">
                    <img src="{{ asset('/assets/images/shapes/video2.png') }}" alt="Shape">
                </div>
            </div>
        </div>
        <!-- Video Area End -->
        
        
        <!-- Headline area start -->
        <div class="headline-area mb-105 rmb-85 rel z-1">
            <span class="marquee-wrap white-text">
               <span class="marquee-inner left">
                    <span class="marquee-item">Italian pizza</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">delicious foods</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">burger king</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
               </span>
               <span class="marquee-inner left">
                    <span class="marquee-item">Italian pizza</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">delicious foods</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">burger king</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
               </span>
               <span class="marquee-inner left">
                    <span class="marquee-item">Italian pizza</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">delicious foods</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">burger king</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
               </span>
            </span>
            <div class="headline-shapes">
                <div class="shape one">
                    <img src="{{ asset('/assets/images/shapes/tomato.png') }}" alt="Shape">
                </div>
                <div class="shape two">
                    <img src="{{ asset('/assets/images/shapes/burger.png') }}" alt="Shape">
                </div>
            </div>
        </div>
        <!-- Headline Area end -->
        
        
        <!-- Popular Menu Area start -->
        <section class="popular-menu-area-three pb-130 rpb-100 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-9">
                        <div class="section-title text-white text-center mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="sub-title mb-5">popular menu</span>
                            <h2>we provide exclusive food based on usa explore our popular food</h2>
                        </div>
                    </div>
                </div>
                <div class="row no-gap">
                    <div class="col-lg-6">
                        <div class="popular-menu-wrap bgc-black" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            <div class="food-menu-item style-two">
                                <div class="image">
                                    <img src="{{ asset('/assets/images/food/chicken-menu1.png') }}" alt="Chicken Menu">
                                </div>
                                <div class="content">
                                    <h5><span class="title">Fried chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                    <p>Diverse menu features array of delectable</p>
                                </div>
                            </div>
                            <div class="food-menu-item style-two">
                                <div class="image">
                                    <img src="{{ asset('/assets/images/food/chicken-menu2.png') }}" alt="Chicken Menu">
                                </div>
                                <div class="content">
                                    <h5><span class="title">Chicken leg</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                    <p>Diverse menu features array of delectable</p>
                                </div>
                            </div>
                            <div class="food-menu-item style-two">
                                <div class="image">
                                    <img src="{{ asset('/assets/images/food/chicken-menu3.png') }}" alt="Chicken Menu">
                                </div>
                                <div class="content">
                                    <h5><span class="title">chicken steak</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                    <p>Diverse menu features array of delectable</p>
                                </div>
                            </div>
                            <div class="food-menu-item style-two">
                                <div class="image">
                                    <img src="{{ asset('/assets/images/food/chicken-menu4.png') }}" alt="Chicken Menu">
                                </div>
                                <div class="content">
                                    <h5><span class="title">Chicken baked</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                    <p>Diverse menu features array of delectable</p>
                                </div>
                            </div>
                            <div class="food-menu-item style-two">
                                <div class="image">
                                    <img src="{{ asset('/assets/images/food/chicken-menu5.png') }}" alt="Chicken Menu">
                                </div>
                                <div class="content">
                                    <h5><span class="title">Fried chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                    <p>Diverse menu features array of delectable</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="popular-menu-wrap bgc-black" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                            <div class="food-menu-item style-two">
                                <div class="image">
                                    <img src="{{ asset('/assets/images/food/chicken-menu6.png') }}" alt="Chicken Menu">
                                </div>
                                <div class="content">
                                    <h5><span class="title">Fried chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                    <p>Diverse menu features array of delectable</p>
                                </div>
                            </div>
                            <div class="food-menu-item style-two">
                                <div class="image">
                                    <img src="{{ asset('/assets/images/food/chicken-menu7.png') }}" alt="Chicken Menu">
                                </div>
                                <div class="content">
                                    <h5><span class="title">Chicken baked</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                    <p>Diverse menu features array of delectable</p>
                                </div>
                            </div>
                            <div class="food-menu-item style-two">
                                <div class="image">
                                    <img src="{{ asset('/assets/images/food/chicken-menu8.png') }}" alt="Chicken Menu">
                                </div>
                                <div class="content">
                                    <h5><span class="title">Grille chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                    <p>Diverse menu features array of delectable</p>
                                </div>
                            </div>
                            <div class="food-menu-item style-two">
                                <div class="image">
                                    <img src="{{ asset('/assets/images/food/chicken-menu9.png') }}" alt="Chicken Menu">
                                </div>
                                <div class="content">
                                    <h5><span class="title">Chicken baked</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                    <p>Diverse menu features array of delectable</p>
                                </div>
                            </div>
                            <div class="food-menu-item style-two">
                                <div class="image">
                                    <img src="{{ asset('/assets/images/food/chicken-menu10.png') }}" alt="Chicken Menu">
                                </div>
                                <div class="content">
                                    <h5><span class="title">Grille chicken</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                    <p>Diverse menu features array of delectable</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonials-shapes">
                <div class="shape one">
                    <img src="{{ asset('/assets/images/shapes/chicken-menu1.png') }}" alt="Shape">
                </div>
                <div class="shape two">
                    <img src="{{ asset('/assets/images/shapes/chicken-menu2.png') }}" alt="Shape">
                </div>
            </div>
        </section>
        <!-- Popular Menu Area end -->
        
        
        <!-- Gallery Area Start -->
        <div class="gallery-area-two pb-100 rpb-70 rel z-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-5 col-md-8" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="gallery-item-two">
                            <img src="{{ asset('/assets/images/gallery/gallery-two2.jpg') }}" alt="Gallery">
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 gallery-order" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                        <div class="gallery-item-two">
                            <img src="{{ asset('/assets/images/gallery/gallery-two3.jpg') }}" alt="Gallery">
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                        <div class="gallery-item-two">
                            <img src="{{ asset('/assets/images/gallery/gallery-two1.jpg') }}" alt="Gallery">
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="gallery-item-two text-end">
                            <img src="{{ asset('/assets/images/gallery/gallery-two5.jpg') }}" alt="Gallery">
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 gallery-order" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                        <div class="gallery-item-two">
                            <img src="{{ asset('/assets/images/gallery/gallery-two4.jpg') }}" alt="Gallery">
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-8" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                        <div class="gallery-item-two">
                            <img src="{{ asset('/assets/images/gallery/gallery-two6.jpg') }}" alt="Gallery">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery Area End -->
        
        
        <!-- Headline area start -->
        <div class="headline-area bgc-black pt-120 rpt-90 rel z-2">
            <span class="marquee-wrap white-text">
               <span class="marquee-inner left">
                    <span class="marquee-item">Italian pizza</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">delicious foods</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">burger king</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
               </span>
               <span class="marquee-inner left">
                    <span class="marquee-item">Italian pizza</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">delicious foods</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">burger king</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
               </span>
               <span class="marquee-inner left">
                    <span class="marquee-item">Italian pizza</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">delicious foods</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">burger king</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
               </span>
            </span>
            <div class="headline-shapes">
                <div class="shape one">
                    <img src="{{ asset('/assets/images/shapes/tomato.png') }}" alt="Shape">
                </div>
                <div class="shape two">
                    <img src="{{ asset('/assets/images/shapes/burger.png') }}" alt="Shape">
                </div>
            </div>
        </div>
        <!-- Headline Area end -->
        
        
        <!-- Special Offer Area start -->
        <section class="special-offer-area-two bgc-black pt-105 rpt-85 pb-130 rpb-100 rel z-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="offer-content-two text-white rmb-55" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                            <img src="{{ asset('/assets/images/offer/special-food.png') }}" alt="Special Food">
                            <div class="section-title mt-45 mb-25"><h2>chicken drumsticks</h2></div>
                            <p class="ms-0">Located in {{ $personalization['address'] ?? '267, Jampettah Street, Colombo 13' }}, our restaurant is a culinary haven where flavors come alive memories are made.</p>
                            <a href="#" class="theme-btn mt-15">order now <i class="far fa-arrow-alt-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="offer-image style-two style-three" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            <img src="{{ asset('/assets/images/offer/chicken.png') }}" alt="Burger Image">
                            <div class="offer-badge" style="background-image: url(assets/images/shapes/about-star.png)">
                                <span>only <br><span class="price">$59</span></span>
                            </div>
                            <span class="marquee-wrap style-two text-white">
                               <span class="marquee-inner left">mix food meal</span>
                               <span class="marquee-inner left">mix food meal</span>
                               <span class="marquee-inner left">mix food meal</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonials-shapes">
                <div class="shape one">
                    <img src="{{ asset('/assets/images/shapes/hero-shape5.png') }}" alt="Shape">
                </div>
                <div class="shape two">
                    <img src="{{ asset('/assets/images/shapes/hero-shape3.png') }}" alt="Shape">
                </div>
            </div>
        </section>
        <!-- Special Offer Area end -->        
        
        
        <!-- Testimonials Two Area start -->
        <section class="testimonials-two bgc-primary" style="background-image: url(assets/images/testimonials/testimonials-two-bg.png);">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="why-choose-two-image">
                        <img src="{{ asset('/assets/images/testimonials/testimonials-three.jpg') }}" alt="Testimonials">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonials-two-content rel z-1 text-center text-white p-45 rpy-55">
                       <div class="section-title mb-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="sub-title mb-5">customer feedback</span>
                            <h2>what have lot’s off happy customer explore feedback</h2>
                        </div>
                        <span class="marquee-wrap style-two">
                           <span class="marquee-inner left">review </span>
                           <span class="marquee-inner left">review </span>
                           <span class="marquee-inner left">review </span>
                        </span>
                        <div class="testimonials-two-carousel" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                            <div class="testimonial-two-item">
                                <div class="quote"><i class="flaticon-quote"></i></div>
                                <div class="text">Renowned for its versatility in the kitchen, Red King Crab can prepared in various ways, from simple steaming or boiling to elaborate preparations such as grilling incorporating weather loving</div>
                                <span class="author">Salvador I. Burton</span>
                                <span class="designation">Manager</span>
                            </div>
                            <div class="testimonial-two-item">
                                <div class="quote"><i class="flaticon-quote"></i></div>
                                <div class="text">Renowned for its versatility in the kitchen, Red King Crab can prepared in various ways, from simple steaming or boiling to elaborate preparations such as grilling incorporating weather loving</div>
                                <span class="author">Salvador I. Burton</span>
                                <span class="designation">Manager</span>
                            </div>
                            <div class="testimonial-two-item">
                                <div class="quote"><i class="flaticon-quote"></i></div>
                                <div class="text">Renowned for its versatility in the kitchen, Red King Crab can prepared in various ways, from simple steaming or boiling to elaborate preparations such as grilling incorporating weather loving</div>
                                <span class="author">Salvador I. Burton</span>
                                <span class="designation">Manager</span>
                            </div>
                            <div class="testimonial-two-item">
                                <div class="quote"><i class="flaticon-quote"></i></div>
                                <div class="text">Renowned for its versatility in the kitchen, Red King Crab can prepared in various ways, from simple steaming or boiling to elaborate preparations such as grilling incorporating weather loving</div>
                                <span class="author">Salvador I. Burton</span>
                                <span class="designation">Manager</span>
                            </div>
                        </div>
                        <div class="shape">
                            <img src="{{ asset('/assets/images/shapes/tomato.png') }}" alt="Shape">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials Two Area end -->
         
         
        <!-- Blog Area start -->
        <section class="blog-area bgc-black pt-130 rpt-100 pb-100 rpb-70 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title text-white text-center mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="55">
                            <span class="sub-title mb-5">latest news & blog</span>
                            <h2>get every single updates news</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="blog-item style-three black-bg" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/blog/blog-two1.jpg') }}" alt="Blog">
                            </div>
                            <div class="content">
                                <ul class="blog-meta-two">
                                    <li><a href="#">Quality Food</a></li>
                                    <li><a href="#">March 25, 2024</a></li>
                                </ul>
                                <h4><a href="{{ route('blogDetails') }}">Culinary Chronicles Exploring Gastronomic Wonders at Restaurant</a></h4>
                                <p>Restaurant where culinary to excellence meets to hospitality dish we serve settled</p>
                                <a href="{{ route('blogDetails') }}" class="read-more">Read more <i class="far fa-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="blog-item style-three black-bg" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/blog/blog-two2.jpg') }}" alt="Blog">
                            </div>
                            <div class="content">
                                <ul class="blog-meta-two">
                                    <li><a href="#">Quality Food</a></li>
                                    <li><a href="#">March 25, 2024</a></li>
                                </ul>
                                <h4><a href="{{ route('blogDetails') }}">Culinary Chronicles Exploring Gastronomic Wonders at Restaurant</a></h4>
                                <p>Restaurant where culinary to excellence meets to hospitality dish we serve settled</p>
                                <a href="{{ route('blogDetails') }}" class="read-more">Read more <i class="far fa-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area end -->
          
           
        
          
           
        

    <!-- footer area -->
    @include('frontend.includes.footers.footerThree')
    <!-- footer area end -->
@endsection
