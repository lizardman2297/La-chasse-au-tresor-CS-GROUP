<!DOCTYPE html>
<html>
    <head>
        <link href="./css/theme.css" rel="stylesheet">
        <link href="./css/index.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="conteneurPage">
            <h1>
            <?php
                if (isset($_GET["door"]) && $_GET["door"] == 1) {
                    echo "Resultat du calcule : OK";
                }
            ?>
            </h1>
            <h1 class="elementsPage">La Chasse au Tresors</h1>
            <div class="elementsPage" id="conteneurTutoriel">
            <a href="./page/tutoriel/tutoriel1.php">
                <div class="elementsTutos">
                    <img src="./image/vrai-faux.png" alt="vrai-faux">
                    <p class="texttutos">tutoriel un</p>
                </div>
                </a>
                <a href="./page/tutoriel/tutoriel2.php">
                <div class="elementsTutos">
                    <img src="./image/numero.png" alt="numero">
                    <p class="texttutos">tutoriel deux</p>
                </div>
                </a>
                <a href="./page/tutoriel/tutoriel3.php">
                <div class="elementsTutos">
                    <img src="./image/porte.png" alt="porte">
                    <p class="texttutos">tutoriel troix</p>
                </div>
                </a>
            </div>
            <div class="elementsPage">
                <a href="./page/EntrerCode.php?potar1=360&potar2=360&potar3=360"><img  src="./image/coffre.jpg" alt="qr-code"></a>
            </div>
        </div>    
    </body>

</html>