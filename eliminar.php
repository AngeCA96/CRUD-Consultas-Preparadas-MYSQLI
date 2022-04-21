<?php
    if (!isset($_GET["id"])) {
        exit("No hay id");
    }
    $mysqli = include_once "conexion.php";
    $id = $_GET["id"];
    $sentencia = $mysqli->prepare("DELETE FROM tablauno WHERE id = ?");

    $sentencia->bind_param("i", $id);
    $sentencia->execute();

    header("Location: listar.php");

    /*
        Los tipos de datos son 's' para cadena, 'i' para entero, 'd' para doble (contempla el tipo de dato decimal) y 'b' para blob. Si son varios parámetros, pasamos los caracteres en la misma cadena.

        En este caso para el ejemplo tenemos un único valor del tipo entero así que la cadena es 'i' y después pasamos el valor.
    */
?>
