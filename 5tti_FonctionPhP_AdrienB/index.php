<?php
    $nd=5;
    $nt=8;
    $nbr1=21;
    $nbr2=15;

    $phrase = "la réussite passe pas une étude et un entraînement régulier et sérieux";
    require_once "fonction.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=µ, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <title>Document</title>
</head>
<body class="changeTheme">
    <header>
        <h1>Apprendre les fonctions en php</h1>
    </header>
    <main>
        <h1 class="color">Testons les appels de fonctions</h1>
        <p class="color"><b>Je veux des belles fonctions php (séparer analyse et affiche dans votre fichier)</b></p>
        <h2 class="color">Première fonction</h2>
        <p class="color">Voici une suite tout à fait farfelue(pour un nombre de départ de <?= $nd ?> et un nombre d'élément de <?= $nt ?>) <?=fonctionSpecial($nd, $nt)?> </p>
        <h2 class="color">Calcul du PGCD</h2>
        <p class="color">Le PGCD entre <?= $nbr1 ?> et <?= $nbr2 ?> vaut <?=AlgoEucl($nbr1, $nbr2) ?> </p>
        <h1 class="color">Affichez proprement du code</h1>
        <p class="color">On ne crée pas de fondtion mais on écrit proprement la boucle php dans l'html<br />
        (On souhaite afficher la dernière lettre de chaque mot dans une liste a puces. On considère que chaque mot est suivi d'un espace sauf le dernier)</p>
        <p class="color">dans la variable $phrase "<?= $phrase ?>" ,la dernière lettre de chaque mot est</p>
        
        <?php $mot = preg_split('/\s+/', $phrase) ?>

        <ul>
            <?php for($i = 0; $i < count($mot); $i++) : ?>
                <?php $fin = str_split($mot[$i])?>
                <li class="color"><?= end($fin)?></li>
            <?php endfor?>
        </ul>
    </main>
</body>
<script src="app.js"></script>
</html>