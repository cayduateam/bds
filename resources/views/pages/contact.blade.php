@extends('assets.master')

@section('script')
<script src="js/jquery.validate.min.js"></script>
<script>
	$('.canthiet').validate();
</script>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
  <div class="col-md-9 col-xs-12 left_content contact">
    <h1 class="text-center">Liên hệ với chúng tôi</h1>
		<h2>Xin chân thành cám ơn Quý khách đã quan tâm đến dự án BDS Nha Trang online</h2>
		<h3>Nếu bạn có câu hỏi hay góp ý nào, vui lòng liên hệ trực tiếp hoặc để lại thông tin theo mẫu sau</h3>
		<h3>Chúng tôi sẽ hồi âm trong thời gian sớm nhất, xin cảm ơn</h3>

		<!-- form contact -->
		<div class="contact_form">
			<form method="post" class="canthiet" action="{{route('contact.send')}}"  enctype="multipart/form-data">
				{{csrf_field()}}
				<div class="form-group col-xs-12">
			    <label class="col-form-label">Email</label>
			    <input type="email" class="form-control" placeholder="email">
			  </div>
			  <div class="form-row">
			    <div class="form-group col-md-6 col-xs-12">
			      <label class="col-form-label">Họ và tên</label>
			      <input type="text" class="form-control" placeholder="name...">
			    </div>
			    <div class="form-group col-md-6 col-xs-12">
			      <label class="col-form-label">Điện thoại</label>
			      <input type="text" class="form-control" placeholder="Phone...">
			    </div>
			  </div>
			  <div class="form-row col-xs-12">
			    <div class="form-group">
			      <label for="inputCity" class="col-form-label">Nội dung</label>
			      <textarea class="form-control" name="content" rows="5"></textarea>
			    </div>
			  </div>
			  <button type="submit" class="btn btn-primary">Sign in</button>
			</form>
		</div>
		<!-- end form contact -->
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