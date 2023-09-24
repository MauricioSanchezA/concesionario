<?php
// Incluye el archivo "conexion.php" para establecer la conexión a la base de datos
include("conexion.php"); 

// Conecta a la base de datos utilizando la función "connection()" del archivo "conexion.php"
$con = connection(); 

// Crea una consulta SQL para seleccionar todos los usuarios de la tabla "users"
$sql = "SELECT * FROM cars";

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
    <link href="css/estilo1.css" rel="stylesheet"> <!-- Se conecta con los estios -->
    <link rel="stylesheet" href="">
    <title>CREANDO EL CRUD DEL VEHÍCULO</title> <!-- Se crea el título -->
    <link rel="stylesheet" href="vehiculo.css">
</head>

<body>
    <!-- Formulario para crear un nuevo vehículo -->
    <div class="users-form">
        <h1>CREAR VEHÍCULO</h1>
        <form action="insertar.php" method="POST">
            <input type="text" name="id_carro" placeholder="Placa">
            <input type="text" name="marca" placeholder="Marca">
            <input type="text" name="modelo" placeholder="Modelo">
            <input type="submit" value="Agregar" >
        </form>
        <button class="" ><a href="../CARGARIMG/index.php">Cargar Imagen</a></button>
        <button class="" ><a href="../pag.html">Menú principal</a></button>
    </div>
    
    <!-- Tabla que muestra vehículos registrados -->
    <div class="users-table">
        <h2>Vehículo registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>Placa</th>
                    <th>Marca</th>
                    <th>Modelo</th>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id_carro'] ?></th>
                        <th><?= $row['marca'] ?></th>
                        <th><?= $row['modelo'] ?></th>
                        <!-- Enlaces para consultar, editar y eliminar vehículos -->
                        <th><a href="consulta.php?id_carro=<?= $row['id_carro'] ?>" class="users_table_delete"> Consulta </a></th>
                        <th><a href="actualizar.php?id_carro=<?= $row['id_carro'] ?>" class="users_table_edit"> Editar </a></th>
                        <th><a href="delete.php?id_carro=<?= $row['id_carro'] ?>" class="users_table_delete"> Eliminar </a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
