@extends('layout.default')
@section('content')
    <header class="navbar navbar-expand-md  en-navbar">
        <link rel="icon" href="{{ c::media('img/favico.png') }}">
        <nav class="container flex-wrap flex-md-nowrap" aria-label="Main navigation">
            <a class="navbar-brand p-0 me-2" href="{{ c::url('home') }}" aria-label="WAGO">
                <img class="brand-img" src="{{ c::media('img/logo.png') }}" title='Cresenity Laravel' />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bdNavbar"
                aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <svg class="bi" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button>
            <div class="collapse navbar-collapse bg-white" id="bdNavbar">
                <ul class="navbar-nav flex-row flex-wrap en-navbar-nav pt-2 py-md-0 ms-md-auto">
                    <li class="nav-item col-6 col-md-auto">
                        <a class="nav-link p-2" href="{{ c::url('home') }}">Home</a>
                    </li>
                    <li class="nav-item col-6 col-md-auto">
                        <a class="nav-link p-2" href="{{ c::url('about') }}">Tentang Kami</a>
                    </li>
                    <li class="nav-item col-6 col-md-auto">
                        <a class="nav-link p-2" href="{{ c::url('features') }}">Fitur</a>
                    </li>
                    <li class="nav-item col-6 col-md-auto">
                        <a class="nav-link p-2" href="{{ c::url('pricing') }}">Harga</a>
                    </li>
                    <li class="nav-item col-6 col-md-auto">
                        <a class="nav-link p-2" href="{{ c::url('docs/api/device') }}">API</a>
                    </li>
                    {{-- <li class="nav-item col-6 col-md-auto">
                        <a class="nav-link p-2" href="{{ c::url('pricing') }}">Pricing</a>
                    </li>
                    <li class="nav-item col-6 col-md-auto">
                        <a class="nav-link p-2" href="{{ c::url('contact') }}">Contact Us</a>
                    </li> --}}
                </ul>
                <hr class="d-md-none text-white-50">

                @guest
                    <a class="btn btn-en-login d-block d-lg-inline-block mb-3 mb-md-0 ms-md-3"
                        href="{{ c::url('admin/auth') }}">Sign In</a>
                    <a class="btn btn-en-register d-block d-lg-inline-block mb-3 mb-md-0 ms-md-3"
                        href="{{ c::url('register') }}">Register</a>
                @endguest
                @auth
                    @if(c::app()->user()->is_verified)
                    <a class="btn btn-en-register d-block d-lg-inline-block mb-3 mb-md-0 ms-md-3"
                        href="{{ c::url('admin/home') }}">My Dashboard</a>
                    @endif
                @endauth

            </div>
        </nav>
    </header>
    @CAppContent
    <footer class="en-footer">
        <div class="container">
            <div class="row  wow zoomIn" style="margin-left: -10px; margin-right: -10px;">
                <div class="col-6 col-md-3 is-guttered pb-1" style="padding-left: 10px; padding-right: 10px;">
                    <div class="mb-3">
                        <img class="w-50" src="" alt="">
                    </div>
                    <div>
                        <div class="mb-3">
                            Cresenity Laravel adalah Platform yang digunakan untuk proses pengiriman pesan melalui
                            WA ( whatsapp ) secara otomatis.
                            <br/>
                            <br/>
                            Cresenity Laravel bukan layanan resmi dari WhatsApp dan tidak teraffiliasi secara langsung
                            atau tidak langsung dengan WhatsApp.

                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 is-guttered pb-1" style="padding-left: 10px; padding-right: 10px;">
                    <div class="title">
                        Menu
                    </div>
                    <ul>
                        <li>
                            <a href="/" aria-current="page">
                                Beranda
                            </a>
                        </li>
                        <li>
                            <a href="/about">
                                Tentang Kami
                            </a>
                        </li>
                        <li>
                            <a href="/features">
                                Fitur
                            </a>
                        </li>
                        <li>
                            <a href="/pricing">
                                Harga
                            </a>
                        </li>
                        <li>
                            <a href="/docs/api/device">
                                API
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 is-guttered pb-1" style="padding-left: 10px; padding-right: 10px;">
                    <div class="title">
                        <a href="/features">
                            Fitur WAGO
                        </a>
                    </div>
                    <ul>
                        <li>
                            <a href="/features#otp">
                                OTP
                            </a>
                        </li>
                        <li>
                            <a href="/features#marketing-promotions">
                                Marketing Promotions
                            </a>
                        </li>
                        <li>
                            <a href="/features#transactional-message">
                                Transactional Message
                            </a>
                        </li>
                        <li>
                            <a href="/features#pixel-reports">
                                Pixel Reports
                            </a>
                        </li>
                        <li>
                            <a href="/features#custom-feature">
                                Custom Fitur
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 is-guttered pb-1" style="padding-left: 10px; padding-right: 10px;">
                    <div class="title">
                        <a class="text-colorDarkGray">
                            Hubungi Kami
                        </a>
                    </div>
                    <ul>
                        {{--<li class="d-flex">
                            <div class="contact-icon">
                                <img src="{{ c::media('img/ic/ic_phone.png') }}">
                            </div>
                            <span>(031)-99343340</span>
                        </li> --}}
                        <li class="d-flex">
                            <div class="contact-icon">
                                <img src="{{ c::media('img/ic/ic_wa.png') }}">
                            </div>
                            <span>0851-7515-0021</span>
                        </li>
                        <li class="d-flex">
                            <div class="contact-icon">
                                <img src="{{ c::media('img/ic/ic_mail.png') }}">
                            </div>
                            <span>info@cerdaskreatif.co.id</span>
                        </li>
                        <li class="d-none">
                            <div class="contact-icon">
                                <img src="{{ c::media('img/ic/ic_ig.png') }}">
                            </div>
                            <span>@stokpedia</span>
                        </li>
                        <li class="d-flex">
                            <div class="contact-icon">
                                <img src="{{ c::media('img/ic/ic_location.png') }}">
                            </div>
                            <span class="ml-10px">
                                Grand Pakuwon Cluster Canberra 3 blok JEA 7 No. 33 Margomulyo, Surabaya - Jawa Timur
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="py-4">
                Hak Cipta © {{ date('Y') }}. PT. Teknologi Cerdas Kreatif. Seluruh Hak Cipta. Rahasia Pribadi.
            </div>
        </div>
    </footer>
@endsection
