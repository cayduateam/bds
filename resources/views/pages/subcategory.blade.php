@extends('assets.master')

@section('style')
@endsection

@section('script')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="col-md-9 col-xs-12 left_content">
            <div class="content_header">
                <img alt="{{$category->alias}}" title="{{$category->alias}}" src="images/productCategory/{{$category->image}}">
                <div class="title">
                    <p>{{$category->name}}</p>
                </div>
            </div>
            <div class="content_tabs">
                @foreach($products as $product)
                    <div class="product_item col-sm-6 col-md-4">
                        <a href="{{route('product.view',$product->alias)}}">
                            <p class="title">{{$product->title}}</p>
                            <img alt="{{$product->alias}}" title="{{$product->alias}}" src="images/product/{{$product->thumb}}">
                        </a>
                    </div>
                @endforeach
            </div>
            <nav aria-label="Page navigation" class="clearfix ">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    @foreach($pagination as $p)
                        <li class="page-item {!! ($p == $page)?'active':'' !!}"><a class="page-link" href="#">{{$p}}</a></li>
                    @endforeach
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="content_footer clearfix ">
                footer
            </div>
        </div>
        <div class="col-md-3 hidden-sm-down sidebar">
            @include('assets.sidebar')
        </div>
    </div>

@endsection