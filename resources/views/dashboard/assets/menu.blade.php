<div class="container">
<div class="row">
    <h4>BẤT ĐỘNG SẢN</h4>
    <ul class="nav navbar-nav side-nav menu-nav">
        <li>
            <a href="#">Phân loại</a>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#listbds" class="" aria-expanded="true">Sản phẩm <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="listbds" class="collapse sub-menu" aria-expanded="true" style="">
                <li>
                    <a href="#">Danh Sách</a>
                </li>
                <li>
                    <a href="#">Thêm</a>
                </li>
            </ul>
        </li>
    </ul>
</div>

<div class="row">
    <h4>TIN TỨC</h4>
    <ul class="nav navbar-nav side-nav menu-nav">
        <li>
            <a href="{{route('getListCat')}}">Danh mục tin</a>
        </li>
        <li>
            <a href="{{route('getaddNewsCat')}}">Thêm Danh mục tin</a>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#listnews" class="" aria-expanded="true">Sản phẩm <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="listnews" class="collapse sub-menu" aria-expanded="true" style="">
                <li>
                    <a href="dashboard/news/list">Danh Sách</a>
                </li>
                <li>
                    <a href="{{route('getaddNews')}}">Thêm</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<div class="row">
    <h4>THÔNG TIN CHUNG</h4>
    <ul class="nav navbar-nav side-nav menu-nav">
        <li><a href="#">About us</a></li>
        <li><a href="#">Footer</a></li>
        {{--<li>
            <a href="javascript:;" data-toggle="collapse" data-target="#demo" class="" aria-expanded="true">Sản phẩm <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo" class="collapse sub-menu" aria-expanded="true" style="">
                <li>
                    <a href="#">Danh Sách</a>
                </li>
                <li>
                    <a href="#">Thêm</a>
                </li>
            </ul>
        </li>
        --}}
    </ul>
</div>
</div>