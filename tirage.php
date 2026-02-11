<?php
// Tirer un nombre aléatoire entre 1 et 10
$nombre = rand(1, 10);

// Générer une couleur dynamique en fonction du nombre
// Exemple : variation de teinte HSL
$hue = $nombre * 36; // 10 nombres → cercle de 360°
$couleurPrincipale = "hsl($hue, 70%, 50%)";
$couleurClair = "hsl($hue, 70%, 90%)";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="StylesP/.css">
	<title>Tirage Aléatoire</title>
	<style>
        body {
            font-family: Arial, sans-serif;
            background: <?= $couleurClair ?>;
            color: #333;
            text-align: center;
            margin: 40px;
        }
        h2 {
            color: <?= $couleurPrincipale ?>;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px 15px;
        }
        th {
            background-color: <?= $couleurPrincipale ?>;
            color: white;
        }
        tr:nth-child(even) {
            background-color: <?= $couleurClair ?>;
        }
        tr:hover {
            background-color: <?= $couleurPrincipale ?>;
            color: white;
        }
    </style>
</head>
<body>
	<h1>TIRAGE ALEATOIRE</h1>
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
	


	echo"<h3>Affichage horizontal</h3>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr>";
    for ($i=1; $i<=10; $i++) {
    echo"<td>$nb x $i = " . ($nb * $i) . "</td>";
    
    }
    echo "</tr>";
    echo "</table>";


	?>
	
