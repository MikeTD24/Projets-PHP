<?php
session_start();// il regarde si une session est ouverte
// si oui il s'y connecte, si non il crée une nouvelle session

$message="";
$nb1=0;
$nb2=0;
$reponse=0;

if(isset($_POST['action'])) {
	$nb1=$_SESSION['nb1'];
	$nb2=$_SESSION['nb2'];
	$reponse=$_POST['reponse'];
	$message="Vous avez répondu au calcul $nb1 + $nb2, la réponse $reponse <BR> et donc ...<BR>";
	if($nb1+$nb2==$reponse) {
		$message.="BRAVO !";
	}
	else 
		$message.="Raté, c'était ".($nb1+$nb2);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Réponse</title>
</head>
<body>
	<?php
	echo "<H1>".$message."</H1>";

	?>
	
</body>
</html>