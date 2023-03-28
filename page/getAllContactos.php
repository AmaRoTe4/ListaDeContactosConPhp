<?php
include("../database/db.php");

$sentancia = $dbh->prepare("SELECT * FROM Usuarios");
$sentancia->execute();
$listaUsers = $sentancia->fetchAll(PDO::FETCH_ASSOC);
//$lista = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14);

?>
<?php
include("../templates/header.php");
?>

<div class="get-all-contactos-box">
    <span>
        <h1>Contactos</h1>
    </span>
    <main>
        <input type="search" id="search" name="search" placeholder="Search">
        <table>
            <thead class="cabezera-tabla">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">nombre</th>
                    <th scope="col" style="text-align:end">telefono</th>
                </tr>
            </thead>
            <tbody class="cuerpo-tabla">
                <?php foreach($listaUsers as $n){?>
                    <tr>
                        <th scope="row"><?php echo $n ?></th>
                        <td>Cell</td>
                        <td style="text-align:end">Cell</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
</div>

<?php
include("../templates/footer.php");
?>