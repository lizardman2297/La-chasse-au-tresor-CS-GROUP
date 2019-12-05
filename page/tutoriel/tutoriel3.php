<link rel="icon" type="image/png" href="./image/logo.jpg" />
<link rel="stylesheet" href="../../css/page.css">

<body>        
    <div id='fond'>
            <div id='content1'>
                <div class='titre'>
                    Trouvez la suite logique :
                </div>
                <div id='astuce'>
                    szefqzqrf
                </div>
                <div class='suite'>  
                    <a title="C'est pas compliqué">256</a>
                    <a>225</a>
                    <a>196</a>
                    <a>169</a>
                    <a>144</a>
                    <a>121</a>
                    <a title="C'est 10x10 non ?">100</a>
                    <a>81</a>
                    <a>64</a>
                    <a>49</a>
                    <a>36</a>
                    <a>25</a>
                    <a>16</a>
                </div>
                <div class='zoneTexte'>
                    <form action="../../methode/suite.php" method="post">
                        <input type="number" name="reponse" id="reponse" min="0" max="100" steep="1">
                        <input type="submit" value="Verifier">
                    </form>

                    <br/>
                    <?php
                        if (isset($_GET["stat"])) {
                            if ($_GET["stat"] == 1) {
                                echo "Bravo ! Tu as une parti du code !";
                            } else{
                                echo "Dommage, réessaye !";
                            }

                        }
                    ?>
                </div>


                <div id='bas'>
                    <a href="../../index.php">Page précédente</a>
                </div>
        </div>
    </div>