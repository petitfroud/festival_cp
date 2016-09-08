<!DOCTYPE html>
<?php
setcookie("lang", "fr", time() + (86400 * 30), "/");
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
	<!-- gère la langue -->
	<?php require("decide-lang.php"); ?> <!-- fichier qui gère la langue -->

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

	
	<!-- INFO -->
	<span class="anchor" id="info"></span>	<!-- ce span permet d'arriver au bon endroit en utilisant le menu -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1><?php echo INFO ?></h1>
						<span class="st-border"></span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- /INFO -->
	
	
	<!-- CONTACT -->
	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1><?php echo CONTACT ?></h1>
						<span class="st-border"></span>
					</div>
				</div>
				<div class="col-sm-4 contact-info">
					<p class="contact-content"> Cercle Polytechnique ASBL</p>
					<p class="st-address"><i class="fa fa-map-marker"></i> <strong>avenue Franklin Roosevelt, 50 cp 165 <br> 1050 Bruxelles</strong></p>
					<p class="st-phone"><i class="fa fa-mobile"></i> <strong>Maxime: 0471 04 89 08</strong></p>
					<p class="st-phone"><i class="fa fa-mobile"></i> <strong>Pauline: 0493 49 69 33</strong></p>
					<p class="st-phone"><i class="fa fa-mobile"></i> <strong>Sacha: 0473 68 90 79</strong></p>
					<p class="st-email"><i class="fa fa-envelope-o"></i> <strong>festival@cerclepolytechnique.be</strong></p>
					<p class="st-website"><i class="fa fa-globe"></i> <strong>www.cerclepolytechnique.be</strong></p>
				</div>
			</div>
		</div>
	</section>
	<!-- /CONTACT -->
	
	<!-- REGLEMENT -->
	<span class="anchor" id="reglement"></span>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1><?php echo REGLEMENT ?></h1>
						<span class="st-border"></span>
						<h1>A venir</h1>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- /REGLEMENT-->


	<!-- CALENDRIER -->
	<span class="anchor" id="calendrier"></span>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1><?php echo CALENDRIER ?></h1>
						<span class="st-border"></span>
						<?php include ('festival-'.$lang.'/calendrier.php') ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /CALENDRIER -->
	
	
	<!-- ACCES -->
	<span class="anchor" id="acces"></span>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1><?php echo ACCES ?></h1>
						<span class="st-border"></span>
						<?php include ('festival-'.$lang.'/acces.php') ?>
					</div>
				</div>
				<div class="col-md-12">
				<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDSmwj-nhiRNrXP-AAxxVBVmXv5a6uOayM'></script><div style='overflow:hidden;height:400px;width:520px;'><div id='gmap_canvas' style='height:400px;width:520px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='http://maps-generator.com/fr'>ajouter GoogleMaps</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=63c1d86a0f8f2849265754bfd5b6eabd087ced87'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(50.81046716401684,4.388746706420865),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(50.81046716401684,4.388746706420865)});infowindow = new google.maps.InfoWindow({content:'<strong>Janson</strong><br>48, avenue Franklin Roosevelt<br>10				50 Brussels<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
				</div>
			</div>
		</div>
	</section>
	<!-- /ACCES -->



	<!-- TARIF -->
	<span class="anchor" id="tarif"></span>
	<section id="fun-facts">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1><?php echo TARIF ?></h1>
						<span class="st-border"></span>
						<?php include ('festival-'.$lang.'/tarif.php') ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /FUN FACTS -->

	<!-- FOOTER -->
	<footer id="footer">
		<div class="container">
			<div class="row">
				<!-- SOCIAL ICONS utiliser ça ? -->
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