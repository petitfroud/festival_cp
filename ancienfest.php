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
	<!-- g�re la langue -->
	<?php require("decide-lang.php"); ?> <!-- fichier qui g�re la langue -->

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

	
	<!-- NEWS -->
	<span class="anchor" id="news"></span>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1>presentation</h1>
						<span class="st-border"></span>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 st-service">
					<h2><i class="fa fa-desktop"></i> Web Design</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta libero autem, magni veritatis, optio dolor.</p>
				</div>

				<div class="col-md-4 col-sm-6 st-service">
					<h2><i class="fa fa-cogs"></i> Web Developement</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta libero autem, magni veritatis, optio dolor.</p>
				</div>

				<div class="col-md-4 col-sm-6 st-service">
					<h2><i class="fa fa-code"></i> Custom Development</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta libero autem, magni veritatis, optio dolor.</p>
				</div>

				<div class="col-md-4 col-sm-6 st-service">
					<h2><i class="fa fa-dashboard"></i> Super Fast Web</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta libero autem, magni veritatis, optio dolor.</p>
				</div>

				<div class="col-md-4 col-sm-6 st-service">
					<h2><i class="fa fa-life-ring"></i> Friendly Support</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta libero autem, magni veritatis, optio dolor.</p>
				</div>

				<div class="col-md-4 col-sm-6 st-service">
					<h2><i class="fa fa-weixin"></i> Live Support</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta libero autem, magni veritatis, optio dolor.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- /NEWS-->


	<!-- OUR WORKS -->
	<section id="our-works">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1>Out Works</h1>
						<span class="st-border"></span>
					</div>
				</div>

				<div class="portfolio-wrapper" >
					<div class="col-md-12">
						<ul class="filter">  			
							<li><a class="active" href="#" data-filter="*">All</a></li>	
							<li><a href="#" data-filter=".wordpress">WordPress</a></li>
							<li><a href="#" data-filter=".html">HTML</a></li>
							<li><a href="#" data-filter=".graphic">graphic</a></li>
							<li><a href="#" data-filter=".php">PHP</a></li>
							<li><a href="#" data-filter=".bootstrap">bootstrap</a></li>
						</ul><!--/#portfolio-filter-->
					</div>
					
					<div class="portfolio-items">
						
						<div class="col-md-4 col-sm-6 work-grid wordpress graphic">
							<div class="portfolio-content">
								<img class="img-responsive" src="images/works/portfolio-1.jpg" alt="">
								<div class="portfolio-overlay">
									<a href="images/works/portfolio-1.jpg"><i class="fa fa-camera-retro"></i></a>
									<h5>Web Development</h5>
									<p>Design, Develop</p>
								</div>
							</div>	
						</div>
						
						<div class="col-md-4 col-sm-6 work-grid html php bootstrap">
							<div class="portfolio-content">
								<img class="img-responsive" src="images/works/portfolio-2.jpg" alt="">
								<div class="portfolio-overlay">
									<a href="images/works/portfolio-2.jpg"><i class="fa fa-camera-retro"></i></a>
									<h5>Web Development</h5>
									<p>Design, Develop</p>
								</div>
							</div>	
						</div>
						
						<div class="col-md-4 col-sm-6 work-grid wordpress graphic">
							<div class="portfolio-content">
								<img class="img-responsive" src="images/works/portfolio-3.png" alt="">
								<div class="portfolio-overlay">
									<a href="images/works/portfolio-3.png"><i class="fa fa-camera-retro"></i></a>
									<h5>Web Development</h5>
									<p>Design, Develop</p>
								</div>
							</div>	
						</div>
						
						<div class="col-md-4 col-sm-6 work-grid html php bootstrap">
							<div class="portfolio-content">
								<img class="img-responsive" src="images/works/portfolio-4.jpg" alt="">
								<div class="portfolio-overlay">
									<a href="images/works/portfolio-4.jpg"><i class="fa fa-camera-retro"></i></a>
									<h5>Web Development</h5>
									<p>Design, Develop</p>
								</div>
							</div>	
						</div>
						
						<div class="col-md-4 col-sm-6 work-grid wordpress graphic php">
							<div class="portfolio-content">
								<img class="img-responsive" src="images/works/portfolio-5.jpg" alt="">
								<div class="portfolio-overlay">
									<a href="images/works/portfolio-5.jpg"><i class="fa fa-camera-retro"></i></a>
									<h5>Web Development</h5>
									<p>Design, Develop</p>
								</div>
							</div>	
						</div>
						
						<div class="col-md-4 col-sm-6 work-grid html bootstrap graphic">
							<div class="portfolio-content">
								<img class="img-responsive" src="images/works/portfolio-6.png" alt="">
								<div class="portfolio-overlay">
									<a href="images/works/portfolio-6.png"><i class="fa fa-camera-retro"></i></a>
									<h5>Web Development</h5>
									<p>Design, Develop</p>
								</div>
							</div>	
						</div>
						
					</div>				
				</div>

			</div>
		</div>
	</section>
	<!-- /OUR WORKS -->

	
	<!-- PRICING -->
	<section id="pricing">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1>Pricing</h1>
						<span class="st-border"></span>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="st-pricing text-center">
						<h5>Basic</h5>
						<h3>$39</h3>
						<div class="st-border"></div>
						<ul>
							<li>Free Download</li>
							<li>1000+ Softwear</li>
							<li>Full Access</li>
							<li>Free Update</li>
							<li>Live Support</li>
						</ul>
						<a href="" class="btn btn-send">Sign Up</a>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="st-pricing text-center">
						<h5>Silver</h5>
						<h3>$89</h3>
						<div class="st-border"></div>
						<ul>
							<li>Free Download</li>
							<li>1000+ Softwear</li>
							<li>Full Access</li>
							<li>Free Update</li>
							<li>Live Support</li>
						</ul>
						<a href="" class="btn btn-send">Sign Up</a>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="st-pricing text-center">
						<h5>Gold</h5>
						<h3>$209</h3>
						<div class="st-border"></div>
						<ul>
							<li>Free Download</li>
							<li>1000+ Softwear</li>
							<li>Full Access</li>
							<li>Free Update</li>
							<li>Live Support</li>
						</ul>
						<a href="" class="btn btn-send">Sign Up</a>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- /PRICING -->


	<!-- OUR TEAM -->
	<section id="our-team">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1>Our Team</h1>
						<span class="st-border"></span>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="team-member">
						<div class="member-image">
							<img class="img-responsive" src="images/members/01.jpg" alt="">
							<div class="member-social">
								<a href=""><i class="fa fa-facebook"></i></a>
								<a href=""><i class="fa fa-twitter"></i></a>
								<a href=""><i class="fa fa-google-plus"></i></a>
								<a href=""><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
						<div class="member-info">
							<h4>Khalil Uddin</h4>
							<span>Designer</span>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="team-member">
						<div class="member-image">
							<img class="img-responsive" src="images/members/02.jpg" alt="">
							<div class="member-social">
								<a href=""><i class="fa fa-facebook"></i></a>
								<a href=""><i class="fa fa-twitter"></i></a>
								<a href=""><i class="fa fa-google-plus"></i></a>
								<a href=""><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
						<div class="member-info">
							<h4>Rubel Miah</h4>
							<span>Lead Developer</span>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="team-member">
						<div class="member-image">
							<img class="img-responsive" src="images/members/03.jpg" alt="">
							<div class="member-social">
								<a href=""><i class="fa fa-facebook"></i></a>
								<a href=""><i class="fa fa-twitter"></i></a>
								<a href=""><i class="fa fa-google-plus"></i></a>
								<a href=""><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
						<div class="member-info">
							<h4>Shamim Mia</h4>
							<span>Developer</span>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="team-member">
						<div class="member-image">
							<img class="img-responsive" src="images/members/04.jpg" alt="">
							<div class="member-social">
								<a href=""><i class="fa fa-facebook"></i></a>
								<a href=""><i class="fa fa-twitter"></i></a>
								<a href=""><i class="fa fa-google-plus"></i></a>
								<a href=""><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
						<div class="member-info">
							<h4>Olga</h4>
							<span>Marketer</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /OUR TEAM -->

	
	<!-- TESTIMONIAL -->
	<section id="testimonial">
		<div class="container">
			<div class="row">
				<div class="overlay"></div>
				<div class="col-md-8 col-md-offset-2 col-sm-12">
					<div class="st-testimonials">

						<div class="item active text-center">
							<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet dolore nesciunt natus ullam possimus quas obcaecati suscipit voluptate facilis cum"</p>
							<div class="st-border"></div>
							<div class="client-info">
								<h5>Tom Roof</h5>
								<span>CEO of Domain.com</span>
							</div>
						</div>

						<div class="item text-center">
							<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet dolore nesciunt natus ullam possimus quas obcaecati suscipit voluptate facilis cumconsectetur adipisicing elit. Amet dolore"</p>
							<div class="st-border"></div>
							<div class="client-info">
								<h5>Mustafiz</h5>
								<span>CEO of Domain.com</span>
							</div>
						</div>

						<div class="item text-center">
							<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem autem possimus laborum, ducimus vel rerum asperiores delectus, suscipit voluptate mollitia, ullam perspiciatis voluptates!"</p>
							<div class="st-border"></div>
							<div class="client-info">
								<h5>Sean Hynes</h5>
								<span>CEO of Domain.com</span>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /TESTIMONIAL -->



	<!-- FUN FACTS -->
	<section id="fun-facts">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<div class="fun-fact text-center">
						<h3><i class="fa fa-thumbs-o-up"></i> <span class="st-counter">365</span></h3>
						<p>Happy Clients</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="fun-fact text-center">
						<h3><i class="fa fa-briefcase fa-6"></i> <span class="st-counter">73987</span></h3>
						<p>Completed Projects</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="fun-fact text-center">
						<h3><i class="fa fa-coffee"></i> <span class="st-counter">297345</span></h3>
						<p>Cups of Coffee</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="fun-fact text-center">
						<h3><i class="fa fa-code"></i> <span class="st-counter">9823686</span></h3>
						<p>Lines of Code</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /FUN FACTS -->

	
	<!-- CONTACT -->
	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1>Contact us</h1>
						<span class="st-border"></span>
					</div>
				</div>
				<div class="col-sm-4 contact-info">
					<p class="contact-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae voluptatum dolorum, possimus tenetur pariatur officia, quo commodi autem doloribus vero rerum aspernatur quidem temporibus.</p>
					<p class="st-address"><i class="fa fa-map-marker"></i> <strong>E71 8th Ave, New York NY 21001, US</strong></p>
					<p class="st-phone"><i class="fa fa-mobile"></i> <strong>+00 123-456-789</strong></p>
					<p class="st-email"><i class="fa fa-envelope-o"></i> <strong><a class="__cf_email__" href="/cdn-cgi/l/email-protection" data-cfemail="6c09010d05002c1503191e0803010d0502420f0301">[email&#160;protected]</a><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></strong></p>
					<p class="st-website"><i class="fa fa-globe"></i> <strong>www.yourdomain.com</strong></p>
				
				</div>
				<div class="col-sm-7 col-sm-offset-1">
					<form action="php/send-contact.php" class="contact-form" name="contact-form" method="post">
						<div class="row">
							<div class="col-sm-6">
								<input type="text" name="name" required="required" placeholder="Name*">
							</div>
							<div class="col-sm-6">
								<input type="email" name="email" required="required" placeholder="Email*">
							</div>
							<div class="col-sm-6">
								<input type="text" name="subject" placeholder="Subject">
							</div>
							<div class="col-sm-6">
								<input type="text" name="website" placeholder="Website">
							</div>
							<div class="col-sm-12">
								<textarea name="message" required="required" cols="30" rows="7" placeholder="Message*"></textarea>
							</div>
							<div class="col-sm-12">
								<input type="submit" name="submit" value="Send Message" class="btn btn-send">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- /CONTACT -->

	<!-- FOOTER -->
	<footer id="footer">
		<div class="container">
			<div class="row">
				<!-- SOCIAL ICONS -->
				<div class="col-sm-6 col-sm-push-6 footer-social-icons">
					<span>Follow us:</span>
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
					<a href=""><i class="fa fa-google-plus"></i></a>
					<a href=""><i class="fa fa-pinterest-p"></i></a>
				</div>
				<!-- /SOCIAL ICONS -->
				<div class="col-sm-6 col-sm-pull-6 copyright">
					<p>&copy; 2015 <a href="">ShapedTheme</a>. All Rights Reserved.</p>
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