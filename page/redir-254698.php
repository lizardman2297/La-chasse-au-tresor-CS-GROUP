<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" href="../css/redir-254698.css" rel="stylesheet">

    </head>
    <body>
        <h1></h1>
        <br/>
        <div class="corePage1">
            <!--Oh, Vous êtes perdu ? Laissez moi vous donner une petite aide :
            --> <a href="./aide-236897"></a>
        </div>
        <div class="diode">
            <img src="../image/MorseGIF.gif"> </img>
            <form action="../../methode/redir-254698.php" method="post">
                <input type="string" name="code" id="code">
                <input type="submit" value="Page Suivante">
            </form>
        </div>
        <?php
            if (isset($_GET["stat"])) {
                if ($_GET["stat"] == 1) {
                    echo '<a href="./APL">Retrouvez votre chemin à présent</a>';
                } else{
                    echo "bip biiiip";
                }
            }
            ?>
    </body>
</html>