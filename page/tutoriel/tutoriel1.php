

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Futur nom</title>
</head>
<body>
    <div id="titre">
        <h1>Tutoriel no1</h1>
    </div>
    <div id="content">
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
        <a href="../page1.php">Page précédente</a>
    </div>

</body>
</html>