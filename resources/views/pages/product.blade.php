@extends('assets.master')
@section('style')
@endsection

@section('script')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="col-md-9 col-xs-12 left_content">
            <div class="product_header clearfix">

            </div>
            <div class="product_content">

            </div>
            <div class="product_footer clearfix">
                footer
            </div>
        </div>
        <div class="col-md-3 hidden-sm-down sidebar">
            @include('assets.sidebar')
        </div>
    </div>

@endsection