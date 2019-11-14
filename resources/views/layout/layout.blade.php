<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Coffee</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="{{asset('/css/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
</head>

<body>

    <header id="header" id="home">
        <div class="container">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="index.html"><img src="img/logo_brown.png" style="width:50px;height:50px" alt="" title="" /></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="/home">Home</a></li>
                        <li class="menu-has-children"><a href="">Main Menu</a>
                            <ul>
                                <li><a href="/coffee">Coffee</a></li>
                                <li><a href="/bijih">Coffee Beans</a></li>
                                <li><a href="/bubuk">Pulverized Coffee beans</a></li>
                            </ul>
                        </li>
                        <li><a href="/about">About Us</a></li>
                        @if (Session::has('nama'))
                            <li class="menu-has-children"><a href="">{{Session::get('nama')}}</a>
                                <ul>
                                    <li><a href="/keranjang">Keranjang Anda</a></li>
                                    <li><a href="">Transaksi Anda</a></li>
                                    <li><a href="/logout">Log Out</a></li>
                                </ul>
                            </li>
                        @else
                        <li><a href="/login">Login</a></li>
                        @endif
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- #header -->

    <!-- start banner Area -->
    @yield('banner')
    <!-- End banner Area -->

    <!-- Start video-sec Area -->

    <!-- End video-sec Area -->

    <!-- Start menu Area -->
    <section class="menu-area section-gap" id="coffee">
        <div class="container">
            <div class="row d-flex justify-content-center">
                @yield('header')
                @yield('menu')
            </div>
    </section>
    <!-- End menu Area -->

    <!-- Start gallery Area -->

    <!-- End gallery Area -->

    <!-- Start review Area -->

    <!-- End review Area -->

    <!-- Start blog Area -->
    <!-- End blog Area -->


    <!-- start footer Area -->
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>About Us</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 offset-lg-4 social-widget">
                    <div class="single-footer-widget">
                        <h6>Follow Us</h6>
                        <p>Let us be social</p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="js/easing.min.js"></script>
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/main.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}
</body>

</html>