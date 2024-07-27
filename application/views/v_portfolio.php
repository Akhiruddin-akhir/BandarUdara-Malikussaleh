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
					<li style="background-image: url(<?php echo base_url() . 'theme/images/bg_2.jpg' ?>);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
								<div class="slider-text-inner">
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(<?php echo base_url() . 'theme/images/bg_1.jpg' ?>); ">
						<div class="container">
							<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
								<div class="slider-text-inner">

								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(<?php echo base_url() . 'theme/images/bg_2.jpg' ?>);">
						<div class="container">
							<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
								<div class="slider-text-inner">

								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(<?php echo base_url() . 'theme/images/3.jpg' ?>);">
						<div class="container">
							<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
								<div class="slider-text-inner">

								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="fh5co-about animate-box" style="padding-top:30px">
				<div class="container item-block">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
							<h2><b>== PORTOFOLIO ==</< /h2>
						</div>
					</div>
				</div>
			</div>
		</aside>



		<div id="fh5co-grid-products" class="animate-box" style="padding-top: 10px;">

			<?php
			foreach ($data->result_array() as $i) :
				$port_id = $i['port_id'];
				$port_judul = $i['port_judul'];
				$port_deskripsi = $i['port_deskripsi'];
				$port_author = $i['port_author'];
				$port_image = $i['port_image'];
				$port_tglpost = $i['tanggal'];

			?>
				<div class="col-md-4">
					<a href="#"><img src="<?php echo base_url() . 'assets/images/' . $port_image; ?>" class="img-responsive"></a>
					<div class="v-align">
						<div class="v-align-middle"><br />
							<h3 class="title"><?php echo $port_judul; ?></h3>
							<h5 class="category">Bandar Udara Malikussaleh</h5>
						</div>
					</div>
				</div>
			<?php endforeach; ?>


		</div>
		<br />
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<br />
					<p><?php echo $page; ?></p>
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