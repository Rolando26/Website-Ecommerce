<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
    
    @yield('title')
    
	<link rel="stylesheet" href="{{ asset('ecommerce/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('ecommerce/vendors/linericon/style.css') }}">
	<link rel="stylesheet" href="{{ asset('ecommerce/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('ecommerce/vendors/owl-carousel/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('ecommerce/vendors/lightbox/simpleLightbox.css') }}">
	<link rel="stylesheet" href="{{ asset('ecommerce/vendors/nice-select/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ asset('ecommerce/vendors/animate-css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('ecommerce/vendors/jquery-ui/jquery-ui.css') }}">
	
	<link rel="stylesheet" href="{{ asset('ecommerce/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('ecommerce/css/responsive.css') }}">

	<style>
	.menu-sidebar-area {
		list-style-type:none; padding-left: 0; font-size: 15pt;
	}
	.menu-sidebar-area > li {
		margin:0 0 10px 0;
		list-style-position:inside;
		border-bottom: 1px solid white;
	}
	.menu-sidebar-area > li > a {
		color: white
	}
	</style>
	@yield('css')
</head>

<body>
	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="top_menu row m0 bg-light">
			<div class="container-fluid">
				<div class="float-left">
					<p>Call Us: 012 44 5698 7456 896</p>
				</div>
				<div class="float-right">
				<ul class="right_side">
					@if (auth()->guard('customer')->check())
						<li><a href="{{ route('customer.logout') }}">Logout</a></li>
					@else
						<li><a href="{{ route('customer.login') }}">Login</a></li>
					@endif
					<li><a href="{{ route('customer.dashboard') }}">My Account</a></li>
					<li><a href="https://api.whatsapp.com/send?phone=6281282498758&text=Hallo%20Saya%20Ingin%20....">Contact Us</a></li>
				</ul>
				</div>
			</div>
		</div>
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="{{ route('front.index') }}">
						<img src="{{ asset('assets/img/mantou_asli.png') }}" alt="" width="70px" height="70px" style="margin-left:-30px;margin-right:30px;">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					 aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<div class="row w-100">
							<div class="col-lg-8">
								@include('layouts.ecommerce.module.menu')
							</div>
							<div class="col-lg-4">
								<ul class="nav navbar-nav navbar-right right_nav pull-right">
									<hr>
									<li class="nav-item">
										<a href="{{ route('customer.dashboard') }}" class="icons">
											<i class="fa fa-user" aria-hidden="true"></i>
										</a>
									</li>
									<hr>
									<li class="nav-item">
										<a href="{{ route('front.list_cart') }}" class="icons">
											<i class="lnr lnr lnr-cart"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

    @yield('content')
	<!--================ start footer Area  =================-->
	<footer class="footer-area section_gap bg-light">
		<div class="container">
			<div class="row">
				<div class="col-lg-9  col-md-4 col-sm-4">
					<div class="single-footer-widget">
						<h6 class="footer_title">About Us</h6>
						Menjual mantou dengan berbagai pilihan rasa Vegan dan vegetarian bisa dikukus dan digoreng.<br>pemesanan yang di kukus dan digoreng dikirim pakai gojek atau grab.<br>pemesanan yang Frozen bisa melalui semua ekspedisi yang tersedia
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-footer-widget f_social_wd">
						<h6 class="footer_title">Follow Us</h6>
						<p>Let us be social</p>
						<div class="f_social">
							<a href="#">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="#">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="https://www.instagram.com/mantou_adut/?hl=id">
								<i class="fa fa-instagram"></i>
							</a>
							<a href="https://api.whatsapp.com/send?phone=6281282498758&text=Hallo%20Saya%20Ingin%20....">
								<i class="fa fa-whatsapp"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer-bottom d-flex justify-content-between align-items-center">
				<p class="col-lg-12 footer-text text-center">
                    Made with 
                    <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.instagram.com/ardi.hp/" target="_blank">Ardi</a> & <a href="https://www.instagram.com/rola__ndo/" target="_blank">Ando</a>
				</p>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->

	<script src="{{ asset('ecommerce/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('ecommerce/js/popper.js') }}"></script>
	<script src="{{ asset('ecommerce/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('ecommerce/js/stellar.js') }}"></script>
	<script src="{{ asset('ecommerce/vendors/lightbox/simpleLightbox.min.js') }}"></script>
	<script src="{{ asset('ecommerce/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ asset('ecommerce/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
	<script src="{{ asset('ecommerce/vendors/isotope/isotope-min.js') }}"></script>
	<script src="{{ asset('ecommerce/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('ecommerce/js/jquery.ajaxchimp.min.js') }}"></script>
	<script src="{{ asset('ecommerce/vendors/counter-up/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('ecommerce/vendors/flipclock/timer.js') }}"></script>
	<script src="{{ asset('ecommerce/vendors/counter-up/jquery.counterup.js') }}"></script>
	<script src="{{ asset('ecommerce/js/mail-script.js') }}"></script>
	<script src="{{ asset('ecommerce/js/theme.js') }}"></script>
	@yield('js')
</body>
</html>