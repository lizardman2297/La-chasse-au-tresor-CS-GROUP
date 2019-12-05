<?php
if ($_POST["pourcentage"] == 20) {
    header("location: ../page/tutoriel/tutoriel1.php?stat=1");
}else {
    header("location: ../page/tutoriel/tutoriel1.php?stat=0");
}
    
?>