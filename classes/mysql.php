<?php
try {
    $database = new PDO("mysql:host=localhost;dbname=urls","root" ,"" );
} catch (PDOException $e) {
    echo $e->getMessage();
    die();
}
