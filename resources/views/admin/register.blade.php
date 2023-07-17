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
</head>


<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader">
            <div class="icon"></div>
        </div>

        <section class="login-wrapper">
            <div class="login-bg"
                style="background-image: url({{ asset('assets/images/logo.png') }}); height: 740px; width: 740px;">
            </div>
            <!-- /.login-bg -->
            <div class="login-content">
                <div class="login-content__inner">
                    <div class="logo-box">
                        <div class="lg text-center"><a href="index.html"
                                title="Linoor - DIgital Agency HTML Template"><img
                                    src="{{ asset('assets/images/logo.png') }}" width="134" id="dLogo"
                                    class="main-logo" alt="Linoor - DIgital Agency HTML Template"
                                    title="Linoor - DIgital Agency HTML Template"></a></div>
                    </div>
                    <form action="{{ route('admin.register') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" placeholder="Your Name *" name="name"
                                    value="{{ old('name') }}">

                                @error('name')
                                    <p class="text-red-500 text-xs mt-1">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div><!-- /.col-md-12 -->
                            <div class="col-md-12">
                                <input type="text" placeholder="Enter Email Address *" name="email"
                                    value="{{ old('email') }}">

                                @error('email')
                                    <p class="text-red-500 text-xs mt-1">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div><!-- /.col-md-12 -->
                            <div class="col-md-12">
                                <input type="password" placeholder="Your Password *" name="password"
                                    value="{{ old('password') }}">

                                @error('password')
                                    <p class="text-red-500 text-xs mt-1">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div><!-- /.col-md-12 -->
                            <div class="col-md-12">
                                <input type="password" placeholder="Confirm Password *" name="password_confirmation"
                                    value="{{ old('password_confirmation') }}">

                                @error('password_confirmation')
                                    <p class="text-red-500 text-xs mt-1">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                        <button type='submit' class="theme-btn btn-style-one">
                            <i class="btn-curve"></i>
                            <span class="btn-title">Register Now</span>
                        </button>
                        <p class="signup-link">Already have an Account? <a href="login.html">Login Here</a></p>
                    </form>
                    <p class="copyright-text">© copyright 2021 by Layerdrops.com</p><!-- /.copyright-text -->
                </div><!-- /.login-content__inner -->
            </div><!-- /.login-content -->
        </section><!-- /.login-wrapper -->

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
