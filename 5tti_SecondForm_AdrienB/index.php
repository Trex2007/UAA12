<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/2092.png" type="image/png">
    <link href="css/flex.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <title>5tti_SecondForm_AdrienBrahy</title>
</head>
<body>
    <div class="contenu">
        <h1>Un super formulaire</h1>
        <form action="" method="">
            <fieldset>
                <legend>Données personnelles</legend>
                <div>
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" placeholder="Dubois" >
                </div>
                <div>
                    <label for="prenom">Prénom :</label>
                    <input type="text" id="prenom" name="prenom" placeholder="Anaïs" >
                </div>
                <div>
                    <label for="ddn">Date de naissance :</label>
                    <input type="date" id="ddn" name="ddn">
                </div>
            </fieldset>
            <fieldset>
                <legend>Les nouveaux input</legend>
                <div>
                    <label for="url">URL :</label>
                    <input type="url" id="url" name="url" placeholder="https://example.com" >
                </div>
                <div>
                    <label for="tel">Tel :</label>
                    <input type="tel" id="tel" name="tel" placeholder="0460 60 60 60" >
                </div>
                <div>
                    <label for="appre">Appréciation (10 à 20) :</label>
                    <input type="range" id="appre" name="appre">
                </div>
                <div>
                    <label for="couleur">Couleur préférée :</label>
                    <input type="color" id="couleur" name="couleur">
                </div>
                <div>
                    <label for="rech">Rechercher :</label>
                    <input type="search" id="rech" name="rech" placeholder="Appréciation">
                </div>
                <div>
                    <label for="fich">Fichier :</label>
                    <input type="file" id="fich" name="fich">
                </div>
                <div>
                    <label for="hr">Heure :</label>
                    <input type="time" id="rh" name="rh">
                </div>
                <div>
                    <label for="mois">Mois :</label>
                    <input type="month" id="mois" name="mois">
                </div>
                <div>
                    <label for="sem">Semaine :</label>
                    <input type="week" id="sem" name="sem">
                </div>
                <div>
                    <label for="exp">Explications :</label>
                    <textarea name="exp" id="exp" placeholder="Aujourd'hui, j'ai manger des pates au thon parce que c'est bon."></textarea>
                </div>
                <div>
                    <label for="rech">recherche :</label>
                    <input type="reset" id="rech" name="rech">
                </div>
            </fieldset>
            <fieldset>
                <legend>Button envoi :</legend>
                <input type="submit" id="envoi" name="rech">
            </fieldset>
        </form>
    </div>
</body>
</html>