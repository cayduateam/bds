@extends('dashboard.assets.master')
@section('content')
	<div class="row header headnews">
		<div class="col-md-10"><h1>List</h1></div>
		<div class="col-md-2">
			<a href="{{route('news.create')}}"><button type="button" class="btn btn-primary">Add New</button></a>
		</div>
	</div>
	@include('dashboard.assets.message')
	<p class="line"></p>
	<div class="container">
		<table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>#</th>
		      <th>Title</th>
		      <th>Hit</th>
		      <th>Is slide</th>
		      <th>Status</th>
		      <th>Date</th>
		      <th></th>
		      <th></th>
		    </tr>
		  </thead>
		  	<tbody>
		  		@if(count($news) > 0)
		  		{{$stt=null}}
		  		@foreach($news as $id => $news)
				    <tr>
				      	<td>{{$stt+=1}}</td>
				      	<td>{{$news->title}}</td>
				      	<td>{{$news->hit}}</td>
				      	<td>{{($news->image_slide != null)?'Yes':'No'}}</td>
				      	<td>{{($news->status == 1)?'Yes':'No'}}</td>
				      	<td>{{$news->created_at}}</td>
				      	<td><a href="{{route('news.edit',$news->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
				      	<td>
				      		<form action="{{route('news.destroy',$news->id)}}" method="post">
							{{csrf_field()}} {{method_field('DELETE')}}
							<button onclick="return confirm('Are you sure ?')" type="submit" class="btn btn-primary"><i class="fa fa-trash" aria-hidden="true"></i></button>	
							</form>
						</td>
				    </tr>
				@endforeach
				@endif
			</tbody>
		</table>
	</div>
@endsection