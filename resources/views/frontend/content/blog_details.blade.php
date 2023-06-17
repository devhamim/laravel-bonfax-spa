@extends('frontend.layouts.app')

@section('content')
    <section class="tf__breadcrumb"
        style="background: url({{ asset('backend_img/blogs') }}/{{ $blogs_details->first()->blog_ban_img }});">
        <div class="tf__breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tf__breadcrumb_text">
                            <h1>our services</h1>
                            <ul>
                                <li><a href="{{ url('/') }}"><i class="fas fa-home"></i> home</a></li>
                                <li><a href="{{ route('blog') }}">blog</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--=====================================
                                                                                                                                                            BLOG DETAILS START
                                                                                                                                                        =====================================-->
    <section class="tf__blog_details mt_120 xs_mt_70 pb_5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tf__blog_details_text">
                        <div class="tf__blog_details_img">
                            <img src="{{ asset('backend_img/blogs') }}/{{ $blogs_details->first()->blog_img }}"
                                alt="service" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h2>{{ $blogs_details->first()->blog_title }}</h2>
                    <ul class="header_info d-flex flex-wrap justify-content-between mt-3">
                        <li><i class="fas fa-user" aria-hidden="true"></i> Admin</li>
                        <li><i class="far fa-calendar-alt"
                                aria-hidden="true"></i>{{ $blogs_details->first()->created_at->format('d-M-Y') }}
                        </li>
                        <li></li>
                    </ul>
                    <p class="mt-3">{{ $blogs_details->first()->blog_sort }}</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <p>{{ $blogs_details->first()->blog_long }}</p>
                </div>
            </div>
        </div>
        </div>
        </div>

        </div>

        </div>
    </section>
    <!--=====================================
                                                                                                                                                            BLOG DETAILS END
                                                                                                                                                        =====================================-->
@endsection
