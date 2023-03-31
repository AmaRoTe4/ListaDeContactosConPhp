<?php
include("../templates/header.php");
?>

<div class="get-all-contactos-box">
    <span>
        <h1>Contactos</h1>
    </span>
    <main>
        <input 
            type="search" 
            id="search" 
            name="search" 
            placeholder="Search"
            oninput="filtrar()"
        >
        <table>
            <thead class="cabezera-tabla">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col" style="text-align:end">Telefono</th>
                    <th scope="col" class="funcionesDeTabla">Editar</th>
                    <th scope="col" class="funcionesDeTabla">Borrar</th>
                </tr>
            </thead>
            <tbody id="grillaDeContactos" class="cuerpo-tabla">
                <!-- elemenos filtrados -->
            </tbody>
        </table>
    </main>
</div>

<?php
include("../templates/footer.php");
?>