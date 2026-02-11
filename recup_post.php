<?php
$message="";
$nom="";
$prenom="";
$pwd=0;

if(isset($_POST['action'])) {
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$pwd=$_POST['pwd'];
	if($pwd=="secret") {
		$message="$prenom $nom, vous êtes bien connecté(e)";
	}
	else {
		$message="Mot de passe incorrect".$prenom." !!!!!";
	}
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