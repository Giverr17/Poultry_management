<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Buddy</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('assets/images/fav-icon/icon.png') }}">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css" media="all">
    <!-- carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" type="text/css" media="all">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" type="text/css" media="all">
    <!-- animated-text CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animated-text.css') }}" type="text/css" media="all">
    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" type="text/css" media="all">
    <!-- theme-default CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme-default.css') }}" type="text/css" media="all">
    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}" type="text/css" media="all">
    <!-- transitions CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.transitions.css') }}" type="text/css" media="all">
    <!-- venobox CSS -->
    <link rel="stylesheet" href="{{ asset('venobox/venobox.css') }}" type="text/css" media="all">
    <!-- flaticon -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.css') }}" type="text/css" media="all">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}" type="text/css" media="all">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css" media="all">
    <!-- responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" type="text/css" media="all">
    <!-- Coustom Animation CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/coustom-animation.css') }}" type="text/css" media="all">
    <!-- odometer CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/odometer-theme-default.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/css/scroll-up.css') }}" type="text/css" media="all">
    <!-- modernizr js -->
    <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
   @livewireStyles
</head>

<body>
    <div class="loader-wrapper">
        <span class="loader"></span>
        <div class="loder-section left-section"></div>
        <div class="loder-section right-section"></div>
    </div>

    <main>
        @yield('content')
    </main>
 

    

    <section class="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer_logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo2.png') }}"
                                alt=""></a>
                    </div>
                    <p class="footer_desc">Vestibulum vulputate vulputate ligula. Tec Lorem ipsum dolor sit amet,
                        consecteturir adipiscing elit. vivamus cursus elit.</p>
                    <div class="footer_social_icon">
                        <ul>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget-content">
                        <div class="footer-widget-title">
                            <h4>Contact</h4>
                        </div>
                        <div class="footer_contact">
                            <p>6861 Balistreri <br> New Sammie</p>
                            <p>+1 (459) 165-5976 </p>
                            <p>info@gmail.com </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="footer-widget-content">
                        <div class="footer-widget-title">
                            <h4>Links</h4>
                        </div>
                        <div class="footer-widget-menu">
                            <ul>
                                <li><a href="#"> About Us</a></li>
                                <li><a href="#"> Faq's</a></li>
                                <li><a href="#"> Contact Us</a></li>
                                <li><a href="#"> Blog</a></li>
                                <li><a href="#"> 404</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget-contact">
                        <div class="footer-widget-title">
                            <h4>Working Time</h4>
                        </div>
                        <div class="footer_contact">
                            <p>Mon - Fri: 9.00am - 5.00pm</p>
                            <p>Saturday: 10.00am - 6.00pm </p>
                            <p>Sunday Closed</p>
                        </div>

                    </div>
                </div>

            </div>
            <div class="row add-border">
                <div class="col-lg-12">
                    <div class="footer-bottom-content text-center">
                        <div class="footer-bottom-content-copy">
                            <p><span style="color:#b0712f;"> BUDDY </span>Themes © 2024. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--==================================================-->
    <!-- End buddy Footer Area-->
    <!--==================================================-->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start Search Popup Section -->
    <!--==================================================-->
    <div class="search-popup">
        <button class="close-search style-two"><span class="flaticon-multiply"><i
                    class="far fa-times-circle"></i></span></button>
        <button class="close-search"><i class="bi bi-arrow-up"></i></button>
        <form method="post" action="#">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
    <!--==================================================-->
    <!-- Start Search Popup Section -->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start buddy Scroll Up-->
    <!--==================================================-->
    <div class="prgoress_indicator active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 212.78;">
            </path>
        </svg>
    </div>
    <!--==================================================-->
    <!-- End buddy Scroll Up-->
    <!--==================================================-->



    <!-- jquery js -->
    <script src="assets/js/vendor/jquery-3.6.2.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- counterup js -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- waypoints js -->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- wow js -->
    <script src="assets/js/wow.js"></script>
    <!-- imagesloaded js -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- venobox js -->
    <script src="venobox/venobox.js"></script>
    <!--  animated-text js -->
    <script src="assets/js/animated-text.js"></script>
    <!-- venobox min js -->
    <script src="venobox/venobox.min.js"></script>
    <!-- isotope js -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- jquery meanmenu js -->
    <script src="assets/js/jquery.meanmenu.js"></script>
    <!-- jquery scrollup js -->
    <script src="assets/js/jquery.scrollUp.js"></script>
    <!-- barfiller -->
    <script src="assets/js/jquery.barfiller.js"></script>
    <!-- theme js -->
    <script src="assets/js/theme.js"></script>


     @livewireScripts
</body>

</html>
