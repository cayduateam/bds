@extends('dashboard.assets.master')
@section('content')
	<div class="row header headnews">
		<div class="col-md-10"><h1>List</h1></div>
		<div class="col-md-2">
			<a href="category/create"><button type="button" class="btn btn-primary">Add New</button></a>
		</div>
	</div>
	@include('dashboard.assets.message')
	<p class="line"></p>
	<div class="row">
	@foreach($category as $cat)
		{{$cat->name}}
		<a href="{{route('category.edit',$cat->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

		<form action="{{route('category.destroy',$cat->id)}}" method="post">
			{{csrf_field()}} {{method_field('DELETE')}}
			<button type="submit" class="btn btn-primary"><i class="fa fa-trash" aria-hidden="true"></i></button>
			
		</form>
		<br>
	@endforeach
	</div>
@endsection