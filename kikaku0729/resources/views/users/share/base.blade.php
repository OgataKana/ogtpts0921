
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Marble &mdash; Free HTML5 Bootstrap Website Template by FreeHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

  	<!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FreeHTML5.co

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	-->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

	<!--app.css-->
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

	<!-- Modernizr JS -->
	<script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]-->
	<script src="{{ asset('js/respond.min.js') }}"></script>
	<![endif]-->

	</head>
	<style>
			.container{
				width: 60%;
				margin-top: 80px;
				margin-left: 20%;
				margin-right: 10%;
			}
	</style>
	<body>


	<div id="fh5co-page">

		<!--ヘッダー-->
		<!--@yield('header')-->
		<div class="header">
				<a href="" class="logo"><img src="{{asset('images/parts/logo.png')}}" alt="" height="75px" weight="" padding="50px"
				style="
					margin-left: 50px;
					margin-top: 10px;
				"></a>
			<div class="header-menu">
				<!--<div class='nmi'>-->
				<ul>
					<!--<p>-->
						{{-- <li><a href=""><i class="news"></i>news</a></li> --}}
					<!--</p>-->
					<!--<p>-->
						{{-- <li><a href=""><i class="new_mail"></i>mail</a></li> --}}
					<!--</p>-->
					<!--<p>-->
						{{-- <li><a href=""><i class="new_mail"></i>アイコン</a></li> --}}
					<!--</p>-->
				<!--</div>-->
				<!--<ul>-->
					<li><a href="{{ route('user.edit') }}"><i class="user_name"></i>{{Auth::user()->user_name }}さん</a></li>
			        <li>
						<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
							{{ __('Logout') }}
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							{{csrf_field()}}
						</form>

					</li>
				</ul>
			</div>
		</div>


		<!--サイドバー-->
@section('sidebar')
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight" style="height: 458px;padding-top: 100px;">

			<h1 id="fh5co-logo"><a href="">Menu</a></h1>
			<nav id="fh5co-main-menu" role="navigation">
		<ul>
			<li class="active"><a href="{{ route('home') }}">List</a></li>
			<li class="active"><a href="{{ route('favorite') }}">Favarite</a></li>
			<li class="active"><a href="{{ route('message') }}">Messages</a></li>
            {{-- <li class="active"><a href="{{ route('photodata') }}">Photo Data</a></li> --}}
            {{-- <li class="active"><a href="{{ route('sales') }}">Sales</a></li> --}}
           	{{-- <li class="active"><a href="{{ route('profile') }}">PR情報編集</a></li> --}}
            <li class="active"><a href="{{ route('user.edit') }}">個人情報管理</a></li>
          	<li class="active"><a href="{{ route('Q&A') }}">サービスについて</a></li>
		</ul>
	</nav>

			<div class="fh5co-footer">
				{{-- <p><small>&copy; 2016 Blend Free HTML5. All Rights Reserved.</span> <span>Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> </span> <span>Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></span></small></p> --}}
				<ul>
					<!--<li><a href="#"><i class="icon-facebook2"></i></a></li>-->
					<!--<li><a href="#"><i class="icon-twitter2"></i></a></li>-->
					<!--<li><a href="#"><i class="icon-instagram"></i></a></li>-->
					<!--<li><a href="#"><i class="icon-linkedin2"></i></a></li>-->
				</ul>
			</div>

		</aside>
	@show

				@yield('content')

	</div>
	 <!--共通部分 JS読み込み-->

	<script src="{{ asset('js/app.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>

	<!-- Waypoints -->
	<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
	<!-- Flexslider -->
	<script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>

	<script src="{{ asset('js/respond.min.js') }}"></script>

	<script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>

	<script src="{{ asset('js/jquery.min.js') }}"></script>

	<script src="{{ asset('js/google_map.js') }}"></script>

	<script src="{{ asset('js/bootstrap.min.js') }}"></script>

	<!-- MAIN JS -->
	<script src="{{ asset('js/main.js') }}"></script>


	<script src="{{ asset('js/favorite.js') }}" data-userid="{{Auth::user()->user_id}}" id="favorite-script" ></script>

	</body>

</html>
