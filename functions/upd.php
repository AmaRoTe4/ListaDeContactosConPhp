<?php 
    include("../templates/header.php");
?>
<?php
if (isset($_POST['id']) == null) return 0;  

include("../database/db.php");
include("./validacio.php");

$id = $_POST["id"];
$name = $_POST["Name"];
$phone = $_POST["Phone"];

if(!validacionEditar($name , $phone , $id)) return 0;

$sentancia = $dbh->prepare("UPDATE Usuarios SET nombre=:name, telefono=:phone WHERE id=:id");
$sentancia->bindParam(":id", $id);
$sentancia->bindParam(":name", $name);
$sentancia->bindParam(":phone", $phone);
$sentancia->execute();

ob_start();

echo '<script>';
echo 'successEdit()';
echo '</script>';

ob_end_flush();

?>
<?php 
    include("../templates/footer.php");
?>