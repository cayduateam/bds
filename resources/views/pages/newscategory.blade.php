@extends('assets.master')

@section('style')
@endsection

@section('script')
@endsection

@section('breadcrumbs')
<ol class="breadscrumbs">
  <li ><a href="#" rel="nofollow"><h3>Home</h3></a></li>
  <li><a href="{!! route('newscategory.view',$category->alias) !!}"><h3>{!! $category->name !!}</h3></a></li>
</ol>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
  <div class="col-md-9 col-xs-12 left_content">
    <h1 class="text-center">{!! $category->name !!}</h1><hr/>
		@foreach($category->news_enable as $news)
		<article>
			<a href="{{route('news.view',$news->alias)}}"><h4>{{$news->title}}</h4></a>
			<div class="row">
				<div class="col-sm-3 d-none d-sm-block">
					<img class="d-none d-sm-block img-thumbnail" alt="{{$news->alias}}" title="{{$news->alias}}" src="images/news/{{$news->image}}">
				</div>
				<div class="col-12 col-sm-9">
					<p>{!!$news->summary!!}</p>
					<a href="{{route('news.view',$news->alias)}}">
						<img class="d-none d-sm-block img-responsive" src="http://khanhhoainvest.gov.vn/public/images/main/read-more.png" alt="read-more-icon" title="read-more-icon">
					</a>
				</div>
			</div>
		</article><hr/>
		@endforeach

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