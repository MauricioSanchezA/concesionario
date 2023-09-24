<?php
// Incluimos el archivo "conexion.php" para establecer la conexión a la base de datos
include("conexion.php");

// Conectamos a la base de datos utilizando la función "connection()" del archivo "conexion.php"
$con = connection();

// Obtenemos el ID del inventario a consultar desde los parámetros GET
$id_inventario = $_GET['id_inventario'];

// Creamos una consulta SQL para seleccionar los datos del inventario con el ID proporcionado
$sql = "SELECT * FROM inventario WHERE id_inventario='$id_inventario'";

// Ejecutamos la consulta y almacenamos el resultado en la variable "$query"
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ingresa datos a la base">
    <meta name="keywords" content="html, css, bases de datos, php, crud, concesionario">
    <meta name="author" content="Alejandro Sánchez Loaiza">
    <meta name="copyright" content="ADSO 2560119">
    <link href="css/estilo.css" rel="stylesheet">
    <title>CONSULTA EL CRUD DEL INVENTARIO</title>
    <link rel="stylesheet" href="consulta_usuario.css">

</head>

<body>
    <div class="users-table">
        <h2>Inventarios registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>Id del inventario</th>
                    <th>Gato del inventario</th>
                    <th>Cruceta del inventario</th>
                    <th>Botiquín del inventario</th>
                    <th>Radio del inventario</th>
                    <th>Observaciones del inventario</th>
                </tr>
                <!-- Agregamos un botón para volver al menú -->
                <tr>
                    <td colspan="8"><input type="button" onclick="window.location.href='index.php';" value="Menu" /></td>
                </tr>
            </thead>
            <tbody>
                <!-- Iteramos a través de los resultados de la consulta y mostramos los datos del inventario en la tabla -->
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <td><?= $row['id_inventario'] ?></td>
                        <td><?= $row['gato'] ?></td>
                        <td><?= $row['cruceta'] ?></td>
                        <td><?= $row['botiquin'] ?></td>
                        <td><?= $row['radio'] ?></td>
                        <td><?= $row['observaciones'] ?></td>
                        <!-- Agregamos enlaces para editar y eliminar el inventario -->
                        <td><a href="actualizar.php?id_inventario=<?= $row['id_inventario'] ?>" class="users_table_edit"> Editar </a></td>
                        <td><a href="delete.php?id_inventario=<?= $row['id_inventario'] ?>" class="users_table_delete"> Eliminar </a></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
