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
        <h1>Commandez notre application AstyCalc</h1>
        <div class="flex">
            <div class="mainLR">
                <p>Gallerie images</p>
                <div class="images flex">
                    <img src="images/calc.png">
                    <img src="images/calc.png">
                </div>
                <div class="images flex">
                    <img src="images/calc.png">
                    <img src="images/calc.png">
                </div>
                <div class="images flex">
                    <img src="images/ops.png">
                    <img src="images/ops.png">
                </div>            
                <div class="images flex">
                    <img src="images/ops.png">
                    <img src="images/ops.png">
                </div>
                <div class="images flex">
                    <img src="images/pi.png">
                    <img src="images/pi.png">
                </div>
                <div class="images flex">
                    <img src="images/pi.png">
                    <img src="images/pi.png">
                </div>
                <div class="images flex">
                    <img src="images/log.png">
                    <img src="images/log.png">
                </div>
                <div class="images flex">
                    <img src="images/log.png">
                    <img src="images/log.png">
                </div>
            </div>
            <div class="mainC">
                <form action="" method="">
                    <div class="flex formss">
                        <fieldset>
                            <legend>Vos information</legend>
                            <div class="lbIn">
                                <p>Votre nom</p>
                                <input type="text" id="surname" name="surname" placeholder="Nom" required>
                            </div>
                            <div class="lbIn">
                                <p>Votre Prénom</p>
                                <input type="text" id="nom" name="nom" placeholder="Prénom" required>
                            </div>
                            <div class="lbIn">
                                <p>Votre mail</p>
                                <input type="mail" id="Email" name="Email" placeholder="Email" required>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Paramétrez votre commande</legend>
                            <div class="lbIn">
                                <p>Choisissez parmi les possibilités</p>
                                <select>
                                    <optgroup label="ordinateur">
                                        <option value="pc">Pc</option>
                                        <option value="mac">Mac</option>
                                    </optgroup>
                                    <optgroup label="Tablette">
                                        <option value="android">Androïd</option>
                                        <option value="apple">Apple</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="lbIn">
                                <p>Date de début d'abonnement</p>
                                <input type="date" id="date" name="date" required>
                            </div>
                            <div class="lbIn">
                                <p>Facture</p>
                                <div class="aligner">
                                    <input type="radio" name="facture" id="mail" value="mail" checked>
                                    <label for="mail">Par mail</label><br />
                                    <input type="radio" name="facture" id="papier" value="papier">
                                    <label for="papier">Par papier</label><br />
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <input type="submit" id="envoyer" name="envoyer">
                </form>
            </div>
            <div class="mainLR">
                <p>Gallerie images</p>
                <div class="images flex">
                    <img src="images/calc.png">
                    <img src="images/calc.png">
                </div>
                <div class="images flex">
                    <img src="images/calc.png">
                    <img src="images/calc.png">
                </div>
                <div class="images flex">
                    <img src="images/ops.png">
                    <img src="images/ops.png">
                </div>            
                <div class="images flex">
                    <img src="images/ops.png">
                    <img src="images/ops.png">
                </div>
                <div class="images flex">
                    <img src="images/pi.png">
                    <img src="images/pi.png">
                </div>
                <div class="images flex">
                    <img src="images/pi.png">
                    <img src="images/pi.png">
                </div>
                <div class="images flex">
                    <img src="images/log.png">
                    <img src="images/log.png">
                </div>
                <div class="images flex">
                    <img src="images/log.png">
                    <img src="images/log.png">
                </div>
            </div>
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