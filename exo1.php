<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Exo 1</title>
	<link rel="stylesheet" href="StylesP/exo1.css">
</head>
<body>
	<h1>Welcome au Zoo Proforma</h1>
	<?php
    
    
    $nb=rand(1,200);
    $r=mt_rand(0, 255);
    $g=mt_rand(0, 255);
    $b=mt_rand(0, 255);
   

  	echo $nb ;
     if ($nb<=50) {
     echo "<img src='images/girafe.jpg'>";

     }
     
     if ($nb>=51 && $nb<=100) {
     echo "<img src='images/tortue.jpg'>";
  	 
     }
    
     if ($nb>=101 && $nb<=150) {
     echo "<img src='images/perruche.jpg'>";
  	 
     }
   
     if ($nb>=151 && $nb<=200) {
     echo "<img src='images/Stépahne.png'>";
     
     }

    ?>
    <style> 
    	body {
    		background-color: rgb(<?php echo $r; ?>, <?php echo $g; ?>, <?php echo $b; ?>);
    	}
    </style>
	
</body>
</html