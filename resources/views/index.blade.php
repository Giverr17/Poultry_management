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
    <script src="{{ 'assets/js/vendor/modernizr-3.5.0.min.js' }}"></script>
</head>

<body>

    <!-- Loader -->

    <div class="loader-wrapper">
        <span class="loader"></span>
        <div class="loder-section left-section"></div>
        <div class="loder-section right-section"></div>
    </div>

    <!--==================================================-->
    <!-- Start buddy Header Area-->
    <!--==================================================-->
    <div class="buddy-header-area upper" id="sticky-header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <div class="header-logo">
                        <a href="index.html"><img src="{{ asset('assets/images/logo.png') }}" alt="logo"></a>
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
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="{{ route('history') }}">History</a></li>
                                    {{-- <li><a href="404.html">Error Page</a></li> --}}
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
        <div class="header_shape">
            <img src="{{ asset('assets/images/home_one/shape.png') }}" alt="">
        </div>
        <div class="header_shape_two">
            <img src="{{ asset('assets/images/home_one/shape.png') }}" alt="">
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
                            {{-- <li><a href="404.html">Error Page</a></li> --}}
                            <li><a href="{{ route('team') }}">Team</a></li>
                        </ul>
                    </li>

                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!--========= End Mobile Memu========== -->

    <!-- Sidebar Cart Item -->
    {{-- <div class="xs-sidebar-group info-group">
	<div class="xs-overlay xs-bg-black"></div>
	<div class="xs-sidebar-widget">
		<div class="sidebar-widget-container">
			<div class="widget-heading">
				<a href="#" class="close-side-widget">
					<i class="far fa-times-circle"></i>
				</a>
			</div>
			<div class="sidebar-textwidget">
				<!-- Sidebar Info Content -->
				<div class="sidebar-info-contents">
					<div class="content-inner">
						<div class="nav-logo">
							<a href="index.html"><img src="{{ asset("assets/images/logo2.png") }}" alt="sid img" ></a>
						</div>
						<div class="row padding-two">
							<div class="col-lg-6">
								<div class="content-thumb-box">
									<img src="{{ asset("assets/images/inner-img/team4.png") }}" alt="">
								</div>
							</div>
							<div class="col-lg-6 ">
								<div class="content-thumb-box">
									<img src="{{ asset("assets/images/inner-img/team1.png") }}" alt="">
								</div>
							</div>
							<div class="col-lg-6 ">
								<div class="content-thumb-box">
									<img src="{{ asset("assets/images/inner-img/team3.png") }}" alt="">
								</div>
							</div>
							<div class="col-lg-6 ">
								<div class="content-thumb-box">
									<img src="{{ asset("assets/images/inner-img/team2.png") }}" alt="">
								</div>
							</div>
						</div>
						<div class="contact-info">
							<h2>Contact Info</h2>
							<ul class="list-style-one">
								<li><i class="bi bi-envelope"></i>Chicago 12, Melborne City, USA</li>
								<li><i class="bi bi-envelope"></i>(+001) 123-456-7890</li>
								<li><i class="bi bi-envelope"></i>Example.com</li>
								<li><i class="bi bi-envelope"></i>Week Days: 09.00 to 18.00 Sunday: Closed</li>
							</ul>
						</div>
						<!-- Social Box -->
						<ul class="social-box">
							<li class="facebook"><a href="#" class="fab fa-facebook-f"></a></li>
							<li class="twitter"><a href="#" class="fab fa-instagram"></a></li>
							<li class="linkedin"><a href="#" class="fab fa-twitter"></a></li>
							<li class="instagram"><a href="#" class="fab fa-pinterest-p"></a></li>
							<li class="youtube"><a href="#" class="fab fa-linkedin-in"></a></li>
						</ul>
					</div>
				</div>		
			</div>
		</div>
	</div>
</div>
 --}}

    <!--==================================================-->
    <!-- End Buddy Sidebar Section Here -->
    <!--==================================================-->
    {{-- <div class="sidebar-menu-wrapper">
	<div class="cart_sidebar">
		<button type="button" class="close_btn"><i class="fas fa-times"></i></button>
		<h2 class="heading_title text-uppercase">Cart Items - <span>4</span></h2>

		<div class="cart_items_list">
			<div class="cart_item">
				<div class="item_image">
					<img src="assets/images/inner-img/galary1.png" alt="">
				</div>
				<div class="item_content">
					<h4 class="item_title">
						Rorem ipsum dolor sit amet, sectetur adipisi cingey.
					</h4>
					<span class="item_price">$19.00</span>
					<button type="button" class="remove_btn"><i class="fas fa-times"></i></button>
				</div>
			</div>

			<div class="cart_item">
				<div class="item_image">
					<img src="assets/images/inner-img/galary2.png" alt="">
				</div>
				<div class="item_content">
					<h4 class="item_title">
						Rorem ipsum dolor sit amet, sectetur adipisi cingey.
					</h4>
					<span class="item_price">$19.00</span>
					<button type="button" class="remove_btn"><i class="fas fa-times"></i></button>
				</div>
			</div>

			<div class="cart_item">
				<div class="item_image">
					<img src="assets/images/inner-img/galary3.png" alt="">
				</div>
				<div class="item_content">
					<h4 class="item_title">
						Rorem ipsum dolor sit amet, sectetur adipisi cingey.
					</h4>
					<span class="item_price">$19.00</span>
					<button type="button" class="remove_btn"><i class="fas fa-times"></i></button>
				</div>
			</div>

			<div class="cart_item">
				<div class="item_image">
					<img src="assets/images/inner-img/galary4.png" alt="">
				</div>
				<div class="item_content">
					<h4 class="item_title">
						Rorem ipsum dolor sit amet, sectetur adipisi cingey.
					</h4>
					<span class="item_price">$19.00</span>
					<button type="button" class="remove_btn"><i class="fas fa-times"></i></button>
				</div>
			</div>
		</div>
		<div class="total_price text-uppercase">
			<span>Sub Total:</span>
			<span>$76.00</span>
		</div>
		<ul class="btns_group ul_li">
			<li><a href="cart.html" class="btn btn_primary text-uppercase">View Cart</a></li>
			<li><a href="checkout.html" class="btn btn_border border_black text-uppercase">Checkout</a></li>
		</ul>
	</div>
	<div class="cart_sidebar_overlay"></div>
</div> --}}
    <!--==================================================-->
    <!-- End Buddy Sidebar Section Here -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start buddy Hero Area Area -->
    <!--==================================================-->
    <section class="hero_area d-flex align-items-center boxed">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <!-- hero content -->
                    <div class="hero_content">
                        <h4 class="sub_title">Explore Our Poultry Paradise</h4>
                        <h1>Overcoming Poultry <br>Health Hurdles</h1>
                        <!-- slider button -->
                        <div class="slider_button">
                            <div class="hero_btn buddy_btn">
                                <a href="contact.html">Explore More <span></span></a>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End buddy Hero  Area -->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start buddy Feature Area-->
    <!--==================================================-->
    <section class="feature_area boxed">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- feature item -->
                    <div class="feature_item">
                        <div class="feature_icon_box">
                            <div class="feature_icon">
                                <img src="{{ asset('assets/images/home_one/feature-icon01.png') }}" alt="">
                            </div>
                            <h3 class="feature_title">Health Chicken</h3>
                        </div>
                        <div class="feature_content">
                            <p>There are many variations of passages Lorem Ipsum available,</p>
                        </div>
                        <div class="feature_btn">
                            <a href="#service"><i class="flaticon flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- feature item -->
                    <div class="feature_item">
                        <div class="feature_icon_box">
                            <div class="feature_icon">
                                <img src="{{ asset('assets/images/home_one/feature-icon02.png') }}" alt="">
                            </div>
                            <h3 class="feature_title">Fresh Egg</h3>
                        </div>
                        <div class="feature_content">
                            <p>There are many variations of passages Lorem Ipsum available,</p>
                        </div>
                        <div class="feature_btn">
                            <a href="#service"><i class="flaticon flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- feature item -->
                    <div class="feature_item">
                        <div class="feature_icon_box">
                            <div class="feature_icon">
                                <img src="{{ asset('assets/images/home_one/feature-icon04.png') }}" alt="">
                            </div>
                            <h3 class="feature_title">Hygenic Farm</h3>
                        </div>
                        <div class="feature_content">
                            <p>There are many variations of passages Lorem Ipsum available,</p>
                        </div>
                        <div class="feature_btn">
                            <a href="#service"><i class="flaticon flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- feature item -->
                    <div class="feature_item">
                        <div class="feature_icon_box">
                            <div class="feature_icon">
                                <img src="{{ asset('assets/images/home_one/feature-icon03.png') }}" alt="">
                            </div>
                            <h3 class="feature_title">Organic Fooder</h3>
                        </div>
                        <div class="feature_content">
                            <p>There are many variations of passages Lorem Ipsum available,</p>
                        </div>
                        <div class="feature_btn">
                            <a href="#service"><i class="flaticon flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End buddy Feature Area-->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start buddy About Area-->
    <!--==================================================-->
    <section class="about_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="section_title pb-16">
                        <h4>About US</h4>
                        <h1>Hatch to Harvest for Best <br />Poultry Products</h1>
                    </div>
                    <div class="about_content">
                        <h4>Attention to ensure optimal growth and well-being.</h4>
                        <p>We are a dedicated team committed to revolutionizing poultry farming through technology. Our
                            Poultry Management System is designed to help farmers efficiently track, manage, and protect
                            their flocks—especially against deadly diseases like Newcastle Disease. With a user-friendly
                            interface and smart alert systems, we empower poultry farmers with the tools they need to
                            ensure healthier birds, better productivity, and peace of mind.</p>
                        <div class="about_button">
                            <div class="about_btn buddy_btn">
                                <a href="{{ route('about') }}">About Us<span></span></a>
                            </div>
                            <div class="about_info">
                                <span><i class="fas fa-phone-alt"></i><a href="#">0 666 528 33 55</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about_thumb">
                        <img src="assets/images/home_one/About-img.png" alt="">
                        <div class="about_count">
                            <div class="banner_counter_iiner">
                                <div class="counter-_number">
                                    <h1 class="counter">35</h1>
                                </div>
                            </div>
                            <div class="counter_title">
                                <h5>Years Of Exprence</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End buddy About Area-->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start buddy Marquee Area-->
    <!--==================================================-->
    <div class="marquee_area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="marquee style2">
                        <div class="marquee-block">
                            <h3>FARMING</h3>
                            <img src="{{ asset("assets/images/home_one/egg.png") }}" alt="">
                            <span>POULTRY</span>
                            <img src="{{ asset("assets/images/home_one/egg.png") }}" alt="">
                            <h3>FARMING</h3>
                            <img src="{{ asset("assets/images/home_one/egg.png") }}" alt="">
                            <span>POULTRY</span>
                            <img src="{{ asset("assets/images/home_one/egg.png") }}" alt="">
                        </div>
                        <div class="marquee-block">
                            <h3>FARMING</h3>
                            <img src="{{ asset("assets/images/home_one/egg.png") }}" alt="">
                            <span>POULTRY</span>
                            <img src="{{ asset("assets/images/home_one/egg.png") }}" alt="">
                            <h3>FARMING</h3>
                            <img src="{{ asset("assets/images/home_one/egg.png") }}" alt="">
                            <span>POULTRY</span>
                            <img src="{{ asset("assets/images/home_one/egg.png") }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End buddy  Marquee Area-->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start buddy Service Area-->
    <!--==================================================-->
    <section class="service_area" id="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section_title style_two">
                        <h4>Our Service</h4>
                        <h1>Hatch to Harvest for Best <br />Poultry Products</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="service_list owl-carousel">
                    <div class="col-lg-12">
                        <!-- feature item -->
                        <div class="service_single_item">
                            <div class="service_thumb">
                                <img src="{{ asset("assets/images/home_one/service01.png") }}" alt="">
                            </div>
                            <div class="service_content">
                                <span>Poultry</span>
                                <h3>Bird Registration & Batch Management</h3>
                                <p>Keep detailed records of all your poultry batches, including type, quantity, and age tracking.</p>
                            </div>
                            <div class="feature_btn">
                                <a href="{{ route('service') }}"><i class="flaticon flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <!-- feature item -->
                        <div class="service_single_item">
                            <div class="service_thumb">
                                <img src="{{ asset("assets/images/home_one/service02.png") }}" alt="">
                            </div>
                            <div class="service_content">
                                <span>Poultry</span>
                                <h3>Vaccination Monitoring & Alerts</h3>
                                <p>Schedule vaccinations, track doses, and get automatic reminders to never miss a crucial shot.</p>
                            </div>
                            <div class="feature_btn">
                                <a href="{{ route('service') }}"><i class="flaticon flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <!-- feature item -->
                        <div class="service_single_item">
                            <div class="service_thumb">
                                <img src="{{ asset("assets/images/home_one/service03.png") }}" alt="">
                            </div>
                            <div class="service_content">
                                <span>Poultry</span>
                                <h3>Health Reporting System</h3>
                                <p>Submit regular health checks, record symptoms, and monitor the well-being of your flock.

								</p>
                            </div>
                            <div class="feature_btn">
                                <a href="{{ route('service') }}"><i class="flaticon flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <!-- feature item -->
                        <div class="service_single_item">
                            <div class="service_thumb">
                                <img src="{{ asset("assets/images/home_one/service02.png") }}" alt="">
                            </div>
                            <div class="service_content">
                                <span>Poultry</span>
                                <h3>Dashboard & Analytics</h3>
                                <p>Visual insights into bird counts, vaccination coverage, health trends, and mortality rates.</p>
                            </div>
                            <div class="feature_btn">
                                <a href="{{ route('service') }}"><i class="flaticon flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <!-- feature item -->
                        <div class="service_single_item">
                            <div class="service_thumb">
                                <img src="{{ asset("assets/images/home_one/case1.png") }}" alt="">
                            </div>
                            <div class="service_content">
                                <span>Poultry</span>
                                <h3>ND Alert Detection</h3>
                                <p>Get notified of possible Newcastle Disease outbreaks through intelligent pattern detection.</p>
                            </div>
                            <div class="feature_btn">
                                <a href="{{ route('service') }}"><i class="flaticon flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End buddy Service Area-->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start buddy Business Area-->
    <!--==================================================-->
    <section class="business_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section_title text-center pb-38">
                        <h4>Grow Business</h4>
                        <h1>Maximizing Your Poultry <br />Business Potential</h1>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="besiness_item">
                                <div class="feature_icon">
                                    <img src="assets/images/home_one/business_icon1.png" alt="">
                                </div>
                                <div class="business_content">
                                    <h3 class="feature_title">Broiler</h3>
                                    <p>Nutrition is paramount in poultry farming
                                        and we spare no effort.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="besiness_item">
                                <div class="feature_icon">
                                    <img src="assets/images/home_one/business_icon2.png" alt="">
                                </div>
                                <div class="business_content">
                                    <h3 class="feature_title">Breeders</h3>
                                    <p>Nutrition is paramount in poultry farming
                                        and we spare no effort.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="besiness_item">
                                <div class="feature_icon">
                                    <img src="assets/images/home_one/business_icon3.png" alt="">
                                </div>
                                <div class="business_content">
                                    <h3 class="feature_title">Dynamic Ecology</h3>
                                    <p>Nutrition is paramount in poultry farming
                                        and we spare no effort.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="business_img">
                        <img src="assets/images/home_one/chicken2.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="besiness_item">
                                <div class="feature_icon">
                                    <img src="assets/images/home_one/business_icon4.png" alt="">
                                </div>
                                <div class="business_content">
                                    <h3 class="feature_title">Organic Ecosystem</h3>
                                    <p>Nutrition is paramount in poultry farming
                                        and we spare no effort.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="besiness_item">
                                <div class="feature_icon">
                                    <img src="assets/images/home_one/business_icon5.png" alt="">
                                </div>
                                <div class="business_content">
                                    <h3 class="feature_title">Layers</h3>
                                    <p>Nutrition is paramount in poultry farming
                                        and we spare no effort.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="besiness_item">
                                <div class="feature_icon">
                                    <img src="assets/images/home_one/business_icon6.png" alt="">
                                </div>
                                <div class="business_content">
                                    <h3 class="feature_title">Organic Fooder</h3>
                                    <p>Nutrition is paramount in poultry farming
                                        and we spare no effort.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- Start buddy Business Area-->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start Buddy Case Study Area -->
    <!--==================================================-->
    <section class="case_study_area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="owl-carousel case_study2">
                    <div class="col-lg-12">
                        <div class="case_single_item">
                            <div class="case_thumb">
                                <img src="assets/images/home_one/case1.png" alt="">
                                <div class="case_content">
                                    <p>CHICKEN</p>
                                    <h3><a href="#">Poultry Panorama</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="case_single_item upper">
                            <div class="case_thumb">
                                <img src="assets/images/home_one/case2.png" alt="">
                                <div class="case_content">
                                    <p>CHICKEN</p>
                                    <h3><a href="#">Poultry Panorama</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="case_single_item">
                            <div class="case_thumb">
                                <img src="assets/images/home_one/case3.png" alt="">
                                <div class="case_content">
                                    <p>CHICKEN</p>
                                    <h3><a href="#">Poultry Panorama</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="case_single_item upper">
                            <div class="case_thumb">
                                <img src="assets/images/home_one/case4.png" alt="">
                                <div class="case_content">
                                    <p>CHICKEN</p>
                                    <h3><a href="#">Poultry Panorama</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--==================================================-->
    <!-- end Buddy Case Study Area -->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start Testimonial Area -->
    <!--==================================================-->
    {{-- <section class="testimonial_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title style_three">
                        <h4>Testimonial</h4>
                        <h1>What Client Say Our <br />Poultry Farm</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial owl-carousel">
                        <div class="col-lg-12">
                            <div class="testimonial_item ">
                                <div class="testimonial-content">
                                    <div class="testi-star">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                    </div>
                                    <p>“From their expert advice on breed sele
                                        to the high-quality feed and equipmenti
                                        supply, every aspect of our partnership
                                        been nothing short”</p>
                                </div>
                                <div class="tesit-auothor">
                                    <div class="testi-author-thumb">
                                        <img src="assets/images/home_one/testi_aouthor1.png" alt="">
                                    </div>
                                    <div class="bio">
                                        <h4 class="name">Abu Taleb</h4>
                                        <h5 class="designation">UX Engineer</h5>
                                    </div>
                                </div>
                                <div class="testi_arrow">
                                    <img src="assets/images/home_one/testi_arrow.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="testimonial_item ">
                                <div class="testimonial-content">
                                    <div class="testi-star">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                    </div>
                                    <p>“From their expert advice on breed sele
                                        to the high-quality feed and equipmenti
                                        supply, every aspect of our partnership
                                        been nothing short”</p>
                                </div>
                                <div class="tesit-auothor">
                                    <div class="testi-author-thumb">
                                        <img src="assets/images/home_one/testi_aouthor2.png" alt="">
                                    </div>
                                    <div class="bio">
                                        <h4 class="name">Julia McDavid</h4>
                                        <h5 class="designation">Co - Founder</h5>
                                    </div>
                                </div>
                                <div class="testi_arrow">
                                    <img src="assets/images/home_one/testi_arrow.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="testimonial_item ">
                                <div class="testimonial-content">
                                    <div class="testi-star">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                    </div>
                                    <p>“From their expert advice on breed sele
                                        to the high-quality feed and equipmenti
                                        supply, every aspect of our partnership
                                        been nothing short”</p>
                                </div>
                                <div class="tesit-auothor">
                                    <div class="testi-author-thumb">
                                        <img src="assets/images/home_one/testi_aouthor3.png" alt="">
                                    </div>
                                    <div class="bio">
                                        <h4 class="name">William Cervantes</h4>
                                        <h5 class="designation">UX Engineer</h5>
                                    </div>
                                </div>
                                <div class="testi_arrow">
                                    <img src="assets/images/home_one/testi_arrow.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="testimonial_item ">
                                <div class="testimonial-content">
                                    <div class="testi-star">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                    </div>
                                    <p>“From their expert advice on breed sele
                                        to the high-quality feed and equipmenti
                                        supply, every aspect of our partnership
                                        been nothing short”</p>
                                </div>
                                <div class="tesit-auothor">
                                    <div class="testi-author-thumb">
                                        <img src="assets/images/home_one/testi_aouthor1.png" alt="">
                                    </div>
                                    <div class="bio">
                                        <h4 class="name">Abu Taleb</h4>
                                        <h5 class="designation">UX Engineer</h5>
                                    </div>
                                </div>
                                <div class="testi_arrow">
                                    <img src="assets/images/home_one/testi_arrow.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--==================================================-->
    <!-- End buddy Testimonial Area -->
    <!--==================================================-->



    <!--==================================================-->
    <!-- Start buddy Brand Area CSS-->
    <!--==================================================-->
    <section class="brand_area">
        <div class="container">
            <div class="row brand_upper">
                <div class="brand_list owl-carousel">
                    <div class="col-lg-12">
                        <div class="single-brand-item">
                            <div class="brand-thumb">
                                <img src="assets/images/home_one/brand1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-brand-item">
                            <div class="brand-thumb">
                                <img src="assets/images/home_one/brand2.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-brand-item">
                            <div class="brand-thumb">
                                <img src="assets/images/home_one/brand3.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-brand-item">
                            <div class="brand-thumb">
                                <img src="assets/images/home_one/brand4.png" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End buddy Brand Area CSS-->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Strt buddy Work Area CSS-->
    <!--==================================================-->
    <section class="work_area">
        <div class="container">
            <div class="row work_bg">
                <div class="col-lg-6"></div>
                <div class="col-lg-6 pl-26">
                    <div class="section_title style_two">
                        <h4>What We Do</h4>
                        <h1>Our Poultry Rearing For <br />Approach That</h1>
                        <p>We adhere to strict biosecurity measures to safeguard our flotech conte
                            from diseases implementing protocols to minimize the risk that like for
                            of transmission and ensuring every thig is ok.</p>
                    </div>
                    <div class="porogess_container">
                        <div class="progress_bar">
                            <div role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                                style="--value: 90"></div>
                            <div class="circle-progress-title">
                                <h4> Poultry Farm <br> World Wide </h4>
                            </div>
                        </div>
                        <div class="progress_bar">
                            <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                style="--value: 80"></div>
                            <div class="circle-progress-title">
                                <h4> World Best <br> Equipment </h4>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End buddy Work Area CSS-->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start buddy Blog Area -->
    <!--==================================================-->
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title style_three">
                        <h4>Our Blog</h4>
                        <h1>Read Our Latest Blog<br />& Article Post</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog_list owl-carousel">
                    <div class="col-lg-12">
                        <div class="single-blog-box">
                            <div class="single-blog-thumb">
                                <img src="assets/images/home_one/blog1.png" alt="">
                                <span class="blog_category">Poultry</span>
                            </div>
                            <div class="blog-content">
                                <div class="meta-blog">
                                    <p><span><i class="bi bi-calculator-fill"></i></span>May 04, 2024<span><i
                                                class="bi bi-person"></i></span>Admin</p>
                                </div>
                                <div class="blog-title">
                                    <h3><a href="blog-details.html">The Ultimate Guide to Raising Happy and Healthy
                                            Chickens</a></h3>
                                </div>
                                <div class="blog_btn buddy_btn">
                                    <a href="blog-details.html">Read More <span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-blog-box">
                            <div class="single-blog-thumb">
                                <img src="assets/images/home_one/blog2.png" alt="">
                                <span class="blog_category">Chicken</span>
                            </div>
                            <div class="blog-content">
                                <div class="meta-blog">
                                    <p><span><i class="bi bi-calculator-fill"></i></span>May 04, 2024<span><i
                                                class="bi bi-person"></i></span>Admin</p>
                                </div>
                                <div class="blog-title">
                                    <h3><a href="blog-details.html">Creative Ways to Enjoy Farm-Fresh Eggs For Every
                                            Poultry Farming</a></h3>
                                </div>
                                <div class="blog_btn buddy_btn">
                                    <a href="blog-details.html">Read More <span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-blog-box">
                            <div class="single-blog-thumb">
                                <img src="assets/images/home_one/blog3.png" alt="">
                                <span class="blog_category">Chicken</span>
                            </div>
                            <div class="blog-content">
                                <div class="meta-blog">
                                    <p><span><i class="bi bi-calculator-fill"></i></span>May 04, 2024<span><i
                                                class="bi bi-person"></i></span>Admin</p>
                                </div>
                                <div class="blog-title">
                                    <h3><a href="blog-details.html">Egg-citing Ways to Boost Your Poultry Farm's
                                            Productivity</a></h3>
                                </div>
                                <div class="blog_btn buddy_btn">
                                    <a href="blog-details.html">Read More <span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-blog-box">
                            <div class="single-blog-thumb">
                                <img src="assets/images/home_one/blog1.png" alt="">
                                <span class="blog_category">Poultry</span>
                            </div>
                            <div class="blog-content">
                                <div class="meta-blog">
                                    <p><span><i class="bi bi-calculator-fill"></i></span>May 04, 2024<span><i
                                                class="bi bi-person"></i></span>Admin</p>
                                </div>
                                <div class="blog-title">
                                    <h3><a href="blog-details.html">The Ultimate Guide to Raising Happy and Healthy
                                            Chickens</a></h3>
                                </div>
                                <div class="blog_btn buddy_btn">
                                    <a href="blog-details.html">Read More <span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <!-- End buddy Blog Area -->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start buddy Call Area -->
    <!--==================================================-->
    <section class="call_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-6">
                    <div class="call_list">
                        <ul>
                            <li><a href="#">Poultry</a></li>
                            <li><a href="#">Chicken</a></li>
                            <li><a href="#">Treatment</a></li>
                            <li class="style_none"><a href="#">Climate</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="call_main_container">
                        <div class="call-do-action-info">
                            <div class="call-do-social_icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="call_info">
                                <p>+ 1(365) 874-335</p>
                            </div>
                        </div>
                        <div class="call-do-action-info">
                            <div class="call-do-social_icon">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div class="call_info">
                                <p>info@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--==================================================-->
    <!-- End buddy Call Area -->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start buddy Footer Area -->
    <!--==================================================-->
    <section class="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer_logo">
                        <a href="index.html"><img src="assets/images/logo2.png" alt=""></a>
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


</body>

</html>
