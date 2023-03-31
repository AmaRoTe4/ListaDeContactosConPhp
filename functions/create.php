<?php 
    include("../templates/header.php");
?>
<?php

include("../database/db.php");
include("./validacio.php");

if (!$_POST) return 0;    

$name = $_POST["Name"];
$phone = $_POST["Phone"];

if(!validacionCrear($name , $phone)) return 0;

$sentancia = $dbh->prepare("INSERT INTO Usuarios(id,nombre, telefono) VALUES (null, :name, :phone)");
$sentancia->bindParam(":name", $name);
$sentancia->bindParam(":phone", $phone);
$sentancia->execute();

ob_start();

echo '<script>';
echo 'successCreate()';
echo '</script>';

ob_end_flush();

?>
<?php 
    include("../templates/footer.php");
?>