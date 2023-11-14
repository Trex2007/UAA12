<?php 
$message = null;
if(isset($_GET['chiffre']))
    {
        require 'fonction.php';

        $value = (int)$_GET['chiffre'];
        $gagne = DevinerNombre($value, $message);
    }
    

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=µ, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <title>Document</title>
</head>
<body>
    <header>
    <h1>Jouez avec nous !</h1>
    </header>
    <main>
        <div>
            <h2>Devniez un nombre !</h2>
            <form action="index.php" method="get">
                <input type="number" name="chiffre" min="1" max="500" placeholder="Entre 1 et 500" value="<?= $value ?>">
                <input type="submit" name="deviner">
            </form> 
        </div>  
    </main>
    <?php if ($message == null): ?>
        <?php else: ?>
            <div class="rep">
                <p><?=$message?></p>
            </div>
            
    <?php endif ?>
    <footer> 
        <p>Premier exercice GET 5TI 2023</p>
    </footer>
    <div style="width: 0px; background-color: purple; height: 10000px; margin: 0;">

    </div>
</body>

</html>