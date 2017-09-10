@extends('assets.master')

@section('style')
	<link rel="stylesheet" href="css/index.css">
@endsection

@section('script')
	<script src="js/index.js"></script>
@endsection

@section('content')
	{{--slider--}}
    <div id="main_slider" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="images/slider/slide3.jpg" alt="First slide">
            <div class="content-slider">
                <h3 class="heading wow animated bounceInDown">KHU ĐÔ THỊ LÊ HỒNG PHONG II</h3>
                <p class="animated bounceInUp">Fully Professional one page template</p>
                
            </div>
            <div class="link-slider">
                <a class="btn btn-default slider-btn animated fadeIn" href="#">Xem ngay</a>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/slider/slide2.jpg" alt="Second slide">
            <div class="content-slider">
                <h3 class="heading wow animated bounceInDown">KHU ĐÔ THỊ LÊ HỒNG PHONG II</h3>
                <p class="animated bounceInUp">Fully Professional one page template</p>
            </div>
            <div class="link-slider">
                <a class="btn btn-default slider-btn animated fadeIn" href="#">Xem ngay</a>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/slider/slide1.jpg" alt="Third slide">
            <div class="content-slider">
                <h3 class="heading wow animated bounceInDown">KHU ĐÔ THỊ LÊ HỒNG PHONG II</h3>
                <p class="animated wow bounceInUp">Fully Professional one page template</p>
            </div>
            <div class="link-slider">
                <a class="btn btn-default slider-btn animated fadeIn" href="#">Xem ngay</a>
            </div>
        </div>
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
	{{--end slider--}}

	{{--service--}}
    <p class="line"></p>
	<div class="service container-fluid">
		<h2 class="title wow animated wobble text-center hidden-xs-down">DỊCH VỤ CỦA CHÚNG TÔI</h2>
		<div class="row">
			<div class="col-md-6 col-xs-12 service-left wow bounceInLeft animated">
                <ul>
                    <li>
                        <span class="text-right circle">
                            <i class="fa fa-line-chart" aria-hidden="true"></i>
                        </span>
                        <span class="text">
                            Chuyên cung cấp các dịch vụ kinh doanh, môi giới, thẩm định, quảng cáo, đấu giá bất động sản
                        </span>
                    </li>
                    <li>
                        <span class="text-right circle">
                            <i class="fa fa-university" aria-hidden="true"></i>
                        </span>
                        <span class="text">
                            Tư vấn pháp lý, tín dụng, thanh toán chuyển nhượng bất động sản.
                        </span>
                    </li>
                </ul>
			</div>
			<div class="col-md-6 col-xs-12 service-right wow animated bounceInRight">
                <i class="fa fa-quote-left" aria-hidden="true"></i>
                <div class="detail">
                    <p>Vui lòng liên hệ để được tư vẫn hỗ trợ nhanh chóng nhất</p>
                    <P>Ms Thủy: 0935 044 567</P>
                </div>
                <i class="fa fa-quote-right" aria-hidden="true"></i>
			</div>
		</div>
	</div>
	<p class="line"></p>
	{{--end service --}}

	{{--search with parallax --}}
	<!-- <div class="searchbds parallax" data-speed="0.5" style="background: url('images/search-background.jpg') 50% -79.5px no-repeat;"> -->
    <div class="searchbds" style="background: url('images/search-background.jpg') 50% -79.5px no-repeat;">
        <div class="container searchbds-container">
            <div class="row">
                <div class="col-md-6 col-xs-12 formdbs-container">
                    <div class="formbds-content">
                        <h3>Tìm kiếm bất động sản</h3>
                        <form  class="form-horizontal formdbs-form">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right">Loại hình</label>
                                <div class="col-sm-9">
                                    <select class="form-control">
                                        <option>Dự án</option>
                                        <option>Nhà đất phố</option>
                                        <option>Cho thuê</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 control-label text-right">Chi tiết</label>
                                <div class="col-sm-9">
                                    <select class="form-control">
                                        <option>Căn hộ</option>
                                        <option>Đất nền</option>
                                        <option>Nhà ở xã hội</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 control-label text-right">Phường xã</label>
                                <div class="col-sm-9">
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
                                <label class="col-sm-3 control-label text-right">Giá tiền</label>
                                <div class="col-sm-9">
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
                    <ul class="list-1 list-left right wow bounceInLeft animated">
                        <li><h4 class="autoLeft fixTop red">Luôn mang lại chất lượng, giá trị của từng sản phẩm, dịch vụ</h4><div class="clear"></div></li>
                        <li><h4 class="autoLeft fixTop red">Uy tín doanh nghiệp và hiệu quả của chất lượng sản phẩm luôn được đặt lên hàng đầu</h4><div class="clear"></div></li>
                        <li><h4 class="autoLeft fixTop red">Sống và làm việc theo nguyên tắc “Cả hai cùng thắng”</h4><div class="clear"></div></li>
                        <li><h4 class="autoLeft fixTop red">Đối với Cổ đông: Tối đa hóa giá trị đầu tư</h4><div class="clear"></div></li>
                    </ul>
                </div>
            </div>
        </div>
	</div>
	{{--end search with parallax --}}
    <p class="line"></p>
    <div id="lastest_news" class="owl-carousel">
        <div class="item">
          <div class="shadow-effect">
            <div class="item-img">
                <img class="img-responsive" src="http://nhatrangreal.com.vn/wp-content/uploads/2017/08/sieu-du-an-san-bay-nha-trang-7082-2.png" alt="">
            </div>
            <div class="item-details">
                <h5>Chicken for two Roasted <span>$21</span></h5>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="shadow-effect">
            <div class="item-img">
                <img class="img-responsive" src="http://nhatrangreal.com.vn/wp-content/uploads/2017/08/tien-do-thang-9-4-636147294906516951-768x576.png" alt="">
            </div>
            <div class="item-details">
                <h5>Chicken for two Roasted <span>$21</span></h5>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="shadow-effect">
            <div class="item-img">
                <img class="img-responsive" src="http://nhatrangreal.com.vn/wp-content/uploads/2017/08/du-an-san-bay-nha-trang-5-768x576.jpg" alt="">
            </div>
            <div class="item-details">
                <h5>Chicken for two Roasted <span>$21</span></h5>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="shadow-effect">
            <div class="item-img">
                <img class="img-responsive" src="http://nhatrangreal.com.vn/wp-content/uploads/2017/08/tien-do-thang-9-4-636147294906516951-768x576.png" alt="">
            </div>
            <div class="item-details">
                <h5>Công bố một số quy hoạch liên quan đến Khu Trung tâm TM-DV-TC-DL Nha Trang<span>$21</span></h5>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="shadow-effect">
            <div class="item-img">
                <img class="img-responsive" src="http://nhatrangreal.com.vn/wp-content/uploads/2017/08/du-an-san-bay-nha-trang-5-768x576.jpg" alt="">
            </div>
            <div class="item-details">
                <h5>Đất nền Nha Trang: Hội tụ đầy đủ yếu tố sinh lời cho nhà đầu tư<span>$21</span></h5>
            </div>
          </div>
        </div>
    </div>
    {{--lastest news--}}
    
    {{--end lastest news--}}
@endsection