@extends('layouts.admin')
@section('title','Category')
@section('link','Category')
@section('main')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">
				<a class="btn btn-md btn-default" href="">Thêm danh mục</a>
			</h3>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Tên</th>
						<th>Đường dẫn tĩnh</th>
						<th>Trạng thái</th>
						<th>Ngày tạo</th>
					</tr>
				</thead>
				<tbody>
					@foreach($cates as $cate)
					<tr>
						<td>{{$cate->id}}</td>
						<td>{{$cate->name}}</td>
						<td>{{$cate->slug}}</td>
						<td>{{$cate->status}}</td>
						<td>{{$cate->created_at}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{{$cates->links()}}
		</div>
	</div>
@stop()