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
	<form method="post" class="canthiet" action="{{$url}}"  enctype="multipart/form-data">
        {{csrf_field()}}
        @section('edit_method')
        @show
         <div class="row">
            <div class="form-group col-md-4">
                <label>Title</label>
                <input name="title" type="text" class="form-control required" value="@yield('news.title')">
            </div>
            <div class="form-group col-md-4">
                <label>Meta Robot</label>
                <select class="form-control" name="metarobot">
                    {!!showmetaRobotOption()!!}
                </select>
            </div>
            <div class="form-group col-md-4">
                <label>Meta keyword</label>
                <input name="metakey" type="text" class="form-control" value="@yield('news.metakey')">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-8">
                <div class="form-group col-md-12">
                    <label>Meta description</label>
                    <textarea name="metades" class="form-control" value="@yield('news.metades')"></textarea>
                </div>
                <div class="form-group col-md-12">
                    <label>Mô tả</label>
                    <textarea class="form-control summernote required" name="summary"></textarea>
                </div>

                <div class="form-group col-md-12">
                    <label>Nội dung</label>
                    <textarea class="form-control summernote_large required" name="content" value="@yield('news.content')"></textarea>
                </div>
            </div>
            
            <div class="form-group col-md-4">
                <div class="row">
                    @if(isset($category))
                    <div class="col-md-12">
                    	<label>Danh mục cha</label>
                        <select multiple class="form-control required u-full-width multi-select" name="parent_id[]" size="{{(count($category) > 15)?count($category):15}}">
                            @foreach($category as $parent)
                                @if(isset($parent['sub']))
                                <optgroup label="{{$parent['name']}}">
                                    @foreach($parent['sub'] as $id => $sub)
                                        <option value="{{$id}}">{{$sub['name']}}</option>
                                    @endforeach
                                </optgroup>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    @endif
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Ảnh đại diện</label>
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    <hr/>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Ảnh slide</label>
                            <input type="file" class="form-control-file" name="image_slide">
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