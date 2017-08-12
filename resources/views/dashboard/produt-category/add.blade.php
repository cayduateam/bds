@extends('dashboard.assets.master')

@section('content')
    <h1 class="headnews">Thêm tin tức</h1><p class="line"></p>
    <form method="post" class="canthiet" action="{{route('postaddNews')}}">
        {{csrf_field()}}
        <div class="row">
            <div class="form-group col-md-4">
                <label>Tiêu đề</label>
                <input type="title" class="form-control required" placeholder="title...">
            </div>
            <div class="form-group col-md-4">
                <label>Meta Robot</label>
                <select class="form-control" name="metarobot">
                    <?php showmetaRobotOption();?>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label>Meta keyword</label>
                <input type="title" class="form-control required" placeholder="title...">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label>Mở đầu</label>
                <textarea class="form-control summernote"  name="summary required"></textarea>
            </div>
            <div class="form-group col-md-6">
                <label>Meta description</label>
                <textarea class="form-control" rows="3" name="metades"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-8">
                <label>Nội dung</label>
                <textarea class="form-control summernote required"  name="content" row="10"></textarea>
            </div>
            <div class="form-group col-md-4">
                <label>Danh mục</label>
                <select multiple class="form-control required u-full-width multi-select" name="category[]"size="">
                    <optgroup label="group1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </optgroup>
                    <optgroup label="group2">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </optgroup>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection