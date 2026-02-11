<?php
require_once "dbfonctions_societe.php";
$message="";
$titre="";
try{
	$madb=connect_societe();
	if(isset($_POST['Ajouter'])){
		$titre="Ajout de client";
		$message=ajoute_clients($madb);
		
	}
	elseif(isset($_POST['Rechercher'])){
			$titre="Rechercher par numéro de client";
			$message=recherche_clients($madb);
	}
	
	elseif (isset($_POST['ok']) && isset($_POST['num'])) {
			$titre="Client trouvé ou pas";
			$num_cli=$_POST['num'];
			$message=trouve_client($madb,$num_cli);
	}
	elseif(isset($_POST['inserer'])){
		        $vcli=array($_POST['nom'],$_POST['prenom'],$_POST['ddn'],$_POST['pwd'],$_POST['commentaire']);
				$titre="création du nouveau Client";
				$message=ajout_client($madb,$vcli);

	}	elseif(isset($_POST['delete']) && isset($_POST['num'])){
				$titre="Suppression du Client";
				$num=$_POST['num'];
				$message=delete_client($madb,$num);
	}
	elseif(isset($_POST['update']) && isset($_POST['num'])){
				$titre="modification du Client";
				$vcli=array($_POST['num'],$_POST['nom'],$_POST['prenom'],$_POST['ddn'],$_POST['commentaire']);
				$message=update_client($madb,$vcli);
	}	
	elseif(isset($_POST['modifier']) && isset($_POST['numa'])){
				$titre="modification du Client dans la DB";
				$vcli=array($_POST['numa'],$_POST['nom'],$_POST['prenom'],$_POST['ddn'],$_POST['commentaire']);
				$vclia=array($_POST['numa'],$_POST['noma'],$_POST['prenoma'],$_POST['ddna'],$_POST['commentairea']);
				$message=update_DB($madb,$vcli,$vclia);
	}			
	else{
		$titre="Erreur fatale";
		$message="Erreur fatale code 404040, contactez moi au 0478 235689";
	}

	
}
catch(Exception $e){
	die("Erreur fatale :".$e->getmessage()."<form>
		<input type='submit' value='retour'
		onclick='history.go(-1)'>
		</form>");
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="StylesP/masociete.css">
	<title><?php echo $titre; ?></title>
</head>
<body>
	<h1><?php echo $titre; ?></h1>
	<?php echo $message; ?>
	

    <button type="button" onclick="history.go(-1)">Retour</button>
	
</body>
</html>