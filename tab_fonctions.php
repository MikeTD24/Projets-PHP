<?php 
require_once "utilfonctions.php";
$v1=array(1,2,3);  // case 0:1, 1:2, 2:3
$v2=array(5); // 1 seule case avec 5
$v3=[1,2,3];  // idem que $v1
$v4=[1,"bonjour",true, 2.35];
// tous les vecteurs ci dessus ont des cases qui commencent à 0 et qui n'ont pas de trous
$v5=[];
$v5[10]=55;
$v5[20]="666";
$v5[]="toto"; // case 21
$v5[5]=true;

$message="";

// $message.="<UL>";
// $nb=$nb+2;
// $nb+=2;
$message=afficheTab($v5);


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>des tab , des tab et des tableaux</title>
</head>
<body>
	<?php 
			echo " ".date('j')."-".date('n')."-".date('o');
			echo $message;
			affichetabh($v5);
			affichetabv($v5);
			//affichettabv($v5);
			// plantage car pas de case 0,1 ..
		 ?>


</body>
</html>