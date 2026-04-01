<header class="main-header">
    <!--Header-Upper-->
    <div class="header-upper">
        <div class="container-fluid clearfix">

            <div class="header-inner rel d-flex align-items-center">
                <div class="logo-outer">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            @if($personalization['logo'])
                                <img src="{{ $personalization['logo'] }}" alt="{{ $personalization['business_name'] }}" title="{{ $personalization['business_name'] }}">
                            @else
                                <span class="logo-text" style="font-size: 24px; font-weight: bold; color: #333;">{{ $personalization['business_name'] ?? 'Restaurant' }}</span>
                            @endif
                        </a>
                    </div>
                </div>

                <div class="nav-outer ms-lg-5 ps-xxl-4 me-lg-auto clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header py-10">
                            <div class="mobile-logo">
                                <a href="{{ route('home') }}">
                                    @if($personalization['logo'])
                                        <img src="{{ $personalization['logo'] }}" alt="{{ $personalization['business_name'] }}">
                                    @else
                                        <span class="logo-text" style="font-size: 20px; font-weight: bold; color: #333;">{{ $personalization['business_name'] ?? 'Restaurant' }}</span>
                                    @endif
                                </a>
                            </div>
                            
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                @include('frontend.includes.partials.navbar')
                            </ul>
                        </div>

                    </nav>
                    <!-- Main Menu End-->
                </div>
                
                <!-- Nav Search -->
                <div class="nav-search py-10">
                    <button class="far fa-search"></button>
                    <form action="#" class="hide">
                        <input type="text" placeholder="Search" class="searchbox" required="">
                        <button type="submit" class="searchbutton far fa-search"></button>
                    </form>
                </div>
                
                <!-- Menu Button -->
                <div class="menu-btns">
                    <button><i class="far fa-shopping-cart"></i> <span>2</span></button>
                    <a href="{{ route('contact') }}" class="theme-btn style-two">Book now <i class="far fa-arrow-alt-right"></i></a>
                    <!-- menu sidbar -->
                    <div class="menu-sidebar">
                        <button class="bg-transparent"></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-lines">
            <span></span><span></span>
            <span></span><span></span>
        </div>
    </div>
    <!--End Header Upper-->
</header>
<!--Form Back Drop-->
<div class="form-back-drop"></div>

<!-- Hidden Sidebar -->
<section class="hidden-bar">
    <div class="inner-box text-center">
        <div class="cross-icon"><span class="fa fa-times"></span></div>
        <div class="title">
            <h4>Get Appointment</h4>
        </div>

        <!--Appointment Form-->
        <div class="appointment-form">
            <form method="post" action="#">
                <div class="form-group">
                    <input type="text" name="text" value="" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" value="" placeholder="Email Address" required>
                </div>
                <div class="form-group">
                    <textarea placeholder="Message" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="theme-btn style-two">Submit now</button>
                </div>
            </form>
        </div>

        <!--Social Icons-->
        <div class="social-style-one">
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-pinterest-p"></i></a>
        </div>
    </div>
</section>
<!--End Hidden Sidebar -->