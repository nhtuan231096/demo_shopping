@extends('layouts.admin')
@section('link','Tài khoản')
@section('title','Tài khoản')
@section('main')
	<div class="panel panel-default">
		<div class="panel-body">
			<form action="" method="POST" role="form" enctype="multipart/form-data">
				<legend>Cập nhật thông tin tài khoản</legend>
			
				<div class="form-group">
					<label for="">Tên</label>
					<input type="text" class="form-control" name="name" id="" value="{{$user->name}}" placeholder="Nhập tên tài khoản">
					@if($errors->has('name'))
						<i class="help-block">{{$errors->first('name')}}</i>
					@endif
				</div>

				<div class="form-group">
					<label for="">Email</label>
					<input type="text" class="form-control" name="email" id="" value="{{$user->email}}" placeholder="Nhập email">
					@if($errors->has('email'))
						<i class="help-block">{{$errors->first('email')}}</i>
					@endif
				</div>

				<div class="form-group">
					<label for="">Ảnh đại diện</label>
					<input type="file" class="form-control" name="file_upload" id="">
				</div>
				<div class="form-group">
					<label for="">Level</label>
					<select name="level" id="inputLevel" class="form-control">
						<option value="{{$user->level}}">{{$user->level==1?"Admin":"Customer"}}</option>
						<option value="{{$user->level==1?0:1}}">{{$user->level==1?"Customer":"Admin"}}</option>
					</select>
				</div>
				@csrf
			
				<button type="submit" class="btn btn-primary">Cập nhật</button>
			</form>
		</div>
	</div>
@stop()