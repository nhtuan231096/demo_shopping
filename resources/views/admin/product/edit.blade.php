@extends('layouts.admin')
@section('link','Sản phẩm')
@section('main')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">
				<a class="fa fa-long-arrow-left" href="{{route('listPros')}}"></a>
			</h3>
		</div>
		<div class="panel-body">
			<h2>Cập nhật sản phẩm</h2>
			<form action="" method="POST" enctype="multipart/form-data" role="form">
			
				<div class="form-group">
					<label for="">Tên sản phẩm</label>
					<input type="text" class="form-control" name="name" id="name" value="{{$pro->name}}" placeholder="Nhập tên sản phẩm">
					@if($errors->has('name'))
					<i class="help-block">{{$errors->first('name')}}</i>
					@endif
				</div>
			
				<div class="form-group">
					<label for="">Đường dẫn tĩnh</label>
					<input type="text" class="form-control" name="slug" id="slug" value="{{$pro->slug}}" placeholder="Đường dẫn tĩnh">
					@if($errors->has('slug'))
					<i class="help-block">{{$errors->first('slug')}}</i>
					@endif
				</div>

				<div class="form-group">
					<label for="">Ảnh</label>
					<div class="clear-fix"></div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<div class="thumbnail">
							<img src="{{url('uploads/product')}}/{{$pro->image}}" alt="image">
						</div>
					</div>
					<input type="file" class="form-control" name="file_upload">
				</div>
				<div class="form-group">
					<label for="">Giá sản phẩm</label>
					<input type="text" class="form-control" name="price" value="{{$pro->price}}" placeholder="Giá sản phẩm">
					@if($errors->has('price'))
					<i class="help-block">{{$errors->first('price')}}</i>
					@endif
				</div>

				<div class="form-group">
					<label for="">Giá Sale</label>
					<input type="text" class="form-control" name="sale_price" value="{{$pro->sale_price}}" placeholder="Giá sản phẩm">
				</div>
				<div class="form-group">
					<label for="">Trạng thái</label>
					<select name="status" id="inputStatus" class="form-control">
						@if($pro->status==1)
						<option selected value="1">Công khai</option>
						<option value="0">Ẩn</option>
						@else
						<option selected value="0">Ẩn</option>
						<option  value="1">Công khai</option>
						@endif
					</select>
				</div>
				<div class="form-group">
					<label for="">Danh mục</label>
					<select name="cat_id" id="inputCat_id" class="form-control">
						@foreach($cates as $cate)
						<?php $select=$cate->id==$pro->cat_id?"Selected":""?>
						<option {{$select}} value="{{$cate->id}}">{{$cate->name}}</option>
						@endforeach
					</select>
					@if($errors->has('cat_id'))
					<i class="help-block">{{$errors->first('cat_id')}}</i>
					@endif
				</div>
				<div class="form-group">
					<label for="">Mô tả</label>
					<textarea name="content" id="inputContent" class="form-control desc" rows="3">{{$pro->content}}</textarea>
				</div>
				@csrf
				<button type="submit" class="btn btn-primary">Cập nhật</button>
			</form>
		</div>
	</div>
@stop()