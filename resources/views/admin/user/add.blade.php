@extends('layouts.admin')
@section('link','Tài khoản')
@section('title','Tài khoản')
@section('main')
	<div class="panel panel-default">
		<div class="panel-body">
			<form action="" method="POST" role="form" enctype="multipart/form-data">
				<legend>Thêm mới tài khoản</legend>
			
				<div class="form-group">
					<label for="">Tên</label>
					<input type="text" class="form-control" name="name" id="" placeholder="Nhập tên tài khoản">
					@if($errors->has('name'))
						<i class="help-block">{{$errors->first('name')}}</i>
					@endif
				</div>

				<div class="form-group">
					<label for="">Email</label>
					<input type="text" class="form-control" name="email" id="" placeholder="Nhập email">
					@if($errors->has('email'))
						<i class="help-block">{{$errors->first('email')}}</i>
					@endif
				</div>
				<div class="form-group">
					<label for="">Mật khẩu</label>
					<input type="password" class="form-control" name="password" id="" placeholder="Nhập mật khẩu">
					@if($errors->has('password'))
						<i class="help-block">{{$errors->first('password')}}</i>
					@endif
				</div>
				<div class="form-group">
					<label for="">Nhập lại mật khẩu</label>
					<input type="password" class="form-control" name="confirmPassword" id="" placeholder="Nhập mật khẩu">
					@if($errors->has('confirmPassword'))
						<i class="help-block">{{$errors->first('confirmPassword')}}</i>
					@endif
				</div>
				<div class="form-group">
					<label for="">Ảnh đại diện</label>
					<input type="file" class="form-control" name="file_upload" id="">
				</div>
				<div class="form-group">
					<label for="">Level</label>
					<select name="level" id="inputLevel" class="form-control">
						<option value="1">Admin</option>
						<option value="0">Customer</option>
					</select>
				</div>
				@csrf
			
				<button type="submit" class="btn btn-primary">Thêm mới</button>
			</form>
		</div>
	</div>
@stop()