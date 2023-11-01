<?php
include 'index.php';
include 'conexion.php';
?>

<br>
<div class="container">
        <!-- Default form contact -->
    <form class="text-center border border-light p-5" action="registrarFac.php" method="POST">
        <p class="h4 mb-4">Registro de Facultad</p>

        <!-- Codigo -->
        <input type="text" id="codigoFac" name="codigoFac" class="form-control mb-4" placeholder="Codigo">

        <!-- Nombre -->
        <input type="text" id="nombreFac" name="nombreFac" class="form-control mb-4" placeholder="Nombre">

        <!-- Send button -->
        <button class="btn btn-success" type="submit">Enviar</button>

    </form>
    <!-- Default form contact -->
</div>