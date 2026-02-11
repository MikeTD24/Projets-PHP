<?php
require_once "dbfonctions.php";
$message="";
$titre="";
try{
	$madb=connectDauphin();
	if(isset($_POST['Membres'])){
		$titre="Liste des membres du club de natation les Dauphins";
		$message=liste_membres($madb);
	}
	else {
		if(isset($_POST['Resultats'])){
			$titre="Liste des resultats du club de natation les Dauphins";
		$message=liste_resultats($madb);
		}
		else{
			if(isset($_POST['Records'])){
			$titre="Liste des records du club de natation les Dauphins";
		$message=liste_records($madb);
		}
		else{
			$titre="erreur fatale";
			$message="erreur fatale code 404040, contactez moi au 0478 235689";
		}

		}
	}
}
catch(exception $e){
	die("erreur fatale :".$e->getmessage()."<form>
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
	<link rel="stylesheet" href="StylesP/main_affiche.css">
	<title><?php echo $titre; ?></title>
</head>
<body class="<?php
    if(isset($_POST['Membres'])) echo 'membres';
    	elseif(isset($_POST['Resultats'])) echo 'resultats';
    	elseif(isset($_POST['Records'])) echo 'records';
    ?>">
	<h1><?php echo $titre; ?></h1>
	<?php echo $message; ?>
	<form>
		<input type="submit" value="Retour" onclick="history.go(-1)">
	</form>
	
</body>
</html>