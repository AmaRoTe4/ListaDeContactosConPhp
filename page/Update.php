<?php
include("../templates/header.php");
include("../database/db.php");
include("../functions/obtenerDataPorId.php");

$id = $_GET["id"];
$data = dataUserWhereId($id);

?>

<div>
    <span class="title-add">
        <h1>Update</h1>
    </span>
    <form action="/functions/upd.php" method="post">
        <input type="hidden" id="id" name="id" value="<?php echo $data['id'] ?>">
        <label for="Name">
            Name
            <input type="text" id="Name" name="Name" placeholder="Name" required value="<?php echo $data['nombre'] ?>">
        </label>
        <label for="Phone">
            Phone
            <input type="number" min="0" id="Phone" name="Phone" placeholder="Phone" required value="<?php echo $data['telefono'] ?>">
        </label>
        <button type="submit">Edit</button>
    </form>
</div>

<?php
include("../templates/footer.php");
?>