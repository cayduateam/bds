<!DOCTYPE html>
<html>
<head>
  <title>Admin BDS</title>
  <meta charset="UTF-8">
  <meta name="robots" content="noindex,nofollow" />
  <base href="{{asset('')}}">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
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
  <!-- jQuery 3 -->
  <script src="js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="summernote/summernote.min.js"></script>
@yield('script')
<script src="admin/js/admin.js"></script>
</body>
</html>