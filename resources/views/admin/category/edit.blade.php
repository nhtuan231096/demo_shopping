@extends('layouts.admin')
@section('title','Category')
@section('link','Category')
@section('main')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">
				<a class="fa fa-long-arrow-left btn btn-default" href="{{route('category')}}"></a>
				<span></span>
			</h3>
		</div>
		<div class="panel-body">
			<form action="" method="POST" role="form">
				<legend>Sửa danh mục</legend>
			
				<div class="form-group">
					<label for="">Tên danh mục</label>
					<input type="text" class="form-control" name="name" id="name" value="{{$cate->name}}" placeholder="Nhập tên danh mục">
					@if($errors->has('name'))
						<i class="help-block">
							{{$errors->first('name')}}
						</i>
					@endif
				</div>
				
				<div class="form-group">
					<label for="">Đường dẫn tĩnh</label>
					<input type="text" class="form-control" name="slug" id="slug" value="{{$cate->slug}}" placeholder="Nhập đường dẫn tĩnh">
					@if($errors->has('slug'))
						<i class="help-block">
							{{$errors->first('slug')}}
						</i>
					@endif
				</div>

				<div class="form-group">
					<label for="">Trạng thái</label>
					<select name="status" id="inputStatus" class="form-control">
						@if($cate->status==1)
						<option selected value="1">Hiện</option>
						<option  value="0">Ẩn</option>
						@else
						<option selected value="0">Ẩn</option>
						<option value="1">Hiện</option>
						@endif
					</select>
				</div>
				@csrf
			
				<button type="submit" class="btn btn-primary">Cập nhật</button>
			</form>
		</div>
	</div>
@stop()