@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section Begin -->
    <section class="hero spad set-bg" data-setbg="img/hero-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__text">
                        <h2>
                            <span>Welcome To</span>
                            Auto-Motive Garage
                        </h2>
                        <p>It is a long established fact that a reader will be distracted by the</p>
                        <a href="#" class="primary-btn">Our Services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Begin -->
    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>What We Do?</h2>
                        <p>Lorem ipsum dolor sit amet sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 p-0 order-lg-1 col-md-6 order-md-1">
                    <div class="services__text">
                        <img src="/img/icon/si-1.png" alt="">
                        <h4>Engine Overhaul</h4>
                        <p>Consectetur adipiscing elit incididunt ut labore et dolore</p>
                    </div>
                </div>
                <div class="col-lg-3 p-0 order-lg-2 col-md-6 order-md-2">
                    <div class="services__pic">
                        <img src="/img/services/services-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 p-0 order-lg-3 col-md-6 order-md-4">
                    <div class="services__text">
                        <img src="/img/icon/si-2.png" alt="">
                        <h4>Power Steering</h4>
                        <p>Consectetur adipiscing elit incididunt ut labore et dolore</p>
                    </div>
                </div>
                <div class="col-lg-3 p-0 order-lg-4 col-md-6 order-md-3">
                    <div class="services__pic">
                        <img src="/img/services/services-2.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 p-0 order-lg-6 col-md-6 order-md-5">
                    <div class="services__text">
                        <img src="/img/icon/si-3.png" alt="">
                        <h4>Oil change</h4>
                        <p>Consectetur adipiscing elit incididunt ut labore et dolore</p>
                    </div>
                </div>
                <div class="col-lg-3 p-0 order-lg-5 col-md-6 order-md-6">
                    <div class="services__pic">
                        <img src="/img/services/services-3.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 p-0 order-lg-8 col-md-6 order-md-8">
                    <div class="services__text">
                        <img src="/img/icon/si-4.png" alt="">
                        <h4>Upgrades Car</h4>
                        <p>Consectetur adipiscing elit incididunt ut labore et dolore</p>
                    </div>
                </div>
                <div class="col-lg-3 p-0 order-lg-7 col-md-6 order-md-7">
                    <div class="services__pic">
                        <img src="/img/services/services-4.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Chooseus Section Begin -->
    <section class="chooseus">
        <div class="container-fluid">
            <div class="row">
                <div class="chooseus__pic set-bg" data-setbg="/img/chooseus-pic.jpg"></div>
                <div class="col-lg-7 offset-lg-5 p-0">
                    <div class="chooseus__text">
                        <div class="section-title">
                            <h2>We Have 20 Years<br /> Of Experience In Auto Car</h2>
                            <p>Duis aute irure dolorin reprehenderits volupta velit dolore fugia</p>
                        </div>
                        <ul>
                            <li><span class="icon_check"></span> Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit.</li>
                            <li><span class="icon_check"></span> Integer et nisl et massa tempor ornare vel id orci.
                            </li>
                            <li><span class="icon_check"></span> Nunc consectetur ligula vitae nisl placerat tempus.
                            </li>
                            <li><span class="icon_check"></span> Curabitur quis ante vitae lacus varius pretium.</li>
                        </ul>
                        <a href="#" class="primary-btn">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Chooseus Section End -->

    <!-- Products Section Begin -->
    <section class="products spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Our Products</h2>
                        <p>Lorem ipsum dolor sit amet sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach ($products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic">
                            <img src="/storage/{{ $product->image }}" alt="">
                            <ul class="hover__item">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">{{ $product->name }}</a></h6>
                            <div class="price">
                                <span>${{ $product->price }}</span>
                                <a href="#">+Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Products Section End -->

    <!-- Testimonial Begin -->
    <div class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial__slider owl-carousel">

                        @foreach ($reviews as $review)
                            <div class="testimonial__item">
                                <span class="icon_quotations"></span>
                                <p>“{{ $review->text  }}”</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Counter Section Begin -->
    <section class="counter spad set-bg" data-setbg="/img/counter-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>About Our Statistics</h2>
                        <p>Lorem ipsum dolor sit amet sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="counter__item">
                        <div class="counter__item__icon">
                            <img src="/img/icon/ci-1.png" alt="">
                        </div>
                        <div class="counter__item__text">
                            <h2 class="project-counter">560</h2>
                            <strong>+</strong>
                            <p>All Project</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="counter__item">
                        <div class="counter__item__icon">
                            <img src="/img/icon/ci-2.png" alt="">
                        </div>
                        <div class="counter__item__text">
                            <h2 class="project-counter">560</h2>
                            <strong>+</strong>
                            <p>Project Completed</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="counter__item">
                        <div class="counter__item__icon">
                            <img src="/img/icon/ci-3.png" alt="">
                        </div>
                        <div class="counter__item__text">
                            <h2 class="project-counter">560</h2>
                            <strong>+</strong>
                            <p>Customers Action</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="counter__item">
                        <div class="counter__item__icon">
                            <img src="/img/icon/ci-4.png" alt="">
                        </div>
                        <div class="counter__item__text">
                            <h2 class="project-counter">560</h2>
                            <strong>+</strong>
                            <p>Awards Winner</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->

    <!-- Latest News Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Latest News</h2>
                        <p>Lorem ipsum dolor sit amet sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($news as $newsItem)
                <div class="col-lg-4 col-md-6">
                    <div class="latest__item">
                        <div class="latest__item__pic set-bg" data-setbg="/storage/{{ $newsItem->image }}">
                            <p>By <span>{{ $newsItem->author }} on {{ date('F m, Y', strtotime($newsItem->created_at)) }}</span></p>
                        </div>
                        <div class="latest__item__text">
                            <h4><a href="#">{{ $newsItem->title }}</a></h4>
                            <p>{{ $newsItem->text }}r</p>
                            <a href="#" class="continue-btn">Continue Reading</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Latest News End -->
@endsection
