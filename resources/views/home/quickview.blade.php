@extends('layouts.home')
@section('main')
<div class="banner_top innerpage" id="home">
	<!-- //cart details -->
	<!-- search -->
	<div class="search_w3ls_agileinfo">
		<div class="cd-main-header">
			<ul class="cd-header-buttons">
				<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
			</ul>
		</div>
		<div id="cd-search" class="cd-search">
			<form action="#" method="post">
				<input name="Search" type="search" placeholder="Click enter after typing...">
			</form>
		</div>
	</div>
	<!-- //search -->
	<div class="clearfix"></div>
	<!-- /banner_inner -->
	<div class="services-breadcrumb_w3ls_agileinfo">
		<div class="inner_breadcrumb_agileits_w3">

			<ul class="short">
				<li><a href="index.html">Home</a><i>|</i></li>
				<li>About</li>
			</ul>
		</div>
	</div>
	<!-- //banner_inner -->
</div>
<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<div class="thumbnail">
					<img src="{{url('uploads/product')}}/{{$pro->image}}" alt="">
				</div>
			</div>
			<div class="col-md-8 single-right-left simpleCart_shelfItem">
				<h3>{{$pro->name}}</h3>
				<p>
					@if($pro->sale_price>0)
					<span class="item_price">{{number_format($pro->sale_price)}}đ</span>
					<del>{{number_format($pro->price)}}đ</del>
					@else
					<span class="item_price">{{number_format($pro->price)}}đ</span>
					@endif
				</p>
				<div class="rating1">
					<ul class="stars">
						<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="description">
					<h5>Check delivery, payment options and charges at your location</h5>
					<form action="#" method="post">
						<input type="text" value="Enter pincode" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter pincode';}"
						    required="">
						<input type="submit" value="Check">
					</form>
				</div>
				<div class="color-quality">
					<div class="color-quality-right">
						<h5>Quality :</h5>
						<input type="number" name="qty">
					</div>
				</div>
				<div class="occasional">
					<h5>Types :</h5>
					<div class="colr ert">
						<label class="radio"><input type="radio" name="radio" checked=""><i></i>Casual Shoes</label>
					</div>
					<div class="colr">
						<label class="radio"><input type="radio" name="radio"><i></i>Sneakers </label>
					</div>
					<div class="colr">
						<label class="radio"><input type="radio" name="radio"><i></i>Formal Shoes</label>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="occasion-cart">
					<div class="shoe single-item single_page_b">
						<form action="#" method="post">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" name="shoe_item" value="Chikku Loafers">
							<input type="hidden" name="amount" value="405.00">
							<a class="btn btn-md btn-primary" href="{{route('addCart',['id'=>$pro->id])}}">Add cart</a>

							<a href="#" data-toggle="modal" data-target="#myModal1"></a>
						</form>

					</div>

				</div>
				<ul class="social-nav model-3d-0 footer-social social single_page">
					<li class="share">Share On : </li>
					<li>
						<a href="#" class="facebook">
							<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="twitter">
							<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="instagram">
							<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="pinterest">
							<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
						</a>
					</li>
				</ul>

			</div>
			<div class="clearfix"> </div>
			<!--/tabs-->
			<div class="responsive_tabs">
				<div id="horizontalTab">
					<ul class="resp-tabs-list">
						<li>Description</li>
						<li>Reviews</li>
						<li>Information</li>
					</ul>
					<div class="resp-tabs-container">
						<!--/tab_one-->
						<div class="tab1">

							<div class="single_page">
								<h6>Lorem ipsum dolor sit amet</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
									blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
									ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
									magna aliqua.</p>
								<p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
									blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
									ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
									magna aliqua.</p>
							</div>
						</div>
						<!--//tab_one-->
						<div class="tab2">

							<div class="single_page">
								<div class="bootstrap-tab-text-grids">
									<div class="bootstrap-tab-text-grid">
										<div class="bootstrap-tab-text-grid-left">
											<img src="{{url('public')}}/images/t1.jpg" alt=" " class="img-responsive">
										</div>
										<div class="bootstrap-tab-text-grid-right">
											<ul>
												<li><a href="#">Admin</a></li>
												<li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a></li>
											</ul>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget.Ut enim ad minima veniam,
												quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis
												autem vel eum iure reprehenderit.</p>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="add-review">
										<h4>add a review</h4>
										<form action="#" method="post">
											<input type="text" name="Name" required="Name">
											<input type="email" name="Email" required="Email">
											<textarea name="Message" required=""></textarea>
											<input type="submit" value="SEND">
										</form>
									</div>
								</div>

							</div>
						</div>
						<div class="tab3">

							<div class="single_page">
								<h6>Shoe Rock Vision(SRV) Sneakers (Blue)</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
									blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
									ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
									magna aliqua.</p>
								<p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
									blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
									ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
									magna aliqua.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--//tabs-->
			<!-- /new_arrivals -->
			<div class="new_arrivals">
				<h3>Featured Products</h3>
				<!-- /womens -->
				<div class="col-md-3 product-men women_two">
					<div class="product-shoe-info shoe">
						<div class="men-pro-item">
							<div class="men-thumb-item">
								<img src="{{url('public')}}/images/s4.jpg" alt="">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="single.html" class="link-product-add-cart">Quick View</a>
									</div>
								</div>
								<span class="product-new-top">New</span>
							</div>
							<div class="item-info-product">
								<h4>
									<a href="single.html">Shuberry Heels </a>
								</h4>
								<div class="info-product-price">
									<div class="grid_meta">
										<div class="product_price">
											<div class="grid-price ">
												<span class="money ">$575.00</span>
											</div>
										</div>
										<ul class="stars">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="shoe single-item hvr-outline-out">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="shoe_item" value="Shuberry Heels">
											<input type="hidden" name="amount" value="575.00">
											<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

											<a href="#" data-toggle="modal" data-target="#myModal1"></a>
										</form>

									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 product-men women_two">
					<div class="product-shoe-info shoe">
						<div class="men-pro-item">
							<div class="men-thumb-item">
								<img src="{{url('public')}}/images/s5.jpg" alt="">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="single.html" class="link-product-add-cart">Quick View</a>
									</div>
								</div>
								<span class="product-new-top">New</span>
							</div>
							<div class="item-info-product">
								<h4>
									<a href="single.html">Red Bellies </a>
								</h4>
								<div class="info-product-price">
									<div class="grid_meta">
										<div class="product_price">
											<div class="grid-price ">
												<span class="money ">$325.00</span>
											</div>
										</div>
										<ul class="stars">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="shoe single-item hvr-outline-out">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="shoe_item" value="Red Bellies">
											<input type="hidden" name="amount" value="325.00">
											<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

											<a href="#" data-toggle="modal" data-target="#myModal1"></a>
										</form>

									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 product-men women_two">
					<div class="product-shoe-info shoe">
						<div class="men-pro-item">
							<div class="men-thumb-item">
								<img src="{{url('public')}}/images/s7.jpg" alt="">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="single.html" class="link-product-add-cart">Quick View</a>
									</div>
								</div>
								<span class="product-new-top">New</span>
							</div>
							<div class="item-info-product">
								<h4>
									<a href="single.html">Running Shoes</a>
								</h4>
								<div class="info-product-price">
									<div class="grid_meta">
										<div class="product_price">
											<div class="grid-price ">
												<span class="money ">$875.00</span>
											</div>
										</div>
										<ul class="stars">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="shoe single-item hvr-outline-out">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="shoe_item" value="Running Shoes">
											<input type="hidden" name="amount" value="875.00">
											<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

											<a href="#" data-toggle="modal" data-target="#myModal1"></a>
										</form>

									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 product-men women_two">
					<div class="product-shoe-info shoe">
						<div class="men-pro-item">
							<div class="men-thumb-item">
								<img src="{{url('public')}}/images/s8.jpg" alt="">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="single.html" class="link-product-add-cart">Quick View</a>
									</div>
								</div>
								<span class="product-new-top">New</span>
							</div>
							<div class="item-info-product">
								<h4>
									<a href="single.html">Sukun Casuals</a>
								</h4>
								<div class="info-product-price">
									<div class="grid_meta">
										<div class="product_price">
											<div class="grid-price ">
												<span class="money ">$505.00</span>
											</div>
										</div>
										<ul class="stars">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="shoe single-item hvr-outline-out">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="shoe_item" value="Sukun Casuals">
											<input type="hidden" name="amount" value="505.00">
											<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

											<a href="#" data-toggle="modal" data-target="#myModal1"></a>
										</form>

									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>

				<!-- //womens -->
				<div class="clearfix"></div>
			</div>
			<!--//new_arrivals-->


		</div>
</div>
<ol class="carousel-indicators">
	<li data-target="#myCarousel" data-slide-to="0" class=""></li>
	<li data-target="#myCarousel" data-slide-to="1" class="active"></li>
	<li data-target="#myCarousel" data-slide-to="2" class=""></li>
	<li data-target="#myCarousel" data-slide-to="3" class=""></li>
</ol>
<div class="carousel-inner" role="listbox">
	<div class="item">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-3 slidering">
				<div class="thumbnail"><img src="{{url('public')}}/images/g1.jpg" alt="Image" style="max-width:100%;"></div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-3 slidering">
				<div class="thumbnail"><img src="{{url('public')}}/images/g2.jpg" alt="Image" style="max-width:100%;"></div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-3 slidering">
				<div class="thumbnail"><img src="{{url('public')}}/images/g3.jpg" alt="Image" style="max-width:100%;"></div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-3 slidering">
				<div class="thumbnail"><img src="{{url('public')}}/images/g4.jpg" alt="Image" style="max-width:100%;"></div>
			</div>
		</div>
	</div>
	<div class="item active">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-3 slidering">
				<div class="thumbnail"><img src="{{url('public')}}/images/g5.jpg" alt="Image" style="max-width:100%;"></div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-3 slidering">
				<div class="thumbnail"><img src="{{url('public')}}/images/g6.jpg" alt="Image" style="max-width:100%;"></div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-3 slidering">
				<div class="thumbnail"><img src="{{url('public')}}/images/g2.jpg" alt="Image" style="max-width:100%;"></div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-3 slidering">
				<div class="thumbnail"><img src="{{url('public')}}/images/g1.jpg" alt="Image" style="max-width:100%;"></div>
			</div>
		</div>
	</div>
	<div class="item">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-3 slidering">
				<div class="thumbnail"><img src="{{url('public')}}/images/g1.jpg" alt="Image" style="max-width:100%;"></div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-3 slidering">
				<div class="thumbnail"><img src="{{url('public')}}/images/g2.jpg" alt="Image" style="max-width:100%;"></div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-3 slidering">
				<div class="thumbnail"><img src="{{url('public')}}/images/g3.jpg" alt="Image" style="max-width:100%;"></div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-3 slidering">
				<div class="thumbnail"><img src="{{url('public')}}/images/g4.jpg" alt="Image" style="max-width:100%;"></div>
			</div>
		</div>
	</div>
	<div class="item">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-3 slidering">
				<div class="thumbnail"><img src="{{url('public')}}/images/g1.jpg" alt="Image" style="max-width:100%;"></div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-3 slidering">
				<div class="thumbnail"><img src="{{url('public')}}/images/g2.jpg" alt="Image" style="max-width:100%;"></div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-3 slidering">
				<div class="thumbnail"><img src="{{url('public')}}/images/g3.jpg" alt="Image" style="max-width:100%;"></div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-3 slidering">
				<div class="thumbnail"><img src="{{url('public')}}/images/g4.jpg" alt="Image" style="max-width:100%;"></div>
			</div>
		</div>
	</div>
</div>
<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	<span class="fa fa-chevron-left" aria-hidden="true"></span>
	<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	<span class="fa fa-chevron-right" aria-hidden="true"></span>
	<span class="sr-only">Next</span>
</a>
<!-- The Modal -->
@stop()
@section('news')
<div class="newsletter_w3layouts_agile">
	<div class="col-sm-6 newsleft">
		<h3>Sign up for Newsletter !</h3>
	</div>
	<div class="col-sm-6 newsright">
		<form action="#" method="post">
			<input type="email" placeholder="Enter your email..." name="email" required="">
			<input type="submit" value="Submit">
		</form>
	</div>

	<div class="clearfix"></div>
</div>
@stop()