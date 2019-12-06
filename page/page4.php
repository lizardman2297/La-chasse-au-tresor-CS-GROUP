<?php
    require_once("../methode/testTuto.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" href="../css/page.css" rel="stylesheet">

    </head>
    <body>
        <form>
            <p>
                Question 1 :
                Quelle est la principal agence d'aide financiaire pour les etudient ???
                <select>
                    <option value="Reponce"></option>
                    <option value="Caf">Caf</option>
                    <option ! value="Crous">Crous</option>
                </select>
            </p>
            <p>
                Question 2 :
                Quelle est le montent maximal mensuel accorder par la bourse en 2019 ???
                <select>
                    <option value="Reponce"></option>
                    <option ! value="561.20">561,20</option>
                    <option value="483.10">483,10</option>
                    <option value="3967">3967</option>
                </select>
            </p>
            <p>
                Question 3 :
                Quelle combient de crous sont disponible en france ???
                <select>
                    <option value="Reponce"></option>
                    <option ! value="28">28</option>
                    <option value="96">96</option>
                    <option value="159">159</option>
                </select>
            </p>
            <p>
                Question 4 :
                Quelle combient y a t-il d'etudient bourcier en france en  ???
                <select>
                    <option value="Reponce"></option>
                    <option value="141 962">141 962</option>
                    <option ! value="691">691 200</option>
                    <option value="700">700 000</option>
                    <option value="53">53 620</option>
                </select>
            </p>
            <p>
                Question 5 :
                Quel est le taux d'etudient francais eyent optenue une licence ou equivalant ???
                <select>
                    <option value="Reponce"></option>
                    <option ! value="Caf">43 %</option>
                    <option value="Crous">34 %</option>
                    <option value="Crous">86 %</option>
                    <option value="Crous">4,7 %</option>
                </select>
            </p>

            <?php>
                if(){
                    echo "<input type='text' name='reponce' placeholder='Réponce' size='20'>";
                    echo "<input type='submit' value='valider' href='.php'>";
                }
            </?>

        </form>
    </body>

</html>