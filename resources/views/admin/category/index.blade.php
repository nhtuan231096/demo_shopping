@extends('layouts.admin')
@section('title','Category')
@section('link','Category')
@section('main')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">
				<a class="btn btn-md btn-default" href="{{route('addCate')}}">Thêm danh mục</a>
				<form action="" method="get" class="form-inline" role="form">
				
					<div class="form-group">
						<input type="" class="form-control" name="search" id="" placeholder="Nhập mục cần tìm">
					</div>		
					@csrf
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</h3>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				@if(Session::has('success'))
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>{{Session::get('success')}}</strong>
				</div>
				@endif
				<thead>
					<tr>
						<th>ID</th>
						<th>Tên</th>
						<th>Đường dẫn tĩnh</th>
						<th>Trạng thái</th>
						<th>Ngày tạo</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach($cates as $cate)
					<tr>
						<td>{{$cate->id}}</td>
						<td>{{$cate->name}}</td>
						<td>{{$cate->slug}}</td>
						<td><span class="label label-xs label-primary">{{$cate->status==1?"Hiện":"Ẩn"}}</span></td>
						<td>{{$cate->created_at}}</td>
						<td class="text-right">
							<a class="fa fa-edit btn" href="{{route('editCate',['id'=>$cate->id])}}"></a>
							<a class="fa fa-trash btn" onclick="return confirm('Bạn có muốn xóa không??')" href="{{route('deleteCate',['id'=>$cate->id])}}"></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{{$cates->links()}}
		</div>
	</div>
@stop()