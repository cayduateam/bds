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
                <div class="tabs_class" id="listTabs">
                    @for($i=1; $i< 4; $i++)
                        @if($product['content'.$i] != null)
                            <div>
                                <h2>{{($product['content'.$i.'_title'] != null)? subString($product['content'.$i.'_title'],40) : 'Information'}}</h2>

                                <div>
                                    {!!$product['content'.$i]!!}
                                </div>
                            </div>
                        @endif
                    @endfor
                </div>
            </div>
        </div>
        <div class="col-md-3 hidden-sm-down sidebar">
            <aside class="product_footer clearfix">
                <div class="service-right wow animated bounceInRight">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    <div class="detail">
                        <p>Vui lòng liên hệ để được tư vẫn hỗ trợ nhanh chóng nhất</p>
                        <p>Ms Thủy: 0935 044 567</p>
                    </div>
                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                </div>
            </aside>
            <div class="line"></div>
            @include('assets.sidebar')
        </div>
    </div>

@endsection