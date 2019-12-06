<?php
if ($_POST["code"] == 20) {
    require_once("db.php");
    valadateTuto(1);
    header("location: ../page/redir-254698.php?stat=1");
}else {
    header("location: ../page/redir-254698.php?stat=0");
}
?>