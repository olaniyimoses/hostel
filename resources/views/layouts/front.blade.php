<!DOCTYPE html>
<html>

<!-- Mirrored from preview.oklerthemes.com/porto/3.7.0/index-header-12.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Mar 2015 15:15:10 GMT -->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <title>Home | HMS</title>
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Web Fonts  -->
    {{--<link href="../../../fonts.googleapis.com/cssfb2f.css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">--}}

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{!! asset('assets/front/vendor/bootstrap/bootstrap.css')!!}">
    <link rel="stylesheet" href="{!! asset('assets/front/vendor/fontawesome/css/font-awesome.css')!!}">
    <link rel="stylesheet" href="{!! asset('assets/front/vendor/owlcarousel/owl.carousel.min.css')!!}" media="screen">
    <link rel="stylesheet" href="{!! asset('assets/front/vendor/owlcarousel/owl.theme.default.min.css')!!}" media="screen">
    <link rel="stylesheet" href="{!! asset('assets/front/vendor/magnific-popup/magnific-popup.css')!!}" media="screen">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{!! asset('assets/front/css/theme.css')!!}">
    <link rel="stylesheet" href="{!! asset('assets/front/css/theme-elements.css')!!}">
    <link rel="stylesheet" href="{!! asset('assets/front/css/theme-blog.css')!!}">
    <link rel="stylesheet" href="{!! asset('assets/front/css/theme-shop.css')!!}">
    <link rel="stylesheet" href="{!! asset('assets/front/css/theme-animate.css')!!}">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{!! asset('assets/front/vendor/rs-plugin/css/settings.css')!!}" media="screen">
    <link rel="stylesheet" href="{!! asset('assets/front/vendor/circle-flip-slideshow/css/component.css')!!}" media="screen">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{!! asset('assets/front/css/skins/default.css')!!}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{!! asset('assets/front/css/custom.css')!!}">

    <!-- Head Libs -->
    <script src="{!! asset('assets/front/vendor/modernizr/modernizr.js')!!}"></script>

    <!--[if IE]>
    <link rel="stylesheet" href="{!! asset('assets/front/css/ie.css')!!}">
    <![endif]-->

    <!--[if lte IE 8]>
    <script src="{!! asset('assets/front/vendor/respond/respond.js')!!}"></script>
    <script src="{!! asset('assets/front/vendor/excanvas/excanvas.js')!!}"></script>
    <![endif]-->

</head>
<body>

<div class="body">
    <header id="header" class="single-menu flat-menu transparent semi-transparent valign font-color-light" data-plugin-options='{"stickyEnabled": true, "stickyBodyPadding": false}'>
        <div class="container">
            <div class="logo">
                <a href="/">
                    <img alt="Porto" width="111" height="54" data-sticky-width="82" data-sticky-height="40" src="{!! asset('assets/img/logo.png') !!}">
                </a>
            </div>
            <button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
        </div>
        <div class="navbar-collapse nav-main-collapse collapse">
            <div class="container">
                <nav class="nav-main mega-menu">
                    <ul class="nav nav-pills nav-main" id="mainMenu">
                        <li class="active">
                            <a class="dropdown-toggle" href="/">
                                Home
                            </a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#">
                                Hostels
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($hostels as $hostel)
                                    <li><a href="{{ url("hostel/$hostel->slug") }}">{!! $hostel->name !!}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-toggle" href="{{ url('/contact') }}">
                                Contact Us
                            </a>
                        </li>
                        @if (Auth::guest())
                        <li class="dropdown mega-menu-item mega-menu-signin signin" id="headerAccount">
                            <a class="dropdown-toggle" href="{{ url('/login') }}">
                                <i class="fa fa-user"></i> Sign In
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="mega-menu-content">
                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="signin-form">
                                                    <span class="mega-menu-sub-title">Sign In</span>

                                                    <form action="{{ url('/login') }}" id="" method="post">
                                                        {!! csrf_field() !!}
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label>E-mail Address</label>
                                                                    <input type="text" value="" class="form-control input-lg">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <a class="pull-right" id="headerRecover" href="#">(Lost Password?)</a>
                                                                    <label>Password</label>
                                                                    <input type="password" value="" class="form-control input-lg">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
																		<span class="remember-box checkbox">
																			<label for="rememberme">
                                                                                <input type="checkbox" id="rememberme" name="rememberme">Remember Me
                                                                            </label>
																		</span>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="submit" value="Login" class="btn btn-primary pull-right push-bottom" data-loading-text="Loading...">
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>

                                                <div class="signup-form">
                                                    <span class="mega-menu-sub-title">Create Account</span>

                                                    <form action="{{ url('/register') }}" id="" method="post">
                                                        {!! csrf_field() !!}
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label>E-mail Address</label>
                                                                    <input type="text" value="" class="form-control input-lg">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div class="col-md-6">
                                                                    <label>Password</label>
                                                                    <input type="password" value="" class="form-control input-lg">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label>Re-enter Password</label>
                                                                    <input type="password" value="" class="form-control input-lg">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <input type="submit" value="Create Account" class="btn btn-primary pull-right push-bottom" data-loading-text="Loading...">
                                                            </div>
                                                        </div>
                                                    </form>

                                                    <p class="log-in-info">Already have an account? <a href="#" id="headerSignIn">Log In</a></p>
                                                </div>

                                                <div class="recover-form">
                                                    <span class="mega-menu-sub-title">Reset My Password</span>
                                                    <p>Complete the form below to receive an email with the authorization needed to reset your password.</p>

                                                    <form action="{{ url('/password/reset') }}" id="" method="post">
                                                        {!! csrf_field() !!}
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label>E-mail Address</label>
                                                                    <input type="text" value="" class="form-control input-lg">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <input type="submit" value="Send Password Reset Link" class="btn btn-primary pull-right push-bottom" data-loading-text="Loading...">
                                                            </div>
                                                        </div>
                                                    </form>

                                                    <p class="log-in-info">Already have an account? <a href="#" id="headerRecoverCancel">Log In</a></p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        @else
                            <li class="dropdown mega-menu-item mega-menu-signin signin logged" id="headerAccount">
                                <a class="dropdown-toggle" href="page-login.html">
                                    <i class="fa fa-user"></i> {{ Auth::user()->firstname }}
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="mega-menu-content">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="user-avatar">
                                                        <div class="img-thumbnail">
                                                            <img src="img/clients/client-1.jpg" alt="">
                                                        </div>
                                                        <p><strong>{{ Auth::user()->firstname }}</strong></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <ul class="list-account-options">
                                                        <li>
                                                            <a href="{{ url('/logout') }}">Log Out</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        <li class="dropdown mega-menu-item mega-menu-shop">
                            <a class="dropdown-toggle mobile-redirect" href="shop-cart.html">
                                <i class="fa fa-shopping-cart"></i> Cart (1) - $299
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="mega-menu-content">
                                        <div class="row">
                                            <div class="col-md-12">

                                                <table cellspacing="0" class="cart">
                                                    <tbody>
                                                    <tr>
                                                        <td class="product-thumbnail">
                                                            <a href="shop-product-sidebar.html">
                                                                <img width="100" height="100" alt="" class="img-responsive" src="img/products/product-1.jpg">
                                                            </a>
                                                        </td>
                                                        <td class="product-name">
                                                            <a href="shop-product-sidebar.html">Photo Camera<br><span class="amount"><strong>$299</strong></span></a>
                                                        </td>
                                                        <td class="product-actions">
                                                            <a title="Remove this item" class="remove" href="#">
                                                                <i class="fa fa-times"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="actions" colspan="6">
                                                            <div class="actions-continue">
                                                                <input type="submit" value="View All" class="btn btn-default">
                                                                <input type="submit" value="Proceed to Checkout →" name="proceed" class="btn pull-right btn-primary">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    @yield('content')

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="footer-ribbon">
                    <span>Get in Touch</span>
                </div>
                <div class="col-md-3">
                    <div class="newsletter">
                        <h4>Newsletter</h4>
                        <p>Keep up on new hostels in town and prices. Enter your e-mail and subscribe to our newsletter.</p>

                        <div class="alert alert-success hidden" id="newsletterSuccess">
                            <strong>Success!</strong> You've been added to our email list.
                        </div>

                        <div class="alert alert-danger hidden" id="newsletterError"></div>

                        <form id="newsletterForm" action="" method="POST">
                            <div class="input-group">
                                <input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
										<span class="input-group-btn">
											<button class="btn btn-default" type="submit">Go!</button>
										</span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3">
                    <h4>Latest Tweets</h4>
                    <div id="tweet" class="twitter" data-plugin-tweets data-plugin-options='{"username": "oklerthemes", "count": 2}'>
                        <p>Please wait...</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-details">
                        <h4>Contact Us</h4>
                        <ul class="contact">
                            <li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong> Obafemi Awolowo University, Ile-Ife</p></li>
                            <li><p><i class="fa fa-phone"></i> <strong>Phone:</strong> (+234) 813-3262-530</p></li>
                            <li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="#">contact@hms.com</a></p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <h4>Follow Us</h4>
                    <div class="social-icons">
                        <ul class="social-icons">
                            <li class="facebook"><a href="../../../www.facebook.com/index.html" target="_blank" data-placement="bottom" data-tooltip title="Facebook">Facebook</a></li>
                            <li class="twitter"><a href="../../../www.twitter.com/index.html" target="_blank" data-placement="bottom" data-tooltip title="Twitter">Twitter</a></li>
                            <li class="linkedin"><a href="../../../www.linkedin.com/index.html" target="_blank" data-placement="bottom" data-tooltip title="Linkedin">Linkedin</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-1">
                        <a href="/" class="logo">
                            <img alt="HMS" class="img-responsive" src="{!! asset('assets/img/logo.png') !!}">
                        </a>
                    </div>
                    <div class="col-md-7">
                        <p>2016 &copy; Hostel Management System</p>
                    </div>
                    <div class="col-md-4">
                        <nav id="sub-menu">
                            <ul>
                                <li><a href="#">FAQ's</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- Vendor -->
<script src="{!! asset('assets/front/vendor/jquery/jquery.js')!!}"></script>
<script src="{!! asset('assets/front/vendor/jquery.appear/jquery.appear.js')!!}"></script>
<script src="{!! asset('assets/front/vendor/jquery.easing/jquery.easing.js')!!}"></script>
<script src="{!! asset('assets/front/vendor/jquery-cookie/jquery-cookie.js')!!}"></script>
<script src="{!! asset('assets/front/master/style-switcher/style.switcher.js')!!}"></script>
<script src="{!! asset('assets/front/vendor/bootstrap/bootstrap.js')!!}"></script>
<script src="{!! asset('assets/front/vendor/common/common.js')!!}"></script>
<script src="{!! asset('assets/front/vendor/jquery.validation/jquery.validation.js')!!}"></script>
<script src="{!! asset('assets/front/vendor/jquery.stellar/jquery.stellar.js')!!}"></script>
<script src="{!! asset('assets/front/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js')!!}"></script>
<script src="{!! asset('assets/front/vendor/jquery.gmap/jquery.gmap.js')!!}"></script>
<script src="{!! asset('assets/front/vendor/isotope/jquery.isotope.js')!!}"></script>
<script src="{!! asset('assets/front/vendor/owlcarousel/owl.carousel.js')!!}"></script>
<script src="{!! asset('assets/front/vendor/jflickrfeed/jflickrfeed.js')!!}"></script>
<script src="{!! asset('assets/front/vendor/magnific-popup/jquery.magnific-popup.js')!!}"></script>
<script src="{!! asset('assets/front/vendor/vide/vide.js')!!}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{!! asset('assets/front/js/theme.js')!!}"></script>

<!-- Specific Page Vendor and Views -->
<script src="{!! asset('assets/front/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')!!}"></script>
<script src="{!! asset('assets/front/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')!!}"></script>
<script src="{!! asset('assets/front/vendor/circle-flip-slideshow/js/jquery.flipshow.js')!!}"></script>
<script src="{!! asset('assets/front/js/views/view.home.js')!!}"></script>

<!-- Theme Custom -->
<script src="{!! asset('assets/front/js/custom.js')!!}"></script>

<!-- Theme Initialization Files -->
<script src="{!! asset('assets/front/js/theme.init.js')!!}"></script>

<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-42715764-5']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>

</body>

<!-- Mirrored from preview.oklerthemes.com/porto/3.7.0/index-header-12.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Mar 2015 15:15:10 GMT -->
</html>
