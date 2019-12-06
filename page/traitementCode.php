
<?php
$code = 289;
if($_GET["code"] == $code){
    echo "Reussi";
}else {
?>
 <script>
<?php
    echo "setTimeout(function(){ window.location.href = document.location.href='EntrerCode.php?potar1=". $_GET["potar1"]."&potar2=". $_GET["potar2"]."&potar3=". $_GET["potar3"]."'
    }, 2000);"
        ;
}
?>
</script>

<!-- <script>
setTimeout(function(){
    window.location.href = 'a845965.php';
}, 2000);
</script> -->