@extends('layouts.home')

@section('slider')
<div class="slider">
	<div class="callbacks_container">
		<ul class="rslides callbacks callbacks1" id="slider4">
			@foreach($sliders as $s)
			<li>
				<div class="banner-top">
					<img src="{{url('uploads/slide')}}/{{$s->image}}" alt="">
					<div class="banner-info-wthree">
						<h3>{{$s->caption_1}}</h3>
						<p>{{$s->caption_2}}</p>

					</div>

				</div>
			</li>
			@endforeach
			<!-- <li>
				<div class="banner-top3">
					<div class="banner-info-wthree">
						<h3>Heels</h3>
						<p>For All Walks of Life.</p>

					</div>

				</div>
			</li>
			<li>
				<div class="banner-top">
					<div class="banner-info-wthree">
						<h3>Sneakers</h3>
						<p>See how good they feel.</p>

					</div>

				</div>
			</li>
			<li>
				<div class="banner-top1">
					<div class="banner-info-wthree">
						<h3>Adidas</h3>
						<p>For All Walks of Life.</p>

					</div>

				</div>
			</li> -->
		</ul>
	</div>
	<div class="clearfix"> </div>
</div>
<!-- //slider -->
<ul class="top_icons">
	<li><a href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
	<li><a href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
	<li><a href="#"><span class="fa fa-linkedin" aria-hidden="true"></span></a></li>
	<li><a href="#"><span class="fa fa-google-plus" aria-hidden="true"></span></a></li>

</ul>
<div class="grids_bottom">
	<div class="style-grids">
		<div class="col-md-6 style-grid style-grid-1">
			<img src="{{url('public')}}/images/b1.jpg" alt="shoe">
		</div>
	</div>
	<div class="col-md-6 style-grid style-grid-2">
		<div class="style-image-1_info">
			<div class="style-grid-2-text_info">
				<h3>Nike DOWNSHIFTER</h3>
				<p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur.sed quia non numquam eius modi
				tempora incidunt ut labore et dolore .</p>
				<div class="shop-button">
					<a href="shop.html">Shop Now</a>
				</div>
			</div>
		</div>
		<div class="style-image-2">
			<img src="{{url('public')}}/images/b2.jpg" alt="shoe">
			<div class="style-grid-2-text">
				<h3>Air force</h3>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>
</div>
<!-- //grids_bottom-->
<!-- /girds_bottom2-->
<div class="grids_sec_2">
	<div class="style-grids_main">
		<div class="col-md-6 grids_sec_2_left">
			<div class="grid_sec_info">
				<div class="style-grid-2-text_info">
					<h3>Sneakers</h3>
					<p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur.sed quia non numquam eius modi
					tempora incidunt ut labore .</p>
					<div class="shop-button">
						<a href="shop.html">Shop Now</a>
					</div>
				</div>
			</div>
			<div class="style-image-2">
				<img src="{{url('public')}}/images/b4.jpg" alt="shoe">
				<div class="style-grid-2-text">
					<h3>Air force</h3>
				</div>
			</div>
		</div>
		<div class="col-md-6 grids_sec_2_left">

			<div class="style-image-2">
				<img src="{{url('public')}}/images/b3.jpg" alt="shoe">
				<div class="style-grid-2-text">
					<h3>Air force</h3>
				</div>
			</div>
			<div class="grid_sec_info last">
				<div class="style-grid-2-text_info">
					<h3>Sneakers</h3>
					<p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur.sed quia non numquam eius modi
					tempora incidunt ut labore .</p>
					<div class="shop-button two">
						<a href="shop.html">Shop Now</a>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //grids_bottom2-->
<!-- /Properties -->
<div class="mid_slider_w3lsagile">
	<div class="col-md-3 mid_slider_text">
		<h5>Some More Shoes</h5>
	</div>
	<div class="col-md-9 mid_slider_info">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1" class=""></li>
				<li data-target="#myCarousel" data-slide-to="2" class=""></li>
				<li data-target="#myCarousel" data-slide-to="3" class=""></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
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

		</div>
	</div>

	<div class="clearfix"> </div>
</div>
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