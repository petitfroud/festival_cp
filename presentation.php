<!DOCTYPE html>
<!-- language -->
<?php
setcookie("lang", "fr", time() + (86400 * 30), "/");
	require("decide-lang.php");
?>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Cluster - Creative Portfolio HTML Template</title>
	
	<!-- Main CSS file -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/owl.carousel.css" />
	<link rel="stylesheet" href="css/magnific-popup.css" />
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/responsive.css" />

	
	<!-- Favicon -->
	<link rel="shortcut icon" href="images/icon/favicon.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/icon/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/icon/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/icon/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="images/icon/apple-touch-icon-57-precomposed.png">
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body>


	<!-- PRELOADER -->
	<div id="st-preloader">
		<div id="pre-status">
			<div class="preload-placeholder"></div>
		</div>
	</div>
	<!-- /PRELOADER -->

	
	<!-- HEADER -->
	<?php include("header.php") ?>
	<!-- /HEADER -->


	<!-- SLIDER -->
	<?php include("slider.php") ?>
	<!-- /SLIDER -->

	
	<!-- PRESENTATION -->
	<span class="anchor" id="presentation"></span>	<!-- ce span permet d'arriver au bon endroit en utilisant le menu -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1><?php echo PRESENTATION ?></h1>
						<span class="st-border"></span>
						<?php include ('festival-'.$lang.'/presentation.php') ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /PRESENTATION -->


	<!-- CANTUS -->
	<span class="anchor" id="cantus"></span>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1><?php echo CANTUSPRE ?></h1>
						<span class="st-border"></span>
						<?php include ('festival-'.$lang .'/cantuspre.php') ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /CANTUS -->

	
	<!-- ELIMINATOIRE -->
	<span class="anchor" id="eliminatoire"></span>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1><?php echo ELIMINATOIRE ?></h1>
						<span class="st-border"></span>
						<?php include ('festival-'.$lang .'/eliminatoire.php') ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /ELIMINATOIRE -->


	<!-- CAFE -->
	<span class="anchor" id="cafe"></span>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1><?php echo CAFE ?></h1>
						<span class="st-border"></span>
						<?php include ('festival-'.$lang .'/cafe.php') ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- CAFE -->

	
	<!-- TD FESTIVAL -->
	<span class="anchor" id="TD"></span>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1><?php echo TD ?></h1>
						<span class="st-border"></span>
						<?php include ('festival-'.$lang .'/TD.php') ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /TD FESTIVAL -->



	<!-- INSIGNES en construction... -->
	<span class="anchor" id="insigne"></span>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1><?php echo INSIGNE ?></h1>
						<span class="st-border"></span>
						<?php include ('festival-'.$lang .'/insigne.php') ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- INSIGNES -->

	<!-- FOOTER -->
	<footer id="footer">
		<div class="container">
			<div class="row">
				<!-- SOCIAL ICONS utiliser �a ? -->
				<div class="col-sm-6 col-sm-push-6 footer-social-icons">
					<p class="contact-content"> Cercle Polytechnique ASBL</p>
					<p class="st-address"><i class="fa fa-map-marker"></i> <strong>avenue Franklin Roosevelt, 50 cp 165 <br> 1050 Bruxelles</strong></p>
					<p class="st-phone"><i class="fa fa-mobile"></i> <strong>02/650.42.74</strong></p>
					<p class="st-email"><i class="fa fa-envelope-o"></i> <strong>festival@cerclepolytechnique.be</strong></p>
					<p class="st-website"><i class="fa fa-globe"></i> <strong>www.cerclepolytechnique.be</strong></p>
				</div>
				<!-- /SOCIAL ICONS -->
				<div class="col-sm-6 col-sm-pull-6 copyright">
					<p>&copy; 2015 <a>ShapedTheme</a>. All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- /FOOTER -->


	<!-- Scroll-up -->
	<div class="scroll-up">
		<ul><li><a href="#header"><i class="fa fa-angle-up"></i></a></li></ul>
	</div>

	
	<!-- JS -->
	<script type="text/javascript" src="js/jquery.min.js"></script><!-- jQuery -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script><!-- Bootstrap -->
	<script type="text/javascript" src="js/jquery.parallax.js"></script><!-- Parallax -->
	<script type="text/javascript" src="js/smoothscroll.js"></script><!-- Smooth Scroll -->
	<script type="text/javascript" src="js/masonry.pkgd.min.js"></script><!-- masonry -->
	<script type="text/javascript" src="js/jquery.fitvids.js"></script><!-- fitvids -->
	<script type="text/javascript" src="js/owl.carousel.min.js"></script><!-- Owl-Carousel -->
	<script type="text/javascript" src="js/jquery.counterup.min.js"></script><!-- CounterUp -->
	<script type="text/javascript" src="js/waypoints.min.js"></script><!-- CounterUp -->
	<script type="text/javascript" src="js/jquery.isotope.min.js"></script><!-- isotope -->
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script><!-- magnific-popup -->
	<script type="text/javascript" src="js/scripts.js"></script><!-- Scripts -->


</body>
</html>