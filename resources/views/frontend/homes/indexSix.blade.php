@extends('frontend.layouts.app')
@section('title', 'Index Six')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/style-sky-blue.css') }}">
@endsection
@section('content')

    <!-- header area -->
    @include('frontend.includes.headers.headerTwo')
    <!-- header area end -->

    
        
        <!-- Hero Area Start -->
        <section class="hero-area bg-black py-70 rel z-1">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="hero-content style-two text-white" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <h2>{{ $personalization['tagline'] ?? 'The Ultimate Guide For Choosing the Best Cuts of Steak/Grill' }}</h2>
                            <p>Welcome to our culinary sanctuary, where every dish tells a story every bite is an adventure at our food website</p>
                            <div class="hero-btns" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                                <a href="#" class="theme-btn">book now <i class="far fa-arrow-alt-right"></i></a>
                                <div class="header-number">
                                    <i class="far fa-phone"></i>Call : <a href="{{ url('callto:'.$personalization['phone']) }}">{{ $personalization['phone'] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="hero-image-six rmt-60" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                            <img src="{{ asset('/assets/images/hero/hero-six.jpg') }}" alt="Hero">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Area End -->
        
        
        <!-- About Six Area start -->
        <section class="about-six-are rel z-1">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="about-six-service-part rel z-1 pt-130 rpt-100 pb-100 rpb-70 bgc-lighter">
                        <div class="row pb-45">
                            <div class="col-xxl-4 col-sm-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="service-item">
                                    <div class="icon">
                                        <i class="flaticon-recommended-food"></i>
                                    </div>
                                    <h4><a href="{{ route('menuBurger') }}">Best Quality Food</a></h4>
                                    <div class="wave"><img src="{{ asset('/assets/images/shapes/service-wave.png') }}" alt="shape"></div>
                                    <p>Sed ut perspiciatis unde omnis este natus sit voluptatem</p>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-sm-6" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                                <div class="service-item">
                                    <div class="icon">
                                        <i class="flaticon-fast-delivery"></i>
                                    </div>
                                    <h4><a href="{{ route('menuBurger') }}">Fast Food Delivery</a></h4>
                                    <div class="wave"><img src="{{ asset('/assets/images/shapes/service-wave.png') }}" alt="shape"></div>
                                    <p>Sed ut perspiciatis unde omnis este natus sit voluptatem</p>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-sm-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                                <div class="service-item">
                                    <div class="icon">
                                        <i class="flaticon-chef"></i>
                                    </div>
                                    <h4><a href="{{ route('menuBurger') }}">Experience Chefs</a></h4>
                                    <div class="wave"><img src="{{ asset('/assets/images/shapes/service-wave.png') }}" alt="shape"></div>
                                    <p>Sed ut perspiciatis unde omnis este natus sit voluptatem</p>
                                </div>
                            </div>
                        </div>
                        <span class="marquee-wrap">
                           <span class="marquee-inner left">
                                <span class="marquee-item">Italian pizza</span>
                                <span class="marquee-item"><i class="flaticon-star"></i></span>
                                <span class="marquee-item">delicious</span>
                                <span class="marquee-item"><i class="flaticon-star"></i></span>
                           </span>
                           <span class="marquee-inner left">
                                <span class="marquee-item">Italian pizza</span>
                                <span class="marquee-item"><i class="flaticon-star"></i></span>
                                <span class="marquee-item">delicious</span>
                                <span class="marquee-item"><i class="flaticon-star"></i></span>
                           </span>
                           <span class="marquee-inner left">
                                <span class="marquee-item">Italian pizza</span>
                                <span class="marquee-item"><i class="flaticon-star"></i></span>
                                <span class="marquee-item">delicious</span>
                                <span class="marquee-item"><i class="flaticon-star"></i></span>
                           </span>
                        </span>
                        <div class="headline-shapes">
                            <div class="shape two">
                                <img src="{{ asset('/assets/images/shapes/tomato.png') }}" alt="Shape">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-six-content m-90 rmy-100" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mb-75 rmb-35">
                            <span class="sub-title mb-5">About Us</span>
                            <h2>Best Quality Food For Your Good Health</h2>
                        </div>
                        <p>Welcome to restaurant, where culinary excellence meets warm hospitality in every dish serve. Nestled the heart of city our eatery invites a journey restaurant</p>
                        <a href="{{ route('about') }}" class="theme-btn style-two mt-20">learn more us <i class="far fa-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Six Area end -->
        
        
        <!-- Food Category Area start -->
        <section class="category-area pt-130 rpt-0 pb-100 rpb-70 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-10 px-xl-5">
                        <div class="section-title text-center mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="sub-title mb-5">popular food category</span>
                            <h2>We Provide Amazing & Quality Food For Your Good Health</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6 col-small">
                        <div class="fc-two-item style-two" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="icon">
                                <img src="{{ asset('/assets/images/category/category-two1.png') }}" alt="Icon">
                            </div>
                            <h5>Pickled Chicken</h5>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6 col-small">
                        <div class="fc-two-item style-two" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                            <div class="icon">
                                <img src="{{ asset('/assets/images/category/category-two2.png') }}" alt="Icon">
                            </div>
                            <h5>Sliced Beef</h5>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6 col-small">
                        <div class="fc-two-item style-two" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                            <div class="icon">
                                <img src="{{ asset('/assets/images/category/category-two3.png') }}" alt="Icon">
                            </div>
                            <h5>Pork Ribs</h5>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6 col-small">
                        <div class="fc-two-item style-two" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50">
                            <div class="icon">
                                <img src="{{ asset('/assets/images/category/category-two4.png') }}" alt="Icon">
                            </div>
                            <h5>Spicy Salad</h5>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6 col-small">
                        <div class="fc-two-item style-two" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <div class="icon">
                                <img src="{{ asset('/assets/images/category/category-two5.png') }}" alt="Icon">
                            </div>
                            <h5>Meat Medallion</h5>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6 col-small">
                        <div class="fc-two-item style-two" data-aos="fade-up" data-aos-delay="250" data-aos-duration="1500" data-aos-offset="50">
                            <div class="icon">
                                <img src="{{ asset('/assets/images/category/category-two6.png') }}" alt="Icon">
                            </div>
                            <h5>Lamb Cubes</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Food Category Area end -->
        
        
        <!-- Counter Four Area start -->
        <div class="counter-area-four bgs-cover pt-100" style="background-image: url(assets/images/background/counter.jpg);">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-7 col-lg-9">
                        <div class="row no-gap">
                            <div class="col-lg-4 col-sm-6">
                                <div class="counter-item text-white style-four bgc-primary counter-text-wrap" data-aos="fade-down" data-aos-duration="1500" data-aos-offset="50">
                                    <span class="count-text k-plus" data-speed="3000" data-stop="8">0</span>
                                    <div class="wave"><img src="{{ asset('/assets/images/shapes/counter-wave-white.png') }}" alt="Shape"></div>
                                    <h6 class="counter-title">Happy Customers</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="counter-item style-four bgc-secondary counter-text-wrap" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                                    <span class="count-text plus" data-speed="3000" data-stop="53">0</span>
                                    <div class="wave"><img src="{{ asset('/assets/images/shapes/counter-wave.png') }}" alt="Shape"></div>
                                    <h6 class="counter-title">Experience Chefs</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="counter-item style-four counter-text-wrap" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                                    <span class="count-text plus" data-speed="3000" data-stop="86">0</span>
                                    <div class="wave"><img src="{{ asset('/assets/images/shapes/counter-wave.png') }}" alt="Shape"></div>
                                    <h6 class="counter-title">Favorite Dishes</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Four Area end -->
        
        
        <!-- Grill Menu Area start -->
        <section class="grill-menu-area pt-130 rpt-100 pb-130 rpb-100 rel z-1">
            <div class="container pb-60">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <div class="section-title text-center mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="sub-title mb-5">popular menu</span>
                            <h2>We Provide Exclusive Food Based On USA Explore Popular Food</h2>
                        </div>
                    </div>
                </div>
                <div class="grill-menu-wrap">
                    <div class="row no-gap">
                        <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            <div class="grill-menu-image bgs-cover" style="background: url(assets/images/food/grill-menu.jpg);"></div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                            <div class="popular-menu-wrap">
                                <span class="vertical-text">
                                   Explore Our Popular Menu Items <i class="far fa-long-arrow-alt-right"></i> Explore Our Popular Menu Items
                                </span>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/grill-menu1.jpg') }}" alt="Grill Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">Porterhouse Steak Dinner</span> <span class="dots"></span> <span class="price">$25</span></h5>
                                        <p>Diverse menu features array of delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/grill-menu2.jpg') }}" alt="Grill Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">Chimichurri Flank Steak</span> <span class="dots"></span> <span class="price">$74</span></h5>
                                        <p>Diverse menu features array of delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/grill-menu3.jpg') }}" alt="Grill Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">Blackened Hanger Steak</span> <span class="dots"></span> <span class="price">$63</span></h5>
                                        <p>Diverse menu features array of delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/grill-menu4.jpg') }}" alt="Grill Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">Marinated Skirt Steak</span> <span class="dots"></span> <span class="price">$30</span></h5>
                                        <p>Diverse menu features array of delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/grill-menu5.jpg') }}" alt="Grill Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">Spiced Lamb Kebabs</span> <span class="dots"></span> <span class="price">$49</span></h5>
                                        <p>Diverse menu features array of delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/grill-menu6.jpg') }}" alt="Grill Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">Prime Sirloin Steak</span> <span class="dots"></span> <span class="price">$93</span></h5>
                                        <p>Diverse menu features array of delectable</p>
                                    </div>
                                </div>
                                <div class="food-menu-item style-two">
                                    <div class="image">
                                        <img src="{{ asset('/assets/images/food/grill-menu7.jpg') }}" alt="Grill Menu">
                                    </div>
                                    <div class="content">
                                        <h5><span class="title">Jamaican Jerk Chicken</span> <span class="dots"></span> <span class="price">$84</span></h5>
                                        <p>Diverse menu features array of delectable</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Grill Menu Area end -->
        
        
        <!-- Call To Action Area start -->
        <section class="cta-area-two bgc-black text-white py-100 rel z-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="cta-content-two mt-20 rmt-0" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="section-title text-white mb-20">
                                <h2>Need Good Food Steak and Quality Restaurant</h2>
                            </div>
                            <hr class="mt-35 mb-45">
                            <p>Grilling steak to perfection both an art and science requiring blend technique timing quality ingredients the process begins with selecting the right</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cta-two-image rmt-55 rmb-75" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                            <img src="{{ asset('/assets/images/cta/cta-two.png') }}" alt="CTA">
                            <div class="badge">
                                <img src="{{ asset('/assets/images/cta/cta-two-badge.png') }}" alt="Badge">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cta-content-list" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                            <h5>25 + Years We Provide Quality foods Get 20% Off For Every Foods</h5>
                            <ul class="list-style-one mt-30 mb-40">
                                <li>Best Quality Natural & Fresh Food</li>
                                <li>Experience & Quality Chefs</li>
                                <li>Awards Winning Restaurant</li>
                                <li>Healthy & Organic Foods</li>
                            </ul>
                            <a href="{{ route('contact') }}" class="theme-btn">Book A Table <i class="far fa-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cta-two-shapes">
                <div class="shape one">
                    <img src="{{ asset('/assets/images/shapes/cta-two1.png') }}" alt="Shape">
                </div>
                <div class="shape two">
                    <img src="{{ asset('/assets/images/shapes/cta-two2.png') }}" alt="Shape">
                </div>
                <div class="shape three">
                    <img src="{{ asset('/assets/images/shapes/cta-two3.png') }}" alt="Shape">
                </div>
                <div class="shape four">
                    <img src="{{ asset('/assets/images/shapes/cta-two4.png') }}" alt="Shape">
                </div>
            </div>
        </section>
        <!-- Call To Action Area end -->
        
        
        <!-- Pizza Area start -->
        <section class="pizza-area pt-100 rpb-70 pb-130 rpb-100 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="sub-title mb-5">popular item</span>
                            <h2>Popular Delicious Food</h2>
                        </div>
                    </div>
                </div>
                <div class="pizza-active">
                    <div class="product-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <img src="{{ asset('/assets/images/products/grill1.png') }}" alt="Grill">
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
                            <h5><a href="{{ route('productDetails') }}">BBQ dish with vegetables</a></h5>
                            <span class="price"><del>$99</del> $68</span>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <img src="{{ asset('/assets/images/products/grill2.png') }}" alt="Grill">
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
                            <h5><a href="{{ route('productDetails') }}">Grill steak meal fries</a></h5>
                            <span class="price"><del>$130</del> $112</span>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <img src="{{ asset('/assets/images/products/grill3.png') }}" alt="Grill">
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
                            <h5><a href="{{ route('productDetails') }}">BBQ dish with vegetables</a></h5>
                            <span class="price"><del>$50</del> $25</span>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <img src="{{ asset('/assets/images/products/grill4.png') }}" alt="Grill">
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
                            <h5><a href="{{ route('productDetails') }}">Grill steak-meal fries</a></h5>
                            <span class="price"><del>$280</del> $259</span>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <img src="{{ asset('/assets/images/products/grill1.png') }}" alt="Grill">
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
                            <h5><a href="{{ route('productDetails') }}">BBQ dish with vegetables</a></h5>
                            <span class="price"><del>$99</del> $68</span>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <img src="{{ asset('/assets/images/products/grill2.png') }}" alt="Grill">
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
                            <h5><a href="{{ route('productDetails') }}">Grill steak meal fries</a></h5>
                            <span class="price"><del>$130</del> $112</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pizza Area end -->
        
        
        <!-- Category Banner area start -->
        <div class="category-banner-area">
           <div class="container">
               <div class="row">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="category-banner-item style-five height-100" style="background-image: url(assets/images/banner/category-banner-style-two1.jpg);">
                            <div class="badge">$89</div>
                            <span class="price">29% Discount</span>
                            <h3>Jamaican Jerk Chicken</h3>
                            <a href="{{ route('menuGrill') }}" class="read-more">Explore Menu <i class="far fa-arrow-alt-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                        <div class="category-banner-item style-five" style="background-image: url(assets/images/banner/category-banner-style-two2.jpg);">
                            <span class="price">29% Discount</span>
                            <h3>Porterhouse Steak Dinner</h3>
                            <a href="{{ route('menuGrill') }}" class="read-more">Explore Menu <i class="far fa-arrow-alt-right"></i></a>
                        </div>
                        <div class="category-banner-item style-five" style="background-image: url(assets/images/banner/category-banner-style-two3.jpg);">
                            <span class="price">29% Discount</span>
                            <h3>Blackened Hanger Steak</h3>
                            <a href="{{ route('menuGrill') }}" class="read-more">Explore Menu <i class="far fa-arrow-alt-right"></i></a>
                        </div>
                    </div>
               </div>
           </div>
        </div>
        <!-- Category Banner area end -->
        
        
        <!-- Booking Table Area start -->
        <section class="booking-table-area pt-100 rpt-70 rel z-2">
            <div class="container">
                <div class="booking-table-wrap overlay" style="background-image: url(assets/images/background/booking-table.jpg);">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="booking-table-content" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                               <a href="https://www.youtube.com/watch?v=9Y7ma241N8k" class="mfp-iframe video-play"><i class="fas fa-play"></i></a>
                                <div class="section-title mt-30 text-white mb-20">
                                    <span class="sub-title mb-5">Have any lunch or dinner plan ?</span>
                                    <h2>We Offer quality food for lunch & dinner</h2>
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
        
        
        <!-- Testimonials Six Area start -->
        <section class="testimonials-six rel z-1 pt-250 pb-130 rpb-100" style="background-image: url(assets/images/background/testimonials.jpg);">
            <div class="container pt-100 rpt-70">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6 col-lg-8">
                        <div class="testimonials-three-content rel z-1 text-white rmb-55">
                            <div class="section-title mb-45" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <span class="sub-title text-white mb-5">customer feedback</span>
                                <h2>what our customer’s say us</h2>
                            </div>
                            <div class="testimonials-two-carousel" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="testimonial-two-item style-two">
                                    <div class="content">
                                        <div class="icon"><img src="{{ asset('/assets/images/testimonials/author1.jpg') }}" alt=""></div>
                                        <div class="text">Renowned for its versatility in the kitchen, Red King Crab can prepared in various ways, from simple steaming or boiling to elaborate preparations such as grilling incorporating weather loving</div>
                                        <span class="author">Randy R. Pennington</span>
                                        <span class="designation">web designer</span>
                                    </div>
                                </div>
                                <div class="testimonial-two-item style-two">
                                    <div class="content">
                                        <div class="icon"><img src="{{ asset('/assets/images/testimonials/author2.jpg') }}" alt=""></div>
                                        <div class="text">Renowned for its versatility in the kitchen, Red King Crab can prepared in various ways, from simple steaming or boiling to elaborate preparations such as grilling incorporating weather loving</div>
                                        <span class="author">Randy R. Pennington</span>
                                        <span class="designation">web designer</span>
                                    </div>
                                </div>
                                <div class="testimonial-two-item style-two">
                                    <div class="content">
                                        <div class="icon"><img src="{{ asset('/assets/images/testimonials/author3.jpg') }}" alt=""></div>
                                        <div class="text">Renowned for its versatility in the kitchen, Red King Crab can prepared in various ways, from simple steaming or boiling to elaborate preparations such as grilling incorporating weather loving</div>
                                        <span class="author">Randy R. Pennington</span>
                                        <span class="designation">web designer</span>
                                    </div>
                                </div>
                                <div class="testimonial-two-item style-two">
                                    <div class="content">
                                        <div class="icon"><img src="{{ asset('/assets/images/testimonials/author1.jpg') }}" alt=""></div>
                                        <div class="text">Renowned for its versatility in the kitchen, Red King Crab can prepared in various ways, from simple steaming or boiling to elaborate preparations such as grilling incorporating weather loving</div>
                                        <span class="author">Randy R. Pennington</span>
                                        <span class="designation">web designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-quote-badge" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                            <div class="testi-badge"><img src="{{ asset('/assets/images/testimonials/badge.png') }}" alt="Badge"></div>
                            <div class="quote"><i class="flaticon-quote"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials Six Area end -->
        
        
        <!-- Blog Area start -->
        <section class="blog-area pt-130 rpt-100 pb-90 rpb-60 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="55">
                            <span class="sub-title mb-5">latest news & blog</span>
                            <h2>get every single updates news</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="blog-item style-three" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/blog/blog-two3.jpg') }}" alt="Blog">
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
                        <div class="blog-item style-three" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/blog/blog-two4.jpg') }}" alt="Blog">
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
         
        
        <!-- Headline area start -->
        <div class="headline-area pb-105 rpb-75 rel z-1">
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
          
           
        <!-- Instagram area start -->
        <div class="instagram-area">
           <div class="row no-gap row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 justify-content-center">
                <div class="col" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                    <div class="instagram-item">
                        <img src="{{ asset('/assets/images/instagram/instagram6.jpg') }}" alt="Instagram">
                        <a href="{{ url('assets/images/instagram/instagram6.jpg') }}"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                    <div class="instagram-item">
                        <img src="{{ asset('/assets/images/instagram/instagram7.jpg') }}" alt="Instagram">
                        <a href="{{ url('assets/images/instagram/instagram7.jpg') }}"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                    <div class="instagram-item">
                        <img src="{{ asset('/assets/images/instagram/instagram8.jpg') }}" alt="Instagram">
                        <a href="{{ url('assets/images/instagram/instagram8.jpg') }}"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                    <div class="instagram-item">
                        <img src="{{ asset('/assets/images/instagram/instagram9.jpg') }}" alt="Instagram">
                        <a href="{{ url('assets/images/instagram/instagram9.jpg') }}"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                    <div class="instagram-item">
                        <img src="{{ asset('/assets/images/instagram/instagram10.jpg') }}" alt="Instagram">
                        <a href="{{ url('assets/images/instagram/instagram10.jpg') }}"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
           </div>
        </div>
        <!-- Instagram area end -->
          
           
        
          
           
        

    <!-- footer area -->
    @include('frontend.includes.footers.footerFive')
    <!-- footer area end -->
@endsection
