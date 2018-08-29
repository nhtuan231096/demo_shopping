@extends('layouts.admin')

@section('link','slider')
@section('title','Slider')
@section('main')
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">
			<p>Danh sách các slide</p>
		</h3>
	</div>
	<div class="panel-body">
		<a class="fa fa-plus btn btn-md btn-default" href="{{route('addSlide')}}"> Thêm slide</a>
		@if(Session::has('success'))
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>{{Session::get('success')}}</strong>
		</div>
		@endif
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Tên slide</th>
					<th>Ảnh</th>
					<th>Liên kết</th>
					<th>Chú thích</th>
					<th>Trạng thái</th>
					<th>Ngày tạo</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($slides as $slide)
				<tr>
					<td>{{$slide->id}}</td>
					<td>{{$slide->name}}</td>
					<td>
						<img width="50px" src="{{url('uploads/slide')}}/{{$slide->image}}" alt="image">
					</td>
					<td>{{$slide->links}}</td>
					<td>{{$slide->caption_1}}</td>
					<td>{{$slide->status==1?"Hiện":"Ẩn"}}</td>
					<td>{{$slide->created_at}}</td>
					<td>
						<a class="btn btn-sm btn-default fa fa-edit" href="{{route('editSlide',['id'=>$slide->id])}}"></a>
						<a class="btn btn-sm btn-danger fa fa-trash" onclick="return confirm('Bạn có muốn xóa không??')" href="{{route('deleteSlide',['id'=>$slide->id])}}"></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@stop()