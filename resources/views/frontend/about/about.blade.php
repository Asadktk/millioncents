@extends('layouts.template')

@section('content')
    <!-- Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image:url({{ asset('assets/images/background/1.jpg') }});"></div>
        <div class="shape-1"></div>
        <div class="shape-2"></div>
        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>About</h1>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Discover Section-->
    <section class="discover-section">
        <div class="auto-container">
            <div class="row clearfix">
                <h3>About Us</h3>
                <p>Welcome to MillionCents! We are a trusted provider of comprehensive educational resources and training
                    programs for individuals interested in the dynamic world of forex trading.
                    Our mission is to equip aspiring traders with the knowledge, skills, and confidence needed to navigate
                    the global forex markets successfully.
                    MillionCents is founded by group of experienced Gold traders in 2022 with the mission of helping people
                    make money from forex market to reduce and shrink the vicious circle of poverty and unemployment which
                    is the main hurdle and obstacle in the economic and structural growth of country.
                    At our core, we believe that education is the foundation of success in forex trading. We are committed
                    to providing high-quality training and mentorship to empower our students with the tools and strategies
                    necessary to make informed trading decisions.
                    Our team consists of experienced traders, financial experts, and industry professionals who are
                    passionate about sharing their knowledge. They have designed a curriculum that covers all aspects of
                    gold trading.
                    Whether you are a beginner looking to grasp the basics or an experienced trader seeking to refine your
                    skills, our courses cater to all skill levels.
                    What sets us apart is our emphasis on practical learning. We understand that forex trading involves
                    real-time decision-making in a fast-paced environment.
                </p>
                <br>
                <p> Therefore, our course combine theoretical concepts with real-world examples, case studies, and
                    interactive exercises to ensure a comprehensive understanding of the forex market.
                </p> <br><br>
                <h6>When you enroll in our Gold trading courses, you can expect:</h6>

                <b>Comprehensive Curriculum:</b>
                <p>Our course cover a wide range of topics, including market analysis, charting techniques, risk management
                    strategies, and trading psychology.
                    We provide a step-by-step learning path to help you build a strong foundation and progress towards
                    advanced trading techniques.
                </p> <br>
                <b>Expert Instructors:</b>
                <p>Our instructors are seasoned traders and industry professionals with a wealth of experience in gold
                    trading. They are dedicated to sharing their insights, techniques, and strategies to help you succeed in
                    the market.
                </p>
                <b>Practical Approach:</b>
                <p> We focus on practical learning and application of concepts. Our courses include live trading
                    simulations, case studies, and hands-on exercises to give you practical experience and build confidence
                    in your trading abilities.
                </p>
                <br>
                <b>Ongoing Support:</b>
                <p>We believe in providing continuous support to our students. We offer access to a community of traders and
                    mentorship programs to ensure that you receive guidance and assistance even after completing the course.
                </p>
                <br><b> Flexibility and Convenience:</b>
                <p>Our courses are designed to fit into your busy schedule.
                    We offer a variety of learning formats, including online self-paced modules, live webinars, and
                    personalized coaching sessions, allowing you to choose the method that suits your learning style and
                    availability.
                    Whether you aspire to become a full-time gold trader or wish to diversify your investment portfolio, our
                    forex trading courses are designed to provide you with the knowledge and skills to navigate the forex
                    markets effectively.
                    Join us today and embark on your journey to becoming a successful forex trader!</p>
            </div>
        </div>
    </section>

    <!--Testimonials Section-->
    <section class="testimonials-section">
        <div class="auto-container">
            <div class="sec-title">
                <h2>Customers feedback<span class="dot">.</span></h2>
            </div>
            <div class="carousel-box">
                <div class="testimonials-carousel owl-theme owl-carousel">
                    <div class="testi-block">
                        <div class="inner">
                            <div class="icon"><span>“</span></div>
                            <div class="info">
                                {{-- <div class="image"><a href="team.html"><img
                                            src="{{ asset('assets/images/resource/author-1.jpg') }}" alt=""></a>
                                </div> --}}
                                <div class="name">Sidra</div>
                                <div class="designation">Student</div>
                            </div>
                            <div class="text">I have bought their Gold trading course and i am surprised to see that they
                                teach and train people in a very easy yet practical way.</div>
                        </div>
                    </div>
                    <div class="testi-block">
                        <div class="inner">
                            <div class="icon"><span>“</span></div>
                            <div class="info">
                                <div class="name">Muhammad Ali</div>
                                <div class="designation">Manager</div>
                            </div>
                            <div class="text">They have vision to help people make money online from forex market and
                                they are doing that.</div>
                        </div>
                    </div>
                    <div class="testi-block">
                        <div class="inner">
                            <div class="icon"><span>“</span></div>
                            <div class="info">
                                <div class="name">Anum</div>
                                <div class="designation">Software Engineer</div>
                            </div>
                            <div class="text">At start i am a software engineer by profession but now i am an expert Gold
                                trader.</div>
                        </div>
                    </div>
                    <div class="testi-block">
                        <div class="inner">
                            <div class="icon"><span>“</span></div>
                            <div class="info">

                                <div class="name">Mike</div>
                                <div class="designation">Composer</div>
                            </div>
                            <div class="text">Before enrollment in their course i think forex market is complex and hard
                                but now i am very comfortable after learning from them and making good profits.</div>
                        </div>
                    </div>
                    <div class="testi-block">
                        <div class="inner">
                            <div class="icon"><span>“</span></div>
                            <div class="info">
                                <div class="name">Maria</div>
                                <div class="designation">Teacher</div>
                            </div>
                            <div class="text">I am referred to MillionCents by my friend and i am very thankful to
                                MillionCents team they made me a pro trader.</div>
                        </div>
                    </div>
                    <div class="testi-block">
                        <div class="inner">
                            <div class="icon"><span>“</span></div>
                            <div class="info">
                                <div class="name">Francisca</div>
                                <div class="designation">Doctor</div>
                            </div>
                            <div class="text">Trading Gold in Forex Market will make you good amount of money with the
                                help of MillionCents i have no worries to my monthly expenses.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Funfacts Section -->
    <section class="facts-section alternate">
        <div class="auto-container">
            <div class="inner-container">

                <!-- Fact Counter -->
                <div class="fact-counter">
                    <div class="row clearfix">

                        <!--Column-->
                        <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                            <div class="inner">
                                <div class="content">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="4000" data-stop="10">0</span>
                                    </div>
                                    <div class="counter-title">Countries </div>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                            <div class="inner">
                                <div class="content">
                                    <div class="count-outer count-box alternate">
                                        <span class="count-text" data-speed="3000" data-stop="4">0</span>
                                    </div>
                                    <div class="counter-title">Languages</div>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                            <div class="inner">
                                <div class="content">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="250">0</span>
                                    </div>
                                    <div class="counter-title">Already Served</div>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                            <div class="inner">
                                <div class="content">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="4000" data-stop="10000"></span>
                                    </div>
                                    <div class="counter-title">Target</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Funfacts Section -->

    <!-- Parallax Section -->
    <section class="parallax-section jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 80%">
        <!-- <div class="image-layer" style="background-image: url(images/background/image-2.jpg);"></div> -->
        <img src="{{ asset('assets/images/background/2.jpg') }}" alt="" class="jarallax-img">
        <div class="auto-container">
            <div class="content-box">
                <div class="icon-box"><span class="flaticon-app-development"></span></div>
                <h2>Great things in business are never done by one person. <span>They’re done by a team of
                        people.</span></h2>
            </div>
        </div>
    </section>
    <!-- End Funfacts Section -->

    <!--Agency Section-->
    <section class="agency-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Left Column-->
                <div class="left-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <h2>Who need yellow metal mastery<br>course<span class="dot">!</span></h2>
                        </div>

                        <!--Default Tabs-->
                        <div class="default-tabs tabs-box">

                            <!--Tab Btns-->
                            <ul class="tab-btns tab-buttons clearfix">
                                <li data-tab="#tab-1" class="tab-btn active-btn"><span>Our Mission</span></li>
                                <li data-tab="#tab-2" class="tab-btn"><span>Our Vision</span></li>
                                <li data-tab="#tab-3" class="tab-btn"><span>Commitment</span></li>
                            </ul>

                            <!--Tabs Container-->
                            <div class="tabs-content">

                                <!--Tab-->
                                <div class="tab active-tab" id="tab-1">
                                    <div class="content">
                                        <div class="text">Millioncents, our mission is to empower individuals with the
                                            knowledge and skills they need to navigate the complex world of forex trading.
                                            We believe that with the right education and support, anyone can achieve
                                            financial independence and success in the forex market.
                                            .</div>
                                    </div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="tab-2">
                                    <div class="content">
                                        <div class="text">Our vision is to be a leading provider of high-quality forex
                                            education and training,
                                            recognized for our innovative teaching methods, expert instructors, and
                                            commitment to excellence. We aspire to create a community of successful traders
                                            who share our values of integrity, professionalism, and a passion for learning.
                                        </div>
                                    </div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="tab-3">
                                    <div class="content">
                                        <div class="text"> Millioncents, we are committed to making a positive impact in
                                            the lives of our clients, our employees, and our
                                            communities. We believe that forex trading can be a powerful tool for creating
                                            wealth and opportunity, and we are committed to sharing our knowledge and
                                            expertise to help others succeed.</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--Right Column-->
                <div class="right-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="text">Forex Trading is potential avenue for anyone wo is willing to put in the time
                            and efforts to learn and develop the necessary skills. Here are some example of individuals who
                            can learn or make money with Forex.</div>
                        <div class="featured-block-two clearfix">
                            <div class="image"><img src="{{ asset('assets/images/resource/3.jpg') }}" style="height: 236px">
                            </div>
                            <div class="text">
                                <ul>
                                    <li>Investors.</li>
                                    <li>Entrepreneurs.</li>
                                    <li>Traders.</li>
                                    <li>Students.</li>
                                    <li>Anyone who wants to make money online.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
