<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <p> Hello World </p>

        <?php for ($i = 1; $i <= 10; $i++) : ?>
            <p>Le nombre vaut <?= $i ?> </p>
        <?php endfor ?>

        <?php for ($i = 1; $i <= 10; $i++) : ?>
            <?php if ($i != 3) : ?>
                <p>Le nombre vaut <?= $i ?></p1>
            <?php endif ?>
        <?php endfor ?>

        <?php for ($i = 1; $i <= 10; $i++) : ?>
            <?php if ($i < 4 || $i > 7) : ?>
                <p>Le nombre vaut <?= $i ?></p>
            <?php endif ?>
        <?php endfor ?>

        <p> La valeur absolue de -5 est " <?= abs(-5) ?> </p>
        <p> La valeur absolue de 10 est " <?= abs(10) ?> </p>

</body>
</html>