<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>@yield('title', 'Online Store')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('/css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="./imgs/MVlogo.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
</head>
</head>
<!-- body -->
<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{ asset('/img/loading2.gif') }}" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo" style="width:150px;display:grid;margin-top: -20px;margin-bottom: -20px;">
                                <!-- logo image -->
                                <a href="{{ route('home.index') }}"><img src="{{ asset('/img/logomv.jpg') }}" alt="#" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home.index') }}"> Home </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home.about') }}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('product.index') }}">Product</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home.cart') }}">My Cart</a>
                                </li>

                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                                    </li>
                                @else
                                    <form id="logout" action="{{ route('logout') }}" method="POST">
                                        <a role="button" class="nav-link"
                                            onclick="document.getElementById('logout').submit();">Logout</a>
                                        @csrf
                                    </form>
                                @endguest
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    </header>
    @yield('content')
    <!--  footer -->
    <footer id="contact">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="titlepage">
                            <h2>Contact Us</h2>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <ul class="location_icon">
                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a> Locatins</li>
                            <li><a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true"></i></a>+84 0338460275</li>
                            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>pvminha22091@cusc.ctu.edu.vn</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <form id="request" class="main_form">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <input class="contactus" placeholder="Full Name" type="type"
                                        name="Full Name">
                                </div>
                                <div class="col-md-12">
                                    <input class="contactus" placeholder="Email" type="type" name="Email">
                                </div>
                                <div class="col-md-12">
                                    <input class="contactus" placeholder="Phone Number" type="type"
                                        name="Phone Number">
                                </div>
                                <div class="col-md-12">
                                    <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message</textarea>
                                </div>
                                <div class="col-sm-col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <button class="send_btn">Send</button>
                                </div>
                                <div class="col-sm-col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <ul class="social_icon">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-linkedin-square"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="map">
                            <figure><img src="./imgs/location.png" alt="#" /></figure>
                        </div>
                        <form class="bottom_form">
                            <h3>Newsletter</h3>
                            <input class="enter" placeholder="Enter your email" type="text"
                                name="Enter your email">
                            <button class="sub_btn">subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Copyright 2019 All Right Reserved By A22091 Pham Van Minh Can tho univarsity software center</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.mCustomScrollbar.min.js') }}"></script>
    <script src="{{ asset('/js/custom.js') }}"></script>
    <script src="{{ asset('/js/popper.min.js') }}"></script>
   <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
   <!-- sidebar -->
</body>
</html>
