 <!--=====================================
        FOOTER START
    =====================================-->
 <footer class="tf__footer mt_180 xs_mt_130 pt-3"
     style="background: url({{ asset('front_asset') }}/images/footer_bg.jpg);">
     <div class="container">

         <div class="row mt_20 xs_mt_10 pb_80 xs_pb_35 md_padding justify-content-between">
             <div class="col-xl-3 col-md-6 col-lg-4">
                 <div class="tf__footer_logo_area">
                     <a class="footer_logo" href="{{ url('/') }}">
                         <img src="{{ asset(get_setting('frontend_logo_footer')) }}" alt="Bonfax"
                             class="img-fluid w-100">
                     </a>
                     <p>{{ get_setting('footer_description') }}</p>
                     <ul class="d-flex flex-wrap">
                         <li><a href="{{ get_setting('facebook') }}"><i class="fab fa-facebook-f"></i></a></li>
                         <li><a href="{{ get_setting('linkedin') }}"><i class="fab fa-linkedin-in"></i></a></li>
                         <li><a href="{{ get_setting('twitter') }}"><i class="fab fa-twitter"></i></a></li>
                         <li><a href="{{ get_setting('youtube') }}"><i class="fab fa-youtube"></i></a></li>
                         <li><a href="{{ get_setting('instagram') }}"><i class="fab fa-instagram"></i></a></li>
                     </ul>
                 </div>
             </div>
             <div class="col-xl-2 col-sm-6 col-md-4 col-lg-2">
                 <div class="tf__footer_link">
                     <h4>Our Services</h4>
                     <ul>
                         @foreach ($services->take(6) as $service)
                             <li><a href="{{ route('services.details', $service->id) }}">{{ $service->title }}</a></li>
                         @endforeach

                     </ul>
                 </div>
             </div>
             <div class="col-xl-2 col-sm-6 col-md-4 col-lg-2 order-md-4">
                 <div class="tf__footer_link">
                     <h4>Useful Link</h4>
                     <ul>
                         <li><a href="{{ route('about') }}">About Us</a></li>
                         <li><a href="{{ route('service.view') }}">Services</a></li>
                         <li><a href="{{ route('blog') }}">Blog</a></li>
                         <li><a href="{{ route('contact') }}">Contact</a></li>
                     </ul>
                 </div>
             </div>
             <div class="col-xl-3 col-md-6 col-lg-4 order-lg-4">
                 <div class="tf__footer_link">
                     <h4>Contact Us</h4>
                     <p><i class="fas fa-phone-alt"></i> {{ get_setting('office_phone') }}</p>
                     <p><i class="fas fa-envelope"></i>{{ get_setting('office_email') }}</p>
                     <p><i class="fas fa-map-marker-alt"></i>{{ get_setting('office_address') }}</p>
                 </div>
             </div>
         </div>
     </div>
     <hr>
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="tf__footer_copyright">
                     <p>{{ get_setting('copyright_text') }}</p>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!--=====================================
        FOOTER END
    =====================================-->


 <!--=========================
        SCROLL BUTTON START
    ===========================-->
 <div class="tf__scroll_btn">
     <span><i class="fas fa-arrow-alt-up"></i></span>
 </div>
 <!--==========================
        SCROLL BUTTON END
    ===========================-->


 <!--jquery library js-->
 <script src="{{ asset('front_asset/js/jquery-3.6.0.min.js') }}"></script>
 <!--bootstrap js-->
 <script src="{{ asset('front_asset/js/bootstrap.bundle.min.js') }}"></script>
 <!--font-awesome js-->
 <script src="{{ asset('front_asset/js/Font-Awesome.js') }}"></script>
 <!--venobox js-->
 <script src="{{ asset('front_asset/js/venobox.min.js') }}"></script>
 <!--slick slider js-->
 <script src="{{ asset('front_asset/js/slick.min.js') }}"></script>
 <!--cursor pointer js-->
 <script src="{{ asset('front_asset/js/pointer.js') }}"></script>
 <!--isotop js-->
 <script src="{{ asset('front_asset/js/isotope.pkgd.min.js') }}"></script>
 <!--counter js-->
 <script src="{{ asset('front_asset/js/jquery.waypoints.min.js') }}"></script>
 <script src="{{ asset('front_asset/js/jquery.countup.min.js') }}"></script>
 <!--barfiller js-->
 <script src="{{ asset('front_asset/js/animated_barfiller.js') }}"></script>
 <!--nice select js-->
 <script src="{{ asset('front_asset/js/jquery.nice-select.min.js') }}"></script>
 <!--stucky sidebar js-->
 <script src="{{ asset('front_asset/js/sticky_sidebar.js') }}"></script>
 <!--simply countdown js-->
 <script src="{{ asset('front_asset/js/simplyCountdown.js') }}"></script>
 <!--wow js-->
 <script src="{{ asset('front_asset/js/wow.min.js') }}"></script>

 <!--main/custom js-->
 <script src="{{ asset('front_asset/js/main.js') }}"></script>

 </body>



 </html>
