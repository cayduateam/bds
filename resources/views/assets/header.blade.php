<!-- Header area wrapper starts -->
<header id="header-wrap">
  <!-- Header area starts -->
  <section id="header">
    <!-- Navbar Starts -->
    <nav class="navbar navbar-light" data-spy="affix" data-offset-top="50">
      <div class="container-fluid">
        <button class='navbar-toggler hidden-md-up pull-xs-right' data-target='#main-menu' data-toggle='collapse' type='button'>
          ☰
        </button>
        <!-- Brand -->
        <div class="row">
          <div class="col-xs-10 col-md-3">
            <a class="navbar-brand" href="/">
              <img src="images/logo2.png" alt="">
              <h1>BDS Nha Trang online</h1>
            </a>    
          </div>
          <div class="col-xs-2 col-md-9">
            <div class="collapse navbar-toggleable-sm pull-xs-left pull-md-right" id="main-menu">
              <!-- Navbar Starts -->
              <ul class="nav nav-inline">
                <li class="nav-item dropdown">
                  <a class="nav-link active" href="#" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="about" role="button" aria-haspopup="true" aria-expanded="false">Giới thiệu</a>
                </li>
                @foreach($proCat as $cat)
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{route('category.view',$cat['alias'])}}" role="button" aria-haspopup="true" aria-expanded="false">{{$cat['name']}}</a>
                    @if(isset($cat['sub']))
                      <div class="dropdown-menu">
                      @foreach($cat['sub'] as $sub)
                        <a class="dropdown-item" href="{{route('category.view',$sub['alias'])}}">{{$sub['name']}}</a>
                      @endforeach
                      </div>
                    @endif
                  </li>
                @endforeach
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="contact" role="button" aria-haspopup="true" aria-expanded="false">
                    Liên hệ
                  </a>
                </li>
                <!-- Search in right of nav -->
                <li class="nav-item" class="search">
                  <form class="top_search clearfix">
                    <div class="top_search_con">
                      <input class="s" placeholder="Search Here ..." type="text">
                      <span class="top_search_icon"><i class="icon-magnifier"></i></span>
                      <input class="top_search_submit" type="submit">
                    </div>
                  </form>
                </li>
                <!-- Search Ends -->
              </ul>
            </div>
              <!-- Form for navbar search area -->
              <form class="full-search">
                <div class="container">
                  <input type="text" placeholder="Type to Search">
                  <a href="#" class="close-search">
                    <span class="fa fa-times fa-2x">
                    </span>
                  </a>
                </div>
              </form>
          </div>
        </div>
      </div>
    </nav>
    <!-- Navbar Ends -->
  </section>
</header>