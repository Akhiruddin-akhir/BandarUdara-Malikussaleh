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
	<link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/favicon.png' ?>">

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


    <div id="fh5co-page">
		<header id="fh5co-header" role="banner" style="height:80px;position: fixed; margin-top:0px; background:rgba(0, 100, 218, 0.5)">
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


		<aside id="fh5co-hero" class="js-fullheight" style="height: 80vh;">
			<div class="flexslider" style="height: 80vh;">
				<ul class="slides" style="height: 80vh;">
					<li style="background-image: url(<?php echo base_url() . 'theme/images/bg_2.jpg' ?>);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
								<div class="slider-text-inner">
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(<?php echo base_url() . 'theme/images/images.jpeg' ?>); ">
						<div class="container">
							<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
								<div class="slider-text-inner">

								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(<?php echo base_url() . 'theme/images/image_1.jpg' ?>);">
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
			<div class="container">
			<div class="slider-text-inner">
			<span>
			<marquee>Selamat Datang di Website Resmi Bandar Udara Malikussaleh Kota Lhokseumawe</marquee>
			</span>
			</div>
			</div>
			<div id="fh5co-why-us" class="animate-box" style="padding-top:10px;">
				<div class="container item-block" style="width: 100%;">
					<div class="row">
						<div class="col-md-4 text-center ">
							<span class="icon" style="margin-bottom: 10px;"><img src="<?php echo base_url() . 'theme/images/30.svg' ?>" class="img-responsive" style="width:70px; height:70px; margin-bottom:10px; margin-left: auto;
  margin-right: auto; margin-top:20px"></span>
							<h3>JADWAL</h3>
							<p><a href="<?php echo base_url() . 'portfolio' ?>" class="btn btn-primary btn-outline with-arrow">SELANJUTNYA <i class="icon-arrow-right"></i></a></p>
						</div>
						<div class="col-md-4 text-center ">
							<span class="icon"><img src="<?php echo base_url() . 'assets/images/pesawat.png' ?>" class="img-responsive" style="width:70px; height:70px; margin-bottom:10px; margin-left: auto;
  margin-right: auto;margin-top:20px"></span>
							<h3>PESAWAT</h3>
							<p>Konsultasi kan kebutuhan anda pada kami dan ketahui layanan lain yang kami berikan.</p>
							<p><a href="<?php echo base_url() . 'portfolio' ?>" class="btn btn-primary btn-outline with-arrow">SELANJUTNYA <i class="icon-arrow-right"></i></a></p>
						</div>
						<div class="col-md-4 text-center ">
							<span class="icon"><img src="<?php echo base_url() . 'theme/images/27.svg' ?>" class="img-responsive" style="width:70px; height:70px; margin-bottom:10px; margin-left: auto;
  margin-right: auto;margin-top:20px"></span>
							<h3>BERITA</h3>
							<p></p>
							<p><a href="<?php echo base_url() . 'blog' ?>" class="btn btn-primary btn-outline with-arrow">SELANJUTNYA <i class="icon-arrow-right"></i></a></p>
						</div>
					</div>
				</div>
			</div>
		</aside>
		<!-- <div id="fh5co-why-us" class="animate-box">
			<div class="container">
				<div class="row">
					<div class="col-md-4 text-center item-block">
						<span class="icon"><img src="<?php echo base_url() . 'theme/images/30.svg' ?>" class="img-responsive"></span>
						<h3>JADWAL</h3>
						<p></p>
						<p><a href="<?php echo base_url() . 'portfolio' ?>" class="btn btn-primary btn-outline with-arrow">SELANJUTNYA <i class="icon-arrow-right"></i></a></p>
					</div>
					<div class="col-md-4 text-center item-block">
						<span class="icon"><img src="<?php echo base_url() . 'theme/images/18.svg' ?>" class="img-responsive"></span>
						<h3>PESAWAT</h3>
						<p>Konsultasi kan kebutuhan anda pada kami dan ketahui layanan lain yang kami berikan.</p>
						<p><a href="<?php echo base_url() . 'portfolio' ?>" class="btn btn-primary btn-outline with-arrow">SELANJUTNYA <i class="icon-arrow-right"></i></a></p>
					</div>
					<div class="col-md-4 text-center item-block">
						<span class="icon"><img src="<?php echo base_url() . 'theme/images/27.svg' ?>" class="img-responsive"></span>
						<h3>BERITA</h3>
						<p></p>
						<p><a href="<?php echo base_url() . 'blog' ?>" class="btn btn-primary btn-outline with-arrow">SELANJUTNYA <i class="icon-arrow-right"></i></a></p>
					</div>
				</div>
			</div>
		</div> -->



		<div id="fh5co-blog" class="animate-box">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
						<h2>ARTIKEL TERBARU</h2>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<?php
					foreach ($post->result_array() as $j) :
						$post_id = $j['tulisan_id'];
						$post_judul = $j['tulisan_judul'];
						$post_isi = $j['tulisan_isi'];
						$post_author = $j['tulisan_author'];
						$post_image = $j['tulisan_gambar'];
						$post_tglpost = $j['tanggal'];
						$post_slug = $j['tulisan_slug'];
					?>
						<div class="col-md-4" style="background-color: white; padding-top:10px; margin:10px ">
							<a class="fh5co-entry" href="<?php echo base_url() . 'artikel/' . $post_slug; ?>">
								<figure>
									<img src="<?php echo base_url() . 'assets/images/' . $post_image; ?>" alt="" class="img-responsive">
								</figure>
								<div>
									<h3><?php echo $post_judul; ?></h3>
									<span class="fh5co-date"><?php echo $post_tglpost . ' | ' . $post_author; ?></span>
									<?php echo limit_words($post_isi, 20) . '...'; ?>
								</div>
							</a>
							<p><a href="<?php echo base_url() . 'artikel/' . $post_slug; ?>" class="btn btn-primary btn-outline with-arrow">View More <i class="icon-arrow-right"></i></a></p>
						</div>



					<?php endforeach; ?>
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
	<!-- Flexslider -->
	<script src="<?php echo base_url() . 'theme/js/jquery.flexslider-min.js' ?>"></script>

	<!-- MAIN JS -->
	<script src="<?php echo base_url() . 'theme/js/main.js' ?>"></script>

</body>

</html>