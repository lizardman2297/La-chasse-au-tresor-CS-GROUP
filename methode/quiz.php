<?php

    $q1 = $_POST["q1"];
    $q2 = $_POST["q2"];
    $q3 = $_POST["q3"];
    $q4 = $_POST["q4"];
    $q5 = $_POST["q5"];

    if ($q1 == "Crous" && $q2 == "561.20" && $q3 == "28" && $q4 == "691 200" && $q5 == "43") {
        header("location: ../page/PorteFinal.php");
    }else {
        header("location: ../page/APL.php?q=not");
    }


?>