<?php
$nb=rand(1,100);
$message="<H1>$nb</H1>\n";
$message.='<P>$nb<=>5 donne '.($nb<=>5)."</P>";
// -1 o et 1 en fonction du plus grand 
?>


<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form</title>
</head>
<body>
<?php
  echo $message;

?>
<form action="">
	<input type="submit" value="Rafraîchir">
</form>
	
</body>
</html>