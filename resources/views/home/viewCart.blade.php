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
<div class="container">
	<div class="row">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Sản phẩm</th>
					<th>Số lượng</th>
					<th>Tên sản phẩm</th>
					<th>Giá</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($cart->items as $k => $c)
				<tr>
					<td><img width="100px" src="{{url('uploads/product')}}/{{$c['image']}}" alt=""></td>
					<td>{{$c['qty']}}</td>
					<td>{{$c['name']}}</td>
					<td>{{number_format($c['price'])}} đ</td>
					<td>
						<a class="fa fa-remove" href="{{route('delete_cart',['id'=>$c['id']])}}"></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
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