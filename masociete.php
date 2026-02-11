<?php
require_once "dbfonctions_societe.php";
$message;
try{
	$madb=connect_societe();
	$message="<H1> Les clients : </H1>".liste_clients($madb);
}
catch(Exception $e){
	die("erreur fatale :".$e->getMessage()."<form>
		 <input type='submit' value='retour' onclick='history.go(-1)'>
		 </form>");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="StylesP/masociete.css">
	<title>Ma Société</title>
</head>
<body>
	 <div class="container">
    <?php echo $message; ?>
    <div>
    
   
    <form action='action.php' method='Post'>
   
    <div>
      <input class="input" type="submit" name="Ajouter" value="Ajouter">
      <input class="input" type="submit" name="Rechercher" value="Rechercher">
    </div>

  </div>
   </form>
	
</body>
</html>