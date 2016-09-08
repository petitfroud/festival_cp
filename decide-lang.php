
<!-- fichier qui gère quelle langue sera affichée -->

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"  and isset($_POST['lang'])){
    	// collect value of input field
	setcookie("lang", $_POST['lang']);
	}
	?>

<?php
if (isset($_POST['lang'])){$lang=$_POST['lang'];
      include('langue/'.$_POST['lang'].'.php');}
else if (isset($_COOKIE['lang'])){$lang=$_COOKIE['lang'];
	 include('langue/'.$_COOKIE['lang'].'.php');}
else
      {include('langue/fr.php'); $lang="fr";}
?>
