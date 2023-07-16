@extends('layouts.template')

@section('content')
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader">
            <div class="icon"></div>
        </div>

        <section class="login-wrapper">
            <div class="login-bg" style="background-image: url(images/update-1-12-2020/background/login-bg.jpg);"></div>
            <!-- /.login-bg -->
            <div class="login-content">
                <div class="login-content__inner">
                    <div class="logo-box">
                        <div class="logo text-center"><a href="index.html" title="Linoor - DIgital Agency HTML Template"><img
                                    src="images/logo-dark.png" width="134" id="dLogo" class="main-logo"
                                    alt="Linoor - DIgital Agency HTML Template"
                                    title="Linoor - DIgital Agency HTML Template"></a></div>
                    </div>
                    <form action="{{ route('user.login') }}" method="POST">
                        @csrf
                        <input type="text" placeholder="Enter Email Address *" name="email"
                            value="{{ old('email') }}">
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                        <input type="password" placeholder="Your Password *" name="password" value="{{ old('password') }}">
                        @error('password')
                            <p class="text-red-500 text-xs mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                        <p class="text-right"><a href="forgot-password.html">Forgot your password?</a></p>
                        <button type='submit' class="theme-btn btn-style-one">
                            <i class="btn-curve"></i>
                            <span class="btn-title">Sign in</span>
                        </button>
                    </form>
                    <p class="signup-link">New to linoor? <a href="register.html">Signup</a></p>
                    <p class="copyright-text">© copyright 2021 by Layerdrops.com</p><!-- /.copyright-text -->
                </div><!-- /.login-content__inner -->
            </div><!-- /.login-content -->
        </section><!-- /.login-wrapper -->

    </div>
    <!--End pagewrapper-->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
@endsection
