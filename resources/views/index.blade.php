@include('layouts.header')

<div class="site site-black">

    @include('layouts.navbar')

    <!--:::::WELCOME ATRA START :::::::-->
    <div class="welcome-area-wrap welcome__wrap1">

        <!--::::: WELCOME CAROUSEL START :::::::-->
        <div class="welcome-carousel owl-carousel">
            <div class="single-welcome-area home_1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="wlc-title white">
                                <h1 class="fadeInDown animated"><span>Hello,</span></h1>
                                <h1 class="fadeInDown animated">I'm<span> Abu Hammad </span> Laravel & PHP Developer
                                </h1>
                                <p class="fadeInDown animated">
                                    Together, we accomplish what no one can achieve alone - pushing boundaries,
                                    <br>creating solutions, driving progress.
                                </p>
                                <a href="{{ route('contact') }}" class="cbtn cbnt1 fadeInDown animated">
                                    Getting Started <i class="fal fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-welcome-area home_1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="wlc-title white">
                                <h1 class="fadeInDown animated"><span>Hello,</span></h1>
                                <h1 class="fadeInDown animated">I'm<span> Abu Hammad </span>Professional Wordpress
                                    Developer
                                </h1>
                                <p class="fadeInDown animated">
                                    Empowering Your Brand with WordPress - Where Design Meets
                                    <br>Functionality for Exceptional Results.
                                </p>
                                <a href="{{ route('contact') }}" class="cbtn cbnt1 fadeInDown animated">Getting Started
                                    <i class="fal fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--::::: WELCOME CAROUSEL END:::::::-->
    </div>
    <!--:::::WELCOME AREA END :::::::-->

    <!--:::::ABOUT AREA START :::::::-->
    <div class="about-area about-area1 section-padding" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 align-self-center">
                    <div class="about-shape">
                        <div class="about-img-section about-img-section1 text-center"></div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 align-self-center">
                    <div class="heading white">
                        <strong class="filltext">About us</strong>
                        <h2>
                            Driven by Passion,
                            <span>Focused</span>
                            on
                            <span>Results</span>
                        </h2>
                        <p>
                            Welcome! I'm Abu Hammad, a web developer with expertise in Laravel, PHP, and WordPress.
                            With over a year of experience, I create dynamic, user-focused websites and applications
                            that combine seamless performance with great design. Driven by a passion for digital
                            solutions, I'm dedicated to building robust applications and flexible websites tailored
                            to your vision.
                        </p>
                        <a href="#" class="cbtn cbnt1 fadeInDown animated">download cv <i
                                class="fal fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--:::::ABOUT AREA END :::::::-->

    <!--:::::SKILL AREA START :::::::-->
    <div class="skill-area section-padding" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="heading white">
                        <strong class="filltext">my carrer</strong>
                        <small>MY EXPERIENCE</small>
                        <h2>Experience and <span>skill</span></h2>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="info-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ratione reprehenderit,
                            error qui enim sit ex provident </p>
                    </div>
                </div>
            </div>
            <div class="space-60"></div>
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="skill-box">
                        <small>2011 - 2014 (Ui designer)</small>
                        <h5>Google Corporation.</h5>
                        <p>All you need to do your best work together in one package works seamlessly computer</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="skill-box">
                        <small>2011 - 2014 (Ui designer)</small>
                        <h5>Apple Product Co.</h5>
                        <p>All you need to do your best work together in one package works seamlessly computer</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="skill-box">
                        <small>2011 - 2014 (Ui designer)</small>
                        <h5>lead designer musicsoft</h5>
                        <p>All you need to do your best work together in one package works seamlessly computer</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="skill-box">
                        <small>2011 - 2014 (Ui designer)</small>
                        <h5>lBruno Mars As.</h5>
                        <p>All you need to do your best work together in one package works seamlessly computer</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-100"></div>
        <!-- Start Technical Skills Section -->
        <div class="skill__circles">
            <div class="container">
                <div class="row">
                    <div class="colsm6 col-lg-3 text-center">
                        <div class="circle1 circle" id="circle1">
                            <strong></strong>
                            <span>Branding Design</span>
                        </div>
                    </div>
                    <div class="colsm6 col-lg-3 text-center">
                        <div class="circle2 circle" id="circle2">
                            <strong></strong>
                            <span>UI & UX Design</span>
                        </div>
                    </div>
                    <div class="colsm6 col-lg-3 text-center">
                        <div class="circle3 circle" id="circle3">
                            <strong></strong>
                            <span>Web Design</span>
                        </div>
                    </div>
                    <div class="colsm6 col-lg-3 text-center">
                        <div class="circle4 circle" id="circle4">
                            <strong></strong>
                            <span>illustration</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--:::::SKILL AREA END :::::::-->

    <!--:::::SERVICE AREA START :::::::-->
    <div class="service-area padding-bottom" id="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="heading white">
                        <strong class="filltext">our services</strong>
                        <small>WHAT WE DO</small>
                        <h2>Services and<span> Solutions</span></h2>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="info-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ratione reprehenderit,
                            error qui enim sit ex provident </p>
                    </div>
                </div>
            </div>
            <div class="space-60"></div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <img src="{{ url('public/assets/img/icon/service1.svg')}}" alt="">
                        </div>
                        <div class="service-text">
                            <h4>design principales</h4>
                            <p>Need a project completed by an expert? Let’s go! Access a Human Resources Consultant
                                to answer questions</p>
                        </div>
                        <div class="circles-wrap">
                            <div class="circles">
                                <span class="circle circle-1"></span>
                                <span class="circle circle-2"></span>
                                <span class="circle circle-3"></span>
                                <span class="circle circle-4"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-service active">
                        <div class="service-icon">
                            <img src="{{ url('public/assets/img/icon/service2.svg')}}" alt="">
                        </div>
                        <div class="service-text">
                            <h4>Unique Values</h4>
                            <p>Need a project completed by an expert? Let’s go! Access a Human Resources Consultant
                                to answer questions</p>
                        </div>
                        <div class="circles-wrap">
                            <div class="circles">
                                <span class="circle circle-1"></span>
                                <span class="circle circle-2"></span>
                                <span class="circle circle-3"></span>
                                <span class="circle circle-4"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <img src="{{ url('public/assets/img/icon/service3.svg')}}" alt="">
                        </div>
                        <div class="service-text">
                            <h4>Style Components</h4>
                            <p>Need a project completed by an expert? Let’s go! Access a Human Resources Consultant
                                to answer questions</p>
                        </div>
                        <div class="circles-wrap">
                            <div class="circles">
                                <span class="circle circle-1"></span>
                                <span class="circle circle-2"></span>
                                <span class="circle circle-3"></span>
                                <span class="circle circle-4"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--:::::SERVICE AREA END :::::::-->

    <!--:::::PROJECT AREA START :::::::-->
    <div class="project-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 align-self-center">
                    <div class="heading white">
                        <strong class="filltext">our projects</strong>
                        <small>WORKING PROCESS</small>
                        <h2>lastet working <span>project</span></h2>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="info-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ratione reprehenderit </p>
                    </div>
                </div>
            </div>
            <div class="space-60"></div>
            <div class="row">
                <ul id="da-thumbs" class="da-thumbs portfolio-carousel owl-carousel">
                    <li>
                        <a href="{{ route('home') }}">
                            <img src="{{ url('public/assets/img/project/project1.png')}}" alt="">
                            <div><span>Working Project</span></div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}">
                            <img src="{{ url('public/assets/img/project/project2.png')}}" alt="">
                            <div><span>Working Project</span></div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}">
                            <img src="{{ url('public/assets/img/project/project3.png')}}" alt="">
                            <div><span>Working Project</span></div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}">
                            <img src="{{ url('public/assets/img/project/project4.png')}}" alt="">
                            <div>
                                <span>Working Project</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}">
                            <img src="{{ url('public/assets/img/project/project2.png')}}" alt="">
                            <div>
                                <span>Working Project</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--:::::PROJECT AREA END :::::::-->


    @include('layouts.subscribe-home')

    @include('layouts.footer')

</div>
<!--:::::sitea area end :::::::-->


@include('layouts.scripts')