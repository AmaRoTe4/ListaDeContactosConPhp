<?php

include("../database/db.php");

if (!$_POST) return 0;    

$name = $_POST["Name"];
$phone = $_POST["Phone"];

if($name == "" || $phone == null){
    header("Location: /page/Add.php");
    echo '<script>errorCreate()</script>';
    return 0;
}

$sentancia = $dbh->prepare("INSERT INTO Usuarios(id,nombre, telefono) VALUES (null, :name, :phone)");
$sentancia->bindParam(":name", $name);
$sentancia->bindParam(":phone", $phone);
$sentancia->execute();

ob_start();

header("Location: /page/Add.php");

echo '<script>successCreate()</script>';

ob_end_flush();

exit;

?>