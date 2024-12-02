<?php
require "../classes/class.php";
if($_GET["a"] != ""){
    $r = new redirect($_GET["a"]);
    header("Location: " . $r->redirect());
}
else{
    header("Location: ../");
}
