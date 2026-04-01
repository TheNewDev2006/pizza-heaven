<!-- footer area start -->
        <footer class="main-footer footer-two bgc-dark-green pt-120 rpt-90 rel z-1">
            <div class="widget-area pb-70">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="footer-widget footer-text" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="0">
                                <div class="footer-title">
                                    <h5>Location</h5>
                                </div>
                                <p>{{ $personalization['address'] ?? '267, Jampettah Street, Colombo 13' }}</p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="0">
                            <div class="footer-widget footer-contact" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="0">
                                <div class="footer-title">
                                    <h5>contact us</h5>
                                </div>
                                <ul>
                                    <li><a href="{{ url('mailto:'.$personalization['email']) }}"><u>{{ $personalization['email'] }}</u></a></li>
                                    <li><a href="{{ url('callto:'.$personalization['phone']) }}">{{ $personalization['phone'] }}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="0">
                            <div class="footer-widget opening-hour" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="0">
                                <div class="footer-title">
                                    <h5>opening hour</h5>
                                </div>
                                <ul>
                                    <li>Monday – Friday: <span>8am – 4pm</span></li>
                                    <li>Saturday: <span>8am – 12am</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="0">
                            <div class="footer-widget footer-text" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="0">
                                <div class="footer-title">
                                    <h5>Follow Us</h5>
                                </div>
                                <div class="social-style-one mt-5">
                                    <a href="{{ $personalization['facebook'] ?? '#' }}"><i class="fab fa-facebook-f"></i></a>
                                    <a href="{{ $personalization['twitter'] ?? '#' }}"><i class="fab fa-twitter"></i></a>
                                    <a href="{{ $personalization['linkedin'] ?? '#' }}"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="{{ $personalization['instagram'] ?? '#' }}"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                                <p>1403 Washington Ave, New Orlea ns, LA 70130, United States</p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-6">
                            <div class="footer-widget footer-contact" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="0">
                                <div class="footer-title">
                                    <h5>contact us</h5>
                                </div>
                                <ul>
                                    <li><a href="{{ url('mailto:'.$personalization['email'] ?? 'info.cynixinc@gmail.com') }}"><u>{{ $personalization['email'] ?? 'info.cynixinc@gmail.com' }}</u></a></li>
                                    <li><a href="{{ url('callto:'.$personalization['phone'] ?? '+94722558244') }}">{{ $personalization['phone'] ?? '+94722558244' }}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="footer-widget opening-hour" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="0">
                                <div class="footer-title">
                                    <h5>opening hour</h5>
                                </div>
                                <ul>
                                    <li>Monday – Friday: <span>8am – 4pm</span></li>
                                    <li>Saturday: <span>8am – 12am</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="footer-widget footer-text" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="0">
                                <div class="footer-title">
                                    <h5>Follow Us</h5>
                                </div>
                                <div class="social-style-one mt-5">
                                    <a href="{{ route('contact') }}"><i class="fab fa-facebook-f"></i></a>
                                    <a href="{{ route('contact') }}"><i class="fab fa-twitter"></i></a>
                                    <a href="{{ route('contact') }}"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="{{ route('contact') }}"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom pt-30 pb-15">
                <div class="container rel text-center">
                    <ul class="footer-bottom-nav">
                       <li><a href="{{ route('productDetails') }}">Hamburger</a></li>
                       <li><a href="#">Pizza</a></li>
                       <li><a href="{{ route('productDetails') }}">Vegetable roll</a></li>
                       <li><a href="{{ route('productDetails') }}">Sea fish</a></li>
                       <li><a href="{{ route('productDetails') }}">Fried chicken</a></li>
                       <li><a href="#">Burger</a></li>
                       <li><a href="#">Saladr</a></li>
                    </ul>
                    <!-- Scroll Top Button -->
                    <button class="scroll-top scroll-to-target" data-target="html"><i class="fas fa-arrow-alt-up"></i></button>
                </div>
                <hr class="mt-25 mb-30">
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
                </div>
            </div>
        </footer>
        <!-- footer area end -->