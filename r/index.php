<?php
require "../classes/class.php";
if($_GET["a"] != ""){
    $r = new redirect($_GET["a"]);
    if(!$r == "error"){
        header("Location: " . $r->redirect());
    }
    else{
        header("Location: ../?error=2");
    }
}
else{
    header("Location: ../?error=1");
}
