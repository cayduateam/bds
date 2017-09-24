@extends('assets.master')
@section('style')
<link rel="stylesheet" type="text/css" href="css/product.css">
@endsection

@section('script')
<script src="js/responsive-tabs.js"></script>
<script src="js/product.js"></script>
@endsection

@section('breadcrumbs')
<ol class="breadscrumbs">
  <li ><a href="#" rel="nofollow"><h3>Home</h3></a></li>
  <li><a href="{!! route('category.view',$category['parent']['alias']) !!}"><h3>{!! $category['parent']['name'] !!}</h3></a></li>
  <li><a href="#" rel="nofollow"><h3>{{$product->title}}</h3></a></li>
</ol>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
  <div class="col-md-9 col-xs-12 left_content">
    <h1 class="text-center">{{$productArray['title']}}</h1>
    <p class="hidden">{!!bodauImage($productArray['alias'])!!}</p>
    <div class="product_header clearfix">
      <!-- start slide -->
      <div id="product_slide" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <?php $i=0 ?>
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
        </div>

        <a class="carousel-control-prev" href="#product_slide" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#product_slide" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
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
      <ul class="tabs_class d-none d-sm-block">
        @for($i=1; $i< 4; $i++)
          @if($productArray['content'.$i] != null)
            <li>
            <?php
              $alias = '#'.$productArray['alias'].'-'.bodauimage($productArray['content'.$i.'_title']);
            ?>
              <a class="tab_class_link" href="{{route('product.view',$productArray['alias'])}}{!!$alias!!}"><h5>{{($productArray['content'.$i.'_title'] != null)? subString($product['content'.$i.'_title'],40) : 'Information'}}</h5></a>
            </li>
          @endif
        @endfor
        <li>
          <a class="tab_class_link" href="{{route('product.view',$productArray['alias'])}}#content_image"><h5>{{($productArray['content_image_title'] != null)? subString($product['content_image_title'],40) : 'Images'}}</h5></a>
        </li>
      </ul>
      <div class="content_class">
        @for($i=1; $i< 4; $i++)
          @if($productArray['content'.$i] != null)
            <?php
              $alias = $productArray['alias'].'-'.bodauimage($productArray['content'.$i.'_title']);
            ?>
            <div>
              <h2 id="{!!$alias!!}">{{($productArray['content'.$i.'_title'] != null)? subString($product['content'.$i.'_title'],40) : 'Information'}}</h2>
              <div>
                {!!$productArray['content'.$i]!!}
              </div>
            </div>
          @endif
        @endfor
        
        @if($product->content_image != null )
          <div>
            <h2 id="content_image">{{($productArray['content_image_title'] != null)? subString($product['content_image_title'],40) : 'Images'}}</h2>
            <div class="row">
            @foreach($productArray['content_image_detail'] as $image)
              <div class="col-12 col-sm-6 col-md-4">
                <a href="images/product/{{$image}}" data-fancybox="images">
                  <img src="images/product/{{$image}}" alt="{{$image}}" title="{{$image}}"/>
                </a>
              </div>                
            @endforeach
            </div>
          </div>
        @endif

      </div>
    </div>

  </div>
  <div class="col-md-3 hidden-sm-down sidebar">
    <!-- <aside class="product_summary">
      <div class="animated bounceInRight wow">
        {!!$productArray['summary']!!}
      </div>
    </aside> -->
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