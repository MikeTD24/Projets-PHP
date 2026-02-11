<?php
function connectDauphin(){
    $ma_db= new PDO( /* port 3308 Mysql et 3306 MariaDB*/
	  "mysql:dbname=dauphins;host=localhost;port=3308",
	  "root", /*User*/
	  "",     /* mot de passe*/
	  array( PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES \'UTF8\'', 
			 PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION
		)
	);
	return $ma_db;

}
function nbnageuses($madb){
	$sql ="select count(*) nb_nageuses from membres;";

	$instru=$madb->prepare($sql);
	$instru->execute();
	$instru->setfetchmode(PDO::FETCH_ASSOC);
	$tab=$instru->fetchall();
	$renvoi="";
	foreach ($tab as $row) {
		$renvoi.=$row["nb_nageuses"];
		 
	}
	
	return $renvoi;
}
function liste_membres($madb){
	$renvoi="";
	$sql ="select mem_prenom prenom,
       mem_nom nom,
       mem_ddn ddn,
       round(datediff(curdate(), mem_ddn)/365.25,0) age
       from membres
       order by 4 desc;";

	$instru=$madb->prepare($sql);
	$instru->execute();
	$instru->setfetchmode(PDO::FETCH_ASSOC);
	$tab=$instru->fetchall();
	$renvoi="<TABLE><THEAD><TR><TH>Prénom</TH><TH>Nom</TH><TH>Date Naissance</TH><TH>Age</TH></TR></THEAD>";
	foreach ($tab as $row) {
		$renvoi.="<TR>";
		$renvoi.="<TD>".$row["prenom"]."</TD>".
		         "<TD>".$row["nom"]."</TD>".
		         "<TD>".$row["ddn"]."</TD>".
		         "<TD>".$row["age"]."</TD>";
		 $renvoi.="</TR>";
	}
	$renvoi.="</TABLE>";
	
	return $renvoi;
}
function liste_resultats($madb){
	$renvoi="";
	$sql="SELECT mem_prenom prenom,
    mem_nom nom,
    res_nage nage,
    res_long longueur,
    res_temps temps
    from membres join resultats on res_membre=mem_num
    ORDER BY 3,4,5;";

	$instru=$madb->prepare($sql);
	$instru->execute();
	$instru->setfetchmode(PDO::FETCH_ASSOC);
	$tab=$instru->fetchall();
	//$renvoi="<TABLE><THEAD><TR><TH>Nage</TH><TH>Longueur</TH><TH>Nom</TH><TH>Prénom</TH><TH>Temps</TH></TR></THEAD>";
	$nageavant="";
	$longavant="";
	foreach ($tab as $row) {
		// si nage ou longueur différente par rapport à la précédente ou première
		if($nageavant!=$row["nage"] || $longavant!=$row["longueur"]){
			if($nageavant!=""){ // si pas première fois
                     $renvoi.="</TABLE>";
			}
			$renvoi.="<TABLE><THEAD><TR><TH>Nage</TH><TH>Longueur</TH><TH>Nom</TH><TH>Prénom</TH><TH>Temps</TH></TR></THEAD>";
		}
		$renvoi.="<TR>";
		$renvoi.="<TD>".$row["nage"]."</TD>".
		         "<TD>".$row["longueur"]."</TD>".
		         "<TD>".$row["nom"]."</TD>".
		         "<TD>".$row["prenom"]."</TD>".
		         "<TD>".$row["temps"]."</TD>";
		 $renvoi.="</TR>";
		 $nageavant=$row["nage"]; //je stocke la nage et la longueur courante
		 $longavant=$row["longueur"];
	}
	$renvoi.="</TABLE>";
	
	return $renvoi;
}function liste_records($madb){
	$renvoi="";
	$sql="SELECT mem_nom nom, mem_prenom prenom, res_nage nage, res_long longueur, res_temps temps
        from membres join resultats on res_membre=mem_num 
        where (res_nage, res_long, res_temps)
        IN (SELECT res_nage, res_long, MIN(res_temps) FROM resultats
        GROUP BY res_long, res_nage)
        ORDER BY res_nage, res_long, mem_nom;";
	
         
    $instru=$madb->prepare($sql);
	$instru->execute();
	$instru->setfetchmode(PDO::FETCH_ASSOC);
	$tab=$instru->fetchall();
	$renvoi="<TABLE><THEAD><TR><TH>Nom</TH><TH>Prénom</TH><TH>Nage</TH><TH>Longueur</TH><TH>Temps</TH></TR></THEAD>";
	foreach ($tab as $row) {
		$renvoi.="<TR>";
		$renvoi.="<TD>".$row["nom"]."</TD>".
		         "<TD>".$row["prenom"]."</TD>".
		         "<TD>".$row["nage"]."</TD>".
		         "<TD>".$row["longueur"]."</TD>".
		         "<TD>".$row["temps"]."</TD>";
		 $renvoi.="</TR>";
	}
	$renvoi.="</TABLE>";

	return $renvoi;
}
?>