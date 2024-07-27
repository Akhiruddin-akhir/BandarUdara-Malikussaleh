<!DOCTYPE html>
<html class="no-js">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bandar Udara Malikussaleh</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="Akhiruddin Hasibuan" />
	<link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/llhok.png' ?>">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="<?php echo base_url() . 'theme/favicon.ico' ?>">

	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/animate.css' ?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/icomoon.css' ?>">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/bootstrap.css' ?>">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/flexslider.css' ?>">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/style.css' ?>">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url() . 'theme/js/modernizr-2.6.2.min.js' ?>"></script>
	<?php
	error_reporting(0);
	function limit_words($string, $word_limit)
	{
		$words = explode(" ", $string);
		return implode(" ", array_splice($words, 0, $word_limit));
	}

	?>

</head>

<body>


	<div id="fh5co-page">
		<header id="fh5co-header" role="banner" style="height:130px;position: fixed; margin-top:0px; background:rgba(0, 144, 218, 0.5)">
			<div class="container">
				<div class="header-inner">
					<h1 style="line-height:normal !important; letter-spacing:5px; font-size:20px !important; margin-top:25px; "><a href="<?php echo base_url() . '' ?>">Bandar Udara Malikussaleh</a></h1>
					<nav role="navigation">
						<ul>
							<li><a href="<?php echo base_url() . '' ?>">Home</a></li>
							<li><a href="<?php echo base_url() . 'about' ?>">About</a></li>
							<li><a href="<?php echo base_url() . 'portfolio' ?>">Portfolio</a></li>
							<li><a href="<?php echo base_url() . 'artikel' ?>">Blog</a></li>
							<li><a href="<?php echo base_url() . 'gallery' ?>">Gallery</a></li>
							<li><a href="<?php echo base_url() . 'kontak' ?>">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<aside id="fh5co-hero" style="height: 85vh;">
			<div class="flexslider" style="height: 85vh;">
				<ul class="slides" style="height: 85vh;">
					<li style="background-image: url(<?php echo base_url() . 'theme/images/bg_3.jpg' ?>);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="col-md-10 col-md-offset-1 text-center  slider-text">
								<div class="slider-text-inner">
									<h2>Kami siap melayani Anda</h2>
									<p class="fh5co-lead"></p>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="fh5co-about animate-box" style="padding-top:30px">
				<div class="container item-block">
					<div class="row">
						<div class="col-md-12 text-center fh5co-heading">
							<h2 style="font-size: 24px;"><b>== CONTACT ==</h2>
						</div>
					</div>
				</div>
			</div>
		</aside>

		<div class="fh5co-contact animate-box">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<h3>Contact Info.</h3>
						<ul class="contact-info">
							<li><i class="icon-map"></i>Jln. BANDAR UDARA MALIKUSSALEH DS.PINTO MAKMUR KEC.MUARA BATU KAB. ACEH UTARA KODE POS 24355</li>
							<li><i class="icon-phone"></i>+ 62 645 8452215</li>
							<li><i class="icon-envelope"></i><a href="#">Malikussalehairport@gmail.com</a></li>
						</ul>
					</div>

					<div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
						<?php echo $this->session->flashdata('msg'); ?>
						<div class="row">
							<form method="post" action="<?php echo base_url() . 'kontak/kirim_pesan' ?>">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" name="nama" placeholder="Nama" type="text" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" name="email" placeholder="Email" type="email" required>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="pesan" class="form-control" id="" cols="30" rows="7" placeholder="Message" required></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input value="Kirim Pesan" class="btn btn-primary" type="submit">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="map" class="animate-box" data-animate-effect="fadeIn">
			<div class="row">
				<div class="col-md-12">
					<!-- Google Map -->
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.215432265596!2d96.94690525068651!3d5.2288189961875435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3047704cc1084399%3A0x2db6df1b3432889!2sBandara%20Malikussaleh%2C%20Lhokseumawe!5e0!3m2!1sid!2sid!4v1644464145504!5m2!1sid!2sid" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
		</div>

		<?php $this->load->view('v_footer'); ?>
	</div>


	<!-- jQuery -->
	<script src="<?php echo base_url() . 'theme/js/jquery.min.js' ?>"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url() . 'theme/js/jquery.easing.1.3.js' ?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url() . 'theme/js/bootstrap.min.js' ?>"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url() . 'theme/js/jquery.waypoints.min.js' ?>"></script>
	<!-- Easy PieChart -->
	<script src="<?php echo base_url() . 'theme/js/jquery.easypiechart.min.js' ?>"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url() . 'theme/js/jquery.flexslider-min.js' ?>"></script>
	<!-- Stellar -->
	<script src="<?php echo base_url() . 'theme/js/jquery.stellar.min.js' ?>"></script>
	<!-- MAIN JS -->
	<script src="<?php echo base_url() . 'theme/js/main.js' ?>"></script>

</body>

</html>