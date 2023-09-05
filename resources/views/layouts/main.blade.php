<!doctype html>
<html class="no-js" lang="">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>MovieApp - Online Movies & TV Shows</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="{{asset('')}}assets/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{asset('')}}assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('')}}assets/css/animate.min.css">
        <link rel="stylesheet" href="{{asset('')}}assets/css/magnific-popup.css">
        <link rel="stylesheet" href="{{asset('')}}assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="{{asset('')}}assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{asset('')}}assets/css/flaticon.css">
        <link rel="stylesheet" href="{{asset('')}}assets/css/odometer.css">
        <link rel="stylesheet" href="{{asset('')}}assets/css/aos.css">
        <link rel="stylesheet" href="{{asset('')}}assets/css/slick.css">
        <link rel="stylesheet" href="{{asset('')}}assets/css/default.css">
        <link rel="stylesheet" href="{{asset('')}}assets/css/style.css">
        <link rel="stylesheet" href="{{asset('')}}assets/css/responsive.css">
        <livewire:styles>
    </head>
    <body>

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <img src="{{asset('')}}assets/img/preloader.svg" alt="">
                </div>
            </div>
        </div>
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header>
            <div id="sticky-header" class="menu-area transparent-header">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo">
                                        <a href="{{route('movies.index') }}">
                                            <img src="{{asset('')}}assets/img/logo/logo.png" alt="Logo">
                                        </a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li class="active menu-item-has-children"><a href="{{route('movies.index') }}">Home</a>
                                                <!-- <ul class="submenu">
                                                    <li class="active"><a href="index.html">Home One</a></li>
                                                    <li><a href="index-2.html">Home Two</a></li>
                                                </ul> -->
                                            </li>
                                            <li class="menu-item-has-children"><a href="{{route('movies.index') }}">Movies</a>
                                                <!-- <ul class="submenu">
                                                    <li><a href="movie.html">Movie</a></li>
                                                    <li><a href="movie-details.html">Movie Details</a></li>
                                                </ul> -->
                                            </li>
                                            <li><a href="{{route('tv.index') }}">tv shows</a></li>
                                            <!-- <li><a href="pricing.html">Pricing</a></li>
                                            <li class="menu-item-has-children"><a href="#">blog</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Our Blog</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li> -->
                                            <li><a href="contact.html">contacts</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-action d-none d-md-block">
                                        <ul>
                                            <!-- <li class="header-search"><a href="#" data-toggle="modal" data-target="#search-modal"><i class="fas fa-search"></i></a></li> -->
                                            <li class="header-search">
                                                <livewire:search-dropdown>                                        
                                            </li>
                                            <li class="header-lang">
                                                <form action="#">
                                                    <div class="icon"><i class="flaticon-globe"></i></div>
                                                    <select id="lang-dropdown">
                                                        <option value="">En</option>
                                                        <option value="">Au</option>
                                                        <option value="">AR</option>
                                                        <option value="">TU</option>
                                                    </select>
                                                </form>
                                            </li>
                                            <!-- <li class="header-btn"><a href="#" class="btn">Sign In</a></li> -->
                                        </ul>
                                    </div>
                                </nav>
                            </div>

                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <div class="close-btn"><i class="fas fa-times"></i></div>

                                <nav class="menu-box">
                                    <div class="nav-logo"><a href="index.html"><img src="{{asset('')}}assets/img/logo/logo.png" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->

                            <!-- Modal Search -->
                            <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form>
                                            <input type="text" placeholder="Search here...">
                                            <button><i class="fas fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Search-end -->

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-area-end -->


        <!-- main-area -->
        <main>


        @yield('content') 

        </main>
        <!-- main-area-end -->


        <!-- footer-area -->
        <footer>
            <div class="footer-top-wrap">
                <div class="container">
                    <div class="footer-menu-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="footer-logo">
                                    <a href="{{route('movies.index') }}"><img src="{{asset('')}}assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="footer-menu">
                                    <nav>
                                        <ul class="navigation">
                                            <li><a href="{{route('movies.index') }}">Home</a></li>
                                            <li><a href="{{route('movies.index') }}">Movies</a></li>
                                            <li><a href="{{route('tv.index') }}">tv shows</a></li>
                                            <!-- <li><a href="index.html">pages</a></li>
                                            <li><a href="pricing.html">Pricing</a></li> -->
                                        </ul>
                                        <div class="footer-search">
                                            <form action="#">
                                                <input type="text" placeholder="Find Favorite Movie">
                                                <button><i class="fas fa-search"></i></button>
                                            </form>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-quick-link-wrap">
                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <div class="quick-link-list">
                                    <ul>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Help Center</a></li>
                                        <li><a href="#">Terms of Use</a></li>
                                        <li><a href="#">Privacy</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="copyright-text">
                                <p>Copyright &copy; 2023. All Rights Reserved By <a href="{{route('movies.index') }}">Movflx</a></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="payment-method-img text-center text-md-right">
                                <img src="{{asset('')}}assets/img/images/card_img.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->





		<!-- JS here -->
        <script src="{{asset('')}}assets/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="{{asset('')}}assets/js/popper.min.js"></script>
        <script src="{{asset('')}}assets/js/bootstrap.min.js"></script>
        <script src="{{asset('')}}assets/js/isotope.pkgd.min.js"></script>
        <script src="{{asset('')}}assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="{{asset('')}}assets/js/jquery.magnific-popup.min.js"></script>
        <script src="{{asset('')}}assets/js/owl.carousel.min.js"></script>
        <script src="{{asset('')}}assets/js/jquery.odometer.min.js"></script>
        <script src="{{asset('')}}assets/js/jquery.appear.js"></script>
        <script src="{{asset('')}}assets/js/slick.min.js"></script>
        <script src="{{asset('')}}assets/js/ajax-form.js"></script>
        <script src="{{asset('')}}assets/js/wow.min.js"></script>
        <script src="{{asset('')}}assets/js/aos.js"></script>
        <script src="{{asset('')}}assets/js/plugins.js"></script>
        <script src="{{asset('')}}assets/js/main.js"></script>
    <livewire:scripts>
    </body>

</html>
