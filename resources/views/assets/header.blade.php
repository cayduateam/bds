<!-- Header area wrapper starts -->
<header id="header-wrap">
  <!-- Header area starts -->
  <section id="header">
    <!-- Navbar Starts -->
    <nav class="navbar navbar-expand-md navbar-light bg-light">
      <a class="navbar-brand {!! session()->get('detect') != 'mobile'?'wow animated wobble':'' !!} " href="/">
        <img src="images/logo2.png" alt="logo-bds-nha-trang">
        <h1>BDS Nha Trang online</h1>
      </a> 
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
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
    </nav>
    <!-- Navbar Ends -->
  </section>
</header>

