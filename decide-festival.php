
<!-- fichier qui gère quelle edition de festival sera affiché -->

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['edition'])) {
    	// collect value of input field
	setcookie("edition", $_POST['edition']);
	}
	?>

<?php
if (isset($_POST['edition'])){
      include('ancien_festival/'.$_POST['edition'].'.php');}
else if (isset($_COOKIE['edition'])){
	 include('ancien_festival/'.$_COOKIE['edition'].'.php');}
else
      {include('ancien_festival/1.php');}
?>
