<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" href="../css/page.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
    </head>
<?php
$code = 289;
if($_GET["code"] == $code){
?>
<Body style='background-color : yellowgreen;'>

<h1 style="Color : white;font-family: 'Bebas Neue';text-align : center; font-size : 10em;">Félicitations ... Maintenant la suite !<h1>
<script>
setTimeout(function(){
    window.location.href = 'a845965.php';
}, 2000);
</script> 

</Body>
<?php
}else {
?>
<Body style='background-color : red;'>

    <h1 style="Color : white;font-family: 'Bebas Neue';text-align : center; font-size : 10em;">FAUX<h1>


</Body>
 <script>
<?php
    echo "setTimeout(function(){ window.location.href = document.location.href='EntrerCode.php?potar1=". $_GET["potar1"]."&potar2=". $_GET["potar2"]."&potar3=". $_GET["potar3"]."'
    }, 2000);"
        ;
}
?>
</script>

