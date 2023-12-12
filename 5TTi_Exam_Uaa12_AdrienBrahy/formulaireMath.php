<?php 
$message = null;
if(isset($_GET['cotA']) && isset($_GET['cotB']) && isset($_GET['cotC']))
    {
        require 'fonction.php';

        $c1 = (int)$_GET['cotA'];
        $c2 = (int)$_GET['cotB'];
        $c3 = (int)$_GET['cotC'];
        $message = calculTriangle($c1, $c2, $c3);
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <title>Examen UAA12 - Adrien Brahy</title>
</head>
<body>
    <header>
    <a href="index.php"><button>Home</button></a>
    <a href="formulaireMath.php"><button class="interHead">Tester l'application</button></a>
    <a href="#"><button>Contact</button></a>
    </header>
    <main>
        <h1>Les côtés de votre triangle</h1>
        <div class="flex">
            <div class="lrep">
                <form action="" method="">
                    <fieldset>
                        <legend>les côtés de votre triangle</legend>
                        <div class="lbIn">
                            <p>côté A</p>
                            <input type="number" min="1" id="cotA" name="cotA" placeholder="côté A">
                        </div>
                        <div class="lbIn">
                            <p>côté B</p>
                            <input type="number" min="1" id="cotB" name="cotB" placeholder="côté B">
                        </div>
                        <div class="lbIn">
                            <p>côté C</p>
                            <input type="number" min="1" id="cotC" name="cotC" placeholder="côté C">
                        </div>
                    </fieldset>
                    <input type="submit" id="envoyer" name="envoyer">
                </from>
            </div>
            <?php if ($message == null): ?>
            <?php else: ?>
                <div class="rep">
                    <p><?=$message?></p>
                </div>
                
            <?php endif ?>
        </div>
        
    </main>
    <footer class="flex">
        <div class="footL">
            <p>Examen décembre 2023 UAA12</p>
        </div>    
        <div class="footR">
            <p>5TTI</p>
        </div>    

    </footer>
</body>
</html>