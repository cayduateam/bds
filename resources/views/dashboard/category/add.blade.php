@extends('dashboard.assets.master')

@section('content')
    
    <div class="row header">
        <div class="col-md-10 col-xs-10"><h1>{{$task}} Category</h1></div>
        <div class="col-md-2 col-xs-2">
            <a href="{{route('category.index')}}"><button type="button" class="btn btn-primary">Back</button></a>
        </div>
    </div>
    <p class="line"></p>
    @include('dashboard.assets.error')
	<form method="post" class="canthiet" action="{{$url}}"  enctype="multipart/form-data">
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
            <div class="form-group col-md-4">
                <div class="row">
                    <div class="col-md-12">
                    	<label>Danh mục cha</label>
                        <select class="form-control required" name="parent_id">
                            <option value="0">--</option>
                            @foreach($parent as $p)
                                <option value="{{$p->id}}">{{$p->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Ảnh đại diện</label>
                            <input type="file" class="form-control-file" name="image">
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
            </div>
            <div class="form-group col-md-8">
                <label>Mô tả</label>
                <textarea class="form-control summernote required"  name="summary"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection