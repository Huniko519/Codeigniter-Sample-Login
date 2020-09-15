<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/themify-icons.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/cryptocoins.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/cryptocoins-colors.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="<?php echo base_url();?>assets/icon/favicon-32x32.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>Smart Mine – Crypto Mining HTML Template</title>

</head>
<body>
	<!-- header -->
	<header class="header">
		<!-- logo -->
		<div class="header__logo">
			<a href="<?php echo base_url();?>assets/index.html">
				<img src="<?php echo base_url();?>assets/img/logo.svg" alt="">
			</a>
		</div>
		<!-- end logo -->

        <!-- navigation -->
        <ul class="header__nav">
            
			<li class="dropdown header__dropdown">
                
				<a class="dropdown-toggle btn btn--border" href="" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-radius: 10px; padding: 0px 20px 0px 20px; color: black"><?php echo $this->session->userdata('user_name');?></a>
				<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuLink1">
					<li><a href="<?php echo base_url();?>Profile">Profile</a></li>
					<li><a href="<?php echo base_url();?>">Logout</a></li>
				</ul>
			</li>
		</ul>
		<!-- end navigation -->
		<!-- mob button -->
		<button class="header__menu" type="button">
			<i class="ti-menu"></i>
			<i class="ti-close"></i>
		</button>
		<!-- end mob button -->
	</header>
	<!-- end header -->

	<!-- pricing -->
	<section class="section section--border-bottom">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12 col-sm-10 offset-sm-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
					<h2 class="section__title">Pricing</h2>
					<p class="section__text">Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
				</div>
				<!-- end section title -->
			</div>

			<div class="row">
				<div class="col-12 col-lg-10 offset-lg-1 col-xl-12 offset-xl-0">
					<div class="price-wrap">
						<!-- price -->
						<div class="price">
							<h3 class="price__title">Small</h3>
							<ul class="price__list">
								<li><b>Minimal Hashedrate:</b> 1 MH/s</li>
								<li><b>Service pay:</b> 0.005$ / 1 MH/s / 24h</li>
								<li><b>Equipment:</b> HashCoins SCRYPT</li>
								<li>Automatic charging in BTC</li>
								<li><b>1 year</b></li>
							</ul>
							<span class="price__value">$2.50</span>
							<p class="price__text">for 1 MH/s</p>
							<button class="btn btn--border btn--center" type="button">Buy now</button>
						</div>
						<!-- end price -->

						<!-- price -->
						<div class="price">
							<h3 class="price__title">Medium</h3>
							<ul class="price__list">
								<li><b>Minimal Hashedrate:</b> 10 GH/s</li>
								<li><b>Service pay:</b> 0.0035$ / 10 GH/s / 24h</li>
								<li><b>Equipment:</b> HashCoins SHA-256</li>
								<li>Automatic charging in BTC</li>
								<li><b>1 year</b></li>
							</ul>
							<span class="price__value">$5.20</span>
							<p class="price__text">for 10 GH/s</p>
							<button class="btn btn--border btn--center" type="button">Buy now</button>
						</div>
						<!-- end price -->

						<!-- price -->
						<div class="price price--best">
							<h3 class="price__title">Large</h3>
							<ul class="price__list">
								<li><b>Minimal Hashedrate:</b> 100 KH/s</li>
								<li><b>Service pay:</b> No</li>
								<li><b>Equipment:</b> GPU Rigs</li>
								<li>Automatic charging in ETH</li>
								<li><b>1 year</b></li>
							</ul>
							<span class="price__value">$7.70</span>
							<p class="price__text">for 100 KH/s</p>
							<button class="btn btn--center" type="button">Buy now</button>
						</div>
						<!-- end price -->

						<!-- price -->
						<div class="price">
							<h3 class="price__title">Pro</h3>
							<ul class="price__list">
								<li><b>Minimal Hashedrate:</b> 1 MH/s</li>
								<li><b>Service pay:</b> No</li>
								<li><b>Equipment:</b> Multi-Factor</li>
								<li>Automatic charging in DASH</li>
								<li><b>1 year</b></li>
							</ul>
							<span class="price__value">$9.90</span>
							<p class="price__text">for 1 MH/s</p>
							<button class="btn btn--border btn--center" type="button">Buy now</button>
						</div>
						<!-- end price -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end pricing -->

	<!-- partners -->
	<div class="partners section--border-top section--border-bottom">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- partners slider -->
					<div class="owl-carousel partners__slider">
						<!-- slider item -->
						<div class="item">
							<a href="<?php echo base_url();?>assets/#">
								<img src="<?php echo base_url();?>assets/img/partners/partner.png" alt="">
							</a>
						</div>
						<!-- end slider item -->

						<!-- slider item -->
						<div class="item">
							<a href="<?php echo base_url();?>assets/#">
								<img src="<?php echo base_url();?>assets/img/partners/partner.png" alt="">
							</a>
						</div>
						<!-- end slider item -->

						<!-- slider item -->
						<div class="item">
							<a href="<?php echo base_url();?>assets/#">
								<img src="<?php echo base_url();?>assets/img/partners/partner.png" alt="">
							</a>
						</div>
						<!-- end slider item -->

						<!-- slider item -->
						<div class="item">
							<a href="<?php echo base_url();?>assets/#">
								<img src="<?php echo base_url();?>assets/img/partners/partner.png" alt="">
							</a>
						</div>
						<!-- end slider item -->

						<!-- slider item -->
						<div class="item">
							<a href="<?php echo base_url();?>assets/#">
								<img src="<?php echo base_url();?>assets/img/partners/partner.png" alt="">
							</a>
						</div>
						<!-- end slider item -->

						<!-- slider item -->
						<div class="item">
							<a href="<?php echo base_url();?>assets/#">
								<img src="<?php echo base_url();?>assets/img/partners/partner.png" alt="">
							</a>
						</div>
						<!-- end slider item -->

						<!-- slider item -->
						<div class="item">
							<a href="<?php echo base_url();?>assets/#">
								<img src="<?php echo base_url();?>assets/img/partners/partner.png" alt="">
							</a>
						</div>
						<!-- end slider item -->
					</div>
					<!-- end partners slider -->
				</div>
			</div>
		</div>
	</div>
	<!-- end partners -->

	<!-- footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-6 col-md-4 col-lg-3">
					<!-- logo -->
					<div class="footer__logo">
						<a href="<?php echo base_url();?>assets/index.html">
							<img src="<?php echo base_url();?>assets/img/logo.svg" alt="">
						</a>
					</div>
					<!-- end logo -->
				</div>

				<div class="col-6 col-sm-6 col-md-4 col-lg-3">
					<h6 class="footer__title">Features</h6>
					<ul class="footer__list">
						<li><a href="<?php echo base_url();?>assets/#">Instant connection</a></li>
						<li><a href="<?php echo base_url();?>assets/#">Instant conclusion</a></li>
						<li><a href="<?php echo base_url();?>assets/#">Detailed statistics</a></li>
						<li><a href="<?php echo base_url();?>assets/#">Power distribution</a></li>
					</ul>
				</div>

				<div class="col-6 col-sm-6 col-md-4 col-lg-3">
					<h6 class="footer__title">Company</h6>
					<ul class="footer__list">
						<li><a href="<?php echo base_url();?>assets/#">Customers</a></li>
						<li><a href="<?php echo base_url();?>assets/#">Careers</a></li>
						<li><a href="<?php echo base_url();?>assets/#">Press</a></li>
						<li><a href="<?php echo base_url();?>assets/#">Contact Us</a></li>
					</ul>
				</div>

				<div class="col-12 col-sm-6 col-lg-3">
					<h6 class="footer__title">Contact</h6>
					<ul class="footer__list">
						<li><a href="<?php echo base_url();?>assets/tel:+18002345678">+1 800 234 56 78</a></li>
						<li><a href="<?php echo base_url();?>assets/mailto:support@smartmine.com">support@smartmine.com</a></li>
					</ul>
					<ul class="footer__social">
						<li><a href="<?php echo base_url();?>assets/#"><i class="ti-facebook"></i></a></li>
						<li><a href="<?php echo base_url();?>assets/#"><i class="ti-linkedin"></i></a></li>
						<li><a href="<?php echo base_url();?>assets/#"><i class="ti-twitter-alt"></i></a></li>
					</ul>
				</div>

				<div class="col-12">
					<div class="footer__copyright">
						<small>© 2020 Smart Mine. Create by <a href="<?php echo base_url();?>assets/https://themeforest.net/user/dmitryvolkov/portfolio" target="_blank">Dmitry Volkov</a></small>

						<ul>
							<li><a href="<?php echo base_url();?>assets/about.html">About Smart Mine</a></li>
							<li><a href="<?php echo base_url();?>assets/privacy.html">Privacy Policy</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- end footer -->

	<!-- JS -->
	<script src="<?php echo base_url();?>assets/js/jquery-3.5.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/smooth-scroll.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/particles.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/particles-app.js"></script>
	<script src="<?php echo base_url();?>assets/js/main.js"></script>
</body>
</html>