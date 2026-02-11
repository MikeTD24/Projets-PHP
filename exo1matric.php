<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MATRICE</title>
	<style>
		/* Style global */
body {
    font-family: Arial, Helvetica, sans-serif;
    background: #f4f4f9;
    margin: 0;
    padding: 20px;
    color: #333;
}

/* Titre */
h1 {
    text-align: center;
    color: #2c3e50;
    margin-bottom: 25px;
    font-size: 2rem;
    text-transform: uppercase;
    letter-spacing: 2px;
}

/* Tableau */
table {
    width: 90%;
    margin: 0 auto;
    border-collapse: collapse;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
    background: #fff;
    border-radius: 8px;
    overflow: hidden;
}

/* En-têtes */
thead {
    background: #34495e;
    color: #fff;
}

thead th {
    padding: 12px;
    text-align: center;
    font-weight: bold;
    font-size: 1rem;
}

/* Lignes du tableau */
tr:nth-child(even) {
    background: #ecf0f1;
}

tr:hover {
    background: #dfe6e9;
    transition: 0.3s;
}

/* Cellules */
td {
    padding: 10px;
    text-align: center;
    font-size: 0.95rem;
    border-bottom: 1px solid #ccc;
}

/* Colonne hobbies plus large */
td:last-child {
    text-align: left;
    font-style: italic;
    color: #2c3e50;
}
/* Responsive */
@media (max-width: 768px) {
    table, thead, tbody, th, td, tr {
        display: block;
    }
    thead {
        display: none;
    }
    tr {
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 6px;
        padding: 10px;
        background: #fff;
    }
    td {
        text-align: left;
        border: none;
        padding: 8px;
    }
    td:before {
        content: attr(data-label);
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
        color: #34495e;
    }
}

	</style>
</head>
<body>
	<div>
		<h1>MATRICE : STAGIAIRES </h1>	
	</div>
     <?php
$stagiaires = [
    [
        "nom" => "Moermans", 
        "prenom" => "Denise", 
        "ddn" => "28/12/1973",
        "sexe" => "F",
        "enfants" => 2,
        "hobbies" => ["VID", "TEN", "PGM"] 
    ],
    [
        "nom" => "Arabica",
        "prenom" => "Tristan",
        "ddn" => "25/10/1993",
        "sexe" => "M",
        "enfants" => 0,
        "hobbies" => ["KAR", "VEL", "PGM","MNG"]
    ],
    [
        "nom" => "Rivers",
        "prenom" => "Rachel",
        "ddn" => "05/03/1983",
        "sexe" => "F",
        "enfants" => 2,
        "hobbies" => ["BSK", "PIA", "CHT"]
    ],
    [
        "nom" => "Conarito", 
        "prenom" => "Carolina", 
        "ddn" => "23/06/1987",
        "sexe" => "F",
        "enfants" => 4,
        "hobbies" => ["GUI", "JDR", "PGM"] 
    ],
    [
        "nom" => "Perceval", 
        "prenom" => "Jean-Sébastien", 
        "ddn" => "13/07/1986",
        "sexe" => "M",
        "enfants" => 0,
        "hobbies" => ["PGM","PSM"] 
    ],
    [
        "nom" => "Waltery", 
        "prenom" => "Victor", 
        "ddn" => "13/11/1994",
        "sexe" => "M",
        "enfants" => 0,
        "hobbies" => ["GAG", "TMA", "EDC"] 
    ],
    [
        "nom" => "Kaliou", 
        "prenom" => "Fatima", 
        "ddn" => "11/09/1999",
        "sexe" => "F",
        "enfants" => 0,
        "hobbies" => ["GAM", "MUS", "PGM"] 
    ],
    [
        "nom" => "Pinicalo", 
        "prenom" => "Raphaëlo", 
        "ddn" => "11/08/1996",
        "sexe" => "M",
        "enfants" => 0,
        "hobbies" => ["GAM", "TEC", "SOR"] 
    ],
    [
        "nom" => "Strivers",
        "prenom" => "Simon",
        "ddn" => "28/10/19997",
        "sexe" => "M",
        "enfants" => 0,
        "hobbies" => ["JDR", "CHT", "PGM", "MNG", "VID", "PIA", "GAM", "DNS"]
    ],
    [
        "nom" => "Lecocq", 
        "prenom" => "Pierre", 
        "ddn" => "30/05/1996",
        "sexe" => "M",
        "enfants" => 0,
        "hobbies" => ["VID", "JEU", "SER","CRI"] 
    ]
];


$hobbies = [
    "VID" => "Vidéo",  
    "TEN" => "Tennis",  
    "PGM" => "Programation", 
    "KAR" => "Karate",
    "VEL" => "Velo",
    "MNG" => "Manga",
    "BSK" => "Basketball",  
    "PIA" => "Piano",  
    "CHT" => "Chant",
    "GUI" => "Guitare",  
    "JDR" => "Jeu de rôle",
    "JEU" => "Jeux divers",
    "PSM" => "Plongée-sous-Marine",
    "TMA" => "sortie entre Amis",  
    "EDC" => "manger",
    "GAG" => "Glander",
    "GAM" => "Jeux vidéo",
    "MUS" => "Musique",
    "TEC" => "Technologie",
    "SOR" => "Sortie entre amis",
    "PIA" => "Piano",  
    "DNS" => "Danse", 
    "CRI" => "Crier",
    "SER" => "Series", 

];

echo "<table border='1' cellpading='8' cellspacing='0'>";
echo "<THEAD><TR>";
foreach(array_keys($stagiaires[0]) as $titre) {
echo "<TH>".$titre."</TH>";
}


echo "</TR></THEAD>";
for($ligne=0; $ligne<count($stagiaires);$ligne++){
    echo "<TR>";
	foreach($stagiaires[$ligne] as $valeur) {
		echo "<TD>";
		if (! is_array($valeur)) {
		echo $valeur;

		} else {
			// valeur = tableau de hobbies
			$liste = [];
			foreach($valeur as $code) {
				// si le code existe dans la table $hobbies, on affiche le libellé
				if (isset($hobbies[$code])) {
					$liste[] = $hobbies[$code];
				} else {
					$liste[] = $code;
				}

			}
			// assemble les hobbies en une seule chaîne de caractère séparée par des virgules
			echo implode(", ", $liste); 
		}
		echo "</TD>";
	}
   echo "</TR>";
}
?>


</body>
</html>