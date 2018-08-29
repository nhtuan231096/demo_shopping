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
			<h2>Thêm mới sản phẩm</h2>
			<form action="" method="POST" enctype="multipart/form-data" role="form">
			
				<div class="form-group">
					<label for="">Tên sản phẩm</label>
					<input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên sản phẩm">
					@if($errors->has('name'))
					<i class="help-block">{{$errors->first('name')}}</i>
					@endif
				</div>
			
				<div class="form-group">
					<label for="">Đường dẫn tĩnh</label>
					<input type="text" class="form-control" name="slug" id="slug" placeholder="Đường dẫn tĩnh">
					@if($errors->has('slug'))
					<i class="help-block">{{$errors->first('slug')}}</i>
					@endif
				</div>

				<div class="form-group">
					<label for="">Ảnh</label>
					<input type="file" class="form-control" name="file_upload">
				</div>
				<div class="form-group">
					<label for="">Giá sản phẩm</label>
					<input type="text" class="form-control" name="price" placeholder="Giá sản phẩm">
					@if($errors->has('price'))
					<i class="help-block">{{$errors->first('price')}}</i>
					@endif
				</div>

				<div class="form-group">
					<label for="">Giá Sale</label>
					<input type="text" class="form-control" name="sale_price" placeholder="Giá sản phẩm">
				</div>
				<div class="form-group">
					<label for="">Trạng thái</label>
					<select name="status" id="inputStatus" class="form-control">
						<option value="1">Công khai</option>
						<option value="0">Ẩn</option>
					</select>
				</div>
				<div class="form-group">
					<label for="">Danh mục</label>
					<select name="cat_id" id="inputCat_id" class="form-control">
						<option value="#">Chọn danh mục</option>
						@foreach($cates as $cate)
						<option value="{{$cate->id}}">{{$cate->name}}</option>
						@endforeach
					</select>
					@if($errors->has('cat_id'))
					<i class="help-block">{{$errors->first('cat_id')}}</i>
					@endif
				</div>
				<div class="form-group">
					<label for="">Mô tả</label>
					<textarea name="content" id="inputContent" class="form-control desc" rows="3"></textarea>
				</div>
				@csrf
				<button type="submit" class="btn btn-primary">Thêm</button>
			</form>
		</div>
	</div>
@stop()