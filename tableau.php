<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="StylesP/tableau.css">
	<title>Les Tableaux</title>
</head>
<body>
	<h1> tableau à 1 dimension - un vecteur </h1>
	<?php
	   $v1=array(36,25,14,78,98);
	   // indice commence à 0;
	   // echo $v1[0]; // provoque une erreur
	   echo "<P> print_r() </P>";
	   print_r($v1); // montre le contenu du vecteur
	   var_dump($v1); // montre le contenu d'une variable et/ou d'un vecteur
	   echo "<table>";
	   for ($i=0; $i<count($v1); $i++) { 
	   	echo "<TR><TD>".$v1[$i]."</TD></TR>";
  	}

	   echo "</table>";
	   echo "<table><TR>";
	   for ($i=0; $i<count($v1); $i++) { 
	   	echo "<TD>".$v1[$i]."</TD>";
	   }
	   echo "</TR></table>";

	   $v2=array();
	   $v2[1]=456;
	   $v2[3]="pomme";
	   $v2[10]=true;
	   //$v2[]=33: // utiliser cette syntaxe il prendra max(indice)+1
	   var_dump($v2);
	   echo $v2[2]; // provoque une erreur
	   $v2[2]=89;
	   $v2[]=77777777;
	   var_dump($v2);
	   foreach ($v2 as $indice => $element) {
	   	echo "<P> la case numéro ".$indice."contient ". $element."</P>";
	   }

	   // provoque l'erreur car pas d'indice o
	   /*echo "<table><TR>";
	   for ($i=0; $i<count($v1); $i++) { 
	   	echo "<TD>".$v2[$i]."</TD>";
	   }
	   echo "</TR></table>";*/

	 ?>
	
</body>
</html>