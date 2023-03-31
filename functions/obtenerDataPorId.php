<?php

function dataUserWhereId ($id){
    include("../database/db.php");
    $sentancia = $dbh->prepare("SELECT * FROM Usuarios WHERE id=:id");
    $sentancia->bindParam(":id", $id);
    $sentancia->execute();
    return $sentancia->fetchAll()[0];
}

?>