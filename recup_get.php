<?php
$message="";
$nom="";
$prenom="";
$age=0;
$action="";
if(isset($_GET['action'])) {
	$nom=$_GET['nom'];
	$prenom=$_GET['prenom'];
	$age=$_GET['age']*1000;
	$action=$_GET['action'];
	$message.="<P> Cher, chère ".$prenom." ".$nom."</P>";
	$message.="<P> vous avez gagné $age euro et pour retirer votre lot";
	$message.="envoyer un sms au 0455 23 12 45 avec comme message $action </P>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bravo, vous avez gagné !</title>
</head>
<body>
	<?php
	echo $message;

	?>
	
</body>
</html>