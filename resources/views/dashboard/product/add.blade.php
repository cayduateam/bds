@extends('dashboard.assets.master')

@section('content')
    <div class="row header">
        <div class="col-md-10 col-xs-10"><h1>{{$task}} News</h1></div>
        <div class="col-md-2 col-xs-2">
            <a href="{{route('news.index')}}"><button type="button" class="btn btn-primary">Back</button></a>
        </div>
    </div>
    <p class="line"></p>
    @include('dashboard.assets.error')
	<form method="post" class="canthiet form_add" action="{{$url}}"  enctype="multipart/form-data">
        {{csrf_field()}}
        @section('edit_method')
        @show
         <div class="row">
            <div class="form-group col-md-4">
                <label>Title</label>
                <input name="title" type="text" class="form-control required" value="@yield('product.title')">
            </div>
            <div class="form-group col-md-4">
                <label>Meta Robot</label>
                <select class="form-control" name="metarobot">
                    {!!showmetaRobotOption()!!}
                </select>
            </div>
            <div class="form-group col-md-4">
                <label>Meta keyword</label>
                <input name="metakey" type="text" class="form-control" value="@yield('product.metakey')">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-8">
                <div class="form-group col-md-12">
                    <label>Meta description</label>
                    <textarea name="metades" class="form-control" value="@yield('product.metades')"></textarea>
                </div>
                <div class="form-group col-md-12">
                    <label>Mô tả</label>
                    <textarea class="form-control summernote required" name="summary"></textarea>
                </div>
                <hr/>
                <div class="form-group col-md-12">
                    <label class="col-sm-2 col-form-label">Nội dung 1</label>
                    <div class="col-sm-10">
                        <input name="content1_title" type="text" class="form-control required" value="@yield('product.content1_title')">
                    </div>
                    <br/><br/>
                    <textarea class="form-control summernote_large required" name="content1" value="@yield('product.content')"></textarea>
                </div>
                <div class="form-group col-md-12">
                     <label class="col-sm-2 col-form-label">Nội dung 2</label>
                    <div class="col-sm-10">
                        <input name="content2_title" type="text" class="form-control " value="@yield('product.content2_title')">
                    </div>
                    <br/><br/>
                    <textarea class="form-control summernote_large" name="content2" value="@yield('product.content2')"></textarea>
                </div>
                <div class="form-group col-md-12">
                     <label class="col-sm-2 col-form-label">Nội dung 3</label>
                    <div class="col-sm-10">
                        <input name="content3_title" type="text" class="form-control " value="@yield('product.content3_title')">
                    </div>
                    <br/><br/>
                    <textarea class="form-control summernote_large" name="content3" value="@yield('product.content3')"></textarea>
                </div>
            </div>
            
            <div class="form-group col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Price</label>
                            <input name="price" type="text" class="form-control" value="@yield('product.price')">
                        </div>
                        <div class="form-group">
                            <label>Sale (%)</label>
                            <input name="sale" type="text" class="form-control" value="@yield('product.sale')">
                        </div>
                    </div>
                    @if(isset($category))
                    <div class="col-md-12">
                    	<label>Danh mục cha</label>
                        <select class="form-control required parent_cat" name="parent_id">
                            @foreach($parent as $p)
                                <option value="{{$p->id}}">{{$p->name}}</option>
                            @endforeach
                        </select>
                        <select multiple class="sub_parent_cat form-control required u-full-width multi-select" name="sub_parent_id[]" size="{{(count($category) > 15)?count($category):15}}">
                            
                        </select>
                    </div>
                    @endif
                    <hr/><br/>
                    <div class="form-group col-md-12">
                        <label>Ảnh thumbnail </label>
                        <input type="file" class="form-control-file" name="thumb"><br/>
                    </div>
                    <hr/><br/>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Ảnh </label>
                            @for($i=0;$i<6;$i++)
                            <input type="file" class="form-control-file" name="image[]"><br/>
                            @endfor
                        </div>
                    </div>
                    <hr/>
                    <div class="col-md-12">
                        <label>Trạng thái</label>
                        <select class="form-control" name="status">
                            <option value="1">Enable</option>
                            <option value="0">Disable</option>
                        </select>
                    </div>
                </div>
                <hr/>
                <button type="submit" class="btn btn-primary">Submit</button>    
            </div>
        </div>
        
    </form>
@endsection
@section('script')
<script type="text/javascript">
$(document).ready(function(){
    function send_ajax(id){
        var token = $('[name="_token"]').attr('value');
        $.ajax({
            method: 'POST',
            url: '{!! route('productPaChange') !!}',
            data: {
                'id': id,
                '_token':token,
            },
            success: function(res){
                $('.sub_parent_cat').html(res)
            },
            error: function(e){
                alert("fail" + ' ' + e)
            },

        });
    }
    var id = $('.form_add .parent_cat').val();
    send_ajax(id);

    $('.form_add .parent_cat').on('change',function(){
        var id = $(this).val();
        send_ajax(id);
    });
});
</script>
@endsection