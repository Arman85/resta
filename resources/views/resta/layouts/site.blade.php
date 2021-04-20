<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Restaurant</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset(env('THEME')) }}/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/gijgo.css">
    <link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/slicknav.css">

    <link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- header-start -->
<header>
    <div class="header-area ">
        @yield('navigation')
    </div>
</header>
<!-- header-end -->

{{--Content area start--}}
<div class="content-area">
    @yield('content')
</div>
{{--Content area end--}}

<!-- slider_area_start -->


<!-- footer_start  -->
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-3 ">
                    <div class="footer_widget">
                        <div class="footer_logo">
                            <a href="#">
                                <img src="{{ asset(env('THEME')) }}/img/footer_logo.png" alt="">
                            </a>
                        </div>
                        <p>5th flora, 700/D kings road, green <br> lane New York-1782 <br>
                            <a href="#">+10 367 826 2567</a> <br>
                            <a href="#">contact@carpenter.com</a>
                        </p>
                        <p>


                        </p>
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-youtube-play"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4 offset-xl-1">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Useful Links
                        </h3>
                        <ul>
                            <li><a href="#">Menu</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#"> Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Subscribe
                        </h3>
                        <form action="#" class="newsletter_form">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit">Subscribe</button>
                        </form>
                        <p class="newsletter_text">Esteem spirit temper too say adieus who direct esteem esteems
                            luckily.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        All rights reserved | This template is made with <i class="fa fa-heart-o"
                                                                            aria-hidden="true"></i> by <a
                                href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer_end  -->

<!-- JS here -->
<script src="{{ asset(env('THEME'))  }}/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="{{ asset(env('THEME'))  }}/js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{ asset(env('THEME'))  }}/js/popper.min.js"></script>
<script src="{{ asset(env('THEME'))  }}/js/bootstrap.min.js"></script>
<script src="{{ asset(env('THEME'))  }}/js/owl.carousel.min.js"></script>
<script src="{{ asset(env('THEME'))  }}/js/isotope.pkgd.min.js"></script>
<script src="{{ asset(env('THEME'))  }}/js/ajax-form.js"></script>
<script src="{{ asset(env('THEME'))  }}/js/waypoints.min.js"></script>
<script src="{{ asset(env('THEME'))  }}/js/jquery.counterup.min.js"></script>
<script src="{{ asset(env('THEME'))  }}/js/imagesloaded.pkgd.min.js"></script>
<script src="{{ asset(env('THEME'))  }}/js/scrollIt.js"></script>
<script src="{{ asset(env('THEME'))  }}/js/jquery.scrollUp.min.js"></script>
<script src="{{ asset(env('THEME'))  }}/js/wow.min.js"></script>
<script src="{{ asset(env('THEME'))  }}/js/gijgo.min.js"></script>
<script src="{{ asset(env('THEME'))  }}/js/nice-select.min.js"></script>
<script src="{{ asset(env('THEME'))  }}/js/jquery.slicknav.min.js"></script>
<script src="{{ asset(env('THEME'))  }}/js/jquery.magnific-popup.min.js"></script>
<script src="{{ asset(env('THEME'))  }}/js/plugins.js"></script>


<!--contact js-->
<script src="{{ asset(env('THEME')) }}/js/contact.js"></script>
<script src="{{ asset(env('THEME')) }}/js/jquery.ajaxchimp.min.js"></script>
<script src="{{ asset(env('THEME')) }}/js/jquery.form.js"></script>
<script src="{{ asset(env('THEME')) }}/js/jquery.validate.min.js"></script>
<script src="{{ asset(env('THEME')) }}/js/mail-script.js"></script>


<script src="{{ asset(env('THEME')) }}/js/main.js"></script>

<script>
    $('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-calendar-o"></span>'
        }
    });
    $('#datepicker2').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-calendar-o"></span>'
        }

    });
</script>
</body>

</html>