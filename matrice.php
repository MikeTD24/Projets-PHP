<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MATRICE</title>
</head>
<body>
	<?php

	$tab2d=array(array(1,2), array(3,4), array(5,6));
	foreach ($tab2d as $ligne) {
		foreach($ligne as $col) {
			echo $col." ";
		}
		echo "<BR/>";
	}
	$tabBizarre=array(array(1,2,3), array("a","b","c","d","e"),true,56);
	foreach ($tabBizarre as $ligne) {
		if(is_array($ligne)) { 
		foreach($ligne as $col) {
			echo $col." ";
		}
	}
	else {
		echo $ligne;
	}
	echo  "<BR/>";
}
$t2=[[1,2,3],[4,5,6],[7,8,9],[10,11,12]];
echo"\n<table>\n";
for ($ligne=0; $ligne<count($t2);$ligne++) {
echo"<TR>\n"; 
	for($col=0;$col<count($t2[$ligne]);$col++) {
		echo"<TD>".$t2[$ligne][$col]."</TD>";
}
echo"\n<TR>\n";
}
echo "</table>\n";

$laBatte=[
	["nom"=>"pomme","prix"=>0.23,"etat"=>"bien rouge"],
    ["nom"=>"poire","prix"=>0.28,"etat"=>"bien dure"],
    ["nom"=>"scoubidous","prix"=>10,"etat"=>"bidous bidous"],
    ["nom"=>"charbon","prix"=>14.23,"etat"=>"bbq"]
];
for($ligne=0; $ligne<count($laBatte);$ligne++){
    echo "<UL>";
	foreach($laBatte[$ligne] as $champ=>$valeur) {
		echo "<LI>";
		echo $champ." : ".$valeur;
		echo "</LI>";
	}
   echo "</UL><HR>";
}
echo "<table>";
echo "<THEAD><TR>";
foreach(array_keys($laBatte[0]) as $titre) {
echo "<TH>".$titre."</TH>";
}

echo "</TR></THEAD>";
for($ligne=0; $ligne<count($laBatte);$ligne++){
    echo "<TR>";
	foreach($laBatte[$ligne] as $valeur) {
		echo "<TD>";
		echo $valeur;
		echo "</TD>";
	}
   echo "</TR>";
}
?>
	
</body>
</html>