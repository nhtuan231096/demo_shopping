@extends('layouts.admin')
@section('link','Tài khoản')
@section('title','Tài khoản')
@section('main')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="text-center panel-title">Danh sách tài khoản</h3>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				@if(Session::has('success'))
					<div class="text-center alert alert-success">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>{{Session::get('success')}}</strong>
					</div>
				@endif
				<thead>
					<tr>
						<th>ID</th>
						<th>Tên</th>
						<th>Email</th>
						<th>Ảnh đại diện</th>
						<th>Level</th>
						<th>Ngày tạo</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach($users as $user)
					<tr>
						<td>{{$user->id}}</td>
						<td>{{$user->name}}</td>
						<td>{{$user->email}}</td>
						<td>
							<img width="50px" src="{{url('uploads/user')}}/{{$user->image}}" alt="image">
						</td>
						<td>{{$user->level==1?"Admin":"Customer"}}</td>
						<td>{{$user->created_at}}</td>
						<td>
							<a class="btn fa fa-edit" href="{{route('editUser',['id'=>$user->id])}}"></a>
							<a class="btn fa fa-trash" href=""></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@stop()