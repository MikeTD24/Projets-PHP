<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculs Vend</title>
</head>
<body>
	<h1>CALCULS VENDREDI</h1>
	<?php
	$nb = rand(1,10);

	echo "<h2>Table de multiplication du nombre $nb</h2>";

	echo "<h3>Affichage vertical</h3>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";

	for ($i=1; $i<=10; $i++) {
		echo "<tr>";
		echo "<td>$nb x $i</td>";
		echo "<td>" . ($nb * $i) . "</td>";
		echo "</tr>"; 
	}
	echo"</table>";
	?>


	
</body>
</html>