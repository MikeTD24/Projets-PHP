<?php
require_once "dbfonctions.php";
$message;
try{
	$madb=connectDauphin();
	$message="<DIV> Nombre de nageuses : ".nbnageuses($madb)."</DIV>";
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
	<title>LES DAUPHINS</title>
</head>
<style>
	
/* Fond général */
body {
  margin: 0;
  font-family: 'Segoe UI', Arial, sans-serif;
  background: linear-gradient(135deg, #1e3c72, #2a5298);
  color: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
}

/* Carte centrale */
.container {
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(10px);
  border-radius: 16px;
  padding: 40px;
  box-shadow: 0 12px 32px rgba(0,0,0,0.4);
  text-align: center;
  max-width: 700px;
  width: 90%;
}

/* Titre */
h1 {
  margin-bottom: 30px;
  font-size: 2.2rem;
  text-shadow: 2px 2px 6px rgba(0,0,0,0.5);
}

/* Ligne des images */
.images {
  display: flex;
  justify-content: center;
  gap: 30px;
  margin-bottom: 30px;
}

.images img {
  width: 200px;
  height: auto;
  border-radius: 12px;
  box-shadow: 0 6px 16px rgba(0,0,0,0.3);
  transition: transform 0.3s ease;
}

.images img:hover {
  transform: scale(1.05);
}

/* Boutons */
.buttons {
  display: flex;
  justify-content: center;
  gap: 20px;
}

input[type="submit"] {
  background: linear-gradient(135deg, #ff9a9e, #fad0c4);
  color: #222;
  border: none;
  padding: 12px 24px;
  border-radius: 8px;
  font-size: 1rem;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
}

input[type="submit"]:hover {
  background: linear-gradient(135deg, #a1c4fd, #c2e9fb);
  transform: translateY(-3px);
  box-shadow: 0 6px 16px rgba(0,0,0,0.3);
}

</style>
<body>
  <div class="container">
    <h1>CLUB DE NATATION : LES DAUPHINS</h1>
    <?php echo $message; ?>
    <form action='affiche.php' method='post'>
    
    <div class="images">
      <img src="images/dauphin.jpg" alt="Texte alternatif" />
      <img src="images/logonageur.jpg" alt="Texte alternatif" />
    </div>
    <div class="buttons">
      <input type="submit" name="Membres" value="Membres">
      <input type="submit" name="Resultats" value="Résultats">
      <input type="submit" name="Records" value="Records">
    </div>

  </div>
   </form>

	
</body>
</html>