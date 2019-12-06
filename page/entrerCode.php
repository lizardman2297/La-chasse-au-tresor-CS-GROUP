<?php 
    function getNombre($nbdegre){
        $i = 360;
        $j = 0;
        while ($i > 0  && $nbdegre != $i) {
            
            $i = $i - 36;
            $j = $j + 1;
        }
        return $j;
    }
?>

<!DOCTYPE html>
<html>
<head>
<link href="../css/theme.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body>
    <div id="conteneurPage">
 <div class="elementsPage"> 
 <h1>Récuperer le code secret grâce au 3 mini-enigmes !</h1>
 </div>
 <div class="elementsPage" id="conteneurRonds">
    <?php 
 /*  if(isset($potar1) == false ){
    $potar1 = 0;
    $potar2 = 0;
    $potar3 = 0;
  }elseif (isset($potar1)) { */
    $potar1 = $_GET["potar1"];
    $potar2 = $_GET["potar2"];
    $potar3 = $_GET["potar3"];
  //}
    
    if($potar1 <= 0){
        $potar1 = 360;
    }
    elseif ($potar2 <= 0) {
        $potar2 = 360;
    }
    elseif ($potar3 <= 0) {
        $potar3 = 360;
    }
    echo "<div class='potar'><a href ='entrercode.php?potar1=". ($potar1 - 36) ."&potar2=".$potar2."&potar3=".$potar3."'><img style='transform : rotate(".$potar1."deg)' id='potar' src='../images/potar.png' alt='potar'></a> </div>";
    echo "<div class='potar'><a href ='entrercode.php?potar1=". $potar1 ."&potar2=".($potar2 - 36)."&potar3=".$potar3."'><img style='transform : rotate(".$potar2."deg)' id='potar' src='../images/potar.png' alt='potar'></a> </div>";
    echo "<div class='potar'><a href ='entrercode.php?potar1=". $potar1 ."&potar2=".$potar2."&potar3=".($potar3 - 36)."'><img style='transform : rotate(".$potar3."deg)' id='potar' src='../images/potar.png' alt='potar'></a> </div>";
  //}
    ?>
 </div>
 <?php
    $combinaison = getNombre($potar1) . getNombre($potar2) . getNombre($potar3);
 echo "<h1 id='Combinaison'>" . $combinaison ."</h1>";
?>
<div class="elementsPage">
 <input onclick="testCombinaison()" id="btnAcceder" type="button"  value="Essayer l'accès !">
</div>
</div>

<script>
function testCombinaison() {
   <?php echo "document.location.href='traitementCode.php?potar1=$potar1&potar2=$potar2&potar3=$potar3&code=$combinaison'"; ?>
}
</script>
</body>
</html>