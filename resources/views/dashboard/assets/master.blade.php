<!DOCTYPE html>
<html>
<head>
  <title>Admin BDS</title>
  <meta charset="UTF-8">
  <meta name="robots" content="noindex,nofollow" />
  <base href="{{asset('')}}">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="extras/animate.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" media="screen" href="fonts/font-awesome/font-awesome.min.css">
  <link rel="stylesheet" href="summernote/summernote.css">
  @yield('style')
<!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/css/admin.css">

</head>
<body>
<section class="main_container wrapper" id="page-wrapper">

  @include('dashboard.assets.header')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2 menu-container">
      @include('dashboard.assets.menu')
    </div>
    <div class="col-md-10 content-container">
      @yield('content')
    </div>
  </div>
</div>

</section>

@include('dashboard.assets.footer')
<script src="js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-switch.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/responsive-tabs.js"></script>
<script src="summernote/summernote.min.js"></script>
@yield('script')
<script src="admin/js/admin.js"></script>
</body>
</html>