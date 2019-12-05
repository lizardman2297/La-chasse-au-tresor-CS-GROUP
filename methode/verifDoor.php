<?php

    if ($_POST["result"] == 8) {
        require_once("db.php");
        valadateTuto(2);
        header("location: ../page/page1.php?door=1");
    } else{
        header("location: ../page/tutoriel/tutoriel2.php?door=0");
    }


?>