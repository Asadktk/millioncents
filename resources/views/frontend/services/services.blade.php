@extends('layouts.template')

@section('content')
    <!-- Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image:url({{ asset('assets/images/background/22.jpg') }});"></div>
        <div class="shape-1"></div>
        <div class="shape-2"></div>
        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>Services</h1>
                    {{-- <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="index-main.html">Home</a></li>
                            <li class="active">Services</li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Services Section-->
    <section class="testimonials-section testimonials-page">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="testi-block col-lg-6 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="inner">
                        <div class="icon"><span>“</span></div>
                        <div class="info">
                            <div class="image"><a href="team.html"><img
                                        src="{{ asset('assets/images/resource/1.jpg') }}" alt=""></a></div>
                            <div class="name">Yellow Metal Mastery</div>
                            {{-- <div class="designation">Director</div> --}}
                        </div>
                        <div class="text">. Safe-haven asset<br>
                            . High Liquidity<br>
                            . Inverse Correlation with USD<br>
                            .Profit Potential <br></div>
                    </div>
                </div>
                <div class="testi-block col-lg-6 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay="300ms"
                    data-wow-duration="1500ms">
                    <div class="inner">
                        <div class="icon"><span>“</span></div>
                        <div class="info">
                            <div class="image"><a href="team.html"><img
                                        src="{{ asset('assets/images/resource/1.jpg') }}" alt=""></a></div>
                            <div class="name">Forex Consultancy</div>
                            {{-- <div class="designation">Director</div> --}}
                        </div>
                        <div class="text">. Expertise and Knowledge
                            <br>. Risk Management<br>
                            . Trading Strategies<br>
                            . Emotional Support and Discipline<br>
                        </div>
                    </div>
                </div>
                <div class="testi-block col-lg-6 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="inner">
                        <div class="icon"><span>“</span></div>
                        <div class="info">
                            <div class="image"><a href="team.html"><img
                                        src="{{ asset('assets/images/resource/1.jpg') }}" alt=""></a></div>
                            <div class="name">Trading Bot</div>
                            {{-- <div class="designation">Director</div> --}}
                        </div>
                        <div class="text">. Speed and Efficiency<br>
                            . Elimination of Emotional Bias<br>
                            .Backtesting and Optimization<br>
                            . 24/7 Trading</div>
                    </div>
                </div>
                <div class="testi-block col-lg-6 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay="300ms"
                    data-wow-duration="1500ms">
                    <div class="inner">
                        <div class="icon"><span>“</span></div>
                        <div class="info">
                            <div class="image"><a href="team.html"><img
                                        src="{{ asset('assets/images/resource/1.jpg') }}" alt=""></a></div>
                            <div class="name">Signal Service</div>
                            {{-- <div class="designation">Director</div> --}}
                        </div>
                        <div class="text"> . Trade Ideas<br>
                            . Entry and Exit Point<br>
                            . Expert Analysis<br>
                            .Market Research <br></div>
                    </div>
                </div>

            </div>
        </div>
    </section>



   

    <!-- Call To Section -->
    <section class="call-to-section-two alternate">
        <div class="auto-container">
            <div class="inner clearfix">
                <h2>We’re Ready to Bring Bigger <br>& Stronger Projects</h2>
                <div class="link-box">
                    <a class="theme-btn btn-style-two" href="about.html">
                        <i class="btn-curve"></i>
                        <span class="btn-title">Register Now</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
