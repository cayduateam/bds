<!-- Header area wrapper starts -->
<header id="header-wrap">
  <!-- Header area starts -->
  <!-- {{session()->get('detect')}} -->
  <section id="header">
    <!-- Navbar Starts -->
    <nav class="navbar navbar-expand-md navbar-light bg-light">
      <a class="navbar-brand {!! session()->get('detect') != 'mobile'?'wow animated wobble':'' !!} " href="/">
        <img src="images/logo2.png" alt="logo-bds-nha-trang">
        @if($route == '/')
          <h1 class="navbar-brand-text">BDS Nha Trang online</h1>
        @else
          <h2 class="navbar-brand-text">BDS Nha Trang online</h2>
        @endif
      </a> 
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a rel="nofollow" class="nav-link {!! ($route == '/')?'active':'' !!}" href="/" role="button" aria-haspopup="true" aria-expanded="false"><h3>HOME</h3></a>
          </li>
          <li class="nav-item {!! (strpos('/'.$route,'about') != false) ?'active':'' !!}">
            <a class="nav-link" href="about.html"><h3>Giới thiệu</h3></a>
          </li>
          @if(count($proCat) > 0)
          @foreach($proCat as $cat)
            <li class="nav-item dropdown">
              <a class="nav-link" href="{{route('category.view',$cat['alias'])}}" role="button" aria-haspopup="true" aria-expanded="false"><h3>{{$cat['name']}}</h3></a>
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
          
          
          @if(count($newscategory) > 0)
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><h3>Tin tức</h3></a>
                <div class="dropdown-menu">
                @foreach($newscategory as $cat)
                  <a class="dropdown-item" href="{{route('newscategory.view',$cat->alias)}}">{{ $cat->name }}</a>
                  <div class="dropdown-divider"></div>
                @endforeach
                </div>
            </li>
          @endif
          

          <li class="nav-item dropdown {!! (strpos('/'.$route,'contact') != false) ?'active':'' !!}">
            <a class="nav-link" href="contact.html"><h3>Liên hệ</h3></a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Navbar Ends -->
  </section>
</header>