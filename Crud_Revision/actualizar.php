<?php
    // Incluye el archivo de conexión
    include("conexion.php");

    // Establece la conexión a la base de datos
    $con = connection();

    // Obtiene el valor del parámetro 'numero_revision' de la URL
    $numero_revision = $_GET['numero_revision'];

    // Consulta SQL para seleccionar los datos de la revisión con el número proporcionado
    $sql = "SELECT * FROM revisiones WHERE numero_revision='$numero_revision'";
    $query = mysqli_query($con, $sql);

    // Obtiene una fila de resultados como un array asociativo
    $row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/estilo.css" rel="stylesheet">
    <title>Editar revisión</title>
    <link rel="stylesheet" href="actualizar_usuario.css">
</head>
<body>
    <!-- Botón para volver al menú principal -->
    <input type="button" class="menu-button" onclick="window.location.href='index.php';" value="Menu" />

    <div class="users-form">
        <form action="update.php" method="POST">
            <!-- Campo oculto para enviar el número de revisión a actualizar -->
            <input type="hidden" name="numero_revision" value="<?= $row['numero_revision'] ?>">

            <!-- Campos para editar la revisión -->
            <input type="text" name="fecha_revision" placeholder="Fecha de la revisión" value="<?= $row['fecha_revision'] ?>">
            <input type="text" name="descripcion_revision" placeholder="Descripción de la revisión" value="<?= $row['descripcion_revision'] ?>">
            <input type="text" name="tecnico" placeholder="Técnico de la revisión" value="<?= $row['tecnico'] ?>">
            <input type="text" name="tiempo" placeholder="Tiempo de la revisión" value="<?= $row['tiempo'] ?>">
            <input type="text" name="valor_revision" placeholder="Valor de la revisión" value="<?= $row['valor_revision'] ?>">

            <!-- Botón para enviar el formulario de actualización -->
            <input type="submit" value="Actualizar">
        </form>
    </div>
</body>
</html>
