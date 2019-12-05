<?php

    if (isset($_GET["door"]) && $_GET["door"] == 1) {
        echo "Resultat du calcule : OK";
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" href="../css/page.css" rel="stylesheet">

    </head>
    <body>
        <h1></h1>
        <div class="corePage1">
            <div >
                <a href="./tutoriel/tutoriel1.php"><img src="../image/vrai-faux.png" alt="vrai-faux"></a>
                <a href="./tutoriel/tutoriel1.php"><p class="tuto1">tutoriel 1</p></a>
            </div>
            <div>
                <a href="./tutoriel/tutoriel2.php"><img src="../image/numero.png" alt="numero"></a>
                <a href="./tutoriel/tutoriel2.php"><p class="tuto2">tutoriel 2</p></a>
            </div>
            <div>
                <a href="./tutoriel/tutoriel3.php"><img src="../image/qr-code.png" alt="qr-code"></a>
                <a href="./tutoriel/tutoriel3.php"><p class="tuto2">tutoriel 3</p></a>
            </div>
        </div>
        <div class="coffre">
            <a href="./entrerCode.php"><img class="coffre" src="../image/coffre.jpg" alt="qr-code"></a>
        </div>

    </body>

</html>