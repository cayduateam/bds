@extends('dashboard.assets.master')

@section('content')
<div class="row header">
        <div class="col-md-10 col-xs-10"><h1>Giới thiệu team</h1></div>
        <div class="col-md-2 col-xs-2">
            <a href="/dashboard"><button type="button" class="btn btn-primary">Back</button></a>
        </div>
    </div>
    <p class="line"></p>
    @include('dashboard.assets.error')
    @include('dashboard.assets.message')
	<form method="post" class="canthiet" action="{{route('about.update',$about->id)}}"  enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field('put')}}
        <div class="row">
            <div class="col-md-9">
            	<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Section 1</label>
				    <div class="col-sm-10">
				      	<input name="section1_title" type="text" class="form-control required" value="{{$about->section1_title}}">
			    	</div>
		    	</div>
		    	<div class="form-group">
					<label>Mô tả</label>
	            	<textarea class="form-control summernote required"  name="section1">{{$about->section1}}</textarea>
            	</div>
                <hr/>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Section 2</label>
                    <div class="col-sm-10">
                        <input name="section2_title" type="text" class="form-control " value="{{$about->section2_title}}">
                    </div>
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea class="form-control summernote "  name="section2">{{$about->section2}}</textarea>
                </div>
                <hr/>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Section 3</label>
                    <div class="col-sm-10">
                        <input name="section3_title" type="text" class="form-control " value="{{$about->section3_title}}">
                    </div>
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea class="form-control summernote "  name="section3">{{$about->section3}}</textarea>
                </div>
                <hr/>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Section 4</label>
                    <div class="col-sm-10">
                        <input name="section4_title" type="text" class="form-control " value="{{$about->section4_title}}">
                    </div>
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea class="form-control summernote "  name="section4">{{$about->section4}}</textarea>
                </div>
                <hr/>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Section 5</label>
                    <div class="col-sm-10">
                        <input name="section5_title" type="text" class="form-control " value="{{$about->section5_title}}">
                    </div>
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea class="form-control summernote"  name="section5">{{$about->section5}}</textarea>
                </div>
            </div>
            <div class="form-group col-md-3">
                <div class="form-group">
                    <label>Ảnh đại diện</label>
                    <input type="file" class="form-control-file" name="image">
                    <input type="hidden" name="old_image" value="{{$about->image}}">
                </div>
                <hr/>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection