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
	<meta name="robots" content="index,follow" />
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
	<meta name="dc.publisher" content="Cong ty phan mem Hai Phong HPSOFT">
	<meta name="dc.rights.copyright" content="HPSOFT">
	<meta name="dc.creator.name" content="HPSOFT JSC">
	<meta name="dc.creator.email" content="sales@hpsoft.vn">
	<meta name="dc.identifier" content="http://hpsoft.vn/">
	<meta name="dc.language" content="vi-VN">
	<link rel="shortcut icon" href="favicon.ico" />
	<base href="{{asset('')}}">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <!--Fonts-->
    <link rel="stylesheet" media="screen" href="fonts/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" media="screen" href="fonts/simple-line-icons.css">    
     
    <!-- Extras -->
	<link rel="stylesheet" type="text/css" href="extras/owl/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="extras/owl/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="extras/animate.css">
    <link rel="stylesheet" type="text/css" href="extras/normalize.css">
    <link rel="stylesheet" type="text/css" href="extras/settings.css">
	@yield('style')
    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="css/colors/red.css" media="screen" />       
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
    </script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js">
    </script>
    <![endif]-->
  	<!-- Google Font -->
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  	<!-- Theme style -->
	<link rel="stylesheet" href="css/public.css">

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

<section class="main_container" style="min-height: 1000px">
@yield('content')
</section>


@include('assets.footer')


<!-- JavaScript & jQuery Plugins -->
<!-- jQuery Load -->
<script src="js/jquery-min.js"></script>
<!-- Bootstrap JS -->
<script src="js/bootstrap.min.js"></script>
<!--Text Rotator-->
<script src="js/jquery.mixitup.js"></script>
<!--WOW Scroll Spy-->
<script src="js/wow.js"></script>
<!-- OWL Carousel -->
<script src="js/owl.carousel.min.js"></script>

<!-- WayPoint -->
<script src="js/waypoints.min.js"></script>
<!-- CounterUp -->
<script src="js/jquery.counterup.min.js"></script>
<!-- ScrollTop -->
<script src="js/scroll-top.js"></script>
<!-- Appear -->
<script src="js/jquery.appear.js"></script>
<script src="js/jquery.vide.js"></script>
 <!-- All JS plugin Triggers -->
<script src="js/main.js"></script>
<!-- <script src="assets/js/color-switcher.js"></script> -->
<script src="js/js.js"></script>
@yield('script')
</body>
</html>