@extends('assets.master')

@section('style')
	<link rel="stylesheet" href="css/owlslider/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owlslider/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/index.css">
@endsection

@section('script')
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/index.js"></script>
@endsection

@section('content')
	{{--slider--}}
	<div class="owl-carousel">
		<div class="article parallax" data-speed="0.5" style="background-image: url(images/slider/slide3.jpg)">
			<div class="content-slider">
				<h3 class="heading animated bounceInDown">KHU ĐÔ THỊ LÊ HỒNG PHONG II</h3>
				<p class="animated bounceInUp">Fully Professional one page template</p>
				<a class="btn btn-default slider-btn animated fadeIn" href="#">Xem ngay</a>
			</div>
		</div>
		<div class="article parallax" data-speed="0.5" style="background-image: url(images/slider/slide2.jpg)">
			<div class="content-slider">
				<h3 class="heading animated bounceInDown">KHU ĐÔ THỊ LÊ HỒNG PHONG II</h3>
				<p class="animated bounceInUp">Fully Professional one page template</p>
				<a class="btn btn-default slider-btn animated fadeIn" href="#">Xem ngay</a>
			</div>
		</div>
		<div class="article parallax" data-speed="0.5" style="background-image: url(images/slider/slide1.jpg)">
			<div class="content-slider">
				<h3 class="heading animated bounceInDown">Khu đô thị Venesia</h3>
				<p class="animated bounceInUp">Fully Professional one page template</p>
				<a class="btn btn-default slider-btn animated fadeIn" href="#">Xem ngay</a>
			</div>
		</div>
		<div class="article parallax" data-speed="0.5" style="background-image: url(images/slider/slide2.jpg)">
			<div class="content-slider">
				<h3 class="heading animated bounceInDown">Tận hưởng cuộc sống tuyệt vời tại Venice phương Đông</h3>
				<p class="animated bounceInUp">Fully Professional one page template</p>
				<a class="btn btn-default slider-btn animated fadeIn" href="#">Xem ngay</a>
			</div>
		</div>
	</div>
	{{--end slider--}}

	{{--service--}}
	<div class="text-center service">
		<h2 class="title animated wobble">DỊCH VỤ CỦA CHÚNG TÔI</h2>
		<div class="row">
			<div class="col-md-6">
				<ul class="list-1 list-left right wow bounceInLeft animated">
					<li><span class="circle"><i class="fa fa-universal-access" aria-hidden="true"></i></span><span class="autoLeft fixTop">Dịch vụ1<strong>aaaaaaa</strong></span><div class="clear"></div></li>
					<li><span class="circle"><i class="fa fa-diamond" aria-hidden="true"></i></span><span class="autoLeft fixTop">Dịch vụ2 <strong>bbbbbbbbb</strong></span><div class="clear"></div></li>
				</ul>
			</div>
			<div class="col-md-6">
				<ul class="list-1 list-right animated bounceInRight">
					<li><span class="circle"><i class="fa fa-cubes" aria-hidden="true"></i></span><span class="autoLeft fixTop">Dịch vụ3 <strong>222222</strong></span><div class="clear"></div></li>

					<li><span class="circle"><i class="fa fa-users" aria-hidden="true"></i></span><span class="autoLeft fixTop">Dịch vụ4 <strong>3333333333</strong></span><div class="clear"></div></li>
				</ul>
			</div>
		</div>
	</div>
	<p class="line"></p>
	{{--end service --}}

	{{--search with parallax --}}
	<div class="searchbds parallax" data-speed="0.5" style="background: url('images/search-background.jpg') 50% -79.5px no-repeat;">
		<form class="searchdbs">

		</form>
	</div>
	{{--end search with parallax --}}


	<div style="min-height:1000px">index2</div>
@endsection