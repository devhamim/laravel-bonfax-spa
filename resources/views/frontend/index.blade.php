@extends('frontend.layouts.app')

@section('content')
    <!--=====================================
                                                                                                                                                                                                                                                                                                                                                                                    BANNER START
                                                                                                                                                                                                                                                                                                                                                                            =====================================-->
    <section class="tf__banner">
        <div class="row banner_slider">
            @foreach ($sliders as $slider)
                <div class="col-12">
                    <div class="tf__single_slider"
                        style="background: url({{ asset('setting/banner') }}/{{ $slider->image }});">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-md-8">
                                    <div class="tf__single_slider_text wow fadeInUp " data-wow-duration="1s">
                                        <h5>{{ $slider->header_title }}</h5>
                                        <h1><span>Service!!</span></h1>
                                        <p>{{ $slider->bottom_title }}</p>
                                        <ul class="d-flex flex-wrap">
                                            <li>
                                                <a class="common_btn" href="#">get started</a>
                                            </li>
                                            {{-- <li>
                                                <a class="venobox play_btn" data-autoplay="true" data-vbtype="video"
                                                    href="https://youtu.be/xsnCYCEbdr4">
                                                    <i class="fas fa-play"></i>
                                                </a>
                                                <span>Intro Video</span>
                                            </li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!--=====================================
                                                                                                                                                                                                                                                            BANNER END
                                                                                                                                                                                                                                                    =====================================-->


    <!--=====================================
                                                                                                                                                                                                                                                        FUTURED SERVICES START
                                                                                                                                                                                                                                                    =====================================-->
    <section class="tf__services_2 mt_115 xs_mt_65">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 wow fadeInUp" data-wow-duration="1s"
                    style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                    <div class="tf__section_heading_2 mb_30">
                        <h5>Our Service</h5>
                        <h3>Services</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($services->take(6) as $service)
                    <div class="col-xl-4 col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1s"
                        style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                        <div class="tf__single_service_2">
                            <div class="tf__single_service_2_img">
                                <img src="{{ asset('/setting/banner/' . $service->service_image) }}" alt="services"
                                    class="img-fluid w-100">
                                <a href="#"><i class="fas fa-heart" aria-hidden="true"></i></a>
                            </div>
                            <div class="tf__single_service_2_text">
                                <a class="title"
                                    href="{{ route('services.details', $service->id) }}">{{ $service->title }}</a>
                                <p class="description">{{ $service->service_details }}</p>
                                <div class="btn_area">
                                    <a href="{{ route('services.details', $service->id) }}">Read More</a>
                                    <strong>{{ $service->price }} TK</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="common_btn" href="{{ route('service.view') }}">All Services</a>
        </div>
    </section>
    <!--=====================================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            FUTURED SERVICES END
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        =====================================-->


    <!--=====================================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ABOUT START
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        =====================================-->
    <section class="tf__about mt_120 xs_mt_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-10 col-lg-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="row">
                        <div class="col-12">
                            <div class="tf__section_heading tf__heading_left mb_25">
                                <h5>About Us</h5>
                                <h3>{{ $secrets->first()->title }}</h3>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="tf__about_text">
                                {{ $secrets->first()->secrets_des }}
                            </div>
                            <a class="common_btn mt_25" href="{{ route('about') }}">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__about_img">
                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="{{ $secrets->first()->video }}">
                            <i class="fas fa-play"></i>
                        </a>
                        <img src="{{ asset('backend_img/secrets/' . $secrets->first()->secrets_img) }} " alt="about us"
                            class="img-fluid-100 large_img_1">
                        <img src="{{ asset('backend_img/secrets/' . $secrets->first()->secrets_img_l) }}" alt="about us"
                            class="img-fluid-100 large_img_2">
                        <img src="{{ asset('backend_img/secrets/' . $secrets->first()->secrets_img_r) }}" alt="about us"
                            class="img-fluid-100 large_img_3">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                                                                                                                                                                                                                                                                         ABOUT END
                                                                                                                                                                                                                                                                     =====================================-->


    <!--=====================================
                                                                                                                                                                                                                                                                          SERVICES START
                                                                                                                                                                                                                                                                     =====================================-->
    <section class="tf__services mt_115 xs_mt_70" style="background: url(images/background_shapes.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8 col-md-10 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__section_heading tf__heading_left mb_35">
                        <h5>Our Pricing</h5>
                        <h3>Pricing</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($services->take(4) as $service)
                    <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__services_item">
                            <div class="tf__services_img" style="height: 200px">
                                <img src="{{ asset('/setting/banner/' . $service->service_image) }}" alt="services"
                                    class="img-fluid w-100">
                                <a href="#"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="tf__services_text ">
                                <a class="title"
                                    href="{{ route('services.details', $service->id) }}">{{ $service->title }}</a>
                                <p>{{ $service->description }}</p>
                                <h3><strong>Price :</strong> {{ $service->price }} Tk</h3>
                                <div class="btn_area mt-2">
                                    <a href="{{ route('services.details', $service->id) }}"
                                        style="color: var(--colorPrimary)">Read More</a>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <!--=====================================
                                                                                                                                                                                                                                                                    SERVICES END
                                                                                                                                                                                                                                                                =====================================-->



    <!--=====================================
                                                                                                                                                                                                                                                                GALLERY START
                                                                                                                                                                                                                                                            =====================================-->
    <section class="tf__gallery mt_85 xs_mt_35">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-md-10 col-lg-5 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__section_heading tf__heading_left mb_35 xs_mb_30">
                        <h5>Our Gallery</h5>
                        <h3>Let's See Our Gallery</h3>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__gallery_filter">
                        <button class="active" type="button" data-filter="*">ahow all</button>
                        @foreach ($projects as $project)
                            <button type="button"
                                data-filter=".{{ $project->header_title }}">{{ $project->header_title }}</button>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="row grid">
                @foreach ($projects as $project)
                    <div class="col-lg-4 col-sm-6 {{ $project->header_title }} message wow fadeInUp"
                        data-wow-duration="1s">
                        <div class="tf__gallery_item">
                            <a class="venobox" data-gall="gallery01"
                                href="{{ asset('/setting/banner/' . $project->image) }}">
                                <img src="{{ asset('/setting/banner/' . $project->image) }}" alt="gallery1"
                                    class="img-fluid w-100">
                                <div class="gal_img_overlay">
                                    <h4>{{ $project->header_title }}</h4>
                                    <p>Duis auteirure dolor in reprehenderit</p>
                                </div>
                                <span><i class="fas fa-eye"></i></span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--=====================================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            GALLERY END
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        =====================================-->


    <!--=====================================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            COUNTER START
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        =====================================-->
    <section class="tf__counter mt_105 xs_mt_55 " style="background: url(images/counter_bg.jpg);">
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
    </section>
    <!--=====================================
                                                                                                                                                                                                                                                            COUNTER END
                                                                                                                                                                                                                                                        =====================================-->




    <!--=====================================
                                                                                                                                                                                                                                BLOG START
                                                                                                                                                                                                                            =====================================-->
    <section class="tf__blog mt_115 xs_mt_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-md-10 m-auto wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__section_heading mb_35">
                        <h5>Our News & Blogs</h5>
                        <h3>Read Latest News & Blog</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__featured_blog">
                        <div class="tf__featured_blog_img">
                            <img src="{{ asset('backend_img/blogs') }}/{{ $blogs->first()->blog_img }}" alt="blog"
                                class="img-fluid w-100">
                        </div>
                        <div class="tf__featured_blog_text">

                            <a class="title"
                                href="{{ route('blog.details', $blogs->first()->id) }}">{{ $blogs->first()->blog_title }}</a>
                            <p>{{ $blogs->first()->blog_sort }}</p>
                            <a class="read_more_btn" href="{{ route('blog.details', $blogs->first()->id) }}">read more <i
                                    class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        @foreach ($blogs->take(3) as $key => $blog)
                            @if ($key != 0)
                                <div class="col-xl-12 wow fadeInUp" data-wow-duration="1s">
                                    <div class="tf__single_blog">
                                        <div class="tf__single_blog_img">
                                            <img src="{{ asset('backend_img/blogs') }}/{{ $blog->blog_img }}"
                                                alt="blog" class="img-fluid w-100">
                                        </div>
                                        <div class="tf__single_blog_text">

                                            <a class="title"
                                                href="{{ route('blog.details', $blog->id) }}">{{ $blog->blog_title }}</a>
                                            <p>{{ $blog->blog_sort }}</p>
                                            <a class="blog_read_btn" href="{{ route('blog.details', $blog->id) }}">read
                                                more
                                                <i class="far fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            BLOG END
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        =====================================-->
@endsection
