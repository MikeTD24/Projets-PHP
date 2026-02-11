<?php 

function datedaniel () {
	$message="";
	$jour=[1=>"lundi",2=>"mardi",3=>"mercredi",4=>"jeudi",5=>"vendredi",6=>"samedi",7=>"dimanche"];
	$mois=["janvier","février","mars","avril","mai","juin","juillet","août","septembre","octobre","novembre","décembre"];
	$jours=date('N'); // 1 lundi
	$message=$jour[$jours]." ".date("j")." ".$mois[date("n")-1]." ".date('Y');

	return $message;
}
function affichetabh($t){
    echo "\n<table><TR>\n";
			foreach($t as $laCase){  
				echo "<TD>".$laCase."</TD>";
			}
	echo "\n</TR></TABLE>";

}
function affichettabv($t){
	echo "\n<table>\n";
			for($i=0;$i<count($t);$i++){  
				echo "<TR><TD>".$t[$i]."</TD></TR>\n";
			}
	echo "\n</TABLE>";
}
function affichetabV($t){
	echo "\n<table>\n";
			foreach($t as $laCase){  
				echo "<TR><TD>".$laCase."</TD></TR>";
			}
	echo "\n</TABLE>";

}
function afficheTab($t){
	$i=0;
	$cpt=0;
	$message="\n<UL>\n";
	while($cpt<count($t)){
		if(isset($t[$i])){ // si la table existe
			$message.="<Li>".$t[$i]."</Li>\n";
			$cpt++;
		}
		$i++;
	}
	$message.="\n</UL>\n";
	return $message;
}




 ?>