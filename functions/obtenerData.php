<?php
include("../database/db.php");

$sentancia = $dbh->prepare("SELECT * FROM Usuarios");
$sentancia->execute();
$listaUsers = $sentancia->fetchAll(PDO::FETCH_ASSOC);

?>