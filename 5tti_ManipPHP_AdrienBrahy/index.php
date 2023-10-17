<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<p>Hello World</p> ";

        for ($i = 1; $i <= 10; $i++) {
            echo"<p>Le nombre vaut ".$i."</p>";
        }

        for ($i = 1; $i <= 10; $i++) {
            if ($i != 3){
                echo"<p>Le nombre vaut ".$i."</p>";
            }
        }

        for ($i = 1; $i <= 10; $i++) {
            if ($i < 4 || $i > 7){
                echo"<p>Le nombre vaut ".$i."</p>";
            }
        }

        echo"<p>La valeur absolue de -5 est ".abs(-5)."</p>";
        echo"<p>La valeur absolue de 10 est ".abs(10)."</p>";
    ?>
</body>
</html>