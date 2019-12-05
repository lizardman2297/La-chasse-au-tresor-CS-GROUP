<?php
function dataBaseConnect(){
    $dsn = 'mysql:dbname=chasseAuTresor;host=127.0.0.1';
    $user = 'root';
    $password = '';
    
    try {
        return new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
}

function valadateTuto($idTuto){
    $db = dataBaseConnect();
    $req = "UPDATE tuto 
            SET validationTuto = TRUE  
            WHERE numTuto = $idTuto";
    $db->query($req);
}


?>