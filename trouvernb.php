<?php 
session_start(); //démarrer une session
$message="Trouvez le nombre que j'ai tiré entre 1 et 100 ";
$formulaire=afficheform();;
if(isset($_POST['action'])){ // si j'arrive en cliquant sur un bouton
	if($_POST['action']=="ok"){ 
	// si j'ai cliqué sur le bouton clic
		$_SESSION['tentative']++;
		if($_POST['nb']<$_SESSION['nb']){
			$_SESSION['message'].="<P>le nombre à trouver est plus grand que ".$_POST['nb']."</P>";
		}
		else{
			if($_POST['nb']>$_SESSION['nb']){
			$_SESSION['message'].="<P>le nombre à trouver est plus petit que ".$_POST['nb']."</P>";
			}
			else{
				$_SESSION['message'].="<P>GAGNE</P>";
				$formulaire=gagne();
			}
		}
	}
	else{ // c'est que j'ai cliqué sur réinitialiser
		$message.="(".init().")";
	}
	
	
}
else{ // quand j'arrive la première fois
   // j'ouvre le ficheir php sans cliquer sur un bouton
 	$message.="(".init().")";
}
function gagne(){
	$form='<form action="trouve_nb.php" method="POST">
		<DIV>
			<input type="number" min="1" max="100" name="nb">
		</DIV>	
		<DIV>

			<input type="submit" name="action" disabled value="ok">
			<input type="submit" name="action" value="Réinitialiser">
		</DIV>
	</form>';
	return $form;
}
function init(){
  $_SESSION['nb']=rand(1,100); 
  $_SESSION['message']='';
  $_SESSION['tentative']=0;
  
  return $_SESSION['nb'];
  
}
function afficheform(){
	$form='<form action="trouve_nb.php" method="POST">
		<DIV>
			<input type="number" min="1" max="100" name="nb">
		</DIV>	
		<DIV>

			<input type="submit" name="action" value="ok">
			<input type="submit" name="action" value="Réinitialiser">
		</DIV>
	</form>';
  return $form;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php echo "<H1>".$message."</H1>"; 
	 echo $formulaire;
	 
	echo $_SESSION['message'];
	echo "<P> Nombre de tentatives : ".$_SESSION['tentative']."</P>";
	?>
</body>