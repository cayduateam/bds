@extends('dashboard.assets.master')

@section('content')
    <h1 class="headnews">Thêm Danh mục tin tức</h1><p class="line"></p>
    <form method="post" class="canthiet" action="{{route('postaddNewsCat')}}"  enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="form-group col-md-4">
                <label>Tên</label>
                <input name="name" type="text" class="form-control required" placeholder="title...">
            </div>
            <div class="form-group col-md-4">
                <label>Meta Robot</label>
                <select class="form-control" name="metarobot">
                    <?php showmetaRobotOption();?>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label>Meta keyword</label>
                <input name="metakey" type="text" class="form-control" placeholder="title...">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <label>Danh mục cha</label>
                        <select class="form-control required" name="parent">
                            <option value="0">--</option>
                            @foreach($parent as $p)
                                <option value="{{$p->id}}">{{$p->name}}</option>
                            @endforeach
                        </select>
                    </div><hr/>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Ảnh đại diện</label>
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    <hr/>
                    <div class="col-md-12">
                        <label>Trạng thái</label>
                        <select class="form-control" name="metarobot">
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