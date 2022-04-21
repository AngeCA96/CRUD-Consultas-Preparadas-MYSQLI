<?php

    $mysqli = include_once "conexion.php";

    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];

    $sentencia = $mysqli->prepare("INSERT INTO tablauno (nombre, descripcion) VALUES(?, ?)");

    $sentencia->bind_param("ss", $nombre, $descripcion); //son dos 'ss' porque son dos strings: nombre y descripción
    $sentencia->execute();

    header("Location: listar.php");

    /*
        Los tipos de datos son 's' para cadena, 'i' para entero, 'd' para doble (contempla el tipo de dato decimal) y 'b' para blob. Si son varios parámetros, pasamos los caracteres en la misma cadena.

        En este caso para el ejemplo solo tenemos dos valores que son de tipo string así que la cadena es 'ss' y después pasamos los dos valores.
    */
?>
