@extends('dashboard.assets.master')
@section('content')
	<div class="row header headnews">
		<div class="col-md-10"><h1>List</h1></div>
		<div class="col-md-2">
			<a href="{{route('category.create')}}"><button type="button" class="btn btn-primary">Add New</button></a>
		</div>
	</div>
	@include('dashboard.assets.message')
	<p class="line"></p>
	<div class="container">
		<table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>#</th>
		      <th>Name</th>
		      <th>Status</th>
		      <th>Date</th>
		      <th></th>
		      <th></th>
		    </tr>
		  </thead>
		  	<tbody>
		  		@if(count($data) > 0)
		  		{{$stt=null}}
		  		@foreach($data as $id => $parent)
				    <tr>
				      	<td>{{$stt+=1}}</td>
				      	<td>{{$parent['name']}}</td>
				      	<td>{{($parent['status'] == 1)?'Yes':'No'}}</td>
				      	<td>{{$parent['created_at']}}</td>
				      	<td><a href="{{route('category.edit',$id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
				      	<td>
				      		<form action="{{route('category.destroy',$id)}}" method="post">
							{{csrf_field()}} {{method_field('DELETE')}}
							<button type="submit" onclick="return confirm('Are you sure ?')" class="btn btn-primary"><i class="fa fa-trash" aria-hidden="true"></i></button>	
							</form>
						</td>
				    </tr>
				    @if(isset($parent['sub']))
				    @foreach($parent['sub'] as $idSub => $sub)
				    	<tr>
							<td></td>
					      	<td>{{$sub['name']}}</td>
					      	<td>{{($sub['status'] == 1)?'Yes':'No'}}</td>
					      	<td>{{$sub['created_at']}}</td>
					      	<td><a href="{{route('category.edit',$idSub)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
					      	<td>
					      		<form action="{{route('category.destroy',$idSub)}}" method="post">
								{{csrf_field()}} {{method_field('DELETE')}}
								<button onclick="return confirm('Are you sure ?')" type="submit" class="btn btn-primary"><i class="fa fa-trash" aria-hidden="true"></i></button>
								</form>
							</td>
						</tr>
					@endforeach
					@endif
				@endforeach
				@endif
			</tbody>
		</table>
	</div>
@endsection