<div class="container">
<div class="row">
    <h4>BẤT ĐỘNG SẢN</h4>
    <ul class="nav navbar-nav side-nav menu-nav">
        <li>
            <a href="{{route('product-category.index')}}">Phân loại</a>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#listbds" class="" aria-expanded="true">Sản phẩm <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="listbds" class="collapse sub-menu" aria-expanded="true" style="">
                <li>
                    <a href="{{route('product.index')}}">Danh Sách</a>
                </li>
                <li>
                    <a href="{{route('product.create')}}">Thêm</a>
                </li>
            </ul>
        </li>
    </ul>
</div>

<div class="row">
    <h4>TIN TỨC</h4>
    <ul class="nav navbar-nav side-nav menu-nav">
        <li>
            <a href="{{route('category.index')}}">Danh mục tin</a>
        </li>
        <li>
            <a href="{{route('news.index')}}">Tin Tuc</a>
        </li>
    </ul>
</div>
<div class="row">
    <h4>THÔNG TIN CHUNG</h4>
    <ul class="nav navbar-nav side-nav menu-nav">
        <li><a href="#">About us</a></li>
        <li><a href="#">Footer</a></li>
        <!--
        <li>
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
        -->
    </ul>
</div>
</div>