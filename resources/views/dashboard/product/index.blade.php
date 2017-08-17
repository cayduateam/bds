@extends('dashboard.assets.master')
@section('content')
	<div class="row header headnews">
		<div class="col-md-10"><h1>List BDS</h1></div>
		<div class="col-md-2">
			<a href="{{route('product.create')}}"><button type="button" class="btn btn-primary">Add New</button></a>
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
		  		@if(isset($product) && count($product) > 0)
		  		{{$stt=null}}
		  		@foreach($product as $id => $product)
				    <tr>
				      	<td>{{$stt+=1}}</td>
				      	<td>{{$product->title}}</td>
				      	<td>{{$product->hit}}</td>
				      	<td>{{($product->status == 1)?'Yes':'No'}}</td>
				      	<td>{{$product->created_at}}</td>
				      	<td><a href="{{route('product.edit',$product->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
				      	<td>
				      		<form action="{{route('product.destroy',$product->id)}}" method="post">
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