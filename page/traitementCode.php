
<?php
$code = 289;
if($_GET["code"] == $code){
    echo "Reussi";
}else {
  
    echo " window.onload = document.location.href='EntrerCode.php?potar1=". $_GET["potar1"]."&potar2=". $_GET["potar2"]."&potar3=". $_GET["potar3"]."'";
}
?>
