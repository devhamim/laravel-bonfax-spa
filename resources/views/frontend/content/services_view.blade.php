@extends('frontend.layouts.app')

@section('content')
    <!--=====================================
                                                        BREADCRUMB START
                                                    =====================================-->
    <section class="tf__breadcrumb" style="background: url({{ asset('setting/banner') }}/{{ $services->first()->ban_img }});">
        <div class="tf__breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tf__breadcrumb_text">
                            <h1>our services</h1>
                            <ul>
                                <li><a href="{{ url('/') }}"><i class="fas fa-home"></i> home</a></li>
                                <li><a href="{{ route('service.view') }}">services</a></li>
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
                                                        SERVICES PAGE START
                                                    =====================================-->
    <section class="tf__services_page mt_95 xs_mt_45">
        <div class="container">
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-xl-4 col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1s"
                        style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                        <div class="tf__single_service_2">
                            <div class="tf__single_service_2_img">
                                <img src="{{ asset('/setting/banner/' . $service->service_image) }}" alt="services"
                                    class="img-fluid w-100">
                                <a href="#"><i class="fas fa-heart" aria-hidden="true"></i></a>
                            </div>
                            <div class="tf__single_service_2_text">
                                <a class="title" href="#">{{ $service->title }}</a>
                                <p class="description">{{ $service->service_details }}</p>
                                <div class="btn_area">
                                    <a href="{{ route('services.details', $service->id) }}">Read More</a>
                                    <strong class="">{{ $service->price }} tk</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

    </section>
    <!--=====================================
                                                        SERVICES PAGE END
                                                    =====================================-->
@endsection
