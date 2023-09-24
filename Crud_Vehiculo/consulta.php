<?php
// Incluimos el archivo "conexion.php" para establecer la conexión a la base de datos
include("conexion.php");

// Conectamos a la base de datos utilizando la función "connection()" del archivo "conexion.php"
$con = connection();

$id_carro = $_GET['id_carro'];
// Crea una consulta SQL para seleccionar los datos del vehículo con el ID proporcionado
$sql = "SELECT * FROM cars WHERE id_carro='$id_carro'";


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
    <title>CONSULTA EL CRUD DEL VEHÍCULO</title>
    <link href="consulta_estilo.css" rel="stylesheet">

</head>

<body>
    <div class="users-table">
        <h2>Vehículos registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>Placa</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                </tr>
                <!-- Agregamos un botón para volver al menú -->
                <tr>
                    <td colspan="8"><input type="button" onclick="window.location.href='index.php';" value="Menu" /></td>
                </tr>
            </thead>
            <tbody>
                <!-- Iteramos a través de los resultados de la consulta y mostramos los datos de los vehículos en la tabla -->
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <td><?= $row['id_carro'] ?></td>
                        <td><?= $row['marca'] ?></td>
                        <td><?= $row['modelo'] ?></td>
                        <!-- Agregamos enlaces para editar y eliminar usuarios -->
                        <td><a href="actualizar.php?id_carro=<?= $row['id_carro'] ?>" class="users_table_edit"> Editar </a></td>
                        <td><a href="delete.php?id_carro=<?= $row['id_carro'] ?>" class="users_table_delete"> Eliminar </a></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
