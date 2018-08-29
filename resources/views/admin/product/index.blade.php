@extends('layouts.admin')
@section('title','Sản phẩm')
@section('link','Sản phẩm')
@section('main')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">
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
			<h2>Danh sách sản phẩm</h2>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Tên sản phẩm</th>
						<th>Đường dẫn tĩnh</th>
						<th>Hình ảnh</th>
						<th>Giá</th>
						<th>Giá sale</th>
						<th>Miêu tả</th>
						<th>Trạng thái</th>
						<th>Danh mục</th>
						<th>Ngày tạo</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach($pros as $pro)
					<tr>
						<td>{{$pro->id}}</td>
						<td>{{$pro->name}}</td>
						<td>{{$pro->slug}}</td>
						<td>{{$pro->image}}</td>
						<td>{{number_format($pro->price)}}đ</td>
						<td>{{number_format($pro->sale_price)}}đ</td>
						<td>{!!$pro->content!!}</td>
						<td>
							@if($pro->status==1)
							<span class="fa fa-check"></span>
							@else
							<span class="fa fa-eye-slash"></span>
							@endif
						</td>
						<td>{{$pro->category->name}}</td>
						<td>{{$pro->created_at}}</td>
						<td>
							<a class="fa fa-edit btn btn-xs btn-default" href=""></a>
							<a class="fa fa-trash btn btn-xs btn-danger" href=""></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{{$pros->links()}}
		</div>
	</div>
@stop()