
{{--search bds --}}
<div class="sidebar-module-inset search_bds">
	<h4>Tìm kiếm bất động sản</h4>
	<form  class="form-horizontal formdbs-form">
	    <div class="form-group row">
	        <label class="col-sm-4 col-form-label text-right">Loại hình</label>
	        <div class="col-sm-8">
	            <select class="form-control">
	                <option>Dự án</option>
	                <option>Nhà đất phố</option>
	                <option>Cho thuê</option>
	            </select>
	        </div>
	    </div>

	    <div class="form-group row">
	        <label class="col-sm-4 control-label text-right">Chi tiết</label>
	        <div class="col-sm-8">
	            <select class="form-control">
	                <option>Căn hộ</option>
	                <option>Đất nền</option>
	                <option>Nhà ở xã hội</option>
	            </select>
	        </div>
	    </div>
	    <div class="form-group row">
	        <label class="col-sm-4 control-label text-right">Phường xã</label>
	        <div class="col-sm-8">
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
	        <label class="col-sm-4 control-label text-right">Giá tiền</label>
	        <div class="col-sm-8">
	            <select class="form-control">
	                <option>--All--</option>
	                <option>Dưới 1 tỷ</option>
	                <option>Từ 2-5 tỷ</option>
	                <option>Trên 5 tỷ</option>
	            </select>
	        </div>
	    </div>
	    <div class="form-group row">
	        <div class="col-sm-offset-2 col-sm-10 text-justify">
	            <button type="submit" class="btn btn-primary btn-block">Tim kiem</button>
	        </div>
	    </div>
	</form>
</div>
{{--search bds end--}}

{{--lastest_news--}}
<aside class="popular-post">
	<h4>Popular Post</h4>
	<ul>
		@foreach($lastest_news as $news)
		<li>
			<i class="fa fa-angle-right" aria-hidden="true"></i>
			<a href="#">{{$news->title}}</a>
		</li>
		@endforeach

	</ul>
</aside>

{{--lastest_news end--}}