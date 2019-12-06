<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" href="../css/page.css" rel="stylesheet">

    </head>
    <body>
        <form action="../methode/quiz.php" method="post">
            <p>
                Question 1 :
                Quelle est la principal agence d'aide financiaire pour les etudient ???
                <select name="q1" id="q1">
                    <option value="Reponce" ></option>
                    <option value="Caf" >Caf</option>
                    <option ! value="Crous" >Crous</option>
                </select>
            </p>
            <p>
                Question 2 :
                Quelle est le montent maximal mensuel accorder par la bourse en 2019 ???
                <select name="q2">
                    <option value="Reponce" ></option>
                    <option ! value="561.20" >561,20</option>
                    <option value="483.10" >483,10</option>
                    <option value="3967" >3967</option>
                </select>
            </p>
            <p>
                Question 3 :
                Quelle combient de crous sont disponible en france ???
                <select name="q3">
                    <option value="Reponce" ></option>
                    <option ! value="28" >28</option>
                    <option value="96" >96</option>
                    <option value="159" >159</option>
                </select>
            </p>
            <p>
                Question 4 :
                Quelle combient y a t-il d'etudient bourcier en france en  ???
                <select name="q4">
                    <option value="Reponce" ></option>
                    <option value="141 962" >141 962</option>
                    <option ! value="691 200" >691 200</option>
                    <option value="700 000" >700 000</option>
                    <option value="53 620" >53 620</option>
                </select>
            </p>
            <p>
                Question 5 :
                Quel est le taux d'etudient francais eyent optenue une licence ou equivalant ???
                <select name="q5">
                    <option value="Reponce" ></option>
                    <option ! value="43" >43 %</option>
                    <option value="34" >34 %</option>
                    <option value="86" >86 %</option>
                    <option value="4,7" >4,7 %</option>
                </select>
            </p>
            <input type="submit" value="Valider">

        </form>
        <?php

            if (isset($_GET["q"]) && $_GET["q"] == "not") {
                echo "faux refais";
            }

        ?>
    </body>

</html>