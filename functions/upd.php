<?php
if (isset($_POST['id']) == null) return 0;  

include("../database/db.php");

$id = $_POST["id"];
$name = $_POST["Name"];
$phone = $_POST["Phone"];

if ($name == "" || $phone == null) {
    header("Location: /page/getAllContactos.php");
    echo '<script>errorEdit()</script>';
    return 0;
}

$sentancia = $dbh->prepare("UPDATE Usuarios SET nombre=:name, telefono=:phone WHERE id=:id");
$sentancia->bindParam(":id", $id);
$sentancia->bindParam(":name", $name);
$sentancia->bindParam(":phone", $phone);
$sentancia->execute();

ob_start();

header("Location: /page/getAllContactos.php");

echo '<script>successEdit()</script>';

ob_end_flush();

exit;
?>