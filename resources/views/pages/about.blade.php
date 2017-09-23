@extends('assets.master')
@section('style')

@endsection

@section('script')
<script src="js/responsive-tabs.js"></script>
@endsection


@section('content')
<div class="container-fluid">
  <div class="row">
  <div class="col-md-9 col-xs-12 left_content">
    <h1 class="text-center">{{$about->title}}</h1>
    @if($about->section1 != null)
    <div class="col-xs-12 clearfix about_content">
      <h2>{{$about->section1_title}}</h2>
      <div class="row">{!!$about->section1!!}</div>
    </div>
    @endif
    @if($about->section2 != null)
    <div class="col-xs-12 clearfix about_content">
      <h2>{{$about->section2_title}}</h2>
      <div class="row">{!!$about->section2!!}</div>
    </div>
    @endif
    @if($about->section3 != null)
    <div class="col-xs-12 clearfix about_content">
      <h2>{{$about->section3_title}}</h2>
      <div class="row">{!!$about->section3!!}</div>
    </div>
    @endif
  </div>
  <div class="col-md-3 hidden-sm-down sidebar">
    <aside class="product_footer clearfix">
      <div class="service-right wow animated bounceInRight">
        <i class="fa fa-quote-left" aria-hidden="true"></i>
        <div class="detail">
          <p>Vui lòng liên hệ để được tư vẫn hỗ trợ nhanh chóng nhất</p>
          <p>Ms Thủy: 0935 044 567</p>
        </div>
        <i class="fa fa-quote-right" aria-hidden="true"></i>
      </div>
    </aside>
    <div class="line"></div>
    @include('assets.sidebar')
  </div>
</div>
</div>

@endsection