<?php
    require_once("../../methode/alea.php");
    $nb = nbAlea();
    if (isset($_GET["door"]) && $_GET["door"] == 0) {
        echo "Resultat faut, veuillez retenter";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/door.css">
    <script src="../../js/door.js"></script>
    <link href="../../css/theme.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>Porte mathematique</title>
</head>
<body>
    <div id="titre">
        Les portes
    </div>
    <div id="expression">
        8 &divide; 2(2+2) &divide; 2
    </div>

    <div id="content">
        <div id="door">
           <div class="door1" onmouseenter="colorHover(event)" onmouseover="colorOver(event)">
            <div class="textImage">
                <?php echo $nb[1]; ?>
            </div>
            <img src="../../image/door/doorClose.jpg" alt="" class="door">
            </div>
            <div class="door2" onmouseenter="colorHover(event)" onmouseover="colorOver(event)">
                <div class="textImage">
                    <?php echo $nb[2]; ?>
                </div>
                <img src="../../image/door/doorClose.jpg" alt="" class="door">
            </div>
            <div class="door3" onmouseenter="colorHover(event)" onmouseover="colorOver(event)">
                <div class="textImage">
                    8
                </div>
                <img src="../../image/door/doorClose.jpg" alt="" class="door">
            </div> 
        </div>
        
        <form action="../../methode/verifDoor.php" method="post">
            <input type="number" name="result" id="result">
            <input type="submit" value="Repondre">
        </form>
    </div>
    <div>
    <a href="../../index.php">Page précédente</a>
</div>
</body>
</html>

