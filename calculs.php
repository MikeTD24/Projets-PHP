<?php
$message="";
$nb1=rand(1,10);
$nb2=rand(1,10);
$message="<label>".$nb1." + ".$nb2." = </label>";

?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculs PHP :-)</title>
</head>
<body>
	<h1>TROUVER LA SOLUTION</h1>
	<form action="recup_hidden.php" method="post">
	 <div>
	 	<?php
	 	echo"<input type='hidden' name='nb1' value='".$nb1."'>";
	 	echo"<input type='hidden' name='nb2' value='".$nb2."'>";
        echo $message;
	 	?>
	 	<input type="number" name="reponse" min=0 max="100">
	 </div> 
	 <input type="submit" name="action" value="Envoyer">
	

	</form>
	
</body>
</html>