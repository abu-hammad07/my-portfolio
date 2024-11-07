@include('layouts.header')


<div class="site site-white">
    <!--::::: SITE AREA START :::::::-->

    @include('layouts.navbar')



    <!--:::::WELCOME ATRA START :::::::-->
    <div class="welcome-area-wrap"
        style="background: url(public/assets/img/bg/inner-header-bg.jpg);background-size: cover;background-position: center;"
        id="home">

        <!--::::: WELCOME CAROUSEL START :::::::-->
        <div class="welcome-area inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="inner-wlc">
                            <h2>Contact Us</h2>
                            <h3><a href="index.html">home</a>&nbsp;/&nbsp;Contact Us</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="inner-filltext">
                            <h1>Contact</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--::::: WELCOME CAROUSEL END:::::::-->
    </div>
    <!--:::::WELCOME AREA END :::::::-->


    <!--:::::CONTACT AREA START :::::::-->
    <div class="contact-page-area inner-bg-shpes section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 text-center">
                    <div class="contact__card">
                        <div class="contact__card__icon">
                            <i class="far fa-map-marker-alt"></i>
                        </div>
                        <h4>Address Line</h4>
                        <ul>
                            <li>
                                <a href="https://maps.app.goo.gl/Mm22v9aiQT4EyrK66" target="_blank">
                                    36/G Landhi, Karachi Pakistan
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="contact__card">
                        <div class="contact__card__icon">
                            <i class="far fa-phone"></i>
                        </div>
                        <h4>Phone</h4>
                        <ul>
                            <li><a href="callto:+923131192139" target="_blank">+92 313 1192139</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="contact__card">
                        <div class="contact__card__icon">
                            <i class="fal fa-envelope"></i>
                        </div>
                        <h4>Email</h4>
                        <ul>
                            <li><a href="mailto:support@hammadkamal.com" target="_blank">support@hammadkamal.com</a>
                            </li>
                            <li><a href="mailto:info@hammadkamal.com" target="_blank">info@hammadkamal.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="space-100"></div>
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="map mr-lg-4">
                        <a href="https://maps.app.goo.gl/Mm22v9aiQT4EyrK66" target="_blank">
                            <img src="{{ url('public/assets/img/contact/contact-map.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="primery-heading">
                        <strong class="filltext">Contact Us</strong>
                        <small>EXPLORE THE FEATURES</small>
                        <h2>Get In one tuch</h2>
                    </div>
                    <div class="space-20"></div>
                    <div class="contact-form">
                        <form action="#">
                            <input type="text" placeholder="Name">
                            <input type="email" placeholder="Email">
                            <textarea name="messege" id="messege" cols="30" rows="3" placeholder="Messege"></textarea>
                        </form>
                        <div class="space-20"></div>
                        <a href="#" class="subscribe-btn">sent now <i class="fal fa-comments-alt"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ url('public/assets/img/bg/service-bg.svg')}}" alt="" class="inner-shape1">
        <img src="{{ url('public/assets/img/bg/inner-bg1.svg')}}" alt="" class="inner-shape2">
    </div>
    <!--:::::CONTACT AREA END :::::::-->

    @include('layouts.subscribe-contact')

    @include('layouts.footer')


</div>
<!--:::::SITE AREA END :::::::-->


@include('layouts.scripts')