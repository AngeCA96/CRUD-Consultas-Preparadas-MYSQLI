<?php
    $mysqli = include_once "conexion.php";
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];

    $sentencia = $mysqli->prepare("UPDATE tablauno SET
    nombre = ?, descripcion = ? WHERE id = ?");

    $sentencia->bind_param("ssi", $nombre, $descripcion, $id);
    $sentencia->execute();

    header("Location: listar.php");

    /*
        Los tipos de datos son 's' para cadena, 'i' para entero, 'd' para doble (contempla el tipo de dato decimal) y 'b' para blob. Si son varios parámetros, pasamos los caracteres en la misma cadena.

        En este caso para el ejemplo tenemos tres valores donde dos son del tipo string y uno es entero así que la cadena es 'ssi' y después pasamos los tres valores.
    */
?>
