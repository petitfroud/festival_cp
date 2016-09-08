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
	<!-- SLIDER -->

	
	<!-- HISTORIQUE -->
	<span class="anchor" id="historique"></span>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1><?php echo HISTORIQUE ?></h1>
						<span class="st-border"></span>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /HISTORIQUE-->


	<!-- ORIGINE -->
	<span class="anchor" id="origine"></span>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1><?php echo ORIGINE ?></h1>
						<span class="st-border"></span>
						<?php include ('festival-'.$lang .'/origine.php') ?>
					</div>			
				</div>

			</div>
		</div>
	</section>
	<!-- /ORIGINE -->

	
	<!-- ANCIENS FESTIVALS -->
	<span class="anchor" id="ancienfest"></span>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1><?php echo ANCIENFEST ?></h1>
						<span class="st-border"></span>
						<form action="show_festival #edition" method="post">
 						<button type="submit" name="edition" value="1" class="btn-link">Le 1er Festival (1975)</button>
						</form>
						<ul><li><a href="show_festival.php" onclick="">Le 1er Festival (1975)</a></li>
						<li><a href="ancien_festival/2.php">Le 2ème Festival (1976)</a></li>
						<li><a href="ancien_festival/3.php">Le 3ème Festival (1977)</a></li>
						<li><a href="ancien_festival/4.php">Le 4ème Festival (1978)</a></li>
						<li><a href="ancien_festival/5.php">Le 5ème Festival (1979)</a></li>
						<li><a href="ancien_festival/6.php">Le 6ème Festival (1980)</a></li>
						<li><a href="ancien_festival/7.php">Le 7ème Festival (1981)</a></li>
						<li><a href="ancien_festival/8.php">Le 8ème Festival (1982)</a></li>
						<li><a href="ancien_festival/9.php">Le 9ème Festival (1984)</a></li>
						<li><a href="ancien_festival/10.php">Le 10ème Festival (1984)</a></li>
						<li><a href="ancien_festival/11.php">Le 11ème Festival (1985)</a></li>
						<li><a href="ancien_festival/12.php">Le 12ème Festival (1986)</a></li>
						<li><a href="ancien_festival/13.php">Le 13ème Festival (1987)</a></li>
						<li><a href="ancien_festival/14.php">Le 14ème Festival (1988)</a></li>
						<li><a href="ancien_festival/15.php">Le 15ème Festival (1989)</a></li>
						<li><a href="ancien_festival/16.php">Le 16ème Festival (1990)</a></li>
						<li><a href="ancien_festival/17.php">Le 17ème Festival (1991)</a></li>
						<li><a href="ancien_festival/18.php">Le 18ème Festival (1992)</a></li>
						<li><a href="ancien_festival/19.php">Le 19ème Festival (1993)</a></li>
						<li><a href="ancien_festival/20.php">Le 20ème Festival (1994)</a></li>
						<li><a href="ancien_festival/21.php">Le 21ème Festival (1995)</a></li>
						<li><a href="ancien_festival/22.php">Le 22ème Festival (1996)</a></li>
						<li><a href="ancien_festival/23.php">Le 23ème Festival (1997)</a></li>
						<li><a href="ancien_festival/24.php">Le 24ème Festival (1998)</a></li>
						<li><a href="ancien_festival/25.php">Le 25ème Festival (1999)</a></li>
						<li><a href="ancien_festival/26.php">Le 26ème Festival (2000)</a></li>
						<li><a href="ancien_festival/27.php">Le 27ème Festival (2001)</a></li>
						<li><a href="ancien_festival/28.php">Le 28ème Festival (2002)</a></li>
						<li><a href="ancien_festival/29.php">Le 29ème Festival (2003)</a></li>
						<li><a href="ancien_festival/30.php">Le 30ème Festival (2004)</a></li>
						<li><a href="ancien_festival/31.php">Le 31ème Festival (2005)</a></li>
						<li><a href="ancien_festival/32.php">Le 32ème Festival (2006)</a></li>
						<li><a href="ancien_festival/33.php">Le 33ème Festival (2007)</a></li>
						<li><a href="ancien_festival/34.php">Le 34ème Festival (2008)</a></li>
						<li><a href="ancien_festival/35.php">Le 35ème Festival (2009)</a></li>
						<li><a href="ancien_festival/36.php">Le 36ème Festival (2010)</a></li>
						<li><a href="ancien_festival/37.php">Le 37ème Festival (2011)</a></li>
						<li><a href="ancien_festival/38.php">Le 38ème Festival (2012)</a></li>
						<li><a href="ancien_festival/39.php">Le 39ème Festival (2013)</a></li>
						<li><a href="ancien_festival/40.php">Le 40ème Festival (2014)</a></li>
						<li><a href="ancien_festival/41.php">Le 41ème Festival (2015)</a></li></ul>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- /ANCIENS FESTIVALS-->


	<!-- CHANSONS -->
	<span class="anchor" id="chanson"></span>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1><?php echo CHANSON ?></h1>
						<span class="st-border"></span>
						<?php include ('festival-'.$lang .'/chanson.php') ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- CHANSONS-->

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