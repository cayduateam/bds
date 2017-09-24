@extends('assets.master')

@section('style')
@endsection

@section('script')
<script src="js/responsive-tabs.js"></script>
<script src="js/category.js"></script>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-9 col-xs-12 left_content">
			<div class="category_header">
				@if(session()->get('detect') != 'mobile')
			    <div class="parallax d-none d-sm-block" data-speed="0.5" style="height:220px;background: url('images/productCategory/{{$parent->image}}') 50% -79.5px no-repeat;"></div>
		    @else
			    <img class="d-none d-sm-block" alt="{{$parent->alias}}" title="{{$parent->alias}}" src="images/productCategory/{{$parent->image}}">
		    @endif
				<div class="title category_title">
					<h1>{{$parent->name}}</h1>
				</div>
			</div>
			<hr/>
			<div class="content_tabs">
				<div class="tabs_class text_center" id="listTabs">
					@foreach($subs as $sub)
					<div>
						<h2>{{$sub->name}}</h2>
						<div class="row">

							@foreach($sub->product_enable as $product)
								<a class="product-item col-12 col-sm-6 " href="{{route('product.view',$product->alias)}}">
									<div class="title"><h2>{{$product->title}}</h2></div>
									<div class="item-img view fifth-effect">
										<img class="img-thumbnail rounded" alt="{{$product->alias}}" title="{{$product->alias}}" src="images/product/{{$product->thumb}}">
										<div class="mask"></div>
									</div>
								</a>
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
			<aside class="service-contact wow animated bounceInRight">
        <i class="fa fa-quote-left" aria-hidden="true"></i>
        <div class="detail">
          <h5>Vui lòng liên hệ để được tư vẫn hỗ trợ nhanh chóng nhất</h5>
          <h4>Ms Thủy: 0935 044 567</h4>
        </div>
        <i class="fa fa-quote-right" aria-hidden="true"></i>
    	</aside>
    	<div class="line"></div>
			@include('assets.sidebar')
		</div>
	</div>
</div>


@endsection