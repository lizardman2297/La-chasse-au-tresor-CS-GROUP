<?php
if ($_POST["reponse"] == 9) {
    require_once("db.php");
    valadateTuto(3);
    header("location: ../page/tutoriel/tutoriel3.php?stat=1");
    
}else {
    header("location: ../page/tutoriel/tutoriel3.php?stat=0");
}
    
?>