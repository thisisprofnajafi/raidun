<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Raidun | @yield('title')</title>
    <meta name="keywords" content="@yield('keywords')">
    <meta name="description" content="@yield('description')">
    <meta name="author" content="Rauiun">
    <!-- site Favicon -->
    <link rel="icon" href="{{asset('icon.png')}}" sizes="32x32">
    <link rel="apple-touch-icon" href="{{asset('icon.png')}}">
    <meta name="msapplication-TileImage" content="assets/img/favicon/favicon.png">

    <!-- css Font -->

    <!-- css All Plugins Files -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/plugins/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/plugins/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/plugins/slick.min.css') }}">

    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/responsive.css') }}">

</head>
<body>
<!-- Loader -->
<div id="ms-overlay">
    <div class="ms-roller">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
@yield('content')


<footer class="margin-t-80">
    <div class="container">
        <div class="ms-footer-detail">
            <div class="ms-copy">
                Copyright © <a class="site-name" href="index.html">Raidun</a> all rights reserved. Powered by
                Raidun
            </div>
            <div class="ms-social">
                <ul>
                    <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"
                                                                               aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"
                                                                                aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"
                                                                          aria-hidden="true"></i></a></li>
                    <li><a href="https://linkedin.com/" target="_blank"><i class="fa fa-linkedin"
                                                                           aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

<!-- Whatsapp -->
<div class="ms-style ms-right-bottom">
    <!-- Start Floating Panel Container -->
    <div class="ms-panel">
        <!-- Panel Header -->
        <div class="ms-header">
            <strong>Need Help?</strong>
            <p>Chat with us on WhatsApp</p>
        </div>
        <!-- Panel Content -->
        <div class="ms-body">
            <ul>
                <!-- Start Single Contact List -->
                <li>
                    <a class="ms-list" data-number="918866774266"
                       data-message="Share me your latest resume, HR from masterly...">
                        <div class="d-flex bd-highlight">
                            <!-- Profile Picture -->
                            <div class="ms-img-cont">
                                <img src="assets/front/img/chat/profile_02.jpg" class="ms-user-img" alt="Profile image">
                                <span class="ms-status-icon"></span>
                            </div>
                            <!-- Display Name & Last Seen -->
                            <div class="ms-user-info">
                                <span>Maria W Ilvor</span>
                                <p>Maria left 7 mins ago</p>
                            </div>
                        </div>
                    </a>
                </li>
                <!--/ End Single Contact List -->
                <!-- Start Single Contact List -->
                <li>
                    <a class="ms-list" data-number="918866774266"
                       data-message="Share me your latest resume, HR from masterly...">
                        <div class="d-flex bd-highlight">
                            <!-- Profile Picture -->
                            <div class="ms-img-cont">
                                <img src="assets/front/img/chat/profile_01.jpg" class="ms-user-img" alt="Profile image">
                                <span class="ms-status-icon ms-online"></span>
                            </div>
                            <!-- Display Name & Last Seen -->
                            <div class="ms-user-info">
                                <span>William Ilvor</span>
                                <p>William is online</p>
                            </div>
                        </div>
                    </a>
                </li>
                <!--/ End Single Contact List -->

            </ul>
        </div>
    </div>
    <!--/ End Floating Panel Container -->
    <!-- Start Right Floating Button-->
    <div class="ms-right-bottom">
        <div class="ms-box">
            <div class="ms-button rotateBackward">
                <i class="fa fa-whatsapp"></i>
            </div>
        </div>
    </div>
    <!--/ End Right Floating Button-->
</div>
<!-- Whatsapp end -->

<!-- Back to top -->
<div class="progress-wrap">
    <i class="fa fa-arrow-up" aria-hidden="true"></i>
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- Back to top -->

<script src="{{ asset('assets/front/js/vendor/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('assets/front/js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/front/js/vendor/tilt.jquery.js') }}"></script>
<script src="{{ asset('assets/front/js/vendor/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('assets/front/js/vendor/mixitup.min.js') }}"></script>
<script src="{{ asset('assets/front/js/vendor/slick.min.js') }}"></script>
<script src="{{ asset('assets/front/js/vendor/fontawesome.js') }}"></script>
<script src="{{ asset('assets/front/js/vendor/tweenmax.min.js') }}"></script>
<script src="{{ asset('assets/front/js/script.js') }}"></script>



</body>

</html>
