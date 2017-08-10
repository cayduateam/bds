@extends('assets.master')

@section('content')
<section id="home">
	<div class="home-pattern"></div>
	<div id="main-carousel" class="carousel slide" data-ride="carousel"> 
		<ol class="carousel-indicators">
			<li data-target="#main-carousel" data-slide-to="0" class="active"></li>
			<li data-target="#main-carousel" data-slide-to="1"></li>
			<li data-target="#main-carousel" data-slide-to="2"></li>
		</ol><!--/.carousel-indicators--> 
		<div class="carousel-inner">
			<div class="item active" style="background-image: url(images/slider/slide3.jpg)"> 
				<div class="carousel-caption"> 
					<div> 
						<h2 class="heading animated bounceInDown">KHU ĐÔ THỊ LÊ HỒNG PHONG II</h2> 
						<p class="animated bounceInUp">Fully Professional one page template</p> 
						<a class="btn btn-default slider-btn animated fadeIn" href="#">Xem ngay</a> 
					</div> 
				</div> 
			</div>
			<div class="item" style="background-image: url(images/slider/slide2.jpg)"> 
				<div class="carousel-caption">
					<div> 
						<h2 class="heading animated bounceInDown">Khu đô thị Venesia</h2> 
						<p class="animated bounceInUp">Everything is outstanding </p> <a class="btn btn-default slider-btn animated fadeIn" href="#">Xem ngay</a> 
					</div> 
				</div> 
			</div> 
			<div class="item" style="background-image: url(images/slider/slide1.jpg)"> 
				<div class="carousel-caption"> 
					<div> 
						<h2 class="heading animated bounceInRight">Tận hưởng cuộc sống tuyệt vời tại Venice phương Đông
</h2> 
						<p class="animated bounceInLeft">100% Responsive HTML template</p> 
						<a class="btn btn-default slider-btn animated bounceInUp" href="#">Xem ngay</a> 
					</div> 
				</div> 
			</div>
		</div><!--/.carousel-inner-->
	<a class="carousel-left member-carousel-control hidden-xs" href="#main-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
	<a class="carousel-right member-carousel-control hidden-xs" href="#main-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
</div>
</section><!--/#home-->
@endsection
