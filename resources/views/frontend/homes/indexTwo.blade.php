@extends('frontend.layouts.app')
@section('title', 'Index Two')
@section('content')

    <!-- header area -->
    @include('frontend.includes.headers.headerTwo')
    <!-- header area end -->

    <!-- Hero Area Start -->
        <div class="hero-area-two bgs-cover pt-205 rpt-150 pb-100 rel z-1" style="background-image: url(assets/images/background/hero-two.jpg)">
            <div class="container container-1520">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="hero-two-left mb-90 rmb-60">
                            <span class="hero-title mb-40" data-aos="fade-left" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50">{{ $personalization['tagline'] ?? 'Delicious Food' }}</span>
                            <div class="hero-content-two text-white" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <p>Welcome to culinary sanctuary there every dish tells every bite is an adventure at our food</p>
                                <span class="price">price only $55</span>
                                <a href="{{ route('shop') }}" class="theme-btn">order now <i class="far fa-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 align-self-end">
                        <div class="hero-two-right">
                            <span class="hero-title text-end" data-aos="fade-right" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50">pizza</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-shapes">
                <div class="shape one">
                    <img src="{{ asset('/assets/images/shapes/hero-two.png') }}" alt="Hero Shape">
                </div>
                <div class="shape two">
                    <img src="{{ asset('/assets/images/shapes/hero-shape2.png') }}" alt="Hero Shape">
                </div>
                <div class="shape three">
                    <img src="{{ asset('/assets/images/shapes/hero-shape3.png') }}" alt="Hero Shape">
                </div>
                <div class="pizza">
                    <img src="{{ asset('/assets/images/hero/pizza.png') }}" alt="Pizza">
                </div>
                <div class="letter-shape-one">
                    <img src="{{ asset('/assets/images/hero/letter-shape.png') }}" alt="Leter Shape">
                </div>
                <div class="letter-shape-two">
                    <img src="{{ asset('/assets/images/hero/letter-shape-two.png') }}" alt="Leter Shape">
                </div>
                <div class="price-badge" style="background-image: url(assets/images/shapes/about-star.png);">
                    <span>only</span>
                    <b>$25.99</b>
                </div>
            </div>
        </div>
        <!-- Hero Area End -->
        
        
        <!-- Headline area start -->
        <div class="headline-area pt-70 rel z-1">
            <span class="marquee-wrap">
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
                    <img src="{{ asset('/assets/images/shapes/chillies.png') }}" alt="Shape">
                </div>
                <div class="shape two">
                    <img src="{{ asset('/assets/images/shapes/tomato.png') }}" alt="Shape">
                </div>
            </div>
        </div>
        <!-- Headline Area end -->
        
    
        <!-- Food Category Area start -->
        <section class="category-area pt-60 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="sub-title mb-5">popular food category</span>
                            <h2>we provide amazing & Quality food for your good health</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="food-category-active">
                <div class="food-category-item">
                    <div class="image">
                        <span class="pizza-badge text-white" style="background-image: url(assets/images/category/category-badge.png);">hot</span>
                        <img src="{{ asset('/assets/images/category/category1.png') }}" alt="Food">
                    </div>
                    <h3><a href="{{ route('productDetails') }}">Italian pizza</a></h3>
                </div>
                <div class="food-category-item">
                    <div class="image">
                        <span class="pizza-badge" style="background-image: url(assets/images/category/category-badge2.png);">hot</span>
                        <img src="{{ asset('/assets/images/category/category2.png') }}" alt="Food">
                    </div>
                    <h3><a href="{{ route('productDetails') }}">hamburger</a></h3>
                </div>
                <div class="food-category-item">
                    <div class="image">
                        <span class="pizza-badge text-white" style="background-image: url(assets/images/category/category-badge.png);">hot</span>
                        <img src="{{ asset('/assets/images/category/category3.png') }}" alt="Food">
                    </div>
                    <h3><a href="{{ route('productDetails') }}">Chicken drumsticks</a></h3>
                </div>
                <div class="food-category-item">
                    <div class="image">
                        <span class="pizza-badge" style="background-image: url(assets/images/category/category-badge2.png);">hot</span>
                        <img src="{{ asset('/assets/images/category/category4.png') }}" alt="Food">
                    </div>
                    <h3><a href="{{ route('productDetails') }}">spicy green salad</a></h3>
                </div>
                <div class="food-category-item">
                    <div class="image">
                        <span class="pizza-badge text-white" style="background-image: url(assets/images/category/category-badge.png);">hot</span>
                        <img src="{{ asset('/assets/images/category/category5.png') }}" alt="Food">
                    </div>
                    <h3><a href="{{ route('productDetails') }}">meat slice raw</a></h3>
                </div>
            </div>
        </section>
        <!-- Food Category Area end -->
       
        
        <!-- About Us Area start -->
        <section class="about-us-area pt-130 rpt-100 pb-150 rpb-60 rel z-1">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-6">
                        <div class="about-image-part style-two mb-30 rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            <img src="{{ asset('/assets/images/about/pizza.png') }}" alt="About Pizza">
                            <div class="quality-food" style="background-image: url(assets/images/shapes/about-star-yellow.png)">
                                <span class="for-border"></span>
                                <span class="text">quality <br>food</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-us-content" data-aos="fade-right" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50">
                            <div class="section-title mb-25">
                                <span class="sub-title mb-5">learn About {{ $personalization['business_name'] ?? 'Cynix Inc Digital Solutions' }}</span>
                                <h2>the amazing & Quality food for your good health</h2>
                            </div>
                            <p>Welcome too restaurant, where culinary excellence meets warm hospitality in every dish we serve. Nestled in the heart of {{ $personalization['address'] ?? '267, Jampettah Street, Colombo 13' }} our eatery invites you on a journey</p>
                            <div class="about-btn-author pt-5 mb-60">
                                <a href="{{ route('about') }}" class="theme-btn style-two">learn more us <i class="far fa-arrow-alt-right"></i></a>
                                <a href="{{ route('about') }}" class="read-more">Explore popular menu <i class="far fa-arrow-alt-right"></i></a>
                            </div>
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
                </div>
            </div>
            <span class="about-bg-text">Italian pizza</span>
        </section>
        <!-- About Us Area end -->
        
        
        <!-- Category Banner area start -->
        <div class="category-banner-area px-4">
           <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 justify-content-center">
                <div class="col" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                    <div class="category-banner-item" style="background-image: url(assets/images/banner/category-banner1.jpg);">
                        <span class="price">only $59</span>
                        <h3>SPECIALTY PIZZAS</h3>
                        <div class="ratting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>(5k)</span>
                        </div>
                        <a href="{{ route('shop') }}" class="theme-btn">Order now <i class="far fa-arrow-alt-right"></i></a>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                    <div class="category-banner-item" style="background-image: url(assets/images/banner/category-banner2.jpg);">
                        <span class="price">only $59</span>
                        <h3>Pizza with mozzarella</h3>
                        <div class="ratting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>(5k)</span>
                        </div>
                        <a href="{{ route('shop') }}" class="theme-btn">Order now <i class="far fa-arrow-alt-right"></i></a>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50">
                    <div class="category-banner-item" style="background-image: url(assets/images/banner/category-banner3.jpg);">
                        <span class="price">only $59</span>
                        <h3>Delicious pizza</h3>
                        <div class="ratting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>(5k)</span>
                        </div>
                        <a href="{{ route('shop') }}" class="theme-btn">Order now <i class="far fa-arrow-alt-right"></i></a>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                    <div class="category-banner-item" style="background-image: url(assets/images/banner/category-banner4.jpg);">
                        <span class="price">only $59</span>
                        <h3>appetizing hot pizza</h3>
                        <div class="ratting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>(5k)</span>
                        </div>
                        <a href="{{ route('shop') }}" class="theme-btn">Order now <i class="far fa-arrow-alt-right"></i></a>
                    </div>
                </div>
           </div>
        </div>
        <!-- Category Banner area end -->
        
        
        <!-- Pizza Area start -->
        <section class="pizza-area pt-100 rpb-70 pb-130 rpb-100 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="sub-title mb-5">popular pizza</span>
                            <h2>explore popular delicious pizza</h2>
                        </div>
                    </div>
                </div>
                <div class="pizza-active">
                    <div class="product-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <img src="{{ asset('/assets/images/pizza/pizza1.png') }}" alt="Pizza">
                            <span class="pizza-badge">hot</span>
                        </div>
                        <div class="content">
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(5k)</span>
                            </div>
                            <h5><a href="{{ route('productDetails') }}">pizza with mushrooms</a></h5>
                            <span class="price"><del>$50</del> $25</span>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <img src="{{ asset('/assets/images/pizza/pizza2.png') }}" alt="Pizza">
                            <span class="pizza-badge">-10%</span>
                        </div>
                        <div class="content">
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(5k)</span>
                            </div>
                            <h5><a href="{{ route('productDetails') }}">pizza with mushrooms</a></h5>
                            <span class="price"><del>$50</del> $25</span>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <img src="{{ asset('/assets/images/pizza/pizza3.png') }}" alt="Pizza">
                        </div>
                        <div class="content">
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(5k)</span>
                            </div>
                            <h5><a href="{{ route('productDetails') }}">pizza with mushrooms</a></h5>
                            <span class="price"><del>$50</del> $25</span>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <img src="{{ asset('/assets/images/pizza/pizza4.png') }}" alt="Pizza">
                            <span class="pizza-badge">new</span>
                        </div>
                        <div class="content">
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(5k)</span>
                            </div>
                            <h5><a href="{{ route('productDetails') }}">pizza with mushrooms</a></h5>
                            <span class="price"><del>$50</del> $25</span>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="image">
                            <img src="{{ asset('/assets/images/pizza/pizza1.png') }}" alt="Pizza">
                            <span class="pizza-badge">hot</span>
                        </div>
                        <div class="content">
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(5k)</span>
                            </div>
                            <h5><a href="{{ route('productDetails') }}">pizza with mushrooms</a></h5>
                            <span class="price"><del>$50</del> $25</span>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="image">
                            <img src="{{ asset('/assets/images/pizza/pizza2.png') }}" alt="Pizza">
                            <span class="pizza-badge">-10%</span>
                        </div>
                        <div class="content">
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(5k)</span>
                            </div>
                            <h5><a href="{{ route('productDetails') }}">pizza with mushrooms</a></h5>
                            <span class="price"><del>$50</del> $25</span>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="image">
                            <img src="{{ asset('/assets/images/pizza/pizza3.png') }}" alt="Pizza">
                        </div>
                        <div class="content">
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(5k)</span>
                            </div>
                            <h5><a href="{{ route('productDetails') }}">pizza with mushrooms</a></h5>
                            <span class="price"><del>$50</del> $25</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pizza Area end -->
        
        
        <!-- Why choose Us Area start -->
        <section class="why-choose-area-two bgc-black">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="why-choose-two-image">
                        <img src="{{ asset('/assets/images/about/why-choose-us.jpg') }}" alt="why Choose Us">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="why-choose-two-content pt-60 pb-30">
                       <div class="section-title text-white mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="sub-title mb-5">Why choose us</span>
                            <h2>We Offer quality service That Customers Needs</h2>
                        </div>
                        <div class="why-choose-carousel" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                            <div class="service-item style-three">
                                <div class="icon">
                                    <i class="flaticon-recommended-food"></i>
                                </div>
                                <h4><a href="{{ route('menuBurger') }}">Best Quality Food</a></h4>
                                <p>Sed ut perspiciatis unde omnis este natus sit voluptatem</p>
                            </div>
                            <div class="service-item style-three">
                                <div class="icon">
                                    <i class="flaticon-cashback"></i>
                                </div>
                                <h4><a href="{{ route('menuBurger') }}">money back guarantee</a></h4>
                                <p>Sed ut perspiciatis unde omnis este natus sit voluptatem</p>
                            </div>
                            <div class="service-item style-three">
                                <div class="icon">
                                    <i class="flaticon-fast-delivery"></i>
                                </div>
                                <h4><a href="{{ route('menuBurger') }}">fast food delivery</a></h4>
                                <p>Sed ut perspiciatis unde omnis este natus sit voluptatem</p>
                            </div>
                        </div>
                        <div class="shape one">
                            <img src="{{ asset('/assets/images/shapes/why-choose1.png') }}" alt="Shape">
                        </div>
                        <div class="shape two">
                            <img src="{{ asset('/assets/images/shapes/why-choose2.png') }}" alt="Shape">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why choose Us Area end -->
        
        
        <!-- Popular Menu Area start -->
        <section class="popular-menu-area pt-130 rpt-100 pb-100 rpb-70 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-8">
                        <div class="section-title text-center mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="sub-title mb-5">popular menu</span>
                            <h2>we provide exclusive food based on usa explore our popular food</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                        <div class="food-menu-item">
                            <div class="image">
                                <img src="{{ asset('/assets/images/dishes/pizza-menu1.png') }}" alt="Pizza Menu">
                            </div>
                            <div class="content">
                                <h5><a href="{{ route('productDetails') }}">Italian pizza</a></h5>
                                <p>Fast order save 20%</p>
                                <span class="price">$25</span>
                            </div>
                            <a href="{{ route('productDetails') }}" class="details-btn"><i class="fas fa-plus"></i></a>
                        </div>
                        <div class="food-menu-item">
                            <div class="image">
                                <img src="{{ asset('/assets/images/dishes/pizza-menu1.png') }}" alt="Pizza Menu">
                            </div>
                            <div class="content">
                                <h5><a href="{{ route('productDetails') }}">Italian pizza</a></h5>
                                <p>Fast order save 20%</p>
                                <span class="price">$25</span>
                            </div>
                            <a href="{{ route('productDetails') }}" class="details-btn"><i class="fas fa-plus"></i></a>
                        </div>
                        <div class="food-menu-item">
                            <div class="image">
                                <img src="{{ asset('/assets/images/dishes/pizza-menu1.png') }}" alt="Pizza Menu">
                            </div>
                            <div class="content">
                                <h5><a href="{{ route('productDetails') }}">Italian pizza</a></h5>
                                <p>Fast order save 20%</p>
                                <span class="price">$25</span>
                            </div>
                            <a href="{{ route('productDetails') }}" class="details-btn"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                        <div class="food-menu-item">
                            <div class="image">
                                <img src="{{ asset('/assets/images/dishes/pizza-menu1.png') }}" alt="Pizza Menu">
                            </div>
                            <div class="content">
                                <h5><a href="{{ route('productDetails') }}">Italian pizza</a></h5>
                                <p>Fast order save 20%</p>
                                <span class="price">$25</span>
                            </div>
                            <a href="{{ route('productDetails') }}" class="details-btn"><i class="fas fa-plus"></i></a>
                        </div>
                        <div class="food-menu-item">
                            <div class="image">
                                <img src="{{ asset('/assets/images/dishes/pizza-menu1.png') }}" alt="Pizza Menu">
                            </div>
                            <div class="content">
                                <h5><a href="{{ route('productDetails') }}">Italian pizza</a></h5>
                                <p>Fast order save 20%</p>
                                <span class="price">$25</span>
                            </div>
                            <a href="{{ route('productDetails') }}" class="details-btn"><i class="fas fa-plus"></i></a>
                        </div>
                        <div class="food-menu-item">
                            <div class="image">
                                <img src="{{ asset('/assets/images/dishes/pizza-menu1.png') }}" alt="Pizza Menu">
                            </div>
                            <div class="content">
                                <h5><a href="{{ route('productDetails') }}">Italian pizza</a></h5>
                                <p>Fast order save 20%</p>
                                <span class="price">$25</span>
                            </div>
                            <a href="{{ route('productDetails') }}" class="details-btn"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50">
                        <div class="food-menu-item">
                            <div class="image">
                                <img src="{{ asset('/assets/images/dishes/pizza-menu1.png') }}" alt="Pizza Menu">
                            </div>
                            <div class="content">
                                <h5><a href="{{ route('productDetails') }}">Italian pizza</a></h5>
                                <p>Fast order save 20%</p>
                                <span class="price">$25</span>
                            </div>
                            <a href="{{ route('productDetails') }}" class="details-btn"><i class="fas fa-plus"></i></a>
                        </div>
                        <div class="special-pizza" style="background-image: url(assets/images/background/special-pizza-bg.png)">
                            <div class="image">
                                <img src="{{ asset('/assets/images/dishes/special-pizza.png') }}" alt="Special Pizza">
                            </div>
                            <span class="price">only $59</span>
                            <h3>SPECIALTY<br> PIZZAS</h3>
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(5k)</span>
                            </div><br>
                            <a href="{{ route('shop') }}" class="theme-btn style-two">order now <i class="far fa-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Popular Menu Area end -->
        
        
        <!-- Booking Table Area start -->
        <section class="booking-table-area pb-180 rpb-150 rel z-1">
            <div class="container">
                <div class="booking-table-wrap overlay" style="background-image: url(assets/images/background/booking-table.jpg);">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="booking-table-content" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                               <a href="https://www.youtube.com/watch?v=9Y7ma241N8k" class="mfp-iframe video-play"><i class="fas fa-play"></i></a>
                                <div class="section-title mt-30 text-white mb-20">
                                    <span class="sub-title mb-5">Have any lunch or dinner plan ?</span>
                                    <h2>We Offer quality food for lunch & dinner</h2>
                                </div>
                                <div class="contact--number">
                                    <div class="icon"><i class="fas fa-phone"></i></div>
                                    <div class="number">
                                        <span class="title">Contact Us</span>
                                        <a href="{{ url('callto:+00012345688') }}">+000 123 456 88</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                            <div class="booking-table-form rmt-50" style="background-image: url(assets/images/background/form-bg.png)">
                               <div class="section-title">
                                    <h2>book a table</h2>
                                </div>
                                <p>Enjoy your food to book your table</p>
                                <form id="booking-form" class="booking-form mt-25" name="booking-form" method="post">
                                    <div class="row gap-20">
                                        <div class="col-md-6 mb-20">
                                            <div class="form-group">
                                                <select name="person" id="person">
                                                    <option value="option1">Person</option>
                                                    <option value="option2">Person 2</option>
                                                    <option value="option3">Person 3</option>
                                                    <option value="option4">Person 4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="date"><i class="far fa-calendar-alt"></i></label>
                                                <input type="text" id="date" name="date" class="form-control" value="" placeholder="Date" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="time"><i class="far fa-clock"></i></label>
                                                <input type="text" id="time" name="time" class="form-control" value="" placeholder="Time" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="number"><i class="far fa-phone"></i></label>
                                                <input type="text" id="number" name="number" class="form-control" value="" placeholder="Phone" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group mb-0">
                                                <button type="submit" class="theme-btn">book your table <i class="far fa-arrow-alt-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Booking Table Area end -->
        
        
        <!-- Testimonials Two Area start -->
        <section class="testimonials-two bgc-primary" style="background-image: url(assets/images/testimonials/testimonials-two-bg.png);">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="why-choose-two-image">
                        <img src="{{ asset('/assets/images/testimonials/testimonials-two.jpg') }}" alt="Testimonials">
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
        
        
        <!-- Headline area start -->
        <div class="headline-area pt-120 rpt-90 rel z-1">
            <span class="marquee-wrap">
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
                    <img src="{{ asset('/assets/images/shapes/chillies.png') }}" alt="Shape">
                </div>
                <div class="shape two">
                    <img src="{{ asset('/assets/images/shapes/tomato.png') }}" alt="Shape">
                </div>
            </div>
        </div>
        <!-- Headline Area end -->
        
        
        <!-- Blog Area start -->
        <section class="blog-area pt-110 rpt-80 pb-85 rpb-55 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="sub-title mb-5">latest news & blog</span>
                            <h2>get every single updates news</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-8">
                        <div class="blog-two-wrap">
                            <div class="blog-item style-two image-left" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                                <div class="image">
                                    <img src="{{ asset('/assets/images/blog/blog4.jpg') }}" alt="Blog">
                                </div>
                                <div class="content">
                                    <ul class="blog-meta-two">
                                        <li>
                                            <a href="#">Quality Food</a>
                                        </li>
                                        <li>
                                            <a href="#">March 25, 2024</a>
                                        </li>
                                        <li>
                                            <a href="#">comments (5)</a>
                                        </li>
                                    </ul>
                                    <h4><a href="{{ route('blogDetails') }}">Culinary Chronicles Exploring Gastronomic Wonders at foodking Restaurant</a></h4>
                                    <p>Restaurant where culinary excellence meets hospitality in every dish we serve settled in the heart</p>
                                    <a href="{{ route('blogDetails') }}" class="read-more">Read more <i class="far fa-arrow-alt-right"></i></a>
                                </div>
                            </div>
                            <hr class="mb-35 d-none d-md-block">
                            <div class="blog-item style-two image-left" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                                <div class="image">
                                    <img src="{{ asset('/assets/images/blog/blog5.jpg') }}" alt="Blog">
                                </div>
                                <div class="content">
                                    <ul class="blog-meta-two">
                                        <li>
                                            <a href="#">Quality Food</a>
                                        </li>
                                        <li>
                                            <a href="#">March 25, 2024</a>
                                        </li>
                                        <li>
                                            <a href="#">comments (5)</a>
                                        </li>
                                    </ul>
                                    <h4><a href="{{ route('blogDetails') }}">Culinary Chronicles Exploring Gastronomic Wonders at foodking Restaurant</a></h4>
                                    <p>Restaurant where culinary excellence meets hospitality in every dish we serve settled in the heart</p>
                                    <a href="{{ route('blogDetails') }}" class="read-more">Read more <i class="far fa-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-10">
                        <div class="blog-item style-two" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/blog/blog6.jpg') }}" alt="Blog">
                            </div>
                            <div class="content">
                                <ul class="blog-meta-two">
                                    <li>
                                        <a href="#">Quality Food</a>
                                    </li>
                                    <li>
                                        <a href="#">March 25, 2024</a>
                                    </li>
                                    <li>
                                        <a href="#">comments (5)</a>
                                    </li>
                                </ul>
                                <h4><a href="{{ route('blogDetails') }}">Culinary Chronicle Exploring Gastronomic Wonders at foodking Restaurant</a></h4>
                                <p>Restaurant where culinary excellence meet hospitality in every dish we serve settled in the heart</p>
                                <a href="{{ route('blogDetails') }}" class="read-more">Read more <i class="far fa-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area end -->
        
        
        <!-- Headline area start -->
        <div class="headline-area rel z-1">
            <span class="marquee-wrap">
               <span class="marquee-inner left">
                    <span class="marquee-item">newsletter subscribe</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">newsletter subscribe</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">newsletter subscribe</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
               </span>
               <span class="marquee-inner left">
                    <span class="marquee-item">newsletter subscribe</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">newsletter subscribe</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">newsletter subscribe</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
               </span>
               <span class="marquee-inner left">
                    <span class="marquee-item">newsletter subscribe</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">newsletter subscribe</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
                    <span class="marquee-item">newsletter subscribe</span>
                    <span class="marquee-item"><i class="flaticon-star"></i></span>
               </span>
            </span>
            <div class="headline-shapes">
                <div class="shape one">
                    <img src="{{ asset('/assets/images/shapes/tomato.png') }}" alt="Shape">
                </div>
            </div>
        </div>
        <!-- Headline Area end -->
       
        
        <!-- Newsletter Area start -->
        <section class="newsletter-area py-65 mb-5 rel z-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title rmb-25" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="sub-title mb-5">join our newsletter</span>
                            <h2>subscribe follow newsletter to get more updates</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="newsletter-form-wrap" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                            <h6>Hurry up to join us to get more offer, JOIN FOR HOT OFFERS</h6>
                            <form class="newsletter-form style-two mt-15" action="#">
                                <label for="news-email"><i class="fas fa-envelope"></i></label>
                                <input id="news-email" type="email" placeholder="Email Address" required>
                                <button class="theme-btn style-two" type="submit">Subscribe <i class="far fa-arrow-alt-right"></i></button>
                            </form>
                            <div class="check-field mt-15">
                                <input id="update-news" type="checkbox">
                                <label for="update-news">Get 15 days update news & latest offer</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="newsletter-shapes">
                <div class="shape">
                    <img src="{{ asset('/assets/images/shapes/newsletter-pizza-shape.png') }}" alt="Shape">
                </div>
            </div>
        </section>
        <!-- Newsletter Area end -->
         
         
        <!-- Instagram area start -->
        <div class="instagram-area">
           <div class="row no-gap row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 justify-content-center">
                <div class="col" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="instagram-item">
                        <img src="{{ asset('/assets/images/instagram/instagram1.jpg') }}" alt="Instagram">
                        <a href="{{ url('assets/images/instagram/instagram1.jpg') }}"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                    <div class="instagram-item">
                        <img src="{{ asset('/assets/images/instagram/instagram2.jpg') }}" alt="Instagram">
                        <a href="{{ url('assets/images/instagram/instagram2.jpg') }}"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                    <div class="instagram-item">
                        <img src="{{ asset('/assets/images/instagram/instagram3.jpg') }}" alt="Instagram">
                        <a href="{{ url('assets/images/instagram/instagram3.jpg') }}"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50">
                    <div class="instagram-item">
                        <img src="{{ asset('/assets/images/instagram/instagram4.jpg') }}" alt="Instagram">
                        <a href="{{ url('assets/images/instagram/instagram4.jpg') }}"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                    <div class="instagram-item">
                        <img src="{{ asset('/assets/images/instagram/instagram5.jpg') }}" alt="Instagram">
                        <a href="{{ url('assets/images/instagram/instagram5.jpg') }}"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
           </div>
        </div>
        <!-- Instagram area end -->
    <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection
