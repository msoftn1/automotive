<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="AutoMotive Template">
    <meta name="keywords" content="AutoMotive, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AutoMotive | @yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700;800;900&display=swap"
          rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <ul class="offcanvas__widget">
    </ul>
    <div class="offcanvas__logo">
        <a href="{{ url('/') }}"><img src="/img/logo.png" alt=""></a>
    </div>
    <div id="mobile-menu-wrap"></div>
    <ul class="offcanvas__date">
        <li><span class="icon_mobile"></span> (+123) 4567-7890-123</li>
        <li><span class="icon_clock_alt"></span> Mon-Sat: 10:00 - 16:00 / Sunday Close</li>
    </ul>
    <div class="offcanvas__social">
        <a href="#" class="map-btn">Find us on map <span class="arrow_right"></span></a>
        <div class="header__right__social">
            <a href="#"><span class="social_facebook"></span></a>
            <a href="#"><span class="social_twitter"></span></a>
            <a href="#"><span class="social_vimeo"></span></a>
            <a href="#"><span class="social_pinterest"></span></a>
        </div>
    </div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <ul class="header__top__left">
                        <li><span class="icon_mobile"></span> (+123) 4567-7890-123</li>
                        <li><span class="icon_clock_alt"></span> Mon-Sat: 10:00 - 16:00 / Sunday Close</li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="header__top__right">
                        <a href="#" class="map-btn">Find us on map <span class="arrow_right"></span></a>
                        <div class="header__right__social">
                            <a href="#"><span class="social_facebook"></span></a>
                            <a href="#"><span class="social_twitter"></span></a>
                            <a href="#"><span class="social_vimeo"></span></a>
                            <a href="#"><span class="social_pinterest"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="{{ url('/') }}"><img src="/img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-7">
                <nav class="header__menu">
                    <ul>
                        <li class="active"><a href="{{ url('/') }}">Home</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-2">
                <ul class="header__right">
                </ul>
            </div>
        </div>
        <div class="canvas__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->

@yield('content')

<!-- Footer Section Begin -->
<footer class="footer set-bg" data-setbg="/img/footer-bg.jpg">
    <div class="container">
        <div class="footer__top">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer__top__item">
                        <div class="footer__top__item__text">
                            <img src="/img/icon/ft-1.png" alt="">
                            <p>Booking Repair</p>
                            <h3>Appointment</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer__top__item">
                        <div class="footer__top__item__text">
                            <img src="/img/icon/ft-2.png" alt="">
                            <p>Contact Us Now!</p>
                            <h3>123-4567-7890</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer__top__item last__item">
                        <div class="footer__top__item__text">
                            <img src="/img/icon/ft-3.png" alt="">
                            <p>Location</p>
                            <h3>Find us on map</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__text">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <img src="/img/footer-logo.png" alt="">
                        </div>
                        <p>Class is also likely to be focused on slow and gentle movements so it's a great type of
                            yoga to is also likely to be</p>
                    </div>
                </div>
                <x-links/>
                <x-news/>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__address">
                        <h5>My Office</h5>
                        <p>Address: 7986 Pennsylvania St. Rockville Centre, NY</p>
                        <ul>
                            <li>Fax: (+123) 4567-7890-123</li>
                            <li>Mobile: (+123) 4567-7890-123</li>
                            <li>Email: Hello@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer__copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <div class="footer__copyright__text">
                    <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                </div>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
            <div class="col-md-4">
                <div class="footer__copyright__social">
                    <a href="#"><span class="social_facebook"></span></a>
                    <a href="#" class="twitter"><span class="social_twitter"></span></a>
                    <a href="#" class="vimeo"><span class="social_vimeo"></span></a>
                    <a href="#" class="pinterest"><span class="social_pinterest"></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Section End -->


<!-- Js Plugins -->
<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/jquery-ui.min.js"></script>
<script src="/js/jquery.nice-select.min.js"></script>
<script src="/js/jquery.slicknav.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/main.js"></script>
</body>

</html>
