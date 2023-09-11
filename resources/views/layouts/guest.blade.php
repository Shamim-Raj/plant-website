<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
        <!-- Title -->
        <title>Plants</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800">
            {{$style ?? ''}}
        <!-- Favicon -->
        <link rel="icon" href="img/core-img/favicon.ico">
    
        <!-- Core Stylesheet -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/classy-nav.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('style.css') }}">
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet"/>
        <script src="{{url('https://cdn.tailwindcss.com')}}"></script>
        
    </head>
    
    <body>
    
        <!-- ##### Header Area Start ##### -->
        <header class="header-area">
    
            <!-- ***** Top Header Area ***** -->
            <div class="top-header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="top-header-content d-flex align-items-center justify-content-between">
                                <!-- Top Header Content -->
                                <div class="top-header-meta">
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="infodeercreative@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email:egsystem88@gmail.com</span></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="+1 234 122 122"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +8801533440316</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- ***** Navbar Area ***** -->
            <div class="alazea-main-menu">
                <div class="classy-nav-container breakpoint-off">
                    <div class="container">
                        <!-- Menu -->
                        <nav class="classy-navbar justify-content-between" id="alazeaNav">
    
                            <!-- Nav Brand -->
                            <a href="index.html" class="nav-brand"><img src="images/logo.png" style="height:50px;" alt=""></a>
    
                            <!-- Navbar Toggler -->
                            <div class="classy-navbar-toggler">
                                <span class="navbarToggler"><span></span><span></span><span></span></span>
                            </div>
    
                            <!-- Menu -->
                            <div class="classy-menu">
    
                                <!-- Close Button -->
                                <div class="classycloseIcon">
                                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                                </div>
    
                                <!-- Navbar Start -->
                                <div class="classynav">
                                    <ul>
                                        <li><a href="{{url('/')}}">Home</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="#">Pages</a>
                                            <ul class="dropdown">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="shop.html">Shop</a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop.html">Shop</a></li>
                                                        <li><a href="shop-details.html">Shop Details</a></li>
                                                        <li><a href="cart.html">Shopping Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="portfolio.html">Portfolio</a>
                                                    <ul class="dropdown">
                                                        <li><a href="portfolio.html">Portfolio</a></li>
                                                        <li><a href="single-portfolio.html">Portfolio Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog.html">Blog</a>
                                                    <ul class="dropdown">
                                                        <li><a href="blog.html">Blog</a></li>
                                                        <li><a href="single-post.html">Blog Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="portfolio.html">Portfolio</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
    
                                    <!-- Search Icon -->
                                    <div id="searchIcon">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </div>
    
                                </div>
                                <!-- Navbar End -->
                            </div>
                        </nav>
    
                        <!-- Search Form -->
                        <div class="search-form">
                            <form action="#" method="get">
                                <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                                <button type="submit" class="d-none"></button>
                            </form>
                            <!-- Close Icon -->
                            <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ##### Header Area End ##### -->
    
   
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

         <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img" style="background-image: url(images/3.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="footer-logo mb-30">
                                <a href="#"><img src="images/logo.png" style="height:50px;" alt=""></a>
                            </div>
                            <p>Lorem ipsum dolor sit samet, consectetur adipiscing elit. India situs atione mantor</p>
                            <div class="social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>QUICK LINK</h5>
                            </div>
                            <nav class="widget-nav">
                                <ul>
                                    <li><a href="#">Purchase</a></li>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Payment</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Return</a></li>
                                    <li><a href="#">Advertise</a></li>
                                    <li><a href="#">Shipping</a></li>
                                    <li><a href="#">Career</a></li>
                                    <li><a href="#">Orders</a></li>
                                    <li><a href="#">Policities</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>BEST SELLER</h5>
                            </div>

                            <!-- Single Best Seller Products -->
                            <div class="single-best-seller-product d-flex align-items-center">
                                <div class="product-thumbnail">
                                    <a href="shop-details.html"><img src="img/bg-img/4.jpg" alt=""></a>
                                </div>
                                <div class="product-info">
                                    <a href="shop-details.html">Cactus Flower</a>
                                    <p>৳10.99</p>
                                </div>
                            </div>

                            <!-- Single Best Seller Products -->
                            <div class="single-best-seller-product d-flex align-items-center">
                                <div class="product-thumbnail">
                                    <a href="shop-details.html"><img src="img/bg-img/5.jpg" alt=""></a>
                                </div>
                                <div class="product-info">
                                    <a href="shop-details.html">Tulip Flower</a>
                                    <p>৳11.99</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>CONTACT</h5>
                            </div>

                            <div class="contact-information">
                                <p><span>Address:</span> Building No-1 (C-4 East), Angel City, Saver, Dhaka.</p>
                                <p><span>Phone:</span>+8801533440316                                </p>
                                <p><span>Email:</span> egsystem88@gmail.com</p>
                                <p><span>Open hours:</span> Mon - Sun: 8 AM to 9 PM</p>
                                <p><span>Happy hours:</span> Sat: 2 PM to 4 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="border-line"></div>
                    </div>
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-6">
                        <div class="copywrite-text">
                           <p> <a href="https://colorlib.com" target="_blank">&copy; eG System, All Right Reserved </a></p>
                        </div>
                    </div>
                 
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <!-- <script src="js/bootstrap/popper.min.js"></script> -->
    <!-- Bootstrap js -->
    <!-- <script src="js/bootstrap/bootstrap.min.js"></script> -->
    <!-- All Plugins js -->
        {{$script ?? ''}}
    <script src="{{ asset('js/plugins/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('js/active.js') }}"></script>
        
    </body>
</html>