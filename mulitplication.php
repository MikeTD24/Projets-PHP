<?php 
require_once "utilfonctions.php";

$nb= rand(1,50);
$tab=array();
for($i=0 ; $i<10 ; $i++){
	$tab[$i] = ($i+1) * $nb;
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Table de multiplication</title>
	
	<link rel="stylesheet" href="/css">	
	<style>
		body {
	background-color: green;
}
h1 {
	text-align: center;
}
	</style>
</head>
<body>
	<?php 
	//Affichage horizontal
	echo"<H1> Table de $nb </h1>";
    affichetabh($tab);
	//Affichage vertical
	affichettabv($tab);

	?>
</body>
</html>