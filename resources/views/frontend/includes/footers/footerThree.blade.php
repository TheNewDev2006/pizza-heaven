<!-- footer area start -->
        <footer class="main-footer bgc-black rel z-1" style="background-image: url(assets/images/background/footer-bg.png);">
            <div class="footer-top py-130 rpy-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-9">
                            <div class="section-title text-white text-center mb-35" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <span class="sub-title mb-10">join our newsletter</span>
                                <h2>subscribe follow our newsletter to get more updates</h2>
                            </div>
                            <form class="newsletter-form" action="#" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                                <label for="news-email"><i class="fas fa-envelope"></i></label>
                                <input id="news-email" type="email" placeholder="Email Address" required>
                                <button class="theme-btn" type="submit">Subscribe <i class="far fa-arrow-alt-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget-area pb-70">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="footer-widget footer-text" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="0">
                                <div class="footer-logo mb-25">
                                    <a href="{{ route('home') }}">
                                        @if($personalization['logo'])
                                            <img src="{{ $personalization['logo'] }}" alt="{{ $personalization['business_name'] }}">
                                        @else
                                            <span class="footer-logo-text" style="font-size: 28px; font-weight: bold; color: #fff;">{{ $personalization['business_name'] ?? 'Restaurant' }}</span>
                                        @endif
                                    </a>
                                </div>
                                <p>Temporibus autem quibusdam officiis aut rerum necessitatibus eveniet voluta repudiandae molestiae recusandae</p>
                                <div class="social-style-one mt-15">
                                    <a href="{{ $personalization['facebook'] ?? '#' }}"><i class="fab fa-facebook-f"></i></a>
                                    <a href="{{ $personalization['twitter'] ?? '#' }}"><i class="fab fa-twitter"></i></a>
                                    <a href="{{ $personalization['linkedin'] ?? '#' }}"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="{{ $personalization['instagram'] ?? '#' }}"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-sm-6">
                            <div class="footer-widget footer-links" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="0">
                                <div class="footer-title">
                                    <h5>popular food</h5>
                                </div>
                                <ul class="two-column">
                                    <li><a href="{{ route('productDetails') }}">Hamburger</a></li>
                                    <li><a href="{{ route('productDetails') }}">French fries</a></li>
                                    <li><a href="{{ route('productDetails') }}">Chicken pizza</a></li>
                                    <li><a href="{{ route('productDetails') }}">Onion rings</a></li>
                                    <li><a href="{{ route('productDetails') }}">Vegetable roll</a></li>
                                    <li><a href="{{ route('productDetails') }}">Chicken nuggets</a></li>
                                    <li><a href="{{ route('productDetails') }}">Sea fish</a></li>
                                    <li><a href="{{ route('productDetails') }}">Tacos Pizza</a></li>
                                    <li><a href="{{ route('productDetails') }}">Fried chicken</a></li>
                                    <li><a href="{{ route('productDetails') }}">Hot Dogs</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="row justify-content-between">
                                <div class="col-xl-6 col-lg-5 col-sm-6">
                                    <div class="footer-widget footer-contact" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="0">
                                        <div class="footer-title">
                                            <h5>contact us</h5>
                                        </div>
                                        <ul>
                                            <li>{{ $personalization['address'] ?? '267, Jampettah Street, Colombo 13' }}</li>
                                            <li><a href="{{ url('mailto:'.$personalization['email']) }}"><u>{{ $personalization['email'] }}</u></a></li>
                                            <li><a href="{{ url('callto:'.$personalization['phone']) }}">{{ $personalization['phone'] }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-5 col-sm-6">
                                    <div class="footer-widget opening-hour" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="0">
                                        <div class="footer-title">
                                            <h5>opening hour</h5>
                                        </div>
                                        <ul>
                                            <li>Monday – Friday: <span>8am – 4pm</span></li>
                                            <li>Saturday: <span>8am – 12am</span></li>
                                        </ul>
                                        <div class="any-question mt-20">
                                            <h5>Have any questions?</h5>
                                            <a href="#" class="theme-btn style-two">let’s talk us <i class="far fa-arrow-alt-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom pt-30 pb-15">
                <div class="container">
                    <div class="row">
                       <div class="col-lg-5">
                             <div class="copyright-text text-center text-lg-start">
                                 <p>Copyright 2025 <a href="{{ route('home') }}">{{ $personalization['business_name'] ?? 'Restaurant' }}</a>. All Rights Reserved </p>
                             </div>
                       </div>
                       <div class="col-lg-7 text-center text-lg-end">
                           <ul class="footer-bottom-nav">
                               <li><a href="#">Privacy Policy</a></li>
                               <li><a href="#">Terms & Condition</a></li>
                           </ul>
                       </div>
                    </div>
                    <!-- Scroll Top Button -->
                    <button class="scroll-top scroll-to-target" data-target="html"><i class="fas fa-arrow-alt-up"></i></button>
                </div>
            </div>
            <div class="footer-shapes">
                <div class="shape one">
                    <img src="{{ asset('/assets/images/shapes/hero-shape5.png') }}" alt="Shape">
                </div>
                <div class="shape two">
                    <img src="{{ asset('/assets/images/shapes/tomato.png') }}" alt="Shape">
                </div>
                <div class="shape three">
                    <img src="{{ asset('/assets/images/shapes/pizza-two.png') }}" alt="Shape">
                </div>
            </div>
        </footer>
        <!-- footer area end -->