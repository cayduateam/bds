@extends('assets.master')
@section('style')
<link rel="stylesheet" type="text/css" href="css/product.css">
@endsection

@section('script')
<script src="js/product.js"></script>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="col-md-9 col-xs-12 left_content">
            <h1 class="text_center">{{$product['title']}}</h1>
            <div class="product_header clearfix">
                <div class="col-sm-7 col-xs-12">
                    <!-- start slide -->
                    <!-- bootstrap carousel -->
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner">
                        <div class="item active srle">
                          <img src="https://s28.postimg.org/4237b0cjh/image.jpg" alt="1.jpg" class="img-responsive">
                          <div class="carousel-caption">
                            <p> 1.jpg </p>
                          </div>
                        </div>

                        <div class="item">
                          <img src="https://s29.postimg.org/xaf064313/image.jpg" alt="2.jpg" class="img-responsive">
                          <div class="carousel-caption">
                            <p> 2.jpg </p>
                          </div>
                        </div>

                        <div class="item">
                          <img src="https://s17.postimg.org/sv1x15jlb/image.jpg" alt="3.jpg" class="img-responsive">
                          <div class="carousel-caption">
                            <p> 3.jpg </p>
                          </div>
                        </div>

                        <div class="item">
                          <img src="https://s7.postimg.org/4z602gd8b/image.jpg" alt="4.jpg" class="img-responsive">
                          <div class="carousel-caption">
                            <p> 4.jpg </p>
                          </div>
                        </div>

                      </div>

                      <!-- Controls -->
                      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                      </a>

                      <!-- Thumbnails --> 
                      <ul class="thumbnails-carousel clearfix">
                        <li><img src="https://s2.postimg.org/h6uti3zud/1_tn.jpg" alt="1_tn.jpg"></li>
                        <li><img src="https://s27.postimg.org/n4fjr7q2n/2_tn.jpg" alt="1_tn.jpg"></li>
                        <li><img src="https://s29.postimg.org/afuhmf61f/3_tn.jpg" alt="1_tn.jpg"></li>
                        <li><img src="https://s29.postimg.org/p45dxi6hf/4_tn.jpg" alt="1_tn.jpg"></li>
                      </ul>
                    </div>
                    <!-- end slide -->
                </div>
                <div class="col-sm-5 col-xs-12">
                    {!!$product['summary']!!}
                </div>
            </div>
            <div class="product_content">
                <div class="tabs_class" id="listTabs">
                    @for($i=1; $i< 4; $i++)
                        @if($product['content'.$i] != null)
                            <div>
                                <h2>{{($product['content'.$i.'_title'] != null)? subString($product['content'.$i.'_title'],40) : 'Information'}}</h2>

                                <div>
                                    {!!$product['content'.$i]!!}
                                </div>
                            </div>
                        @endif
                    @endfor
                </div>
            </div>
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

@endsection