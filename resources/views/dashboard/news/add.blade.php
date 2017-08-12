@extends('dashboard.assets.master')

@section('content')
    <h1 class="headnews">Thêm tin tức</h1><p class="line"></p>
    <form method="post" class="canthiet" action="">
        <div class="row">
            <div class="form-group col-md-6">
                <label>Title</label>
                <input type="title" class="form-control required" placeholder="title...">
            </div>
            <div class="form-group col-md-6">
                <label>Meta Robot</label>
                <select class="form-control" name="metarobot">
                    <?php showmetaRobotOption();?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect2">Example multiple select</label>
            <select multiple class="form-control required u-full-width multi-select" name="cate[]" id="category" size="">
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
        <div class="row">
            <div class="form-group col-md-6">
                <label>Meta keyword</label>
                <input type="title" class="form-control required" placeholder="title...">
            </div>
            <div class="form-group col-md-6">
                <label>Meta description</label>
                <textarea class="form-control" rows="3"></textarea>
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection