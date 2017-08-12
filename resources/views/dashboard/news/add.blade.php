@extends('dashboard.assets.master')

@section('content')
<form>
    <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="title">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Password" name="">
        </div>
    </div>
</form>
@endsection