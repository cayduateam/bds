@extends('dashboard.assets.master')
@section('content')
	<div class="row header headnews">
		<div class="col-md-10"><h1>List</h1></div>
		<div class="col-md-2">
			<a href="{{route('product-category.create')}}"><button type="button" class="btn btn-primary">Add New</button></a>
		</div>
	</div>
	@include('dashboard.assets.message')
	<p class="line"></p>
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-xs-12">
				<form method="post" action="" class="form form_sort">
					{{csrf_field()}}
					<div class="form-group">
				      <label for="exampleSelect1">Chon phan loai</label>
				      <select class="form-control loaitin" data-type="productCategory">
				        @if(isset($parent))
							@foreach($parent as $cat)
								<option value="{{$cat->id}}">{{$cat->name}}</option>
							@endforeach
				        @endif
				      </select>
				    </div>
				</form>
			</div>
		</div>
		<table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>#</th>
		      <th>Name</th>
		      <th>Status</th>
		      <th>Date</th>
		      <th></th>
		      <th></th>
		    </tr>
		  </thead>
		  	<tbody class="body_list">
		  		
			</tbody>
		</table>
	</div>
@endsection
<div class="test"></div>

@section('script')
<script type="text/javascript">
$(document).ready(function(){
	id = $('.form_sort .loaitin').val();
	function send_ajax(id){
		var type = $(this).data('type');
		var token = $('[name="_token"]').attr('value');

		$.ajax({
		    method: 'POST',
		    url: '{!! route('productCatChange') !!}',
		    data: {
		    	'id': id,
		    	'type':type,
		    	'_token':token,
		    },
		    success: function(res){

		        $('.body_list').html(res);
		    },
		    error: function(e){
		        alert("fail" + ' ' + e)
		    },

		});
	}
	
	send_ajax(id);
	$('.form_sort .loaitin').on('change',function(){
		send_ajax($(this).val());
		// var type = $(this).data('type');
		// var id = $(this).val();
		// var token = $('[name="_token"]').attr('value');

		// $.ajax({
		//     method: 'POST',
		//     url: '{!! route('productCatChange') !!}',
		//     data: {
		//     	'id': id,
		//     	'type':type,
		//     	'_token':token,
		//     },
		//     success: function(res){

		//         $('.body_list').html(res);
		//     },
		//     error: function(e){
		//         alert("fail" + ' ' + e)
		//     },

		// });
	});
});
</script>
@endsection