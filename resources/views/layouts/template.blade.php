<!DOCTYPE html>
<html lang="en">

    
<head>
    <meta charset="utf-8">
    <title>Linoor - DIgital Agency HTML Template | Home 02</title>
    <!-- Stylesheets -->
    <link rel="preconnect" href=" {{ asset('assets/https://fonts.gstatic.com') }}">
    <link
        href=" {{ asset('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Teko:wght@300;400;500;600;700&display=swap') }}"
        rel="stylesheet">

    <link href=" {{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href=" {{ asset('assets/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href=" {{ asset('assets/css/owl.css') }}" rel="stylesheet">
    <link href=" {{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
    <link href=" {{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link rel="stylesheet" href=" {{ asset('assets/css/jarallax.css') }}">
    <link href=" {{ asset('assets/css/jquery-ui.css') }}" rel="stylesheet">
    <link href=" {{ asset('assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href=" {{ asset('assets/css/hover.css') }}" rel="stylesheet">
    <link href=" {{ asset('assets/css/custom-animate.css') }}" rel="stylesheet">
    <link href=" {{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- rtl css -->
    <link href=" {{ asset('assets/css/rtl.css') }}" rel="stylesheet">
    <!-- Responsive File -->
    <link href=" {{ asset('assets/css/responsive.css') }}" rel="stylesheet">

    <!-- Color css -->
    <link rel="stylesheet" id="jssDefault" href=" {{ asset('assets/css/colors/color-default.css') }}">

    <link rel="shortcut icon" href=" {{ asset('assets/images/favicon.png') }}" id="fav-shortcut" type="image/x-icon">
    <link rel="icon" href=" {{ asset('assets/images/favicon.png') }}" id="fav-icon" type="image/x-icon">

    <!-- Responsive Settings -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

    <style>
        .logo-box {
            padding: 10px; /* Adjust the padding as per your requirements */
            /* Add any other styles you need for the logo box */
        }
    
        .logo img {
            max-height: 100%; /* Adjust the max-height to control the logo size */
            /* Add any other styles you need for the logo */
        }
    </style>
</head>

<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader">
            <div class="icon"></div>
        </div>

        <!-- Main Header -->
        <header class="main-header header-style-one">

            <!-- Header Upper -->
            <div class="header-upper">
                <div class="inner-container clearfix">
                    <!-- Logo -->
                  
<div class="logo-box">
    <div class="logo">
        <a href="index.html" title="Linoor - DIgital Agency HTML Template">
            <img id="thm-logo" src="{{ asset('assets/images/logo.png') }}"
                alt="Linoor - DIgital Agency HTML Template"
                title="Linoor - DIgital Agency HTML Template">
        </a>
    </div>
</div>
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu-2"></span><span
                                class="txt">Menu</span></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="dropdown"><a href="/">Home</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ url('/about') }}">About Us</a>
                                    </li>
                                    <li class="dropdown"><a href="{{ url('/introduction') }}">Introduction</a>
                                    </li>
                                    <li class="dropdown"><a href="{{ url('/services') }}">Services</a>
                                    </li>
                                    <li class="dropdown"><a href="{{ url('/media') }}">Media</a>
                                    </li>

                                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <div class="other-links clearfix">
                        @auth
                        
                        {{-- <li class="dropdown"><a href="{{ url('#') }}" style="padding-right: 24px"> {{ auth()->user()->name }}</a>
                            <ul>
                                <li><a href="portfolio.html">Log Out</a></li>
                            </ul>
                        </li> --}}
                        <li class="dropdown" style="position: relative; display: inline-block;">
                            {{-- <a href="#" style="padding-right: 24px">{{ auth()->user()->name }}</a> --}}
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="theme-btn btn-style-one" style="height: 50px; width:80px; margin:24px">
                                    <i class="btn-curve"></i>
                                    Log Out
                                </button>
                            </form>
                        </li>
                        @else
                        <div class="cart-btn">
                            <form action="{{ route('user_login_form') }}" method="GET">
                                <button class="theme-btn btn-style-one" style="height: 50px; width:80px">
                                    <i class="btn-curve"></i>
                                    Log In
                                </button>
                            </form>
                        </div>
                        @endauth

                        <div class="link-box">
                            <div class="call-us">
                                <a class="link" href=" {{ asset('assets/tel:6668880000') }}">
                                    <span class="icon"></span>
                                    <span class="sub-text">WhatsApp</span>
                                    <span class="number">000 000 0000</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--End Header Upper-->

        </header>
        <!-- End Main Header -->

        <!--Mobile Menu-->
        <div class="side-menu__block">


            <div class="side-menu__block-overlay custom-cursor__overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div><!-- /.side-menu__block-overlay -->
            <div class="side-menu__block-inner ">
                <div class="side-menu__top justify-content-end">

                    <a href="#" class="side-menu__toggler side-menu__close-btn"><img
                            src="images/icons/close-1-1.png" alt=""></a>
                </div><!-- /.side-menu__top -->


                <nav class="mobile-nav__container">
                    <!-- content is loading via js -->
                </nav>
                <div class="side-menu__sep"></div><!-- /.side-menu__sep -->
                <div class="side-menu__content">
                    <p>Linoor is a premium Template for Digital Agencies, Start Ups, Small Business and a wide range of
                        other agencies.</p>
                    <p><a href="mailto:needhelp@linoor.com">needhelp@linoor.com</a> <br> <a
                            href="tel:888-999-0000">888
                            999 0000</a></p>
                    <div class="side-menu__social">
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div><!-- /.side-menu__content -->
            </div><!-- /.side-menu__block-inner -->
        </div><!-- /.side-menu__block -->

        <!--Search Popup-->
        <div class="search-popup">
            <div class="search-popup__overlay custom-cursor__overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div><!-- /.search-popup__overlay -->
            <div class="search-popup__inner">
                <form action="#" class="search-popup__form">
                    <input type="text" name="search" placeholder="Type here to Search....">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div><!-- /.search-popup__inner -->
        </div><!-- /.search-popup -->

        <!--End Banner Section -->
        @yield('content')

        <!-- Main Footer -->
        <footer class="main-footer normal-padding">
            <div class="auto-container">
                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row clearfix">

                        <!--Column-->
                        <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="widget-content">
                                    <div class="logo">
                                        <a href="index.html"><img id="fLogo" src="images/footer-logo.png"
                                                alt="" /></a>
                                    </div>
                                    <div class="text">Welcome to MillionCents! We are a trusted provider of
                                        comprehensive educational resources and training programs for individuals
                                        interested in the dynamic world of forex trading.</div>
                                    <ul class="social-links clearfix">
                                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <div class="widget-content">
                                    <h6>Explore</h6>
                                    <div class="row clearfix">
                                        <div class="col-md-6 col-sm-12">
                                            <ul>
                                                <li><a href="{{ url('/about') }}">About</a></li>
                                                <li><a href="{{ url('/introduction') }}">Introduction</a></li>
                                                <li><a href="{{ url('/services') }}">Services</a></li>
                                                <li><a href="{{ url('/media') }}">Media</a></li>
                                                <li><a href="{{ url('/contact') }}">Contact</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <ul>
                                                <li><a href="#">Support</a></li>
                                                <li><a href="#">Privacy Policy</a></li>
                                                <li><a href="#">Terms of Use</a></li>
                                                <li><a href="#">Help</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget info-widget">
                                <div class="widget-content">
                                    <h6>Contact</h6>
                                    <ul class="contact-info">
                                        <li class="address"><span class="icon flaticon-pin-1"></span> 66 Broklyn
                                            Street,
                                            New York <br>United States of America</li>
                                        <li><span class="icon flaticon-call"></span><a href="tel:666888000">000 000
                                                000</a></li>
                                        <li><span class="icon flaticon-email-2"></span><a
                                                href="mailto:needhelp@linoor.com">info@1000000cents.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget newsletter-widget">
                                <div class="widget-content">
                                    <h6>Newsletter</h6>
                                    <div class="newsletter-form">
                                        <form method="post" action="contact.html">
                                            <div class="form-group clearfix">
                                                <input type="email" name="email" value=""
                                                    placeholder="Email Address" required="">
                                                <button type="submit" class="theme-btn"><span
                                                        class="fa fa-envelope"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="text">Sign up for our latest news & articles. We won’t give you spam
                                        mails.</div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="inner clearfix">
                        <div class="copyright">&copy; copyright 2023 by Millioncents</div>
                    </div>
                </div>
            </div>

        </footer>

    </div>
    <!--End pagewrapper-->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>



    <script src=" {{ asset('assets/js/jquery.js') }}"></script>
    <script src=" {{ asset('assets/js/popper.min.js') }}"></script>
    <script src=" {{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src=" {{ asset('assets/js/TweenMax.js') }}"></script>
    <script src=" {{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src=" {{ asset('assets/js/jquery.fancybox.js') }}"></script>
    <script src=" {{ asset('assets/js/owl.js') }}"></script>
    <script src=" {{ asset('assets/js/mixitup.js') }}"></script>
    <script src=" {{ asset('assets/js/appear.js') }}"></script>
    <script src=" {{ asset('assets/js/wow.js') }}"></script>

    <script src=" {{ asset('assets/js/jquery.easing.min.js') }}"></script>
    <script src=" {{ asset('assets/js/jarallax.min.js') }}"></script>
    <script src=" {{ asset('assets/js/custom-script.js') }}"></script>



</body>

</html>
