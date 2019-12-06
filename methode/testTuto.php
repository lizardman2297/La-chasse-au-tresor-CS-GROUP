<?php
    require_once("db.php");
    $db = dataBaseConnect();
    $req = "SELECT COUNT(numTuto) AS valider
            FROM tuto
            WHERE validationTuto = TRUE";
    $reqVal = $db->query($req);
    $val = $reqVal->fetchObject();
    if (!$val->valider == 3) {
        header("location: ../index.php?t=0");
    }