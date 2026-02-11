<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Théorie PHP</title>
	<link rel="stylesheet" href="StylesP/theorie.css">
</head>
<body>
	<h1>Théorie PHP</h1>
	<h2>echo</h2>
	<?php
     // commente fin de ligne 
     /* bloc commenté */
     echo "<p>voici un joli petit echo</p>";
     // chaque instructions se termine par ;
     // instructions, structure de controle et les fonctions sont insensibles à la casse
     // par contre les noms de variables sont sensibles à la casse !!!
     Echo " et un
     autre 
     morceau
     sur 
     plusieurs
     lignes ";

     echo "<br/>","un mot","<br/>\n";

     echo "<br>","un mot\n","<br>";
     // le point concatène

	?>
    <h2>print() </h2>
    <?php
    print("exemple <br/> exemple");

    // fonction avec un seul paramètre
    print("exemple"."</br>"."exemple")
    /*print("exemple","<br/>","exemple")*/; // print n'accepte qu'un seul argument

    ?>
    <h2>Les variables </h2>
    <?php
    // String
    $prenom="Isabelle"; // une variable commence par un $ et attention !!!!!
    $Prenom="toto";// sensible à la casse 
    print("<p class='c1'>".$prenom." est fatiguée</p><p>");
    echo $Prenom." est fatiguée</p>";
    print('<p class="c1">'.$prenom.' est fatiguée</p>');

    echo "bonjour, $prenom,comment ça va ?";
    // interpolation pas besoin de concaténer la variable
    echo"\$prenom=$prenom<br/>";
    echo'bonjour $prenom ! comment ça va ?<br/>';
    echo 'bonjour '. $prenom.' ! comment ça va ?<br/>';

    // numérique 
    $a=103;
    $b=3;
    $somme=$a+$b;
    $difference=$a-$b;
    $produit=$a*$b;
    $quotient=$a/$b;


    echo "<p>$a + $b = $somme</p>";
    echo "<p>$a - $b = $difference</p>";
    echo "<p>$a * $b = $produit</p>";
    echo "<p>$a / $b = round($quotient,2)</p>";
    echo "<p>$a / $b = ".round($quotient,2)."</p>";
    echo "<p>$a division entière $b = ".intdiv($a,$b)."</p>";

    $modulo=$a%$b;
    $carre=$a**2;
    $cube=$a**3;

    echo "<p>le célèbre modulo $modulo </p>";
    echo "<p> $a exposant 2 $carre </p>";
    echo "<p> $a exposant 3 $cube </p>";


    $a-=$b; // $a=$a-$b
    $a+=$b; // $a=$a+$b
    $a*=$b; // $a=$a*$b
    $a/=$b; // $a=$a/$b
    $a**=$b; // $a=$a**$b

    // psot et pré incrémentation
    $increment=$a++; // post
    // increment reçoit a et puis a augmente
    $increment=++$a; // pré
    // a augmente et puis increment reçoit a augmenté 

    //boolean 
    $ok= true;
    //$ok= false;

    echo "\$ok=$ok"; // si vrai 1 si faux il n'écrit rien
    $ok=!$ok;
    $vrai=true;
    $faux=false;
    echo '$vrai et $faux<br/>'.($vrai && $faux);
    echo '$vrai ou $faux<br/>'.($vrai || $faux);
    echo '$vrai ou eval courte $erreur<br/>'.($vrai || $erreur);
    // echo '$vrai ou eval longue $erreur<br/>'.($vrai | $erreur);

    ?>
    <h2>Opérateur de comparaison</h2>
    <?php

     $mot1="soleil";
     $mot2="Soleil";
     print("$mot1==$mot2 ?".($mot1==$mot2)."<br/>");
     print("$mot1!=$mot2 ?".($mot1!=$mot2)."<br/>");
     // <,<=, >, >=
     $op1=true;
     $op2="1";
     $op3=1;
     print("$op1==$op2 ?".($op1==$op2)."<br/>");
     print("$op1==$op3 ?".($op1==$op3)."<br/>");
     print("$op1===$op2 ?".($op1===$op2)."<br/>");
     print("$op1===$op3 ?".($op1===$op3)."<br/>");

     print("3>4?".((3>4)? "vrai" : "faux" )."<br/>");
     printf("3<4?".((3>4)? "vrai" : "faux" ));

    ?>
    <h2>Structures de controle</h2>
    <?php
    echo"<p>";
     $nb=rand(1,100);
     echo $nb." ";
     if ($nb<50) {
         echo "on part en courant";
     }
     else {
        echo "on reste 1h de plus";
     }
     echo "... allez Gamin, c'est pour rire";
     echo "</p>";
    ?>
    <?php
       for($i=1;$i<=10;$i++) {
         echo "<HR/>";
       }
       $i=1;
       while($i<=10) {
         echo "<P>eeeee</P>";
         $i++;
       }
       $nb=rand(1,10);
       switch ($nb) {
          case 2:
             echo '2 :-)';
          case 3:
             echo '3:-()';
          case 4:
          echo '4:-(';
          break;
          case 5:
          echo '55555555555555555555';
          break;
          default :
          echo "autre chose";
       }
       echo "<BR>";
       if(isset($nb)) {
         echo "la variable nb existe";
         echo " et son type de données est ".gettype($nb);
         var_dump($nb);
       }
       else {
         echo "la variable nb n'existe pas";
       }
       // constantes 
       define("PI", 3.14);
       echo "<HR>".PI."<HR>";
       // constantes : sensible à la casse
       /*echo "<HR>".Pi."<HR>";*/

    ?>

</body>
</html>