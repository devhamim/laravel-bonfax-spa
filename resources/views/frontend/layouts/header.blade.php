<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="Utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title>BonFax || Spa Salon</title>
    <link rel="icon" type="image/png" href="{{ asset('front_asset/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('front_asset/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_asset/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('front_asset/css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_asset/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('front_asset/css/pointer.css') }}">
    <link rel="stylesheet" href="{{ asset('front_asset/css/animated_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('front_asset/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('front_asset/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('front_asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front_asset/css/responsive.css') }}">
</head>

<body>

    <!--=====================================
        TOPBAR START
    =====================================-->
    <section class="tf__topbar">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-9">
                    <ul class="tf__topbar_left d-flex flex-wrap">
                        <li>
                            <p><i class="fas fa-map-marker-alt"></i>{{ get_setting('office_address') }}</p>
                        </li>
                        <li><a href="mailto:support@yourdomain.com"><i class="fas fa-envelope"></i>
                                {{ get_setting('office_email') }}</a></li>
                        <li><a href="callto:+442099947740"><i
                                    class="fas fa-phone-alt"></i>{{ get_setting('office_phone') }}</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-4 col-lg-3">
                    <ul class="tf__topbar_right d-flex flex-wrap">
                        <li>
                            <a href="{{ get_setting('facebook') }}"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="{{ get_setting('linkedin') }}"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li>
                            <a href="{{ get_setting('twitter') }}"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="{{ get_setting('youtube') }}"><i class="fab fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href="{{ get_setting('instagram') }}"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
        TOPBAR END
    =====================================-->


    <!--=====================================
        MENU START
    =====================================-->
    <nav class="navbar navbar-expand-lg main_menu">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset(get_setting('frontend_logo_menu')) }}" alt="BonFax" class="img-fluid w-100">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fal fa-bars menu_icom"></i>
                <i class="fal fa-times menu_close"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('frontend.index') ? 'active' : '' }}"
                            aria-current="page" href="{{ url('/') }}">Home</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">about us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('service.view') ? 'active' : '' }}"
                            href="{{ route('service.view') }}">services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('blog') ? 'active' : '' }}"
                            href="{{ route('blog') }}">blog
                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">contact</a>
                    </li>
                </ul>
                <ul class="menu_right d-flex flex-wrap">

                    <li><a class="reservation" href="#" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">reservation</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="wsus__reservation">
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">make an appointment</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="wsus__reservation_form">
                            <input class="reservation_input" type="text" placeholder="Name">
                            <input class="reservation_input" type="text" placeholder="Phone">
                            <input class="reservation_input" type="text" placeholder="address">
                            <select class="reservation_input" id="select_js">
                                <option value="">select service</option>
                                <option value="">Facial Therapy</option>
                                <option value="">Candle Message</option>
                                <option value="">Stone Spa</option>
                                <option value="">Body Treatments</option>
                                <option value=""> Aroma Therapy</option>
                            </select>
                            <input class="reservation_input" type="date">
                            <select class="reservation_input" id="select_js2">
                                <option value="">select time</option>
                                <option value="">08.00 am to 09.00 am</option>
                                <option value="">10.00 am to 11.00 am</option>
                                <option value="">12.00 pm to 01.00 pm</option>
                                <option value="">02.00 pm to 03.00 pm</option>
                                <option value="">04.00 pm to 05.00 pm</option>
                            </select>
                            <textarea rows="5" placeholder="Message"></textarea>
                            <button class="common_btn" type="submit">submit now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================
        MENU END
    =====================================-->
