<?php 
$message = null;
if(isset($_GET['age']) && isset($_GET['permi']) && isset($_GET['accident']) && isset($_GET['anciennete']))
    {
        require 'fonction.php';

        $age = (int)$_GET['age'];
        $permi = (int)$_GET['permi'];
        $accident = (int)$_GET['accident'];
        $anciennete = (int)$_GET['anciennete'];
        $message = calculContract($age, $permi, $accident, $anciennete);
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
    <h1>Répondez avec nous !</h1>
    </header>
    <main>
        <div>
            <h2>Questionnaire</h2>
            <form action="index.php" method="get">
                <div>
                    <label for="age">Age : </label>
                    <input type="number" name="age" value="<?= $age ?>">
                </div>
                <div> 
                    <label for="permi">depuis cmb tmp permis : </label>
                    <input type="number" name="permi" value="<?= $permi ?>">
                </div>
                <div> 
                    <label for="accident">nombre d'accident : </label>
                    <input type="number" name="accident" value="<?= $accident ?>">
                </div>
                <div> 
                    <label for="anciennete">anciennetée (année) : </label>
                    <input type="number" name="anciennete" value="<?= $anciennete ?>">
                </div>
                <input type="submit" name="envoyer">
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
        <p>Prepa exam GET 5TI 2023</p>
    </footer>
    </div>
</body>

</html>