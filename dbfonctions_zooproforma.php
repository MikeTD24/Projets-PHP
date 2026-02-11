<?php
function connect_Zooproforma(){
    $madb= new PDO( /* port 3308 Mysql et 3306 MariaDB*/
	  "mysql:dbname=Zooproforma;host=localhost;port=3308",
	  "root", /*User*/
	  "",     /* mot de passe*/
	  array( PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES \'UTF8\'', 
			 PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION
		)
	);
	return $madb;

}
function count_animaux($madb){
$renvoi=0;
$sql ="select count(*) nbmax
	    from animaux join especes on ani_espece=esp_id
       ;";
	$instru=$madb->prepare($sql);
	$instru->execute();
	$instru->setfetchmode(PDO::FETCH_ASSOC);
	$tab=$instru->fetchall();
	$renvoi=$tab[0]["nbmax"];
return $renvoi;
}
function liste_animaux($madb,$num,$inc){
	$renvoi="";
	$sql="SELECT ani_id id, ani_nom nom, esp_nom espece, ani_genre genre, ani_commentaire commentaire FROM animaux JOIN especes on esp_id=ani_espece
        order by ani_nom
        Limit :num,:inc;";

    $instru=$madb->prepare($sql);
    $instru->bindValue('num', $num, PDO::PARAM_INT);
    $instru->bindValue('inc', $inc, PDO::PARAM_INT);
	$instru->execute();
	$instru->setfetchMode(PDO::FETCH_ASSOC);
	$tab=$instru->fetchall();
	$renvoi="<TABLE>
	          <THEAD>
	           <TR><TH>Nom</th><TH>Espèces</th><TH>Genre</TH><TH>Commentaire</TH></TR>
	           </THEAD>\n";
	foreach($tab as $row){
	
		$renvoi.="<TR>";
		$renvoi.="<TD>".$row["nom"]."</TD>".
				  "<TD>".$row["espece"]."</TD>".
				  "<TD>".$row["genre"]."</TD>".
				  "<TD>".$row["commentaire"]."</TD>";
		$renvoi.="</TR>\n";		 
	}
	$renvoi.="</TABLE>";
	return $renvoi;
}
function affiche_boutons($nb, $max,$inc){
	$renvoi='<DIV><form action="zooproforma.php" method="post">';
    if($nb>=$inc){
		$renvoi.='<input type="submit" name="action" value="avant">';
	}
	$renvoi.=" numéro d'animaux : ".($_SESSION['nb']+1)."-".($_SESSION['nb']+INCREMENT)." ";
	 if($nb<$max-$inc){
	$renvoi.='<input type="submit" name="action" value="après">';
    }
    $renvoi.=' </DIV></form>	';
    return $renvoi;
}
?>