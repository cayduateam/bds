@extends('assets.master')

@section('style')
@endsection

@section('script')
@endsection

@section('content')
<div class="container-fluid">
	<div class="col-md-9 col-xs-12">
		<div class="content_header">
			header
		</div>
		<div class="content_tabs">
			<div class="tabs_class" id="listTabs">
				@foreach($sub as $sub)
				<div>
					<h2>{{$sub->name}}</h2>
					<div>
						{{$sub->name}}
					</div>
				</div>
				@endforeach
			</div>
		</div>
		<div class="content_footer">
			footer
		</div>
	</div>
	<div class="col-md-3 hidden-sm-down sidebar">
		@include('assets.sidebar')
	</div>
</div>

@endsection