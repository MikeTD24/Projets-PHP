<?php 
session_start(); //démarrer une session
$message="";
if(isset($_POST['action'])){ // si j'arrive en cliquant sur un bouton
	if($_POST['action']=="clic"){ 
	// si j'ai cliqué sur le bouton clic
		$_SESSION['cpt']++;
	}
	else{ // c'est que j'ai cliqué sur réinitialiser
		$_SESSION['cpt']=0;
	}
	// je remets à jour mon message
	$message=$_SESSION['cpt'];
}
else{ // quand j'arrive la première fois
   // j'ouvre le fichier php sans cliquer sur un bouton
  $_SESSION['cpt']=0; // je déclare la variable de session
  $message=$_SESSION['cpt'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/display.css">
	<title>Compteur de clics d'Emilie !</title>
</head>
<body>
	<h1>COMPTEURS CLICS D'EMILIE</h1>
<?php echo "<H2>".$message."</H2>"; ?>
	<form action="compteurclic.php" method="POST">
		<!-- Action = permet de définir où on envoit les données -->
		<!-- Method = méthode d'envoi des données => POST ou GET -->
		<DIV>
			<input type="submit" name="action" value="clic">
			<input type="submit" name="action" value="Réinitialiser">
		</DIV>
	</form>
</body>
</html>