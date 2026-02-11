<?php
require_once "dbfonctions_zooproforma.php";
session_start();
define('INCREMENT', 8);
$message="";
try{
	$madb=connect_Zooproforma();
	if(isset($_POST['action'])){
		if($_POST['action']=='avant'){
			$_SESSION['nb']-=INCREMENT;
		}
		if($_POST['action']=='après'){
			$_SESSION['nb']+=INCREMENT;
		}
	}
	else{
		$_SESSION['max']=count_animaux($madb);
		$_SESSION['nb']=0;
	}
	$message="<H1> Les ". $_SESSION['max']." animaux </H1>".liste_animaux($madb,$_SESSION['nb'],INCREMENT);
	$message.=affiche_boutons($_SESSION['nb'],$_SESSION['max'],INCREMENT);
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
	<!-- <link rel="stylesheet" href="StylesP/.css"> -->
	<title>Zoo Proforma</title>
</head>
<body>
	 <!-- <div class="container">  -->
    <?php echo $message; ?>
  <!--  <div>  -->
   
   
  <!--   <div>
      <input class="input" type="submit" name="Suivant" value="Suivant">
      
    </div> -->
	
</body>
</html>