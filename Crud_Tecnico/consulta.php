<?php
// Incluimos el archivo "conexion.php" para establecer la conexión a la base de datos
include("conexion.php");

// Conectamos a la base de datos utilizando la función "connection()" del archivo "conexion.php"
$con = connection();

$cedula_tecnico = $_GET['cedula_tecnico'];
// Creamos una consulta SQL para seleccionar todos los tecnicos de la tabla "tecnicos"
// Crea una consulta SQL para seleccionar los datos del vehículo con el ID proporcionado
$sql = "SELECT * FROM tecnicos WHERE cedula_tecnico='$cedula_tecnico'";


// Ejecutamos la consulta y almacenamos el resultado en la variable "$query"
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-aquiv="X-UA-Compatiblr" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <meta name="description" content="Ingresa datos a la base">
    <meta name="keywords" content="html, css, bases de datos, php, crud, concesionario">
    <meta name="author" content="Alejandro Sánchez Loaiza">
    <meta name="copyright" content="ADSO 2560119">
    <link href="css/estilo.css" rel="stylesheet">
    <title>CONSULTA EL CRUD DEL TÉCNICO</title>
    <link rel="stylesheet" href="consulta_usuario.css">

</head>

<body>
    <div class="users-table">
        <h2>Técnicos registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>Cédula del técnico</th>
                    <th>Código del técnico</th>
                    <th>Nombre del técnico</th>
                    <th>Dirección del técnico</th>
                    <th>Teléfono del técnico</th>
                </tr>
                <!-- Agregamos un botón para volver al menú -->
                <tr>
                    <td colspan="8"><input type="button" onclick="window.location.href='index.php';" value="Menu" /></td>
                </tr>
            </thead>
            <tbody>
                <!-- Iteramos a través de los resultados de la consulta y mostramos los datos de los usuarios en la tabla -->
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <td><?= $row['cedula_tecnico'] ?></td>
                        <td><?= $row['codigo_tecnico'] ?></td>
                        <td><?= $row['nombre'] ?></td>
                        <td><?= $row['direccion'] ?></td>
                        <td><?= $row['telefono'] ?></td>
                        <!-- Agregamos enlaces para editar y eliminar usuarios -->
                        <td><a href="actualizar.php?cedula_tecnico=<?= $row['cedula_tecnico'] ?>" class="users_table_edit"> Editar </a></td>
                        <td><a href="delete.php?cedula_tecnico=<?= $row['cedula_tecnico'] ?>" class="users_table_delete"> Eliminar </a></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
