@extends('frontend.layouts.app')
@section('content')
    <!--=====================================
                                                            BREADCRUMB START
                                                        =====================================-->
    <section class="tf__breadcrumb"
        style="background: url({{ asset('backend_img/contact') }}/{{ $contact_banner->first()->contact_img }});">
        <div class="tf__breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tf__breadcrumb_text">
                            <h1>contact us</h1>
                            <ul>
                                <li><a href="{{ url('/') }}"><i class="fas fa-home"></i> home</a></li>
                                <li><a href="{{ route('contact') }}">contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                                                            BREADCRUMB END
                                                        =====================================-->


    <!--=====================================
                                                            CONTACT US START
                                                        =====================================-->
    <section class="tf__contact mt_95 xs_mt_45">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__contact_info">
                        <span><i class="fas fa-map-marker-alt"></i></span>
                        <h3>Our Location</h3>
                        <p>{{ get_setting('office_address') }}</p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__contact_info">
                        <span><i class="fas fa-envelope"></i></span>
                        <h3>Email Us</h3>
                        <p>{{ get_setting('office_email') }}</p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__contact_info">
                        <span><i class="fas fa-phone-alt"></i></span>
                        <h3>Call Us</h3>
                        <p>{{ get_setting('office_phone') }}</p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__contact_info">
                        <span><i class="fas fa-clock"></i></span>
                        <h3>Working Hours</h3>
                        @foreach ($shedules as $shedule)
                            @if ($shedule->time_form != null)
                                <p>{{ $shedule->shedule_form }} to {{ $shedule->shedule_to }} :</p>
                                <p>{{ $shedule->time_form }} - {{ $shedule->time_to }}</p>
                            @else
                                <p>{{ $shedule->shedule_form }} : <a class="text-danger"> Close</a></p>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row mt_120 xs_mt_70">
                <div class="col-xl-5 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__contact_map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29199.787582070454!2d90.43684581929189!3d23.819543211524437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c62fce7d991f%3A0xacfaf1ac8e944c05!2sBasundhara%20Residential%20Area%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1671603674550!5m2!1sen!2sbd"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-7 m-auto wow fadeInUp" data-wow-duration="1s">
                    <form class="tf__contact_form" action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <h2>Do You have Any Questions?</h2>
                        <div class="row">
                            <div class="col-xl-6">
                                <input type="text" name="name" placeholder="Your Name">
                            </div>
                            <div class="col-xl-6">
                                <input type="email" name="email" placeholder="Your Email">
                            </div>
                            {{-- <div class="col-xl-6">
                                <input type="text" placeholder="Your Phone">
                            </div> --}}
                            <div class="col-xl-12">
                                <input type="text" name="subject" placeholder="Subject">
                            </div>
                            <div class="col-xl-12">
                                <textarea rows="7" name="comments" placeholder="Write something Here"></textarea>
                                <button type="submit" class="common_btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                                                            CONTACT US END
                                                        =====================================-->



    {{-- <section class="beautypress-contact-us-section">
        <div class="container">
            <div class="beautypress-contact-wraper beautypress-version-2">
                <div class="row">
                    <div class="col-sm-12 col-lg-8 col-xl-8">
                        <div class="beautypress-contact-form">
                            <h2>Get In Touch</h2>
                            <form action="{{ route('contact.submit') }}" method="POST">
                                @csrf
                                <div class="beautypress-spilit-container">
                                    <div class="input-group">
                                        <input type="text" name="name" placeholder="Your name">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    </div>
                                    <div class="input-group">
                                        <input type="email" name="email" placeholder="Your email">
                                        <div class="input-group-addon"><i class="xsicon icon-envelope5"></i></div>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <input type="text" name="subject" placeholder="Subject">
                                    <div class="input-group-addon"></div>
                                </div>
                                <div class="input-group">
                                    <textarea name="comments" cols="30" rows="10" placeholder="Your comments"></textarea>
                                    <div class="input-group-addon"><i class="fa fa-pencil"></i></div>
                                </div>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-xl-4">
                        <div class="beautypress-contact-details bg-color-purple">
                            <div class="beautypress-separetor-sub-heading beautypress-version-2">
                                <h2>Contact Us</h2>
                            </div>
                            <ul class="beautypress-icon-with-text">
                                <li><i class="fa fa-map-marker"></i>{{ get_setting('office_address') }}</li>
                                <li><i class="xsicon icon-phone3"></i>+91 00 00 00 00</li>
                                <li><i class="xsicon icon-envelope5"></i><a
                                        href="https://demo.xpeedstudio.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="137e727a7f53777c7e727a7d3d707c7e">{{ get_setting('office_email') }}</a>
                                </li>
                                <li><a href="{{ get_setting('facebook') }}" style="display: flex; align-items: center">
                                        <div>
                                            <i class="fa fa-facebook" style="color: #fff"></i>
                                        </div>
                                        <div class="" style="margin-left: 30%; color: #fff">
                                            <span>facebok.com</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div id="beautypress_maps"></div> --}}
@endsection
