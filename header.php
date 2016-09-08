<header id="header">
		<nav class="navbar st-navbar navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#st-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
				    	<span class="icon-bar"></span>
				    	<span class="icon-bar"></span>
				    	<span class="icon-bar"></span>
					</button>
					<a href="index"><h1><?php echo TITRE?></h1><h5> <?php echo SOUSTITRE?> </h5> </a>
				</div>

				<div class="collapse navbar-collapse" id="st-navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
				    	<li class="dropdown">
        				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><a href="index"><?php echo ACCUEIL ?></a>
						<ul class="dropdown-menu">
						<li><a href="index #news">News</li></ul></li>
				    	<li class="dropdown">
        				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><a href="presentation #presentation"><?php  echo PRESENTATION ?></a></a>
        					<ul class="dropdown-menu">
						<li> <a href="presentation #cantus"><?php echo CANTUS ?></a> </li>
						<li> <a href="presentation #eliminatoire"><?php echo ELIMINATOIRE ?></a></li> 
						<li> <a href="presentation #cafe"><?php echo CAFE ?></a> </li>
						<li> <a href="presentation #TD"><?php echo TD ?></a> </li>
						<li> <a href="presentation #insigne"><?php echo INSIGNE ?></a> </li> </ul> </li>
					<li><a href="partenaire #partenaire"><?php echo PARTENAIRE ?></a></li>
				    	<li class="dropdown">
        				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><a href="info #info"><?php echo INFO ?></a>
						<ul class="dropdown-menu">
						<li> <a href="info #contact"><?php echo CONTACT ?> </a> </li> 
						<li> <a href="info #reglement"> <?php echo REGLEMENT ?></a> </li>
						<li> <a href="info #calendrier"> <?php echo CALENDRIER ?></a> </li>
						<li> <a href="info #acces"> <?php echo ACCES ?></a> </li>
						<li> <a href="info #tarif"> <?php echo TARIF ?></a> </li></ul></li>
				    	<li><a href="inscription #inscription"><?php echo INSCRIPTION ?></a>
				    	<li class="dropdown">
        				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><a href="historique #historique"><?php echo HISTORIQUE?></a>
						<ul class="dropdown-menu">
						<li> <a href="historique #origine"><?php echo ORIGINE ?> </a> </li> 
						<li> <a href="historique #ancienfest"> <?php echo ANCIENFEST ?></a> </li>
						<li> <a href="historique #chanson"> <?php echo CHANSON?> </a> </li></ul></li>
					
					<!-- boutons pour choix de langues -->

					<li><form href="" action="" method="post"><button class="btn-send" type="submit" name="lang" value="fr">fr</button>
					<button class="btn-send" type="submit" name="lang" value="nl">nl</button>
					<button class="btn-send" type="submit" name="lang" value="en">en</button></form></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav>
	</header>