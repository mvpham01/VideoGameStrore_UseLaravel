@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
<section class="banner_main">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <div id="banner1" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#banner1" data-slide-to="0" class="active"></li>
            <li data-target="#banner1" data-slide-to="1"></li>
            <li data-target="#banner1" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-bg">
                                    <h1>Welcome</h1>
                                    <span>Video Game Store</span>
                                    <p>MV Shop where you can find the right games for you, which can be memorable
                                        games with
                                        emotional storylines</p>
                                    <a href="#">More Info </a> <a href="#">Contact Us</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text_img">
                                    <figure><img src="{{ asset('/img/Ori.png') }}" alt="#" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-bg">
                                    <h1>Welcome</h1>
                                    <span>Video Game Store</span>
                                    <p> This is also the place where you find the tense battles to the point of
                                        suffocation
                                    </p>
                                    <a href="#">More Info </a> <a href="#">Contact Us</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text_img">
                                    <figure><img src="{{ asset('/img/Elden-Ring-Background-Pictures.jpg') }}" alt="#" />
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container-fluid">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-bg">
                                    <h1>Welcome</h1>
                                    <span>Video Game Store</span>
                                    <p>Or simply go to other worlds and sink into them</p>
                                    <a href="#">More Info </a> <a href="#">Contact Us</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text_img">
                                    <figure><img src="{{ asset('/img/abzu.jpg') }}" alt="#" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </a>
        <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </a>
    </div>
</section>
<!-- end banner -->
<!-- three_box -->
<div class="three_box">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="box_text">
                    <h3>Mobile Games</h3>
                    <i><img src="{{ asset('/img/mobile-game.png') }}" alt="#" /></i>
                    <p>Games that require light configuration, simple gameplay</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box_text">
                    <h3>PC Game</h3>
                    <i><img src="{{ asset('/img/pc.png') }}" alt="#" /></i>
                    <p>Games that require powerful configuration and need a lot of playing time</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box_text">
                    <h3>Game Controller</h3>
                    <i><img src="{{ asset('/img/videogame.png') }}" alt="#" /></i>
                    <p>Exclusive games on consoles such as Xbox, Playstation, Nintendo Switch</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- three_box -->
<!-- about -->
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>About Us</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="about_img">
                        <div class="about_box">
                            <h3>Self introduce</h3>
                            <p>Welcome to our video game e-commerce website! We are an online store specialized in
                                providing
                                popular and latest video game titles for PC, console, and mobile platforms. With
                                many years
                                of experience in the gaming industry, we are committed to offering the best
                                selection of
                                games at competitive prices.
                                Our website is designed to provide you with an easy and hassle-free shopping
                                experience. You
                                can browse through our extensive catalog of games, filter them by platform, genre,
                                or price
                                range, and read reviews from other customers to help you make informed purchasing
                                decisions.
                                In addition to our vast collection of video games, we also offer various payment
                                options and
                                fast, reliable shipping to ensure that you receive your games quickly and securely.
                                Our
                                customer service team is always ready to assist you with any questions or concerns
                                you may
                                have, so feel free to contact us at any time.
                                Thank you for choosing our website as your destination for video game shopping. We
                                hope you
                                enjoy your experience and find your next favorite game with us!</p>
                            <a href="{{ route('home.about') }}" class="read_more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end about -->
@endsection
