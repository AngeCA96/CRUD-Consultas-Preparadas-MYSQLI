<?php
    include_once "encabezado.php";

    $mysqli = include_once "conexion.php";
    
    $resultado = $mysqli->query("SELECT id, nombre, descripcion FROM tablauno");
    
    $variable = $resultado->fetch_all(MYSQLI_ASSOC);
?>

    <div class="row justify-content-center">
        <div class="col-6">
            <br>
            <h1>Listado</h1>
            <br>
            <a role="button" class="btn btn-primary my-2" href="index.php">Agregar Nuevo</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($variable as $filas){
                    ?>
                    
                    <tr>
                        <td><?php echo $filas["id"]; ?></td>
                        <td><?php echo $filas["nombre"]; ?></td>
                        <td><?php echo $filas["descripcion"]; ?></td>
                        <td><a role="button" class="btn btn-success my-2" href="editar.php?id=<?php echo $filas["id"]; ?>">Editar</a></td>
                        <td><a role="button" class="btn btn-danger my-2" href="eliminar.php?id=<?php echo $filas["id"]; ?>">Borrar</a></td>
                    </tr>
                    
                    <?php        
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
