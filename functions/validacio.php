<?php
function validacionCrear($name, $phone)
{
    include("./obtenerData.php");
    $nombreDeUsuarios = array();
    $telefonoDeUsuarios = array();

    if ($listaUsers != null) {
        foreach ($listaUsers as $n) {
            array_push($nombreDeUsuarios, $n["nombre"]);
            array_push($telefonoDeUsuarios, $n["telefono"]);
        }
    }

    if ($name == "" || $phone == null) {
        echo '<script>';
        echo 'errorCreate()';
        echo '</script>';

        return false;
    }

    if (in_array($name, $nombreDeUsuarios)) {
        echo '<script>';
        echo 'errorCreate()';
        //echo 'errorMesaje("Error, Nombre Repetido")';
        //echo 'window.location.replace("/page/Add.php")';
        echo '</script>';

        return false;
    }

    if (in_array($phone, $telefonoDeUsuarios)) {
        echo '<script>';
        echo 'errorCreate()';
        //echo 'errorMesaje("Error, Telefono Repetido")';
        //echo 'window.location.replace("/page/Add.php")';
        echo '</script>';

        return false;
    }

    return true;
}

function validacionEditar($name, $phone , $id)
{
    include("./obtenerData.php");
    include("./obtenerDataPorId.php");
    
    $contacto = dataUserWhereId($id);
    $nombreDeUsuarios = array();
    $telefonoDeUsuarios = array();


    if ($listaUsers != null) {
        echo $contacto;
        foreach ($listaUsers as $n) {
            if($contacto["nombre"] == $n["nombre"] && $contacto["telefono"] == $n["telefono"]) continue;
            array_push($nombreDeUsuarios, $n["nombre"]);
            array_push($telefonoDeUsuarios, $n["telefono"]);
        }
    }

    if ($name == "" || $phone == null || $id == 0) {
        echo '<script>';
        echo 'errorEdit()';
        echo '</script>';
    
        return 0;
    }

    if (in_array($name, $nombreDeUsuarios)) {
        echo '<script>';
        echo 'errorCreate()';
        //echo 'errorMesaje("Error, Nombre Repetido")';
        //echo 'window.location.replace("/page/Add.php")';
        echo '</script>';

        return false;
    }

    if (in_array($phone, $telefonoDeUsuarios)) {
        echo '<script>';
        echo 'errorCreate()';
        //echo 'errorMesaje("Error, Telefono Repetido")';
        //echo 'window.location.replace("/page/Add.php")';
        echo '</script>';

        return false;
    }

    return true;
}