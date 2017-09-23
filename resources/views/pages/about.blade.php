@extends('assets.master')
@section('style')
@endsection

@section('script')
<script src="js/responsive-tabs.js"></script>
@endsection


@section('content')
<div class="container-fluid">
  <div class="row">
  <div class="col-md-9 col-xs-12 left_content about">
    <h1 class="text-center">{{$about->title}}</h1>
    
    <img src="images/about/{{$about->image}}" alt="about-bds-nhatrang-online" class="">

    @if($about->section1 != null)
    <div class="col-xs-12 clearfix about_content">
      <h2>{{$about->section1_title}}</h2>
      <div>{!!$about->section1!!}</div>
    </div>
    @endif
    @if($about->section2 != null)
    <div class="col-xs-12 clearfix about_content">
      <h2>{{$about->section2_title}}</h2>
      <div>{!!$about->section2!!}</div>
    </div>
    @endif
    @if($about->section3 != null)
    <div class="col-xs-12 clearfix about_content">
      <h2>{{$about->section3_title}}</h2>
      <div>{!!$about->section3!!}</div>
    </div>
    @endif
    @if($about->section4 != null)
    <div class="col-xs-12 clearfix about_content">
      <h2>{{$about->section4_title}}</h2>
      <div>{!!$about->section4!!}</div>
    </div>
    @endif
    @if($about->section5 != null)
    <div class="col-xs-12 clearfix about_content">
      <h2>{{$about->section5_title}}</h2>
      <div>{!!$about->section5!!}</div>
    </div>
    @endif
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