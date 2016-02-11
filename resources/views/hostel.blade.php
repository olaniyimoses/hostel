@extends('layouts.front')

@section('content')

    <br><br><br><br>
    <div role="main" class="main shop">

        <div class="container">

            <hr class="tall">
            <div class="row">
                <div class="col-md-9">
                    @if(empty($hostel))
                        <p class="taller">All Booked up</p>
                    @else
                    <div class="row">
                        <div class="col-md-6">

                            <div class="owl-carousel" data-plugin-options='{"items": 1}'>
                                @foreach($hostel as $item)
                                <div>
                                    <div class="thumbnail">
                                        <img alt="" class="img-responsive img-rounded" src="{!! asset("assets/img/hostels/$item->hostel_id/1.jpg") !!}">
                                    </div>
                                </div>
                                <div>
                                    <div class="thumbnail">
                                        <img alt="" class="img-responsive img-rounded" src="{!! asset("assets/img/hostels/$item->hostel_id/2.jpg") !!}">
                                    </div>
                                </div>
                                <div>
                                    <div class="thumbnail">
                                        <img alt="" class="img-responsive img-rounded" src="{!! asset("assets/img/hostels/$item->hostel_id/3.jpg") !!}">
                                    </div>
                                </div>
                                <div>
                                    <div class="thumbnail">
                                        <img alt="" class="img-responsive img-rounded" src="{!! asset("assets/img/hostels/$item->hostel_id/4.jpg") !!}">
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="summary entry-summary">

                                <h1 class="shorter"><strong>{!! $item->name !!}</strong></h1>

                                <div>
                                    <p class="bold">{!! $item->type==1 ? 'Single-Room' : 'Self-Contained' !!} {!! $item->sex !!} Hostel</p>
                                </div>
                                <form method="post" class="cart" action="{{ url('/cart/cartitems') }}">
                                    {!! csrf_field() !!}
                                    <input type="hidden" name="hostel_id" value="{{ $item->hostel_id }}"/>
                                    @foreach($types as $type)
                                        <div class="switch switch-lg switch-primary">
                                            <input type="checkbox" name="room_type" value="{!! $type->room_type !!}" data-plugin-ios-switch/>
                                            <span class="inline-block">  {!! $type->room_type !!} Room</span>
                                            <span class="inline-block">&#x20A6; {!! number_format($type->price, 2, '.', ',') !!}</span>
                                        </div>
                                    @endforeach
                                    <br/>
                                    <div class="quantity">
                                        <input type="number" class="form-control" value="1" name="quantity" min="1" step="1">
                                    </div>
                                    <input type="submit" class="btn btn-primary btn-icon" value="Add to Cart"/>
                                </form>

                            </div>


                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="tabs tabs-product">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#productDescription" data-toggle="tab">Description</a></li>
                                    <li><a href="#productReviews" data-toggle="tab">Reviews (2)</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="productDescription">
                                        <p>{!! $item->description !!}</p>
                                    </div>
                                    <div class="tab-pane" id="productReviews">
                                        <ul class="comments">
                                            <li>
                                                <div class="comment">
                                                    <div class="img-thumbnail">
                                                        <img class="avatar" alt="" src="assets/front/img/avatar-2.jpg">
                                                    </div>
                                                    <div class="comment-block">
                                                        <div class="comment-arrow"></div>
																<span class="comment-by">
																	<strong>John Doe</strong>
																	<span class="pull-right">
																		<div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
                                                                        </div>
																	</span>
																</span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui.</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <hr class="tall">
                                        <h4>Add a review</h4>
                                        <div class="row">
                                            <div class="col-md-12">

                                                <form action="#" id="submitReview" method="post">
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <div class="col-md-6">
                                                                <label>Your name *</label>
                                                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Your email address *</label>
                                                                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <label>Review *</label>
                                                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <input type="submit" value="Submit Review" class="btn btn-primary" data-loading-text="Loading...">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endforeach
                    @endif

                    <hr class="tall" />

                    <div class="row">

                        <div class="col-md-12">
                            <h2>Related <strong>Hostels</strong></h2>
                        </div>

                        <ul class="products product-thumb-info-list">
                            <li class="col-sm-3 col-xs-12 product">
                                <a href="shop-product-sidebar.html">
                                    <span class="onsale">Sale!</span>
                                </a>
										<span class="product-thumb-info">
											<a href="shop-cart.html" class="add-to-cart-product">
                                                <span><i class="fa fa-shopping-cart"></i> Compare</span>
                                            </a>
											<a href="shop-product-sidebar.html">
												<span class="product-thumb-info-image">
													<span class="product-thumb-info-act">
														<span class="product-thumb-info-act-left"><em>View</em></span>
														<span class="product-thumb-info-act-right"><em><i class="fa fa-plus"></i> Details</em></span>
													</span>
													<img alt="" class="img-responsive" src="assets/front/img/slider-1.jpg">
												</span>
                                            </a>
											<span class="product-thumb-info-content">
												<a href="shop-product-sidebar.html">
                                                    <h4>Mercy Hostel</h4>
													<span class="price">
														<del><span class="amount">45K</span></del>
														<ins><span class="amount">40K</span></ins>
													</span>
                                                </a>
											</span>
										</span>
                            </li>
                            <li class="col-sm-3 col-xs-12 product">
										<span class="product-thumb-info">
											<a href="shop-cart.html" class="add-to-cart-product">
                                                <span><i class="fa fa-shopping-cart"></i> Compare</span>
                                            </a>
											<a href="shop-product-sidebar.html">
												<span class="product-thumb-info-image">
													<span class="product-thumb-info-act">
														<span class="product-thumb-info-act-left"><em>View</em></span>
														<span class="product-thumb-info-act-right"><em><i class="fa fa-plus"></i> Details</em></span>
													</span>
													<img alt="" class="img-responsive" src="assets/front/img/slider-2.jpg">
												</span>
                                            </a>
											<span class="product-thumb-info-content">
												<a href="shop-product-sidebar.html">
                                                    <h4>Rectas Hostel</h4>
													<span class="price">
														<span class="amount">72K</span>
													</span>
                                                </a>
											</span>
										</span>
                            </li>
                            <li class="col-sm-3 col-xs-12 product">
										<span class="product-thumb-info">
											<a href="shop-cart.html" class="add-to-cart-product">
                                                <span><i class="fa fa-shopping-cart"></i> Compare</span>
                                            </a>
											<a href="shop-product-sidebar.html">
												<span class="product-thumb-info-image">
													<span class="product-thumb-info-act">
														<span class="product-thumb-info-act-left"><em>View</em></span>
														<span class="product-thumb-info-act-right"><em><i class="fa fa-plus"></i> Details</em></span>
													</span>
													<img alt="" class="img-responsive" src="assets/front/img/slider-3.jpg">
												</span>
                                            </a>
											<span class="product-thumb-info-content">
												<a href="shop-product-sidebar.html">
                                                    <h4>Mercy Hostel</h4>
													<span class="price">
														<span class="amount">55K</span>
													</span>
                                                </a>
											</span>
										</span>
                            </li>
                            <li class="col-sm-3 col-xs-12 product">
										<span class="product-thumb-info">
											<a href="shop-cart.html" class="add-to-cart-product">
                                                <span><i class="fa fa-shopping-cart"></i> Compare</span>
                                            </a>
											<a href="shop-product-sidebar.html">
												<span class="product-thumb-info-image">
													<span class="product-thumb-info-act">
														<span class="product-thumb-info-act-left"><em>View</em></span>
														<span class="product-thumb-info-act-right"><em><i class="fa fa-plus"></i> Details</em></span>
													</span>
													<img alt="" class="img-responsive" src="assets/front/img/slider-1.jpg">
												</span>
                                            </a>
											<span class="product-thumb-info-content">
												<a href="shop-product-sidebar.html">
                                                    <h4>Bivers Hostel</h4>
													<span class="price">
														<span class="amount">60k</span>
													</span>
                                                </a>
											</span>
										</span>
                            </li>
                        </ul>

                    </div>

                </div>
                <div class="col-md-3">
                    <aside class="sidebar">

                        <form>
                            <div class="input-group input-group-lg">
                                <input class="form-control" placeholder="Search..." name="s" id="s" type="text">
										<span class="input-group-btn">
											<button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-search"></i></button>
										</span>
                            </div>
                        </form>

                        <hr />
                        <div class="featured-box featured-box-secundary">
                            <div class="box-content">
                                @foreach($hostel as $item)
                                    <h4 class="dark">{!! $item->name !!}</h4>
                                    <p>Only {!! $remains !!} Rooms Available</p>
                                @endforeach
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>

    </div>
@endsection