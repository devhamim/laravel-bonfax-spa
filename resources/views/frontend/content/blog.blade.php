@extends('frontend.layouts.app')

@section('content')
    <!--=====================================
                                                                    BREADCRUMB START
                                                                =====================================-->
    <section class="tf__breadcrumb"
        style="background: url({{ asset('backend_img/blogs') }}/{{ $blogs->first()->blog_ban_img }});">
        <div class="tf__breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tf__breadcrumb_text">
                            <h1>our blogs</h1>
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
                                                                    BREADCRUMB END
                                                                =====================================-->


    <!--=====================================
                                                                    BLOG GRID START
                                                                =====================================-->
    <section class="tf__blog_page mt_95 xs_mt_45">
        <div class="container">
            <div class="row">

                @foreach ($blogs as $key => $blog)
                    {{-- @if ($key != 0) --}}
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-xl-12 wow fadeInUp" data-wow-duration="1s">
                                <div class="tf__single_blog">
                                    <div class="tf__single_blog_img">
                                        <img src="{{ asset('backend_img/blogs') }}/{{ $blog->blog_img }}" alt="blog"
                                            class="img-fluid w-100">
                                    </div>
                                    <div class="tf__single_blog_text">

                                        <a class="title"
                                            href="{{ route('blog.details', $blog->id) }}">{{ $blog->blog_title }}</a>
                                        <p>{{ $blog->blog_sort }}</p>
                                        <a class="blog_read_btn" href="{{ route('blog.details', $blog->id) }}">read more <i
                                                class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    {{-- @endif --}}
                @endforeach


            </div>

        </div>
    </section>
    <!--=====================================
                                                                    BLOG GRID END
                                                                =====================================-->
@endsection
