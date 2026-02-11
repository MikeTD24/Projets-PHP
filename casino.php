<?php
//$titre="Casino";
//$Valeur1=rand(0,3);
//$Valeur2=rand(0,3);
//$Valeur3=rand(0,3);
//$Valeur4=rand(0,3);



$titre="Casino";
$tir=[0,0,0];
$images=['sept','trefle','cerise','raisin'];
$tir[0]=rand(0,3);
$tir[1]=rand(0,3);
$tir[2]=rand(0,3);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $titre;?></title>
	<link rel="stylesheet" type="text/css" href=".css">
	<style>
		/* Style global */
body {
    font-family: 'Trebuchet MS', sans-serif;
    background: linear-gradient(135deg, #1a1a1a, #333);
    color: #f5f5f5;
    text-align: center;
    margin: 0;
    padding: 0;
}

/* Titre */
h1 {
    font-size: 2.5rem;
    margin: 20px 0;
    color: #ffd700; /* doré */
    text-shadow: 2px 2px 5px #000;
}

/* Bouton Jouer */
button {
    background: #e63946;
    color: #fff;
    border: none;
    padding: 12px 25px;
    font-size: 1.2rem;
    border-radius: 8px;
    cursor: pointer;
    transition: transform 0.2s, background 0.3s;
    margin: 15px 0;
}

button:hover {
    background: #ff4d6d;
    transform: scale(1.1);
}

/* Zone des images */
img {
    width: 120px;
    height: 120px;
    margin: 10px;
    border: 3px solid #ffd700;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(255, 215, 0, 0.6);
}

/* Messages de résultat */
p, div {
    font-size: 1.2rem;
    margin-top: 15px;
}

p {
    color: #ccc;
}

.gagne {
    font-size: 1.5rem;
    color: #00ff7f;
    font-weight: bold;
}

.perdu {
    font-size: 1.5rem;
    color: #ff4d4d;
    font-weight: bold;
}

	</style>
</head>
<body>
	<div>
		<h1>Jeu : CASINO </h1>	
	</div>
	<div>
		<button onclick="location.reload()">Jouer</button>	
	</div>

	<?php
	echo "<img src='images/", $images[$tir[0]],".jpg'>";
	echo "<img src='images/", $images[$tir[1]],".jpg'>";
	echo "<img src='images/", $images[$tir[2]],".jpg'>";
	if ($tir[0]==$tir[1] and $tir[1]==$tir[2]) {
		echo "<div class='gagne'>Gagné ";
		if ($tir[0]==0){
			echo "Vous gagnez 100000€";
		} if ($tir[0]==1) {
			echo "Vous gagnez 500000€";
		} if ($tir[0]==2) {
			echo "Vous gagnez 1000€";
		} if ($tir[0]==3) {
			echo "Vous gagnez 5€";
		}
		echo "</div>";
	} else {
		echo "<div class='perdu'>Vous avez Perdu</div>";


		echo "<p>Bonne chance ! Essayez de voir si les trois images correspondent pour gagner!</p>";
	}


	?>
</body>
</html>

