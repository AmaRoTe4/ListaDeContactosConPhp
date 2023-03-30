<?php

include("../database/db.php");

if (isset($_GET['id']) == null) return 0;    

$id = $_GET['id'];

if($id == 0){
    header("Location: /page/getAllContactos.php");
    echo '<script>errorDelete()</script>';
    return 0;
}

$sentancia = $dbh->prepare("DELETE FROM Usuarios WHERE id=:id");
$sentancia->bindParam(":id", $id);
$sentancia->execute();

ob_start();

header("Location: /page/getAllContactos.php");

echo '<script>successDelete()</script>';

ob_end_flush();

exit;
?>
