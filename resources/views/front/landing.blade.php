@extends('front.layout')


@section('title','Home')
@section('keywords','web development,web design, project managing,application development, wordpress website design,')
@section('description','Raidun is a web development company')



@section('content')


    <!-- Header Start -->
    <header>
        <nav>
            <a href="javascript:void(0)" class="ms-sidebar-toggle"><img src="assets/front/img/icons/menu.svg" class="svg_img"
                                                                        alt="menu"></a>
        </nav>
    </header>
    <!-- Header End -->

    <!-- Sidebar Start -->
    <div class="ms-sidebar-overlay"></div>
    <div class="ms-sidebar">
        <div class="menu-list">
            <a href="javascript:void(0)" class="close-sidebar">×</a>
            <ul class="navbar-nav mb-2 ml-auto" id="top-menu">
                <li class="nav-item active">
                    <a class="nav-link ms-nav" aria-current="page" href="index.html#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-nav" href="index.html#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-nav" href="index.html#experience">Experience</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-nav" href="index.html#service">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-nav" href="index.html#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-nav" href="index.html#news">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-nav" href="index.html#contact">Contacts</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Sidebar End -->

    <!-- Hero Start -->
    <section id="home" class="ms-hero margin-b-50">
        <a class="language" style="position: absolute;top: 60px; left: 50px;font-family: 'Poppins, sans-serif'; color: #222;font-size: 1.25rem;font-weight: 500" href="{{route('language change')}}">{{ session()->get('locale') == 'en' ? 'EN': 'AR' }}</a>

        <div class="ms-diamond-1"></div>
        <div class="ms-diamond-2"></div>
        <div class="ms-diamond-3"></div>
        <div class="ms-diamond-4"></div>
        <div class="ms-diamond-5"></div>
        <div class="ms-diamond-6"></div>
        <div class="container">
            <div class="hero-content">
                <div class="hero-item static">
                    <div class="ms-hero-detail">
                        <h2 class="ms-hero-title title-right-overflow"><span>Hello, <br> We are<br> <span
                                    class="name">&nbsp; Raidun</span></span>
                        </h2>
                        <p class="ms-hero-detail">At our Raidun, we specialize in creating customized and visually
                            stunning websites that captivate audiences and drive business growth.
                            Our team of skilled developers and designers work closely with clients to understand their
                            unique goals and translate them into functional and user-friendly websites.</p>
                        <a href="index.html" class="ms-learn-more-right">
                            <span class="text">Request Project</span>
                        </a>
                    </div>
                    <div class="ms-hero-img">
                        <div class="ms-card">
                            <img src="assets/front/img/hero/hero.jpg" alt="vasantbhai">
                        </div>
                    </div>
                    <div class="ms-hero-name">
                        <h3><span>Empowering Businesses with Cutting-Edge Web Solutions</span></h3>
                    </div>
                </div>
                <div class="art"></div>
            </div>
        </div>
        <div class="scroll-next" data-scroll="about">
            <div class="ms-container">
                <span class="menu">
                    <span class="text"></span>
                    <span class="circle"></span>
                </span>
            </div>
        </div>
    </section>
    <!-- Hero End -->

    <!-- About section -->
    <section id="about" class="ms-about padding-tb-80 sec-bg">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2>About<span> Us</span></h2>
                    <span class="ligh-title">About</span>
                </div>
                <div class="col-lg-6">
                    <div class="ms-about-detail m-b-991">
                        <h4>Creativity bleeds from the pen of inspiration.</h4>
                        <p class="ms-text">I am your client Consultant having <b>8+ years</b> of experience in this
                            field
                            provides complete range of marketing materials and clienting solution to any industry as
                            well
                            as corporate clients maintaining their reputation and increasing the client awareness using
                            PR & other print media & online marketing activities.</p>
                        <p class="ms-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the text ever since the 1500s.</p>
                        <!-- <div class="ms-about-info">
                            <ul class="m-r-30">
                                <li><span class="title">Full Name<b>:</b></span>Maria Ilvor</li>
                                <li><span class="title">Age<b>:</b></span>26 Years</li>
                                <li><span class="title">Language<b>:</b></span>English, spanish</li>
                                <li><span class="title">Phone No<b>:</b></span>+00 9876543210</li>
                                <li><span class="title">Email<b>:</b></span>example@gmail.com</li>
                                <li><span class="title">Address<b>:</b></span><span>Ruami Mello Moraes, - Salvador - MA,
                                        40352, Brazil.</span></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ms-skill-progress">
                        <div class="row m-b-minus-30px">
                            <div class="col-md-6">
                                <div class="ms-box">
                                    <svg class="progress noselect" data-progress="87" x="0px" y="0px"
                                         viewBox="0 0 80 80">
                                        <path class="track" d="M5,40a35,35 0 1,0 70,0a35,35 0 1,0 -70,0" />
                                        <path class="fill" d="M5,40a35,35 0 1,0 70,0a35,35 0 1,0 -70,0" />
                                        <text class="value" x="50%" y="58%">0%</text>
                                    </svg>
                                    <h3>Photoshop</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ms-box">
                                    <svg class="progress noselect" data-progress="80" x="0px" y="0px"
                                         viewBox="0 0 80 80">
                                        <path class="track" d="M5,40a35,35 0 1,0 70,0a35,35 0 1,0 -70,0" />
                                        <path class="fill" d="M5,40a35,35 0 1,0 70,0a35,35 0 1,0 -70,0" />
                                        <text class="value" x="50%" y="58%">0%</text>
                                    </svg>
                                    <h3>HTML</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ms-box">
                                    <svg class="progress active noselect" data-progress="95" x="0px" y="0px"
                                         viewBox="0 0 80 80">
                                        <path class="track" d="M5,40a35,35 0 1,0 70,0a35,35 0 1,0 -70,0" />
                                        <path class="fill" d="M5,40a35,35 0 1,0 70,0a35,35 0 1,0 -70,0" />
                                        <text class="value" x="50%" y="58%">0%</text>
                                    </svg>
                                    <h3>PHP</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ms-box">
                                    <svg class="progress noselect" data-progress="70" x="0px" y="0px"
                                         viewBox="0 0 80 80">
                                        <path class="track" d="M5,40a35,35 0 1,0 70,0a35,35 0 1,0 -70,0" />
                                        <path class="fill" d="M5,40a35,35 0 1,0 70,0a35,35 0 1,0 -70,0" />
                                        <text class="value" x="50%" y="58%">0%</text>
                                    </svg>
                                    <h3>Javascript</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About section End -->

    <!-- Start service section -->
    <section id="service" class="ms-service padding-tb-80 sec-bg">
        <div class="container">
            <div class="section-title">
                <h2>Our<span> service</span></h2>
                <span class="ligh-title">service</span>
            </div>
            <div class="row service-box m-tb-minus-15px">

                <div class="offset-lg-2 col-lg-3 col-md-6 col-xs-12">
                    <div class="flipper">
                        <div class="main-box">
                            <div class="box-front height-300 white-bg">
                                <div class="content-wrap">
                                    <div class="icon">
                                        <img class="icofont icofont-headphone-alt font-40px dark-color svg_img"
                                             src="assets/front/img/service/web.svg" alt="development">
                                    </div>
                                    <h3>Web Development</h3>
                                    <p>We Develop the Visual Identity of Your Business.</p>
                                </div>
                            </div>
                            <div class="box-back height-300 gradient-bg">
                                <div class="content-wrap">
                                    <h3>Web Development</h3>
                                    <p>We Develop the Visual Identity of Your Business.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="flipper">
                        <div class="main-box">
                            <div class="box-front height-300 white-bg">
                                <div class="content-wrap">
                                    <div class="icon">
                                        <img class="icofont icofont-headphone-alt font-40px dark-color svg_img"
                                             src="assets/front/img/service/mobile.svg" alt="seo friendly">
                                    </div>
                                    <h3>Mobile Development</h3>
                                    <p>Taking your site at the top of Google's ranking.</p>
                                </div>
                            </div>
                            <div class="box-back height-300 gradient-bg">
                                <div class="content-wrap">
                                    <h3>Mobile Development</h3>
                                    <p>Taking your site at the top of Google's ranking.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="flipper">
                        <div class="main-box">
                            <div class="box-front height-300 white-bg">
                                <div class="content-wrap">
                                    <div class="icon">
                                        <img class="icofont icofont-headphone-alt font-40px dark-color svg_img"
                                             src="assets/front/img/service/mobile.svg" alt="seo friendly">
                                    </div>
                                    <h3>Data Analytics</h3>
                                    <p>Taking your site at the top of Google's ranking.</p>
                                </div>
                            </div>
                            <div class="box-back height-300 gradient-bg">
                                <div class="content-wrap">
                                    <h3>Mobile Development</h3>
                                    <p>Taking your site at the top of Google's ranking.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="flipper">
                        <div class="main-box">
                            <div class="box-front height-300 white-bg">
                                <div class="content-wrap">
                                    <div class="icon">
                                        <img class="icofont icofont-headphone-alt font-40px dark-color svg_img"
                                             src="assets/front/img/service/1.svg" alt="Graphics Design">
                                    </div>
                                    <h3>Graphics Design</h3>
                                    <p>Develop the Visual Identity of Your Business</p>
                                </div>
                            </div>
                            <div class="box-back height-300 gradient-bg">
                                <div class="content-wrap">
                                    <h3>Graphics Design</h3>
                                    <p>Develop the Visual Identity of Your Business</p>
                                    <a href="index.html#" class="btn">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="flipper">
                        <div class="main-box">
                            <div class="box-front height-300 white-bg">
                                <div class="content-wrap">
                                    <div class="icon">
                                        <img class="icofont icofont-headphone-alt font-40px dark-color svg_img"
                                             src="assets/front/img/service/2.svg" alt="web design">
                                    </div>
                                    <h3>Web Design</h3>
                                    <p>Connect With Your Users, Not Just Your Business.</p>
                                </div>
                            </div>
                            <div class="box-back height-300 gradient-bg">
                                <div class="content-wrap">
                                    <h3>Web Design</h3>
                                    <p>Connect With Your Users, Not Just Your Business.</p>
                                    <a href="index.html#" class="btn">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="flipper">
                        <div class="main-box">
                            <div class="box-front height-300 white-bg">
                                <div class="content-wrap">
                                    <div class="icon">
                                        <img class="icofont icofont-headphone-alt font-40px dark-color svg_img"
                                             src="assets/front/img/service/sequrity.svg" alt="development">
                                    </div>
                                    <h3>Security</h3>
                                    <p>We Develop the Visual Identity of Your Business.</p>
                                </div>
                            </div>
                            <div class="box-back height-300 gradient-bg">
                                <div class="content-wrap">
                                    <h3>Development</h3>
                                    <p>We Develop the Visual Identity of Your Business.</p>
                                    <a href="index.html#" class="btn">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="flipper">
                        <div class="main-box">
                            <div class="box-front height-300 white-bg">
                                <div class="content-wrap">
                                    <div class="icon">
                                        <img class="icofont icofont-headphone-alt font-40px dark-color svg_img"
                                             src="assets/front/img/service/4.svg" alt="seo friendly">
                                    </div>
                                    <h3>Seo Friendly</h3>
                                    <p>Taking your site at the top of Google's ranking.</p>
                                </div>
                            </div>
                            <div class="box-back height-300 gradient-bg">
                                <div class="content-wrap">
                                    <h3>Seo Friendly</h3>
                                    <p>Taking your site at the top of Google's ranking.</p>
                                    <a href="index.html#" class="btn">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offset-lg-2 col-lg-4 col-md-6 col-xs-12">
                    <div class="flipper">
                        <div class="main-box">
                            <div class="box-front height-300 white-bg">
                                <div class="content-wrap">
                                    <div class="icon">
                                        <img class="icofont icofont-headphone-alt font-40px dark-color svg_img"
                                             src="assets/front/img/service/desktop.svg" alt="development">
                                    </div>
                                    <h3>Desktop Development</h3>
                                    <p>We Develop the Visual Identity of Your Business.</p>
                                </div>
                            </div>
                            <div class="box-back height-300 gradient-bg">
                                <div class="content-wrap">
                                    <h3>Development</h3>
                                    <p>We Develop the Visual Identity of Your Business.</p>
                                    <a href="index.html#" class="btn">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="flipper">
                        <div class="main-box">
                            <div class="box-front height-300 white-bg">
                                <div class="content-wrap">
                                    <div class="icon">
                                        <img class="icofont icofont-headphone-alt font-40px dark-color svg_img"
                                             src="assets/front/img/service/iot.svg" alt="seo friendly">
                                    </div>
                                    <h3>Internet of Things</h3>
                                    <p>Taking your site at the top of Google's ranking.</p>
                                </div>
                            </div>
                            <div class="box-back height-300 gradient-bg">
                                <div class="content-wrap">
                                    <h3>Seo Friendly</h3>
                                    <p>Taking your site at the top of Google's ranking.</p>
                                    <a href="index.html#" class="btn">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End service section -->

    <!-- Start Experience & Education section -->
    <section id="experience" class="ms-experience padding-tb-80">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2>Our <span>Resume</span></h2>
                    <span class="ligh-title">Achievements</span>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="education ms-ex-box m-b-991">
                        <h4>Education</h4>
                        <ul class="timeline">
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                                <div class="timeline-info">
                                    <span>June 15, 2013 - 2016</span>
                                </div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Master in Computer Engineering<span class="sub">- First
                                            Class</span></h5>
                                    <p>Lorem Ipsum Commodo Dolor Sit Amet, Consectetur Adipisicing Elit, Sed Do Eiusmod
                                        Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam</p>
                                </div>
                            </li>
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                                <div class="timeline-info">
                                    <span>June 12, 2010 - 2013</span>
                                </div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Bachelor in Computer Engineering<span class="sub">- First
                                            Class</span></h5>
                                    <p>Lorem Ipsum Commodo Dolor Sit Amet, Consectetur Adipisicing Elit, Sed Do Eiusmod
                                        Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam</p>
                                </div>
                            </li>
                            <li class="timeline-item" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="800">
                                <div class="timeline-info">
                                    <span>June 1, 2009 - 2010</span>
                                </div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Higher Secondary<span class="sub">- (A+)</span></h5>
                                    <p>Lorem Ipsum Commodo Dolor Sit Amet, Consectetur Adipisicing Elit, Sed Do Eiusmod
                                        Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam</p>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="experiense ms-ex-box">
                        <h4>Experiense</h4>
                        <ul class="timeline">
                            <li class="timeline-item">
                                <div class="timeline-info">
                                    <span>March 12, 2020</span>
                                </div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Envato<span class="sub">- Team Leader</span></h5>
                                    <p>Lorem Ipsum Commodo Dolor Sit Amet, Consectetur Adipisicing Elit, Sed Do Eiusmod
                                        Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam</p>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-info">
                                    <span>January 23, 2018 - 2020</span>
                                </div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Facebook Company<span class="sub">- Sr. Developer</span>
                                    </h5>
                                    <p>Lorem Ipsum Commodo Dolor Sit Amet, Consectetur Adipisicing Elit, Sed Do Eiusmod
                                        Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam</p>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-info">
                                    <span>July 23, 2016 - 2018</span>
                                </div>
                                <div class="timeline-content">
                                    <h5 class="timeline-title">Twitter Company<span class="sub">- Jr. Developer</span>
                                    </h5>
                                    <p>Lorem Ipsum Commodo Dolor Sit Amet, Consectetur Adipisicing Elit, Sed Do Eiusmod
                                        Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Experience & Education Section -->

    <!-- Start Portfolio Section -->
    <section id="portfolio" class="ms-portfolio padding-tb-80">
        <div class="container">
            <div class="section-title">
                <h2>Our <span>Projects</span></h2>
                <span class="ligh-title">Portfolio</span>
            </div>
            <div class="row m-b-minus-24px">
                <div class="portfolio-content">
                    <div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="portfolio-tabs">
                                    <ul>
                                        <li class="filter" data-filter="all">ALL</li>
                                        @foreach($categories as $cat)
                                        <li class="filter" data-filter=".{{str_replace(' ','_',$cat->title)}}">{{$cat->title}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="portfolio-content-items">
                                    <div class="row m-b-minus-30px">
                                        @foreach($works as $work)
                                        <div class="col-lg-6 mix {{str_replace(' ','_',$work->category->title)}}">
                                            <div class="ms-project-box">
                                                <h3>{{$work->title}}</h3>
                                                <div class="links">
                                                    <a>{{strtoupper($work->category->title)}}</a>
                                                </div>
                                                <p>{{mb_strimwidth($work->content, 0, 50, "...")}}
                                                    <a href="{{route('view project',['id'=>$work->id])}}">Read more</a>
                                                </p>
                                                <div class="ms-info">
                                                    <div class="portfolio-img">
                                                        <a class="" data-fancybox="gallery"
                                                           style="background-image: url({{$work->thumb_path}})">
                                                        </a>
                                                    </div>
                                                    <div class="ms-detail">
                                                        <ul>
                                                            <li>Date : {{$work->date}}</li>
                                                            <li>Tech : {{strtoupper($work->tech)}}</li>
                                                            <li>Type : {{strtoupper($work->type)}}</li>
                                                            <li>URL : <a href="{{$work->url}}">{{$work->url}}</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio Section -->

{{--    <!-- Start Counter Section -->--}}
{{--    <section id="counters" class="ms-counter padding-tb-80 sec-bg">--}}
{{--        <div class="container">--}}
{{--            <div class="section-title d-none">--}}
{{--                <h2>My <span>Achievements</span></h2>--}}
{{--                <span class="ligh-title">Achievements</span>--}}
{{--            </div>--}}
{{--            <div class="row achive m-tb-minus-12px" id="counter">--}}
{{--                <div class="col-lg-3 col-md-6">--}}
{{--                    <div class="count-block" data-tilt>--}}
{{--                        <h3><span class="counter counter-value" data-count="156">156</span>+</h3>--}}
{{--                        <p>Clients</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6">--}}
{{--                    <div class="count-block" data-tilt>--}}
{{--                        <h3><span class="counter counter-value" data-count="394">394</span>+</h3>--}}
{{--                        <p>Projects</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6">--}}
{{--                    <div class="count-block" data-tilt>--}}
{{--                        <h3 class="active-num"><span class="counter counter-value" data-count="37">37</span>+</h3>--}}
{{--                        <p>Countries</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6">--}}
{{--                    <div class="count-block" data-tilt>--}}
{{--                        <h3><span class="counter counter-value" data-count="21">21</span>+</h3>--}}
{{--                        <p>Awords</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- End Counter Section -->--}}

    <!-- Start News Section -->
    <section id="news" class="ms-news padding-tb-80">
        <div class="container">
            <div class="section-title">
                <h2>Latest <span>News</span></h2>
                <span class="ligh-title">Blogs</span>
            </div>
            <div class="row m-b-minus-30px">
                <div class="news-carousel">
                    <div class="ms-item">
                        <div class="news-info">
                            <figure class="news-img">
                                <a href="index.html#">
                                    <img src="assets/front/img/blog/1.jpg" alt="news imag">
                                </a>
                            </figure>
                            <div class="detail">
                                <label>July 30,2019 - <a href="index.html#">Marketing</a></label>
                                <h3><a href="index.html#">Marketing Guide: 5 Steps to Success.</a></h3>
                                <div class="more-info">
                                    <a href="index.html#">Read More<span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ms-item">
                        <div class="news-info">
                            <figure class="news-img"><a href="index.html#"><img src="assets/front/img/blog/2.jpg"
                                                                                alt="news imag"></a>
                            </figure>
                            <div class="detail">
                                <label>July 30,2019 - <a href="index.html#">Business</a></label>
                                <h3><a href="index.html#">Best way to solve business deal issue.</a></h3>
                                <div class="more-info">
                                    <a href="index.html#">Read More<span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ms-item">
                        <div class="news-info">
                            <figure class="news-img"><a href="index.html#"><img src="assets/front/img/blog/3.jpg"
                                                                                alt="news imag"></a>
                            </figure>
                            <div class="detail">
                                <label>July 30,2019 - <a href="index.html#">Knowledge</a></label>
                                <h3><a href="index.html#">31 customer service stats know in 2019.</a></h3>
                                <div class="more-info">
                                    <a href="index.html#">Read More<span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ms-item">
                        <div class="news-info">
                            <figure class="news-img"><a href="index.html#"><img src="assets/front/img/blog/4.jpg"
                                                                                alt="news imag"></a>
                            </figure>
                            <div class="detail">
                                <label>July 30,2019 - <a href="index.html#">Business</a></label>
                                <h3><a href="index.html#">Business ideas to grow your business.</a></h3>
                                <div class="more-info">
                                    <a href="index.html#">Read More<span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ms-item">
                        <div class="news-info">
                            <figure class="news-img"><a href="index.html#"><img src="assets/front/img/blog/5.jpg"
                                                                                alt="news imag"></a>
                            </figure>
                            <div class="detail">
                                <label>July 30,2019 - <a href="index.html#">Marketing</a></label>
                                <h3><a href="index.html#">Marketing Guide: 5 Steps to Success.</a></h3>
                                <div class="more-info">
                                    <a href="index.html#">Read More<span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ms-item">
                        <div class="news-info">
                            <figure class="news-img"><a href="index.html#"><img src="assets/front/img/blog/6.jpg"
                                                                                alt="news imag"></a>
                            </figure>
                            <div class="detail">
                                <label>July 30,2019 - <a href="index.html#">Knowledge</a></label>
                                <h3><a href="index.html#">31 customer service stats know in 2019.</a></h3>
                                <div class="more-info">
                                    <a href="index.html#">Read More<span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End News Section -->

    <!-- Start Contact Section -->
    <section id="contact" class="ms-contact padding-tb-80 sec-bg">
        <div class="container d-block">
            <div class="section-title">
                <h2>Get in <span>Touch</span></h2>
                <span class="ligh-title">Contact</span>
            </div>
            <div class="row m-b-minus-30px">
                <div class="col-lg-5 col-md-12 m-b-991-20">
                    <div class="ms-box">
                        <div class="detail">
                            <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                            <div class="info">
                                <h3 class="title">Mail & Website</h3>
                                <p>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; mail.example@gmail.com
                                </p>
                                <p>
                                    <i class="fa fa-globe" aria-hidden="true"></i> &nbsp; www.yourdomain.com
                                </p>
                            </div>
                        </div>
                        <div class="space"></div>
                    </div>
                    <div class="ms-box">
                        <div class="detail">
                            <div class="icon"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                            <div class="info">
                                <h3 class="title">Contact</h3>
                                <p>
                                    <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp; (+91)-9876XXXXX
                                </p>
                                <p>
                                    <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp; (+91)-987654XXXX
                                </p>
                            </div>
                        </div>
                        <div class="space"></div>
                    </div>
                    <div class="ms-box">
                        <div class="detail">
                            <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                            <div class="info">
                                <h3 class="title">Address</h3>
                                <p>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; Ruami Mello Moraes Filho,
                                    987 - Salvador - MA, 40352, Brazil.
                                </p>
                            </div>
                        </div>
                        <div class="space"></div>
                    </div>
                    <!-- /Boxes de Acoes -->
                </div>
                <div class="col-lg-7 col-md-12">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="fname" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="umail" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="phone" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"
                                      placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="ms-learn-more-right"><span class="text">Submit</span></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->



@endsection
