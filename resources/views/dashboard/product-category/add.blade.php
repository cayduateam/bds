@extends('dashboard.assets.master')

@section('content')
    <div class="row header">
        <div class="col-md-10 col-xs-10"><h1>{{$task}} Phan loai BDS</h1></div>
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
                <label>Tên</label>
                <input name="name" type="text" class="form-control required" value="@yield('category.name')">
            </div>
            <div class="form-group col-md-4">
                <label>Meta Robot</label>
                <select class="form-control" name="metarobot">
                    {!!showmetaRobotOption()!!}
                </select>
            </div>
            <div class="form-group col-md-4">
                <label>Meta keyword</label>
                <input name="metakey" type="text" class="form-control"  value="@yield('category.metakey')">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-8">
                <label>Mô tả</label>
                <textarea class="form-control summernote required"  name="summary"></textarea>
            </div>
            <div class="form-group col-md-4">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>Danh mục cha</label>
                        <select class="form-control required parent_cat" name="parent_id">
                            <option value="0">--</option>
                            @foreach($parent as $p)
                                <option value="{{$p->id}}">{{$p->name}}</option>
                            @endforeach
                        </select>
                       <!--  <select class="form-control required sub_parent_cat" name="sub_parent_id">
                            <option value="0">--</option>
                        </select> -->
                    </div>

                    <div class="form-group col-md-12">
                        <div class="form-group">
                            <label>Ảnh đại diện</label>
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    <hr/>
                    <div class="form-group col-md-12">
                        <label>Trạng thái</label>
                        <select class="form-control" name="status">
                            <option value="1">Enable</option>
                            <option value="0">Disable</option>
                        </select>
                    </div>
                    <br/><hr/>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('script')
<script type="text/javascript">
$(document).ready(function(){
    $('.form_add .parent_cat').on('change',function(){
        var id = $(this).val();
        var token = $('[name="_token"]').attr('value');

        $.ajax({
            method: 'POST',
            url: '{!! route('productCatPaChange') !!}',
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

    });
});
</script>
@endsection