@extends('dashboard.assets.master')

@section('content')
    <h1 class="headnews">Thêm Danh mục tin tức</h1><p class="line"></p>
    {!! Form::open([
	    'route' => 'category.store'
	]) !!}
	@include('dashboard.assets.error')
	<div class="form-group">
	    {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
	    {!! Form::text('name', null, ['class' => 'form-control']) !!}
	</div>

	{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}

	{!! Form::close() !!}
@endsection
