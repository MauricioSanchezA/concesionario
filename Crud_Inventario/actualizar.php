<?php
    // Incluye el archivo "conexion.php" para establecer la conexión a la base de datos
    include("conexion.php");

    // Establece la conexión a la base de datos utilizando la función "connection()" del archivo "conexion.php"
    $con = connection();

    // Obtiene el valor del parámetro "id_inventario" desde la URL (mediante el método GET)
    $id_inventario = $_GET['id_inventario'];

    // Crea una consulta SQL para seleccionar un registro específico de la tabla "inventario" basado en el "id_inventario"
    $sql = "SELECT * FROM inventario WHERE id_inventario='$id_inventario'";

    // Ejecuta la consulta y almacena el resultado en la variable "$query"
    $query = mysqli_query($con, $sql);

    // Obtiene la fila de datos del resultado de la consulta y almacena los valores en el arreglo asociativo "$row"
    $row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/estilo.css" rel="stylesheet">
    <title>Editar inventario</title>
    <link rel="stylesheet" href="actualizar_usuario.css">
</head>
<body>
    <!-- Botón de "Menú" que redirige al usuario a la página "index.php" -->
    <input type="button" class="menu-button" onclick="window.location.href='index.php';" value="Menu" />

    <!-- Formulario para editar el registro de inventario -->
    <div class="users-form">
        <form action="update.php" method="POST">
            <!-- Campo oculto para enviar el "id_inventario" a la página "update.php" -->
            <input type="hidden" name="id_inventario" value="<?= $row['id_inventario'] ?>">

            <!-- Campos de entrada para editar los valores del inventario-->
            <input type="text" name="gato" placeholder="Gato del inventario" value="<?= $row['gato'] ?>">
            <input type="text" name="cruceta" placeholder="Cruceta del inventario" value="<?= $row['cruceta'] ?>">
            <input type="text" name="botiquin" placeholder="Botiquin del inventario" value="<?= $row['botiquin'] ?>">
            <input type="text" name="radio" placeholder="Radio del inventario" value="<?= $row['radio'] ?>">
            <input type="text" name="observaciones" placeholder="Observaciones del inventario" value="<?= $row['observaciones'] ?>">

            <!-- Botón para enviar el formulario y actualizar el registro -->
            <input type="submit" value="Actualizar">
        </form>
    </div>
</body>
</html>
