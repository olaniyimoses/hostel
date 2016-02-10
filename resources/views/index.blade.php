@extends('layouts.front')

@section('content')

    <div role="main" class="main">
        <div class="slider-container slider-container-fullscreen">
            <div class="slider" id="revolutionSliderFullScreen" data-plugin-revolution-slider data-plugin-options='{"fullScreen": "on"}'>
                <ul>
                    <li data-transition="fade" data-slotamount="10" data-masterspeed="300">
                        <img src="assets/front/img/slider-2.jpg" data-fullwidthcentering="on" alt="">

                        <div class="tp-caption sft stb visible-lg"
                             data-x="417"
                             data-y="100"
                             data-speed="300"
                             data-start="1000"
                             data-easing="easeOutExpo"><img src="assets/front/img/slides/slide-title-border.png" alt=""></div>

                        <div class="tp-caption top-label lfl stl"
                             data-x="center" data-hoffset="0"
                             data-y="100"
                             data-speed="300"
                             data-start="500"
                             data-easing="easeOutExpo">DO YOU NEED A NEW</div>

                        <div class="tp-caption sft stb visible-lg"
                             data-x="717"
                             data-y="100"
                             data-speed="300"
                             data-start="1000"
                             data-easing="easeOutExpo"><img src="assets/front/img/slides/slide-title-border.png" alt=""></div>

                        <div class="tp-caption main-label sft stb"
                             data-x="center" data-hoffset="0"
                             data-y="130"
                             data-speed="300"
                             data-start="1500"
                             data-easing="easeOutExpo">AFFORDABLE HOSTEL?</div>

                        <div class="tp-caption bottom-label sft stb"
                             data-x="center" data-hoffset="0"
                             data-y="200"
                             data-speed="500"
                             data-start="2000"
                             data-easing="easeOutExpo"><a href="#" class="bottom-label">Check out our options and features</a></div>

                        <a class="tp-caption customin btn btn-lg btn-primary main-button" data-hash href="#projects"
                           data-x="center" data-hoffset="0"
                           data-y="250"
                           data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                           data-speed="800"
                           data-start="1700"
                           data-easing="Back.easeInOut"
                           data-endspeed="300">
                            Get Started Now!
                        </a>

                    </li>
                </ul>
            </div>
        </div>
        <div class="home-intro" id="home-intro">
            <div class="container">

                <div class="row">
                    <div class="col-md-8">
                        <p>
                            The fastest and easiest way to get hostel
                            <span>You do not need to work about. No stress all</span>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="get-started">
                            <div class="search">
                                <form id="searchForm" action="#" method="get">
                                    <div class="input-group">
                                        <input type="text" class="form-control search" name="q" id="q" placeholder="Search either location or hostel..." required>
								<span class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
								</span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div role="main" class="main shop">

            <div class="container">

                <div class="row">
                    <div class="col-md-6">
                        <h1 class="shorter"><strong>Hostels</strong></h1>
                        <!--                        <p>Showing 1–12 of 25 results.</p>-->
                    </div>
                </div>

                <div class="row">

                    <ul class="products product-thumb-info-list" data-plugin-masonry>
                        @foreach($all_hostels as $hostel)
                        <li class="col-md-3 col-sm-6 col-xs-12 product">
                            <a href="#">
                            </a>
								<span class="product-thumb-info">
									<a href="{!! url('/hostel', $hostel->slug) !!}" class="add-to-cart-product">
                                        <span><i class="fa fa-shopping-cart"></i> Compare</span>
                                    </a>
									<a href="single-product.php">
										<span class="product-thumb-info-image">
											<span class="product-thumb-info-act">
												<span class="product-thumb-info-act-left"><em>View</em></span>
												<span class="product-thumb-info-act-right"><em><i class="fa fa-plus"></i> Details</em></span>
											</span>
											<img alt="" class="img-responsive" src="assets/img/hostels/{!! $hostel->id !!}/1.jpg">
										</span>
                                    </a>
									<span class="product-thumb-info-content">
										<a href="single-product.php">
                                            <h4>{!! $hostel->name !!}</h4>
                                            <p>Location: {!! $hostel->address !!}</p>
											<span class="price">
												<del><span class="amount"></span></del>
												<ins><span class="amount"></span></ins>
											</span>
                                        </a>
									</span>
								</span>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="pull-right">
                    {!! $all_hostels->links() !!}
                </div>

            </div>

        </div>

        <div class="container">

            <div class="row">
                <hr class="tall" />
            </div>

        </div>

        <div class="home-concept">
            <div class="container">

                <div class="row center">
                    <span class="sun"></span>
                    <span class="cloud"></span>
                    <div class="col-md-2 col-md-offset-1">
                        <div class="process-image" data-appear-animation="bounceIn">
                            <img src="assets/front/img/search.png" alt="" />
                            <strong class="our-work">Search either location or name</strong>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="process-image" data-appear-animation="bounceIn" data-appear-animation-delay="200">
                            <img src="assets/front/img/add-to-cart.jpg" alt="" />
                            <strong class="our-work">Add to cart</strong>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="process-image" data-appear-animation="bounceIn" data-appear-animation-delay="400">
                            <img src="assets/front/img/checkout.jpg" alt="" />
                            <strong class="our-work">Register to Checkout</strong>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-1">
                        <div class="project-image">
                            <div id="fcSlideshow" class="fc-slideshow">
                                <ul class="fc-slides">
                                    <li><a href="portfolio-single-project.html"><img class="img-responsive" src="assets/front/img/get-ur-hostel-1.jpg" /></a></li>
                                    <li><a href="portfolio-single-project.html"><img class="img-responsive" src="assets/front/img/get-ur-hostel-2.jpg" /></a></li>
                                    <li><a href="portfolio-single-project.html"><img class="img-responsive" src="assets/front/img/get-ur-hostel-3.jpg" /></a></li>
                                </ul>
                            </div>
                            <strong class="our-work">You get your hostel<span class="small"> very easy and simple</span></strong>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="map-section">
            <section class="featured footer map">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2><strong>What</strong> Client’s Say</h2>
                            <div class="row">
                                <div class="owl-carousel push-bottom" data-plugin-options='{"items": 1}'>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <blockquote class="testimonial">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.  Donec hendrerit vehicula est, in consequat.  Donec hendrerit vehicula est, in consequat.</p>
                                            </blockquote>
                                            <div class="testimonial-arrow-down"></div>
                                            <div class="testimonial-author">
                                                <div class="img-thumbnail img-thumbnail-small">
                                                    <img src="assets/front/img/clients/client-1.jpg" alt="">
                                                </div>
                                                <p><strong>John Smith</strong><span>CEO & Founder - Okler</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <blockquote class="testimonial">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </blockquote>
                                            <div class="testimonial-arrow-down"></div>
                                            <div class="testimonial-author">
                                                <div class="img-thumbnail img-thumbnail-small">
                                                    <img src="assets/front/img/clients/client-1.jpg" alt="">
                                                </div>
                                                <p><strong>John Smith</strong><span>CEO & Founder - Okler</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
