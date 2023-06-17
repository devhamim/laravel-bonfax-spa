@extends('frontend.layouts.app')

@section('content')
    <!--=====================================
                                                                                BREADCRUMB START
                                                                            =====================================-->
    <section class="tf__breadcrumb"
        style="background: url({{ asset('backend_img/about') }}/{{ $about_banner_imgs->first()->about_img }});">
        <div class="tf__breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tf__breadcrumb_text">
                            <h1>About Us</h1>
                            <ul>
                                <li><a href="{{ url('/') }}"><i class="fas fa-home"></i> home</a></li>
                                <li><a href="{{ route('about') }}">about us</a></li>
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
                                                                                ABOUT US START
                                                                            =====================================-->
    <section class="about_page">
        <div class="tf__about_page_welcome mt_120 xs_mt_70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__about_page_welcome_img">
                            <img src="{{ asset('backend_img/secrets') }}/{{ $abouts->first()->secrets_img_l }}"
                                alt="welcome" class="img-fluid w-100">
                            <div class="call_area wow fadeInLeft" style="top: 80%;" data-wow-duration="1s">
                                {{-- <h4>David Smith <span>( CEO Of Banfax Spa Salon )</span></h4> --}}
                                <div class="call d-flex flex-wrap">
                                    <i class="fas fa-phone-alt"></i>
                                    <p>Call For Booking: <span>{{ get_setting('office_phone') }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__about_page_welcome_text">
                            <h2>Welcome To Our Bonfax Spa Salon!!</h2>
                            <p> {{ $abouts->first()->secrets_des }} </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="tf__mission mt_120 xs_mt_65">
            <div class="row">
                <!-- <div class="col-xl-6 col-xxl-5 col-lg-7 col-md-9 m-auto wow fadeInUp" data-wow-duration="1s">
                                                                                            <div class="tf__mission_text">
                                                                                                <h3>Our Mission Promotional Video</h3>
                                                                                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia
                                                                                                    consequuntur magni dolores eos qui ratione voluptatem sequi</p>
                                                                                            </div>
                                                                                        </div> -->
                <div class="col-12">
                    <div class="tf__mission_video_area"
                        style="background: url({{ asset('backend_img/videos') }}/{{ $videos->first()->ban_img }});">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8 m-auto wow fadeInUp" data-wow-duration="1s">
                                    <div class="tf__mission_video">
                                        <img src="{{ asset('backend_img/videos') }}/{{ $videos->first()->thumbnail }}"
                                            alt="mission" class="img-fluid w-100">
                                        <a class="venobox play_btn" data-autoplay="true" data-vbtype="video"
                                            href="{{ $videos->first()->video_url }}">
                                            <i class="fas fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="tf__counter mt_105 xs_mt_55" style="background: url(images/counter_bg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__single_counter">
                            <div class="tf__single_counter_center">
                                <h2>
                                    <span class="counter">378</span>
                                </h2>
                            </div>
                            <p>Worldwide Clients</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__single_counter">
                            <div class="tf__single_counter_center">
                                <h2>
                                    <span class="counter">835</span>
                                </h2>
                            </div>
                            <p>Wellness & Spa</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__single_counter">
                            <div class="tf__single_counter_center">
                                <h2>
                                    <span class="counter">712</span>
                                </h2>
                            </div>
                            <p>Happy Customers</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__single_counter">
                            <div class="tf__single_counter_center">
                                <h2>
                                    <span class="counter">75</span>
                                </h2>
                            </div>
                            <p>Awards Winner</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tf__team mt_115 xs_mt_65">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__section_heading mb_35">
                            <h5>Our Team</h5>
                            <h3>Our Experience Specialists</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($teams as $team)
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                            <div class="tf__single_team">
                                <div class="tf__single_team_img">
                                    <img src="{{ asset('backend_img/about') }}/{{ $team->team_img }}" alt="team"
                                        class="img-fluid w-100">
                                    {{-- <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul> --}}
                                </div>
                                <div class="tf__single_team_text">
                                    <p class="title" href="">{{ $team->name }}</p>
                                    <p>{{ $team->position }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


    </section>
    <!--=====================================
                                                                                ABOUT US END
                                                                            =====================================-->
@endsection
