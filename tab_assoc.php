<?php

require_once "utilfonctions.php";

$va=["nom" => "pomme", "prix" => 3.65, "état" => "ok"];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TABLEAUX ASSOCIATIFS</title>
</head>
<body>
	<?php
	echo $va["prix"];
	$va["état"]="pourri";
	echo "<P>";
	foreach ( $va as $valeur) {
		echo $valeur. " - ";
	}
	echo "</P>";
	echo "<UL>";
	foreach ( $va as $clé=>$valeur) {
		echo "<li>".$clé." ".":"." ".$valeur."</li>";
	}
	echo "</UL>";

	echo "<H1>".datedaniel()."</H1>";


    echo " ".date('j')."-".date('n')."-".date('Y');

	?>
	
</body>
</html>