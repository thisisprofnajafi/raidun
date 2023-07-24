@extends('front.layout')



@section('title',$project->title)
@section('keywords',$project->seo_keyword)
@section('description',$project->seo_description)


@section('content')




    <!-- Header Start -->
    <header>
        <nav>
            <a href="javascript:void(0)" class="ms-sidebar-toggle"><img src="{{asset('assets/front/img/icons/menu.svg')}}" class="svg_img"
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
                    <a class="nav-link ms-nav" href="{{route('front-landing')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-nav" href="{{route('front-landing')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-nav" href="{{route('front-landing')}}">Experience</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-nav" href="{{route('front-landing')}}">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-nav" href="{{route('front-landing')}}">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-nav" href="{{route('front-landing')}}">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-nav" href="{{route('front-landing')}}">Contacts</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Sidebar End -->

    <!-- Start Portfolio Section -->
    <section id="portfolio" class="ms-portfolio padding-tb-80">
        <div class="container">
            <div class="section-title">
                <h2><span>{{$project->title}}</span></h2>
                <span class="ligh-title">{{explode(',',$project->tech)[0]}}</span>
            </div>
            <div class="row m-b-minus-24px">
                <div class="portfolio-content">
                    <div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="portfolio-content-items">
                                    <div class="row m-b-minus-30px">
                                        <div class="col-lg-12 mix graphics templates">
                                            <div class="ms-project-box">
                                                <h3>{{$project->title}}</h3>
                                                <div class="links">
                                                    <a>{{strtoupper($project->category->title)}}</a>
                                                </div>
                                                <p>{{$project->content}}
                                                </p>
                                                <div class="ms-info">
                                                    <div class="portfolio-img">
                                                        <a class="" data-fancybox="gallery"
                                                           style="background-image: url({{$project->thumb_path}})">
                                                        </a>
                                                    </div>
                                                    <div class="ms-detail">
                                                        <ul>
                                                            <li>Date : {{Carbon\Carbon::parse($project->date)->diffForHumans()}}</li>
                                                            <li>Tech : {{strtoupper($project->tech)}}</li>
                                                            <li>Type : {{strtoupper($project->type)}}</li>
                                                            <li>URL : <a href="{{$project->url}}">{{$project->url}}</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
    <!-- Start Portfolio Section -->
    <section id="portfolio" class="ms-portfolio ">
        <div class="container">
            <div class="row m-b-minus-24px">
                <div class="portfolio-content">
                    <div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="portfolio-content-items">
                                    <div class="row m-b-minus-30px">
                                        @foreach($works as $work)
                                            <div class="col-lg-6 mix">
                                                <div class="ms-project-box">
                                                    <h3>{{$work->title}}</h3>
                                                    {{--                                                <div class="links">--}}
                                                    {{--                                                    <a href="index.html">3D Graphics</a> |--}}
                                                    {{--                                                    <a href="index.html">Templates</a>--}}
                                                    {{--                                                </div>--}}
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

    <!-- Start Contact Section -->
    <section id="contact" class="ms-contact padding-tb-80 sec-bg">
        <div class="container d-block">
            <div class="section-title">
                <h2>Request a <span>Project</span></h2>
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
                            <input type="text" class="form-control" id="phone" placeholder="Project Subject">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"
                                      placeholder="Details"></textarea>
                        </div>
                        <button type="submit" class="ms-learn-more-right"><span class="text">Submit</span></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

<style>
    .portfolio-img{
        cursor: default !important;
        width: 300px !important;
        height: 300px !important;
    }

    .portfolio-content a{
        background-size: cover !important;
    }

    .ms-images .ms-info{
        display: grid;
        grid-template-columns: repeat(4,1fr) ;
        gap: 1rem;
    }

    .ms-images .ms-info .portfolio-img{
        cursor: default !important;
        width: auto !important;
        height: 300px !important;
    }

    @media screen and (max-width: 384px) {
        .portfolio-img{
            cursor: default !important;
            width: 200px !important;
            height: 200px !important;
        }
    }

    @media screen and (max-width: 991px) {
        .ms-images .ms-info{
            grid-template-columns: repeat(2,1fr) ;
        }
    }

    @media screen and (max-width: 500px) {
        .ms-images .ms-info{
            grid-template-columns: repeat(1,1fr) ;
        }
    }
    </style>

@endsection
