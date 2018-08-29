@extends('layouts.admin')

@section('link','slider')
@section('title','Slider')
@section('main')
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">
			<a class="label label-primary fa fa-long-arrow-left" href="{{route('slider')}}"> Trở lại</a>
		</h3>
	</div>
	<div class="panel-body">
		<form action="" method="POST" role="form" enctype="multipart/form-data">
			<legend>Cập nhật slide</legend>
		
			<div class="form-group">
				<label for="">Tên slide</label>
				<input type="text" class="form-control" name="name" id="" value="{{$slide->name}}" placeholder="Input field">
				@if($errors->has('name'))
				<i class="help-block">{{$errors->first('name')}}</i>
				@endif
			</div>
		
			<div class="form-group">
				<label for="">Ảnh slide</label>
				<div class="clear-fix"></div>
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<a href="#" class="thumbnail">
						<img src="{{url('uploads/slide')}}/{{$slide->image}}" alt="image">
					</a>
				</div>
				<input type="file" class="form-control" name="file_upload" id=""  placeholder="">
				@if($errors->has('file_upload'))
				<i class="help-block">{{$errors->first('file_upload')}}</i>
				@endif
			</div>

			<div class="form-group">
				<label for="">Liên kết</label>
				<input type="" class="form-control" name="links" id="" value="{{$slide->links}}" placeholder="Đường dẫn liên kết">
				@if($errors->has('links'))
				<i class="help-block">{{$errors->first('links')}}</i>
				@endif
			</div>
			<div class="form-group">
				<label for="">Mô tả 1</label>
				<input type="" class="form-control" name="caption_1" id="" value="{{$slide->caption_1}}" placeholder="Mô tả">
			</div>
			<div class="form-group">
				<label for="">Mô tả 2</label>
				<input type="" class="form-control" name="caption_2" id="" value="{{$slide->caption_2}}" placeholder="Mô tả">
			</div>
			<div class="form-group">
				<label for="">Trạng thái</label>
				<select name="status" id="inputStatus" class="form-control">
					<option value="">Trạng thái</option>
					<option value="1">Hiện</option>
					<option value="0">Ẩn</option>
				</select>
			</div>
			@csrf
			<button type="submit" class="btn btn-primary">Cập nhật</button>
		</form>
	</div>
</div>
@stop()