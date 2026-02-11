<?php
function connect_societe(){
    $ma_db= new PDO( /* port 3308 Mysql et 3306 MariaDB*/
	  "mysql:dbname=MaSociete;host=localhost;port=3308",
	  "root", /*User*/
	  "",     /* mot de passe*/
	  array( PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES \'UTF8\'', 
			 PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION
		)
	);
	return $ma_db;

}

function liste_clients($madb){
	$renvoi="";
	$sql ="SELECT cli_num num, cli_nom nom, cli_prenom prenom, cli_ddn ddn FROM clients
			ORDER BY cli_nom, cli_prenom;";
	$instru=$madb->prepare($sql);
	$instru->execute();
	$instru->setfetchmode(PDO::FETCH_ASSOC);
	$tab=$instru->fetchall();
	$renvoi="<TABLE><THEAD><TR><TH>Num</th><TH>Nom</th><TH>Prénom</TH><TH>date de naissance</TH></THEAD>";
	foreach($tab as $row){
		$renvoi.="<TR>";
		$renvoi.="<TD>".$row["num"]."</TD>".
				 "<TD>".$row["nom"]."</TD>".
				 "<TD>".$row["prenom"]."</TD>".
				 "<TD>".$row["ddn"]."</TD>"	;
		$renvoi.="</TR>";		 
	}
	$renvoi.="</TABLE>";
	return $renvoi;
}

function ajoute_clients($madb){
	$renvoi="";
	$sql ="SELECT cli_num num, cli_nom nom, cli_prenom prenom, cli_ddn ddn FROM clients
			ORDER BY cli_nom, cli_prenom;";
	$instru=$madb->prepare($sql);
	$instru->execute();
	$instru->setfetchmode(PDO::FETCH_ASSOC);
	$tab=$instru->fetchall();
	$renvoi="<form action='action.php' method='post'>
	<div>
		<label for='nom-id'>Nom</label>
		<input type='text' name='nom' id='nom-id'>
	</div>

	<div>
		<label for='prenom-id'>Prénom</label>
		<input type='text' name='prenom' id='prenom-id'>
	</div>

	<div>
		<label for='ddn-id'>Date de Naissance</label>
		<input type='date' name='ddn' id='ddn-id'>
	</div>
	<div>
		<label for='pwd-id'>Mot de Passe</label>
		<input type='password' name='pwd' id='pwd-id'>
	</div>
	<div>
		<label for='commentaire-id'>Commentaire</label>
		<input type='text' name='commentaire' id='commentaire-id'>
	</div>

    <div>
	<input type='submit' name='inserer' value='Insérer'>
	</div>
	</form>"
	;

	return $renvoi;
}
function recherche_clients($madb){
	$renvoi="";
	$sql ="SELECT cli_num num, cli_nom nom, cli_prenom prenom, cli_ddn ddn FROM clients
			ORDER BY cli_nom, cli_prenom;";
	$instru=$madb->prepare($sql);
	$instru->execute();
	$instru->setfetchmode(PDO::FETCH_ASSOC);
	$tab=$instru->fetchall();
	$renvoi="<form action='action.php' method='Post'>
	<div>
		<label for='num-cli-id'>Numéro Client</label>
		<input type='number' name='num' id='num-cli-id'>
		<input type='submit' name='ok' value='OK'>
	</div>
	</form>";
	return $renvoi;
}
function trouve_client($madb,$num){
	$renvoi="";
	$sql="SELECT cli_num num, cli_nom nom, cli_prenom prenom, cli_commentaire commentaire, cli_ddn ddn
        FROM clients
        WHERE cli_num=:num;";
    $instru=$madb->prepare($sql);
    $instru->bindparam('num',$num,PDO::PARAM_INT);
    //$instru->bindvalue('num',$num,PDO::PARAM_INT);
    $instru->execute();
    $instru->setfetchmode(PDO::FETCH_ASSOC);
    $tab=$instru->fetchall();
    if (count($tab)==0) {
    	$renvoi="<H1> Pas de Client </H1>";
    }
    else{
	    $renvoi="<TABLE><THEAD><TR><TH>Num</th><TH>Nom</th><TH>Prénom</TH><TH>Commentaire</TH><TH>Date de Naissance</THEAD>";
		foreach($tab as $row){
			$renvoi.="<TR>";
			$renvoi.="<TD>".$row["num"]."</TD>".
					 "<TD>".$row["nom"]."</TD>".
					 "<TD>".$row["prenom"]."</TD>".
					 "<TD>".$row["commentaire"]."</TD>".
					 "<TD>".$row["ddn"]."</TD>"	;
			$renvoi.="</TR>";
			

		}
	    $renvoi.="</TABLE>";
		$renvoi.="<form action='action.php' method='POST'>
		<input type='submit' name='delete' value='Delete'>
		<input type='submit' name='update' value='Update'>
		<input type='hidden' name='num' value='".$row['num']."'>
		<input type='hidden' name='nom' value='".$row['nom']."'>
		<input type='hidden' name='prenom' value='".$row['prenom']."'>
		<input type='hidden' name='ddn' value='".$row['ddn']."'>
		<input type='hidden' name='commentaire' value='".$row['commentaire']."'>
		</form>";		 

   }
	return $renvoi;
}
function delete_client($madb,$num){
	$sql="delete from clients where cli_num= :num";
	$instru=$madb->prepare($sql);
	//$instru->bindValue('num', $num, PDO::PARAM_INT);

	$instru->bindvalue('num',($num*10),PDO::PARAM_INT);
	$instru->execute();
	$renvoi=$instru->rowcount()."ligne(s) supprimée(s)";
	//$renvoi="client $num supprimé"
    return $renvoi;
}
function ajout_client($madb,$vcli){
	$sql="insert into clients VALUES (default,:nom,:prenom,:ddn,:pwd,:commentaire);";
	$nom=$vcli[0];
	$prenom=$vcli[1];
	$ddn=$vcli[2];
	$pwd=$vcli[3];
	$commentaire=$vcli[4];

	$instru=$madb->prepare($sql);
	$instru->bindvalue('nom',$nom,PDO::PARAM_STR);
	$instru->bindvalue('prenom',$prenom,PDO::PARAM_STR);
	$instru->bindvalue('ddn',$ddn,PDO::PARAM_STR);
	$instru->bindvalue('pwd',$pwd,PDO::PARAM_STR);
	$instru->bindvalue('commentaire',$commentaire,PDO::PARAM_STR);

	$instru->execute();
	$renvoi=$instru->rowcount()." ligne(s) supprimée(s)";
	return $renvoi;
}
function update_client($madb,$vcli){
	$renvoi="";
	$renvoi='<form action="action.php" method="POST">
	 <input type="hidden" name="numa" value="'.$vcli[0].'">
	<DIV>Nom :
	  <input type="text" name="nom" value="'.$vcli[1].'">
	  <input type="hidden" name="noma" value="'.$vcli[1].'">
	</DIV>
	<DIV>Prénom :
	 <input type="text" name="prenom" value="'.$vcli[2].'">
	 <input type="hidden" name="prenoma" value="'.$vcli[2].'">
	</DIV>
	<DIV>Date de naissance :
	 <input type="date" name="ddn" value="'.$vcli[3].'">
	 <input type="hidden" name="ddna" value="'.$vcli[3].'">
	</DIV>
	<DIV>commentaire :
	 <input type="text" name="commentaire" value="'.$vcli[4].'">
	 <input type="hidden" name="commentairea" value="'.$vcli[4].'">
	</DIV>
	<DIV>
	<input type="submit" name="modifier" value="modifier">
	</DIV>
   
	</form>';

return $renvoi;
}
function update_DB($madb,$vcli,$vclia){
	$renvoi="";
	$diff=false;
	for($i=0;$i<count($vcli);$i++){
		if($vcli[$i]!=$vclia[$i]){
			$diff=true;
		}
	}
	if($diff){
		$renvoi="mise à jour en cours....";
		$sql="update clients set cli_nom=:nom, cli_prenom=:prenom, cli_ddn=:ddn, cli_commentaire=:commentaire where cli_num=:num;";

	$instru=$madb->prepare($sql);
	$instru->bindvalue('num',$vcli[0],PDO::PARAM_INT);
	$instru->bindvalue('nom',$vcli[1],PDO::PARAM_STR);
	$instru->bindvalue('prenom',$vcli[2],PDO::PARAM_STR);
	$instru->bindvalue('ddn',$vcli[3],PDO::PARAM_STR);
	$instru->bindvalue('commentaire',$vcli[4],PDO::PARAM_STR);
	$instru->execute();
	$renvoi=$instru->rowcount()." ligne(s) modifiée(s)";
	return $renvoi;
	}
	else{
		$renvoi="je n'ai rien à faire, pas de MAJ";
	}
	return $renvoi;
}
?>

