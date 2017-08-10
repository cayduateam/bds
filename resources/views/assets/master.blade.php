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

	<meta name="keywords" content="thiet ke web, thiết kế web, thiet ke website, thiết kế website, thiết kế website tại hải phòng, thiet ke website tai hai phong, seo" />
	<meta name="copyright" content="HPSOFT JSC" />
	<meta name="author" content="HPSOFT" />
	<meta name="robots" content="index,follow" />
	<meta http-equiv="content-language" content="vi"/>
	<meta name="geo.placename" content="Hai Phong, Viet Nam" />
	<meta name="geo.region" content="VN-62" />
	<meta name="geo.position" content="20.850044;106.72169" />
	<meta name="ICBM" content="20.850044, 106.72169" />
	<meta name="revisit-after" content=" days">
	<meta name="dc.description" content="Thiet ke web Hai Phong, Cong ty thiet ke web chuan SEO">
	<meta name="dc.keywords" content="Thiet ke web, thiet ke website, thiet ke web Hai Phong, thiet ke web chuan SEO">
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
	<link rel="stylesheet" href="{{asset('css/public.css')}}">
</head>
<body id="body">
@include('assets.header')

<section class="main_container">
@yield('content')
</section>


@include('assets.footer')
</body>
</html>