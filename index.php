<?php
    include_once "encabezado.php";
?>

<br>
<div class="row justify-content-center">
    <div class="col-6">
        <h1>Registrar</h1>
        <form action="registrar.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input placeholder="Nombre" class="form-control" type="text" name="nombre">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <input placeholder="Descripción" class="form-control" type="text" name="descripcion">
            </div>
            <div class="form-group">
                <button class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
</div>

<?php
    include_once "pie.php";
?>
