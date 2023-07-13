@extends('layouts.template')

@section('content')
<section class="page-banner">
    <div class="image-layer" style="background-image:url({{ asset('assets/images/background/3-1.jpg') }});"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Media</h1>
                {{-- <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index-main.html">Home</a></li>
                        <li class="active">Media</li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </div>
</section>
    <section class="contact-section">
        <div class="auto-container">
            <div class="upper-info">
                <b><p style="padding-bottom: 20px">We are going to show you some of our previous trade history of our small account of $2000.</b><br><b>If you will learn Gold trading from MillionCents and follow our guidance and instructions you will also get same results</b></p>
                <div class="row clearfix">
                    <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                           
                            <div class="text">
                                <video width="200" height="250" controls src="{{ asset('assets/video/video.mp4') }}" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                           
                            <div class="text">
                                <video width="200" height="250" controls src="{{ asset('assets/video/video1.mp4') }}"
                                    type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                           
                            <div class="text">
                                <video width="200" height="250" controls src="{{ asset('assets/video/video2.mp4') }}"
                                    type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                           
                            <div class="text">
                                <video width="200" height="250" controls src="{{ asset('assets/video/video3.mp4') }}"
                                    type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                           
                            <div class="text">
                                <video width="200" height="250" controls src="{{ asset('assets/video/video4.mp4') }}"
                                    type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                           
                            <div class="text">
                                <video width="200" height="250" controls src="{{ asset('assets/video/video5.mp4') }}"
                                    type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                           
                            <div class="text">
                                <video width="200" height="250" controls src="{{ asset('assets/video/video6.mp4') }}"
                                    type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                           
                            <div class="text">
                                <video width="200" height="250" controls src="{{ asset('assets/video/video7.mp4') }}"
                                    type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
@endsection
