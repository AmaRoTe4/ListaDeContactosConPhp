<?php 
    include("../templates/header.php");
?>
<?php

include("../database/db.php");

if (isset($_GET['id']) == null) return 0;    

$id = $_GET['id'];

if($id == 0 || $id == null){
    echo '<script>';
    echo 'errorDelete()';
    echo '</script>';
    
    return 0;
}

$sentancia = $dbh->prepare("DELETE FROM Usuarios WHERE id=:id");
$sentancia->bindParam(":id", $id);
$sentancia->execute();

ob_start();

echo '<script>';
echo 'successDelete()';
echo '</script>';

ob_end_flush();

?>
<?php 
    include("../templates/footer.php");
?>