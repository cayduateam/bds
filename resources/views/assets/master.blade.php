<!DOCTYPE html>
<html  lang="en-US">
<head id="Head">
	<!--*********************************************-->
	<!-- BDS - http://www.bds.com   -->
	<!-- Copyright (c) 20016-2017, by LyNguyen -->
	<!--*********************************************-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title> BDS | LyNguyen</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width" />

	<meta name="keywords" content="bat dong san, bds nha trang, nha trang" />
	<meta name="copyright" content="WIDO" />
	<meta name="author" content="WIDO" />
	<meta name="robots" content="noindex,nofollow" />
	<meta http-equiv="content-language" content="vi"/>
	<meta name="geo.placename" content="Nha Trang, Viet Nam" />
	<meta name="geo.region" content="VN-62" />
	<meta name="geo.position" content="20.850044;106.72169" />
	<meta name="ICBM" content="20.850044, 106.72169" />
	<meta name="revisit-after" content=" days">
	<meta name="dc.description" content="Bat Dong San Nha Trang">
	<meta name="dc.keywords" content="bat dong san, bds nha trang, nha trang">
	<meta name="dc.subject" content="Thiet ke web Hai Phong">
	<meta name="dc.created" content="2013-03-03">
	<meta name="dc.publisher" content="Cong ty ...">
	<meta name="dc.rights.copyright" content="Wido">
	<meta name="dc.creator.name" content="Lynguyen">
	<meta name="dc.creator.email" content="sales@abcccc.vn">
	<meta name="dc.identifier" content="http:///">
	<meta name="dc.language" content="vi-VN">
	
	<link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
	<link rel="manifest" href="images/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">


	<base href="{{asset('')}}">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
	<link rel="stylesheet" type="text/css" href="css/aos.css">
	<link rel="stylesheet" href="css/public.css">
	@yield('style')
	<link rel="stylesheet" href="css/reponsive.css">
  


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
  </script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js">
  </script>
  <![endif]-->
	<!-- Google Font -->
	<link rel="stylesheet" media="screen" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body id="body">

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10&appId=582114615190679";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
@include('assets.header')

<nav>
	@yield('breadcrumbs')
</nav>

<section class="main_container">
@yield('content')
</section>


@include('assets.footer')


<!-- JavaScript & jQuery Plugins -->
<!-- jQuery Load -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.2/umd/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/wow.js"></script>
<script src="js/public.js"></script>
@yield('script')
</body>
</html>