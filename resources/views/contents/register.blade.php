@extends('contents.content')

@section('content')
    <!--==================================================-->
    <!-- Start buddy Header Area-->
    <!--==================================================-->
    <div class="buddy-header-area style_two style_three" id="sticky-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <div class="header-logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('assets/images/home_one/logo2.png') }}"
                                alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header-menu">
                        <ul class="nav_scroll">
                            <li><a href="{{ route('home') }}">Home</a>

                            </li>
                            <li><a href="{{ route('service') }}">Services</a>

                            </li>
                            <li><a href="#">Page <span><i class="fas fa-angle-down"></i></span></a>
                                <ul class="sub_menu">
                                    <li><a href="{{ route('admin') }}">Admin</a></li>
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="{{ route('history') }}">History</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                    <li><a href="{{ route('team') }}">Team</a></li>
                                </ul>
                            </li>


                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                        <div class="menu_right_site">
                            <div class="header-search-button search-box-outer">
                                <a href="#"><i class="fas fa-search"></i></a>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!--==================================================-->
    <!-- End buddy Header Area -->
    <!--==================================================-->

    <!--========= Start Mobile Memu========== -->
    <div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none">
        <div class="mobile-menu">
            <nav class="header-menu">
                <ul class="nav_scroll">
                    <li><a href="{{ route('home') }}">Home</a>

                    <li><a href="{{ route('service') }}">Services</a>

                    <li><a href="#">Page <span><i class="fas fa-angle-down"></i></span></a>
                        <ul class="sub_menu">
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('history') }}">History</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                            <li><a href="{{ route('team') }}">Team</a></li>
                        </ul>
                    </li>

                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!--========= End Mobile Memu========== -->

    <div class="breadcumb-area d-flex align-items-center">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-12">
                    <div class="breadcumb-content text-center">
                        <div class="breadcumb-title">
                            <h4>Register Birds</h4>
                        </div>
                        <ul>
                            <li><a href="{{ route('home') }}"><i class="bi bi-house-door-fill"></i> Home </a></li>
                            <li class="rotates"><i class="bi bi-slash-lg"></i>Register Birds</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

 @livewire('bird-batch-form')
@endsection
