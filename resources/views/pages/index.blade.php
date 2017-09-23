@extends('assets.master')

@section('style')
<link rel="stylesheet" href="css/index.css">
@endsection

@section('script')
<script src="js/index.js"></script>
@endsection

@section('content')
	<!-- slider -->
    <div id="main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($lastest_product as $key => $product)
                <div class="carousel-item {!! ($key == 0)?'active':'' !!}">
                  <img class="d-block w-100" src="images/product/{{$product->slide}}" alt="{{$product->alias}}">
                    <div class="content-slider">
                        <h3 class="heading wow animated bounceInDown">{{$product->title}}</h3>
                        <!-- <p class="wow animated bounceInUp">....</p> -->
                    </div>
                    <div class="link-slider wow animated bounce">
                        <a class="btn btn-default slider-btn" href="{{route('product.view',$product->alias)}}">Xem ngay</a>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
	<!-- end slider -->

	<!-- service -->
    <p class="line"></p>
	<div class="service container-fluid">
		<h2 class="title text-center wow animated wobble">DỊCH VỤ CỦA CHÚNG TÔI</h2>
		<div class="row">
			<div class="col-md-6 col-xs-12 service service-left wow animated bounceInLeft">
                <ul>
                    <li>
                        <span class="text-right circle">
                            <i class="fa fa-line-chart" aria-hidden="true"></i>
                        </span>
                        <span class="text">Cung cấp các dịch vụ kinh doanh, môi giới, thẩm định, quảng cáo, đấu giá bất động sản</span>
                    </li>
                    <li>
                        <span class="text-right circle">
                            <i class="fa fa-university" aria-hidden="true"></i>
                        </span>
                        <span class="text">Tư vấn pháp lý, tín dụng, thanh toán chuyển nhượng bất động sản.</span>
                    </li>
                </ul>
			</div>
			<div class="col-md-6 col-xs-12 service service-right wow animated bounceInRight">
                <ul>
                    <li>
                        <span class="text-right circle">
                            <i class="fa fa-handshake-o" aria-hidden="true"></i>
                        </span>
                        <span class="text">Môi giới và giới thiệu dự án</span>
                    </li>
                    <li>
                        <span class="text-right circle">
                            <i class="fa fa-diamond " aria-hidden="true"></i>
                        </span>
                        <span class="text">Tư vấn lập dự án đầu tư</span>
                    </li>
                </ul>
			</div>
		</div>
	</div>
	<p class="line"></p>
	<!-- end service -->

	<!-- search with parallax  -->
    @if(session()->get('detect') != 'mobile')
    <div class="searchbds parallax" data-speed="0.5" style="padding: 3vmax 0;background: url('images/search-background.jpg') 50% -79.5px no-repeat;">
    @else
    <div class="searchbds" style="background: url('images/search-background.jpg') 50% -79.5px no-repeat;">
    @endif
        <div class="container searchbds-container">
            <div class="row">
                <div class="col-md-6 col-xs-12 formdbs-container" data-aos="flip-left">
                    <div class="formbds-content">
                        <h3>Tìm kiếm bất động sản</h3>
                        <form  class="form-horizontal formdbs-form">
                            <div class="form-group row">
                                <label class="col-3 col-form-label text-right">Loại hình</label>
                                <div class="col-9">
                                    <select class="form-control">
                                        <option>Dự án</option>
                                        <option>Nhà đất phố</option>
                                        <option>Cho thuê</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-3 control-label text-right">Chi tiết</label>
                                <div class="col-9">
                                    <select class="form-control">
                                        <option>Căn hộ</option>
                                        <option>Đất nền</option>
                                        <option>Nhà ở xã hội</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 control-label text-right">Phường xã</label>
                                <div class="col-9">
                                    <select class="form-control">
                                        <option>--All--</option>
                                        <option>Thành phố Nha Trang</option>
                                        <option>Diên Khánh</option>
                                        <option>Xương Huân</option>
                                        <option>VĨnh Ngọc</option>
                                        <option>Phước Hải</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 control-label text-right">Giá tiền</label>
                                <div class="col-9">
                                    <select class="form-control">
                                        <option>--All--</option>
                                        <option>Dưới 1 tỷ</option>
                                        <option>Từ 2-5 tỷ</option>
                                        <option>Trên 5 tỷ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10 text-justify">
                                    <button type="submit" class="btn btn-primary">Tim kiem</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 searchbds-right">
                    <div class="col-xs-12 service-contact wow animated bounceInRight">
                        <i class="fa fa-quote-left red" aria-hidden="true"></i>
                        <div class="detail">
                            <h5>Vui lòng liên hệ để được tư vẫn hỗ trợ nhanh chóng nhất</h5>
                            <h4><b>Ms Thủy: 0935 044 567</b></h4>
                        </div>
                        <i class="fa fa-quote-right red" aria-hidden="true"></i>
                    </div>
                    <ul class="list-1 service-list list-left right wow animated bounceInLeft">
                        <li><h4 class="autoLeft fixTop">Luôn mang lại chất lượng, giá trị trong từng dịch vụ</h4><div class="clear"></div></li>
                        <li><h4 class="autoLeft fixTop">Uy tín doanh nghiệp luôn được đặt lên hàng đầu</h4><div class="clear"></div></li>
                    </ul>
                </div>
            </div>
        </div>
	</div>
	<!-- end search with parallax  -->

    <p class="line"></p>
    <!-- lastest news -->
    <div id="lastest_news" class="owl-carousel" data-aos="zoom-in-right">
        @if(isset($lastest_news))
            @foreach($lastest_news as $news)
                <div class="item">
                    <div class="shadow-effect">
                        <div class="item-img">
                            <img class="img-responsive" src="images/news/{{$news->image}}" alt="{{$news->alias}}">
                        </div>
                        <div class="item-details">
                            <h5>{{$news->title}}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    <!-- end lastest news -->
@endsection