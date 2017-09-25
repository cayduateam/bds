@extends('assets.master')

@section('style')
@endsection

@section('script')
@endsection

@section('breadcrumbs')
<ol class="breadscrumbs">
  <li ><a href="#" rel="nofollow"><h3>Home</h3></a></li>
  <li><a href="{!! route('news.view',$news->alias) !!}"><h3>{!! $news->title !!}</h3></a></li>
</ol>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
  <div class="col-md-9 col-xs-12 left_content">
    
		<article>
			<h1 class="text-center">{!! $news->title !!}</h1><hr/>
			<div class="row">
				<div class="col-sm-3 d-none d-sm-block">
					<a href="images/news/{{$news->image}}" data-fancybox="images">
						<img class="d-none d-sm-block img-thumbnail" alt="{{$news->alias}}" title="{{$news->alias}}" src="images/news/{{$news->image}}">
					</a>
				</div>
				<div class="col-12 col-sm-9">
					<p>{!!$news->summary!!}</p>
				</div>
			</div>
			<div class="news_content">
				{!!$news->content!!}
			</div>
		</article><hr/>
		<div class="line"></div>
		<div class="news_related">
			<h2>Có thể bạn thích đọc thêm</h2>
			<ul class="">
				@foreach($news_related as $relate)
					<li><a href="{{route('news.view',$relate->alias)}}">{!!$relate->title!!}</a></li>
				@endforeach
			</ul>
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