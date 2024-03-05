<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from reactheme.com/products/html/echooling/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Mar 2024 15:18:30 GMT -->

<head>
    <!--================= Meta tag =================-->
    <meta charset="utf-8">
    <title>Home | Echooling - Online Education HTML Template</title>
    <meta name="description" content="">
    <!--================= Responsive Tag =================-->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--================= Favicon =================-->
    <link rel="apple-touch-icon" href="{{ asset('') }}assets_users/images/fav.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('') }}assets/logo_uniba.png">
    <!--================= Bootstrap V5 css =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets_users/css/bootstrap.min.css">
    <!--================= Menus css =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets_users/css/menus.css">
    <!--================= Animate css =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets_users/css/animate.css">
    <!--================= Owl Carousel css =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets_users/css/owl.carousel.css">
    <!--================= Elegant icon css  =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets_users/fonts/elegant-icon.css">
    <!--================= Magnific Popup css =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets_users/css/magnific-popup.css">
    <!--================= Animations css =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets_users/css/animations.css">
    <!--================= style css =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets_users/style.css">
    <!--================= Custom Spacing css =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets_users/css/custom-spacing.css">
    <!--================= Responsive css =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets_users/css/responsive.css">
</head>

<body>
    <!--================= Preloader Section Start Here =================-->

    <div id="react__preloader">
        <div id="react__circle_loader"></div>
        <div class="react__loader_logo"><img src="{{ asset('') }}assets/logo_uniba.png" width="200"
                alt="Preload">
        </div>
    </div>
    <!--================= Preloader Section End Here =================-->
    @yield('content')

    <!--================= Footer Section Start Here =================-->
    <footer id="react-footer" class="react-footer home-main">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 md-mb-30">
                        <div class="footer-widget footer-widget-1">
                            <div class="footer-logo white">
                                <a href="index.html" class="logo-text"> <img
                                        src="{{ asset('') }}assets/logo_title_pmb.png" width="130"
                                        alt="logo"></a>
                            </div>
                            <h5 class="footer-subtitle">There are course and event custom <br>
                                post types so you can easily create and<br> manage course, events.</h5>
                            <ul class="footer-address">
                                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone">
                                        <path
                                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                        </path>
                                    </svg><a href="tel:+(402)76244183"> +(402) 762 441 83 </a></li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                        <path
                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                        </path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg><a href="mailto:info@yourdmain.com"> info@echooling.com </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 md-mb-30">
                        <div class="footer-widget footer-widget-2">
                            <h3 class="footer-title">About Us</h3>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="coureses-grid.html">Courses</a></li>
                                    <li><a href="#">Events</a></li>
                                    <li><a href="#">Career</a></li>
                                    <li><a href="profile.html">Become a Teacher</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 md-mb-30">
                        <div class="footer-widget footer-widget-3">
                            <h3 class="footer-title">Useful Links</h3>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="#">Browse Library</a></li>
                                    <li><a href="#">Library</a></li>
                                    <li><a href="#">Partners</a></li>
                                    <li><a href="blog.html">News & Blog</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Tutorials</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-widget footer-widget-4">
                            <h3 class="footer-title">Newsletter</h3>
                            <div class="footer3__form">
                                <p>Get the latest Echooling news <br>delivered to you inbox</p>
                                <form action="#">
                                    <input type="email" placeholder="Enter your email">
                                    <button class="footer3__form-1">
                                        <i class="arrow_right"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright">
            <div class="container">
                <div class="react-copy-left">© 2022 <a href="#">Echooling.</a> All Rights Reserved</div>
                <div class="react-copy-right">
                    <ul class="social-links">
                        <li class="follow">Follow us</li>
                        <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a></li>
                        <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                        <li><a href="#"><span aria-hidden="true" class="social_linkedin"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--================= Footer Section End Here =================-->

    <!--================= Scroll to Top Start =================-->
    <div id="backscrollUp" class="home">
        <span aria-hidden="true" class="arrow_carrot-up"></span>
    </div>
    <!--================= Scroll to Top End =================-->

    <!--================= Jquery latest version =================-->
    <script src="{{ asset('') }}assets_users/js/jquery.min.js"></script>
    <!--================= Modernizr js =================-->
    <script src="{{ asset('') }}assets_users/js/modernizr-2.8.3.min.js"></script>
    <!--================= Bootstrap js =================-->
    <script src="{{ asset('') }}assets_users/js/bootstrap.min.js"></script>
    <!--================= Owl Carousel js =================-->
    <script src="{{ asset('') }}assets_users/js/owl.carousel.min.js"></script>
    <!--================= Magnific Popup =================-->
    <script src="{{ asset('') }}assets_users/js/jquery.magnific-popup.min.js"></script>
    <!--================= Counter up js =================-->
    <script src="{{ asset('') }}assets_users/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('') }}assets_users/js/waypoints.min.js"></script>
    <!--================= Wow js =================-->
    <script src="{{ asset('') }}assets_users/js/wow.min.js"></script>
    <!--================= menus js =================-->
    <script src="{{ asset('') }}assets_users/js/menus.js"></script>
    <!--================= Plugins js =================-->
    <script src="{{ asset('') }}assets_users/js/plugins.js"></script>
    <!--================= Main js =================-->
    <script src="{{ asset('') }}assets_users/js/main.js"></script>
</body>


</html>
