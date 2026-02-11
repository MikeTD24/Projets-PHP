<?php
// Générer 5 numéros distincts entre 1 et 50
$nums = [];
while (count($nums) < 5) {
    $n = rand(1, 50);
    if (!in_array($n, $nums)) {
        $nums[] = $n;
    }
}
sort($nums);

// Générer 2 étoiles distinctes entre 1 et 12
$stars = [];
while (count($stars) < 2) {
    $s = rand(1, 12);
    if (!in_array($s, $stars)) {
        $stars[] = $s;
    }
}
sort($stars);

// Date du triage au format JJ-MM-AAAA
$dateTirage = date('d-m-Y');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>LOTERIE NATIONAL</title>
<style>
   body {
        font-family: Arial, sans-serif;
        background: #f0f8ff;
        text-align: center;
        margin-top: 50px;
    }
    h1 {
        color: #2c3e50;
    }
    .row {
        margin: 20px 0;
    }
    .ball {
        display: inline-block;
        width: 60px;
        height: 60px;
        line-height: 60px;
        margin: 5px;
        border-radius: 50%;
        font-weight: bold;
        font-size: 20px;
        color: white;
    }
    .main {
        background: #27ae60; /* vert */
    }
    .star {
        background: #f39c12; /* orange */
    }
</style>
</head>
<body>
    <h1>TIRAGE DE L'EUROMILLION DU <?= $dateTirage ?></h1>

    <div class="row">
        <?php foreach ($nums as $n): ?>
            <div class="ball main"><?= $n ?></div>
        <?php endforeach; ?>
    </div>

    <div class="row">
        <?php foreach ($stars as $s): ?>
            <div class="ball star"><?= $s ?></div>
        <?php endforeach; ?>
    </div>
</body>
</html>
