<?php

    $baseDatos="AppPhp";
    $user="root";
    $password="";

    try {
        $dsn = "mysql:host=127.0.0.1;dbname=$baseDatos";
        $dbh = new PDO($dsn, $user, $password);
    } catch (Exception $e){
        echo "<h1>".$e->getMessage()."</h1>";
    }

?>
