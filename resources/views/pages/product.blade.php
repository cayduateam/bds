@extends('assets.master')
@section('style')
<link rel="stylesheet" type="text/css" href="css/product.css">
@endsection

@section('script')
<script src="js/responsive-tabs.js"></script>
<script src="js/product.js"></script>
@endsection

@section('content')
<div class="container-fluid">
  <div class="col-md-9 col-xs-12 left_content">
    <h1 class="text-center">{{$productArray['title']}}</h1>
    <div class="product_header clearfix row">
      <!-- start slide -->
      <div id="product_slide" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <?php
            $i=0;
          ?>
          @foreach($product->images as $image)
            <?php
              $image_name = explode('_',$image->link);
              $alt = explode('.', (string)$image_name[1]);
              $i++;
            ?>
            <div class="carousel-item {!! ($i==1)? 'active':'' !!}">
              <img src="images/product/{{$image->link}}" alt="{{$alt[0]}}" class="img-responsive">
            </div>
          @endforeach
          <!-- <div class="carousel-item active">
            <img src="https://s28.postimg.org/4237b0cjh/image.jpg" alt="1.jpg" class="img-responsive">
          </div> -->
        </div>

        <a class="left carousel-control" href="#product_slide" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#product_slide" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
        <ul class="thumbnails-carousel clearfix">
          @foreach($product->images as $image)
            <?php
              $image_name = explode('_',$image->link);
              $alt = explode('.', (string)$image_name[1]);
            ?>
            <li><img src="images/product/{{$image->link}}" alt="{{$alt[0]}}"></li>
          @endforeach
        </ul>
      </div>
      <!-- end slide -->
      <div class="product_summary col-xs-12 visible-xs-up">
        <div class="animated bounceInRight wow">
          {!!$productArray['summary']!!}
        </div>
      </div>
    </div>
    <div class="product_content">
      <div class="tabs_class" id="listTabs">
        @for($i=1; $i< 4; $i++)
          @if($productArray['content'.$i] != null)
            <div>
              <h2>{{($productArray['content'.$i.'_title'] != null)? subString($product['content'.$i.'_title'],40) : 'Information'}}</h2>
              <div>
                {!!$productArray['content'.$i]!!}
              </div>
            </div>
          @endif
        @endfor
      </div>
    </div>
  </div>
  <div class="col-md-3 hidden-sm-down sidebar">
    <aside class="product_summary">
      <div class="animated bounceInRight wow">
        {!!$productArray['summary']!!}
      </div>
    </aside>
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

@endsection