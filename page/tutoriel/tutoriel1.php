

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>la Chasse au Trésor</title>
    <link href="../../css/theme.css" rel="stylesheet">
    <link href="../../css/tutoriel1.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">   
</head>
<body>
    <div id="conteneurPage"></div>
    <h1 class='elementsPage'>Tutoriel un</h1>
    
    <div class='elementsPage'>
        <p>Quel est le pourcentage d'étudiants vivants sous le seuil de pauvreté ?</p>
        <form action="../../methode/vf.php" method="post">
            <input type="number" name="pourcentage" id="pourcentage" min="0" max="100" steep="1">
            <input type="submit" value="Verifier">
        </form>
        <br/>
        <?php

    if (isset($_GET["stat"])) {
        if ($_GET["stat"] == 1) {
            echo "C'est vrai, environ 20% des étudiants vivent sous le seuil de pauvreté soit 908 euros en France";
        } else{
            echo "Malheuresement ce n'est pas la bonne valeur";
        }

    }

?>
        <a class='elementsPage' href="../../index.php">Page précédente</a>
    </div>

</body>
</html>