<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" href="../css/redir-254698.css" rel="stylesheet">
        <script src="../js/jquery.js"></script>
        <script src="../js/bip.js"></script>
        

    </head>
    <body>
        <h1></h1>
        <br/>
        <div class="diode">
            <img src="../image/MorseGIF.gif"> </img>
            <form action="../methode/redir-254698.php" method="post">
                <input type="string" name="code" id="code">
                <input type="submit" value="Page Suivante">
            </form>
        </div>
        <?php
            if (isset($_GET["stat"])) {
                if ($_GET["stat"] == 1) {
                    echo '<a href="./APL.php">Retrouvez votre chemin à présent</a>';
                } else{
                    echo "<span onload='bip()' class='bip' id='bip'>bip biiiip</span>";
                }
            }
            ?>
    </body>
</html>