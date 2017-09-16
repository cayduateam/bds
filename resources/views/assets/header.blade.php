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
          <div class="col-xs-9 col-md-4" data-aos="flip-left">
            <a class="navbar-brand wow animated wobble" href="/">
              <img src="images/logo2.png" alt="logo-bds-nha-trang">
              <h1>BDS Nha Trang online111</h1>
            </a>    
          </div>
          <div class="col-xs-3 col-md-8">
            <div class="collapse navbar-toggleable-sm pull-xs-left pull-md-right wow animated bounceInRight" id="main-menu">
              <!-- Navbar Starts -->
              <ul class="nav nav-inline">
                <li class="nav-item">
                  <a class="nav-link active" href="#" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about">Giới thiệu</a>
                </li>
                @if(count($proCat) > 0)
                @foreach($proCat as $cat)
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="{{route('category.view',$cat['alias'])}}" role="button" aria-haspopup="true" aria-expanded="false">{{$cat['name']}}</a>
                    <!-- @if(isset($cat['sub']))
                      <div class="dropdown-menu">
                      @foreach($cat['sub'] as $sub)
                        <a class="dropdown-item" href="{{route('category.view.sub',$sub['alias'])}}">{{$sub['name']}}</a>
                      @endforeach
                      </div>
                    @endif -->
                  </li>
                @endforeach
                @endif
                <li class="nav-item dropdown">
                  <a class="nav-link" href="contact">
                    Liên hệ
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- Navbar Ends -->
  </section>
</header>