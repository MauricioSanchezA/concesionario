<?php
// Incluye el archivo "conexion.php" para establecer la conexión a la base de datos
include("conexion.php");

// Conecta a la base de datos utilizando la función "connection()" del archivo "conexion.php"
$con = connection();

// Obtiene el valor del parámetro 'numero_revision' de la URL
$numero_revision = $_GET['numero_revision'];

// Crea una consulta SQL para seleccionar los datos de la revisión con el número proporcionado
$sql = "SELECT * FROM revisiones WHERE numero_revision='$numero_revision'";

// Ejecuta la consulta y almacena el resultado en la variable "$query"
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
    <title>CONSULTA EL CRUD DE LA REVISIÓN</title>
    <link rel="stylesheet" href="consulta_usuario.css">
</head>

<body>
    <div class="users-table">
        <h2>Revisiones registradas</h2>
        <table>
            <thead>
                <tr>
                    <th>Número de la revisión</th>
                    <th>Fecha de la revisión</th>
                    <th>Descripción de la revisión</th>
                    <th>Técnico de la revisión</th>
                    <th>Tiempo de la revisión</th>
                    <th>Valor de la revisión</th>
                </tr>
                <!-- Agregamos un botón para volver al menú -->
                <tr>
                    <td colspan="8"><input type="button" onclick="window.location.href='index.php';" value="Menu" /></td>
                </tr>
            </thead>
            <tbody>
                <!-- Iteramos a través de los resultados de la consulta y mostramos los datos de las revisiones en la tabla -->
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <td><?= $row['numero_revision'] ?></td>
                        <td><?= $row['fecha_revision'] ?></td>
                        <td><?= $row['descripcion_revision'] ?></td>
                        <td><?= $row['tecnico'] ?></td>
                        <td><?= $row['tiempo'] ?></td>
                        <td><?= $row['valor_revision'] ?></td>
                        <!-- Agregamos enlaces para editar y eliminar revisiones -->
                        <td><a href="actualizar.php?numero_revision=<?= $row['numero_revision'] ?>" class="users_table_edit"> Editar </a></td>
                        <td><a href="delete.php?numero_revision=<?= $row['numero_revision'] ?>" class="users_table_delete"> Eliminar </a></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
