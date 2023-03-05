<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>أكاديمي</title>
	<!-- Stylesheets -->
	<link href="{{asset('assets/website/css/bootstrap.css')}}" rel="stylesheet">
	<link href="{{asset('assets/website/css/font-awesome.css')}}" rel="stylesheet">
	<link href="{{asset('assets/website/css/owl.carousel.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/website/css/owl.theme.default.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/website/css/animate.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/website/css/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{asset('assets/website/css/swiper.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/website/css/style-slide.css')}}" rel="stylesheet">
	<link href="{{asset('assets/website/css/style.css')}}" rel="stylesheet">
	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link href="{{asset('assets/website/css/responsive.css')}}" rel="stylesheet">
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
	<script src="{{asset('assets/website/js/jquery-1.12.2.min.js')}}"></script>
</head>
<body  class="gradientLayout">
	<div id="search">
        <div class="overlay-close"></div>
        <div class="center-screen">
	        <form action="#" class="form_search" method="get">
				<div class="form-group">
					<button type="submit" class="search_submit"><i class="fa fa-search" aria-hidden="true"></i></button>
					<input type="text" name="s" class="form-control" placeholder="Search Here ...">
				</div>
			</form>
		</div>
    </div>
	<div class="main-wrapper">
		<header id="header">
			<div class="container">
				<div class="logo-site">
					<a href="#"><img src="{{asset('assets/website/images/logo.svg')}}" alt=""></a>
				</div>
				<div class="col-header-right">
					<ul class="head-menu clearfix">
						<li><a href="#">Sign up</a></li>
						<li><a href="#">Sign in</a></li>
						<li class="focus-line"><a href="#">lineKW</a></li>
					</ul>
					<div id="menu_bars" class="right hidden visible-xs">
			            <span class="t1"></span>
			            <span class="t2"></span>
			            <span class="t3"></span>
			        </div>
					<a href="#search" class="search-icon">
						<img src="{{asset('assets/website/images/search.svg')}}" alt="">
					</a>
				</div>
				<div class="sidebar_menu">
		            <nav class="pushmenu pushmenu-right">
		                <a class="push-logo" href="#">
		                    <img src="{{asset('assets/website/images/logo-xs.svg')}}" alt="Line Technology"></a>
		                <ul class="push_nav centered">
		                    <li class="clearfix">
		                        <a href="#"><span>01.</span>Sign up</a>
		                    </li>
		                    <li class="clearfix">

		                        <a href="#"> <span>02.</span>Sign in</a>
		                    </li>
		                    <li class="clearfix">
		                        <a href="#"> <span>03.</span>lineKW</a>
		                    </li>
		                </ul>
		                <div class="clearfix"></div>
		                <ul class="social_icon black top25 bottom20 list-inline">
		                    <li><a href="#"><i class="fa fa-fw fa-facebook"></i></a></li>
		                    <li><a href="#"><i class="fa fa-fw fa-twitter"></i></a></li>
		                    <li><a href="#"><i class="fa fa-fw fa fa-instagram"></i></a></li>
		                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
		                </ul>
		            </nav>
		        </div>
			</div>
		</header><!--header-->

@yield('content')

		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-4">
						<div class="f-box">
							<h2 class="f-box-title">Contact us</h2>
							<div class="contact-info">
								<h3>Kuwait, Salmeya S.T</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
								<ul class="social-links clearfix">
									<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-offset-2 col-md-3  col-sm-4">
						<div class="f-box">
							<h2 class="f-box-title">Links</h2>
							<ul class="menu-footer">
								<li><a href="#">Privacy policy</a></li>
								<li><a href="#">Tearms & conditions</a></li>
								<li><a href="#">FAQ</a></li>
							</ul>
							<div class="payment-thumbs">
								<img src="{{asset('assets/website/images/payment.png')}}" alt="">
							</div>
						</div>
					</div>
					<div class="col-md-offset-1 col-md-3  col-sm-4">
						<div class="f-box">
							<h2 class="f-box-title">Contact us</h2>
							<form class="form-contact" action="#">
								<div class="form-group">
									<input type="email" class="form-control" placeholder="Email Address">
								</div>
								<div class="form-group">
									<textarea class="form-control" placeholder="Email Address"></textarea>
								</div>
								<button type="submit" class="btn btn-submit">Send</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</footer><!--footer-->
	</div><!--main-wrapper-->
	<script src="{{asset('assets/website/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/website/js/owl.carousel.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/website/js/wow.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/website/js/swiper.min.js')}}"></script>
	<script src="{{asset('assets/website/js/jquery.appear.js')}}"></script>
	<script src="{{asset('assets/website/js/parallax.min.js')}}"></script>
	<script src="{{asset('assets/website/js/script.js')}}"></script>
</body>
</html>
