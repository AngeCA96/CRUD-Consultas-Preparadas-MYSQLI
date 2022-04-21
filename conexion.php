<?php
    $host = "localhost";
    $usuario = "root";
    $contrasena = "";
    $basededatos = "misejemplos";

  //la base de datos se llama misejemplos, tiene 3 campos los cuales son "id, nombre" y "descripcion", solo "id" es entero, mientras que los otros dos son del tipo cadena y/o varchar

    $mysqli = new mysqli($host, $usuario, $contrasena, $basededatos);
    
        if($mysqli->connect_errno){
            echo "Falló la conexión" . $mysqli->connect_error;
        } /* else {
            echo "Conexión exitosa :D";
        } */
        
        return $mysqli;
?>
