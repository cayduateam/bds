@extends('assets.master')

@section('style')
@endsection

@section('script')
@endsection

@section('content')
<div class="container-fluid">
	<div class="col-md-9 col-xs-12 left_content">
		<div class="content_header">
			<img alt="{{$parent->alias}}" title="{{$parent->alias}}" src="images/productCategory/{{$parent->image}}">
			<div class="title">
				<p>{{$parent->name}}</p>
			</div>
		</div>
		<div class="content_tabs">
			<div class="tabs_class" id="listTabs">
				@foreach($subs as $sub)
				<div>
					<h2>{{$sub->name}}</h2>
					<div>
						@foreach($sub->product_enable as $product)
							<div class="product_item col-sm-6 col-md-4">
								<a href="{{route('product.view',$product->alias)}}">
									<p class="title">{{$product->title}}</p>
									<img alt="{{$product->alias}}" title="{{$product->alias}}" src="images/product/{{$product->thumb}}">
								</a>
							</div>
						@endforeach
					</div>
				</div>
				@endforeach
			</div>
		</div>
		<div class="content_footer clearfix ">
			footer
		</div>
	</div>
	<div class="col-md-3 hidden-sm-down sidebar">
		@include('assets.sidebar')
	</div>
</div>

@endsection